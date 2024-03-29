<?php
if(IN_MANAGER_MODE!="true") die("<b>INCLUDE_ORDERING_ERROR</b><br /><br />Please use the MODx Content Manager instead of accessing this file directly.");

// start session
startCMSSession();
if (isset($_SESSION['mgrValidated']) && $_SESSION['usertype']!='manager'){
		if (isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', 0, MODX_BASE_URL);
		}
		@session_destroy();
		// start session
	    startCMSSession();
}

// andrazk 20070416 - if installer is running, destroy active sessions
$pth = dirname(__FILE__);
if (file_exists($pth.'/../../assets/cache/installProc.inc.php')) {
	include_once($pth.'/../../assets/cache/installProc.inc.php');
	if (isset($installStartTime)) {
		if ((time() - $installStartTime) > 5 * 60) { // if install flag older than 5 minutes, discard
			unset($installStartTime);
			@ chmod($pth.'/../../assets/cache/installProc.inc.php', 0755);
			unlink($pth.'/../../assets/cache/installProc.inc.php');
		} 
		else {
			if ($_SERVER['REQUEST_METHOD'] != 'POST') {
				if (isset($_COOKIE[session_name()])) {
					session_unset();
					@session_destroy();
					setcookie(session_name(), '', 0, MODX_BASE_URL);
				}
				$installGoingOn = 1;
			}
		}
	}
}

// andrazk 20070416 - if session started before install and was not destroyed yet
if (isset($lastInstallTime)) {
  if (isset($_SESSION['mgrValidated'])) {
		if (isset($_SESSION['modx.session.created.time'])) {
			if ($_SESSION['modx.session.created.time'] < $lastInstallTime) {
					if ($_SERVER['REQUEST_METHOD'] != 'POST') {
					if (isset($_COOKIE[session_name()])) {
						session_unset();
						@session_destroy();
						setcookie(session_name(), '', 0, MODX_BASE_URL);
					}
					header('HTTP/1.0 307 Redirect');
					header('Location: '.MODX_MANAGER_URL.'index.php?installGoingOn=2');
				}
			}
		}
	}
}

if(!isset($_SESSION['mgrValidated'])){
	include_once("browsercheck.inc.php");

	if(isset($manager_language)) {
		include_once "lang/".$manager_language.".inc.php";
	}
	else {
		include_once "lang/english.inc.php";
	}

	$modx->setPlaceholder('modx_charset',$modx_charset);
	$modx->setPlaceholder('theme',$manager_theme);

	// invoke OnManagerLoginFormPrerender event
	$evtOut = $modx->invokeEvent('OnManagerLoginFormPrerender');
	$html = is_array($evtOut) ? implode('',$evtOut) : '';
	$modx->setPlaceholder('OnManagerLoginFormPrerender',$html);

	// support info
	$html = '';
	$pth = dirname(__FILE__);
	$file = "$pth/support.inc.php";
	$ov_file = "$pth/override.support.inc.php"; // detect override file
	if(file_exists($ov_file)) $inc = include_once($ov_file);
	else if(file_exists($file)) $inc = include_once($file);
	if($inc)  {
		ob_start();
		showSupportLink();
		$html = ob_get_contents();
		ob_end_clean();
	}
	$modx->setPlaceholder('SupportInfo',$html);

	$modx->setPlaceholder('site_name',$site_name);
	$modx->setPlaceholder('logo_slogan',$_lang["logo_slogan"]);
	$modx->setPlaceholder('login_message',$_lang["login_message"]);

	// andrazk 20070416 - notify user of install/update
	if (isset($_GET['installGoingOn'])) {
		$installGoingOn = $_GET['installGoingOn'];
	}
	if (isset($installGoingOn)) {			
		switch ($installGoingOn) {
		 case 1 : $modx->setPlaceholder('login_message',$_lang["login_cancelled_install_in_progress"].$_lang["login_message"]); break;
		 case 2 : $modx->setPlaceholder('login_message',$_lang["login_cancelled_site_was_updated"].$_lang["login_message"]); break;
		}
	}

	if($use_captcha==1)  {
		$modx->setPlaceholder('login_captcha_message',$_lang["login_captcha_message"]);
		$modx->setPlaceholder('captcha_image','<a href="'.$_SERVER['PHP_SELF'].'" class="loginCaptcha"><img id="captcha_image" src="'.$modx->getManagerPath().'includes/veriword.php?rand='.rand().'" alt="'.$_lang["login_captcha_message"].'" /></a>');
		$modx->setPlaceholder('captcha_input','<label>'.$_lang["captcha_code"].'</label> <input type="text" name="captcha_code" tabindex="3" value="" />');
	}

	// login info
	$modx->setPlaceholder('uid',$uid);
	$modx->setPlaceholder('username',$_lang["username"]);
	$modx->setPlaceholder('password',$_lang["password"]);

	// remember me
	$html =  isset($cookieSet) ? 'checked="checked"' :'';
	$modx->setPlaceholder('remember_me',$html);
	$modx->setPlaceholder('remember_username',$_lang["remember_username"]);
	$modx->setPlaceholder('login_button',$_lang["login_button"]);

	// invoke OnManagerLoginFormRender event
	$evtOut = $modx->invokeEvent('OnManagerLoginFormRender');
	$html = is_array($evtOut) ? '<div id="onManagerLoginFormRender">'.implode('',$evtOut).'</div>' : '';
	$modx->setPlaceholder('OnManagerLoginFormRender',$html);

	// load template file
    $tplFile = $base_path.'manager/media/style/'.$manager_theme.'/login.html';
    $handle = fopen($tplFile, "r");
	$tpl = fread($handle, filesize($tplFile));
	fclose($handle);

    // merge placeholders
    $tpl = $modx->mergePlaceholderContent($tpl);
    $regx = strpos($tpl,'[[+')!==false ? '~\[\[\+(.*?)\]\]~' : '~\[\+(.*?)\+\]~'; // little tweak for newer parsers
    $tpl = preg_replace($regx, '', $tpl); //cleanup

    echo $tpl;

    exit;

} else {
	// log the user action
	if ($cip = getenv("HTTP_CLIENT_IP"))
		$ip = $cip;
	elseif ($cip = getenv("HTTP_X_FORWARDED_FOR"))
		$ip = $cip;
	elseif ($cip = getenv("REMOTE_ADDR"))
		$ip = $cip;
	else	$ip = "UNKNOWN";
	
	$_SESSION['ip'] = $ip;

	$itemid = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
	$lasthittime = time();
	$action = isset($_REQUEST['a']) ? $_REQUEST['a'] : '1';

	if($action != '1') {
		if (!intval($itemid)) $itemid= null;
		$sql = sprintf('REPLACE INTO %s (internalKey, username, lasthit, action, id, ip)
			VALUES (%d, \'%s\', \'%d\', \'%s\', %s, \'%s\')',
			$modx->getFullTableName('active_users'), // Table
			$modx->getLoginUserID(),
			$_SESSION['mgrShortname'],
			$lasthittime,
			(string)$action,
			var_export($itemid, true),
			$ip
		);
		if(!$rs = mysql_query($sql)) {
			echo "error replacing into active users! SQL: ".$sql."\n".mysql_error();
			exit;
		}
	}
}
?>