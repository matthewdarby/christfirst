<?php
require_once(strtr(realpath(dirname(__FILE__)), '\\', '/').'/../includes/protect.inc.php');

// set the include_once path
if(version_compare(phpversion(), "4.3.0")>=0) {
    set_include_path("../includes/"); // include path the new way
} else {
    ini_set("include_path", "../includes/"); // include path the old way
}

define("IN_MANAGER_MODE", "true");  // we use this to make sure files are accessed through
                                    // the manager instead of seperately.
// include the database configuration file
include_once "config.inc.php";

// start session
startCMSSession();

// connect to the database
if(@!$modxDBConn = mysql_connect($database_server, $database_user, $database_password)) {
    die("Failed to create the database connection!");
} else {
    mysql_select_db($dbase);
    @mysql_query("SET CHARACTER SET {$database_connection_charset}");
}

// get the settings from the database
include_once "settings.inc.php";

// include version info
include_once "version.inc.php";

// include the logger
include_once "log.class.inc.php";

// include the crypto thing
include_once "crypt.class.inc.php";

// Initialize System Alert Message Queque
if (!isset($_SESSION['SystemAlertMsgQueque'])) $_SESSION['SystemAlertMsgQueque'] = array();
$SystemAlertMsgQueque = &$_SESSION['SystemAlertMsgQueque'];

// include_once the error handler
include_once "error.class.inc.php";
$e = new errorHandler;

//$cookieKey = substr(md5($site_id."Admin-User"),0,15);

// initiate the content manager class
include_once "document.parser.class.inc.php";
$modx = new DocumentParser;
$modx->loadExtension("ManagerAPI");
$modx->getSettings();
$etomite = &$modx; // for backward compatibility


$username = $modx->db->escape($_REQUEST['username']);
$givenPassword = $modx->db->escape($_REQUEST['password']);
$captcha_code = $_REQUEST['captcha_code'];
$rememberme= $_REQUEST['rememberme'];

// invoke OnBeforeManagerLogin event
$modx->invokeEvent("OnBeforeManagerLogin",
                        array(
                            "username"      => $username,
                            "userpassword"  => $givenPassword,
                            "rememberme"    => $rememberme
                        ));

$sql = "SELECT $dbase.`".$table_prefix."manager_users`.*, $dbase.`".$table_prefix."user_attributes`.* FROM $dbase.`".$table_prefix."manager_users`, $dbase.`".$table_prefix."user_attributes` WHERE BINARY $dbase.`".$table_prefix."manager_users`.username = '".$username."' and $dbase.`".$table_prefix."user_attributes`.internalKey=$dbase.`".$table_prefix."manager_users`.id;";
$rs = mysql_query($sql);
$limit = mysql_num_rows($rs);

if($limit==0 || $limit>1) {
    jsAlert($e->errors[900]);
    return;
}

$row = mysql_fetch_assoc($rs);

$internalKey            = $row['internalKey'];
$dbasePassword          = $row['password'];
$failedlogins           = $row['failedlogincount'];
$blocked                = $row['blocked'];
$blockeduntildate       = $row['blockeduntil'];
$blockedafterdate       = $row['blockedafter'];
$registeredsessionid    = $row['sessionid'];
$role                   = $row['role'];
$lastlogin              = $row['lastlogin'];
$nrlogins               = $row['logincount'];
$fullname               = $row['fullname'];
//$sessionRegistered        = checkSession();
$email                  = $row['email'];

// get the user settings from the database
// require_once "user_settings.inc.php"; <<< This doesn't work, because $modx is set and $modx->getLoginUserID() returns NULL
// netnoise:
$sql = "SELECT setting_name, setting_value FROM $dbase.`".$table_prefix."user_settings` WHERE user='".$internalKey."' AND setting_value!=''";
$rs = mysql_query($sql);
while ($row = mysql_fetch_assoc($rs)) {
    ${$row['setting_name']} = $row['setting_value'];
}

if($failedlogins>=$failed_login_attempts && $blockeduntildate>time()) { // blocked due to number of login errors.
        @session_destroy();
        session_unset();
        jsAlert($e->errors[902]);
        return;
}

if($failedlogins>=$failed_login_attempts && $blockeduntildate<time()) { // blocked due to number of login errors, but get to try again
    $sql = "UPDATE $dbase.`".$table_prefix."user_attributes` SET failedlogincount='0', blockeduntil='".(time()-1)."' where internalKey=$internalKey";
    $rs = mysql_query($sql);
}

if($blocked=="1") { // this user has been blocked by an admin, so no way he's loggin in!
    @session_destroy();
    session_unset();
    jsAlert($e->errors[903]);
    return;
}

// blockuntil
if($blockeduntildate>time()) { // this user has a block until date
    @session_destroy();
    session_unset();
    jsAlert("You are blocked and cannot log in! Please try again later.");
    return;
}

// blockafter
if($blockedafterdate>0 && $blockedafterdate<time()) { // this user has a block after date
    @session_destroy();
    session_unset();
    jsAlert("You are blocked and cannot log in! Please try again later.");
    return;
}

// allowed ip
if ($allowed_ip) {
        if(($hostname = gethostbyaddr($_SERVER['REMOTE_ADDR'])) && ($hostname != $_SERVER['REMOTE_ADDR'])) {
          if(gethostbyname($hostname) != $_SERVER['REMOTE_ADDR']) {
            jsAlert("Your hostname doesn't point back to your IP!");
            return;
          }
        }

        if(!in_array($_SERVER['REMOTE_ADDR'], explode(',',str_replace(' ','',$allowed_ip)))) {
          jsAlert("You are not allowed to login from this location.");
          return;
        }
}

// allowed days
if ($allowed_days) {
    $date = getdate();
    $day = $date['wday']+1;
    if (strpos($allowed_days,"$day")===false) {
        jsAlert("You are not allowed to login at this time. Please try again later.");
        return;
    }
}

// invoke OnManagerAuthentication event
$rt = $modx->invokeEvent("OnManagerAuthentication",
                        array(
                            "userid"        => $internalKey,
                            "username"      => $username,
                            "userpassword"  => $givenPassword,
                            "savedpassword" => $dbasePassword,
                            "rememberme"    => $rememberme
                        ));
// check if plugin authenticated the user

if (!$rt||(is_array($rt) && !in_array(TRUE,$rt))) {
    // check user password - local authentication
    if($dbasePassword != md5($givenPassword)) {
            jsAlert($e->errors[901]);
            $newloginerror = 1;
    }
}

if($use_captcha==1) {
	if (!isset ($_SESSION['veriword'])) {
		jsAlert('Captcha is not configured properly.');
		return;
	}
	elseif ($_SESSION['veriword'] != $captcha_code) {
        jsAlert($e->errors[905]);
        $newloginerror = 1;
    }
}

if($newloginerror==1) {
    $failedlogins += $newloginerror;
    if($failedlogins>=$failed_login_attempts) { //increment the failed login counter, and block!
        $sql = "update $dbase.`".$table_prefix."user_attributes` SET failedlogincount='$failedlogins', blockeduntil='".(time()+($blocked_minutes*60))."' where internalKey=$internalKey";
        $rs = mysql_query($sql);
    } else { //increment the failed login counter
        $sql = "update $dbase.`".$table_prefix."user_attributes` SET failedlogincount='$failedlogins' where internalKey=$internalKey";
        $rs = mysql_query($sql);
        // mod by raymond - implement failed login delays
        $sleep = (int)$failedlogins/2;
        if($sleep>5) $sleep = 5;
        sleep($sleep);
    }
	@session_destroy();
}

$currentsessionid = session_id();

if(!isset($_SESSION['mgrValidated'])) {
    $sql = "update $dbase.`".$table_prefix."user_attributes` SET failedlogincount=0, logincount=logincount+1, lastlogin=thislogin, thislogin=".time().", sessionid='$currentsessionid' where internalKey=$internalKey";
    $rs = mysql_query($sql);
}

# Added by Raymond:
$_SESSION['usertype'] = 'manager'; // user is a backend user

// get permissions
//$_SESSION['mgrValid']=base64_encode($givenPassword); //??
//$_SESSION['mgrUser']=base64_encode($username);        // ??
//$_SESSION['sessionRegistered']=$sessionRegistered; // to be removed
$_SESSION['mgrShortname']=$username;
$_SESSION['mgrFullname']=$fullname;
$_SESSION['mgrEmail']=$email;
$_SESSION['mgrValidated']=1;
$_SESSION['mgrInternalKey']=$internalKey;
$_SESSION['mgrFailedlogins']=$failedlogins;
$_SESSION['mgrLastlogin']=$lastlogin;
$_SESSION['mgrLogincount']=$nrlogins; // login count
$_SESSION['mgrRole']=$role;
$sql="SELECT * FROM $dbase.`".$table_prefix."user_roles` WHERE id=".$role.";";
$rs = mysql_query($sql);
$row = mysql_fetch_assoc($rs);
$_SESSION['mgrPermissions'] = $row;

// get user's document groups
$dg='';$i=0;
$tblug = $dbase.".`".$table_prefix."member_groups`";
$tbluga = $dbase.".`".$table_prefix."membergroup_access`";
$sql = "SELECT uga.documentgroup
        FROM $tblug ug
        INNER JOIN $tbluga uga ON uga.membergroup=ug.user_group
        WHERE ug.member =".$internalKey;
$rs = mysql_query($sql);
while ($row = mysql_fetch_row($rs)) $dg[$i++]=$row[0];
$_SESSION['mgrDocgroups'] = $dg;

if($rememberme) {
    $_SESSION['modx.mgr.session.cookie.lifetime']= intval($modx->config['session.cookie.lifetime']);
} else {
    $_SESSION['modx.mgr.session.cookie.lifetime']= 0;
}

$log = new logHandler;
$log->initAndWriteLog("Logged in", $modx->getLoginUserID(), $_SESSION['mgrShortname'], "58", "-", "MODx");

// invoke OnManagerLogin event
$modx->invokeEvent("OnManagerLogin",
                        array(
                            "userid"        => $internalKey,
                            "username"      => $username,
                            "userpassword"  => $givenPassword,
                            "rememberme"    => $rememberme
                        ));

// check if we should redirect user to a web page
$tbl = $modx->getFullTableName("user_settings");
$id = $modx->db->getValue("SELECT setting_value FROM $tbl WHERE user='$internalKey' AND setting_name='manager_login_startup'");
if(isset($id) && $id>0) {
    $header = 'Location: '.$modx->makeUrl($id,'','','full');
    if($_POST['ajax']==1) echo $header;
    else header($header);
}
else {
    $header = 'Location: '.$modx->config['site_url'].'manager/';
    if($_POST['ajax']==1) echo $header;
    else header($header);
}

// show javascript alert
function jsAlert($msg){
    if($_POST['ajax']==1) echo $msg."\n";
    else {
        echo "<script>window.setTimeout(\"alert('".addslashes(mysql_escape_string($msg))."')\",10);history.go(-1)</script>";
    }
}

?>
