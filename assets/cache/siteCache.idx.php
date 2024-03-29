<?php
$c=&$this->config;
$c['manager_theme'] = "MODxLight";
$c['settings_version'] = "0.9.6.1p2";
$c['server_offset_time'] = "0";
$c['server_protocol'] = "http";
$c['manager_language'] = "english";
$c['modx_charset'] = "UTF-8";
$c['site_name'] = "Christ First Christian Fellowship Center";
$c['site_start'] = "1";
$c['error_page'] = "1";
$c['unauthorized_page'] = "1";
$c['site_status'] = "1";
$c['site_unavailable_message'] = "The site is currently unavailable";
$c['track_visitors'] = "0";
$c['resolve_hostnames'] = "0";
$c['top_howmany'] = "10";
$c['default_template'] = "4";
$c['old_template'] = "4";
$c['publish_default'] = "0";
$c['cache_default'] = "1";
$c['search_default'] = "1";
$c['friendly_urls'] = "1";
$c['friendly_url_prefix'] = "";
$c['friendly_url_suffix'] = ".html";
$c['friendly_alias_urls'] = "1";
$c['use_alias_path'] = "1";
$c['use_udperms'] = "1";
$c['udperms_allowroot'] = "0";
$c['failed_login_attempts'] = "3";
$c['blocked_minutes'] = "60";
$c['use_captcha'] = "0";
$c['captcha_words'] = "MODx,Access,Better,BitCode,Cache,Desc,Design,Excell,Enjoy,URLs,TechView,Gerald,Griff,Humphrey,Holiday,Intel,Integration,Joystick,Join(),Tattoo,Genetic,Light,Likeness,Marit,Maaike,Niche,Netherlands,Ordinance,Oscillo,Parser,Phusion,Query,Question,Regalia,Righteous,Snippet,Sentinel,Template,Thespian,Unity,Enterprise,Verily,Veri,Website,WideWeb,Yap,Yellow,Zebra,Zygote";
$c['emailsender'] = "admin@christfirstcfc.com";
$c['emailsubject'] = "Your login details";
$c['signupemail_message'] = "Hello [+uid+] \r\n\r\nHere are your login details for [+sname+] Content Manager:\r\n\r\nUsername: [+uid+]\r\nPassword: [+pwd+]\r\n\r\nOnce you log into the Content Manager at [+surl+], you can change your password.\r\n\r\nRegards,\r\nSite Administrator";
$c['websignupemail_message'] = "Hello [+uid+] \r\n\r\nHere are your login details for [+sname+]:\r\n\r\nUsername: [+uid+]\r\nPassword: [+pwd+]\r\n\r\nOnce you log into [+sname+] at [+surl+], you can change your password.\r\n\r\nRegards,\r\nSite Administrator";
$c['webpwdreminder_message'] = "Hello [+uid+]\r\n\r\nTo active you new password click the following link:\r\n\r\n[+surl+]\r\n\r\nIf successful you can use the following password to login:\r\n\r\nPassword:[+pwd+]\r\n\r\nIf you did not request this email then please ignore it.\r\n\r\nRegards,\r\nSite Administrator";
$c['number_of_logs'] = "100";
$c['number_of_messages'] = "30";
$c['number_of_results'] = "20";
$c['use_editor'] = "1";
$c['use_browser'] = "1";
$c['rb_base_dir'] = "/home/christ/www/www/assets/";
$c['rb_base_url'] = "assets/";
$c['which_editor'] = "TinyMCE";
$c['fe_editor_lang'] = "english";
$c['fck_editor_toolbar'] = "standard";
$c['fck_editor_autolang'] = "0";
$c['editor_css_path'] = "";
$c['editor_css_selectors'] = "";
$c['strip_image_paths'] = "1";
$c['upload_images'] = "jpg,jpeg,png,gif,psd,ico,bmp";
$c['upload_media'] = "mp3,wav,au,wmv,avi,mpg,mpeg";
$c['upload_flash'] = "swf,fla";
$c['upload_files'] = "txt,php,html,htm,xml,js,css,cache,zip,gz,rar,z,tgz,tar,htaccess,mp3,mp4,aac,wav,au,wmv,avi,mpg,mpeg,pdf,doc,xls,txt,jpg";
$c['upload_maxsize'] = "1048576";
$c['new_file_permissions'] = "0644";
$c['new_folder_permissions'] = "0755";
$c['show_preview'] = "0";
$c['filemanager_path'] = "/home/christ/www/www/";
$c['theme_refresher'] = "";
$c['manager_layout'] = "4";
$c['custom_contenttype'] = "text/css,text/html,text/javascript,text/plain,text/xml";
$c['auto_menuindex'] = "1";
$c['session.cookie.lifetime'] = "604800";
$c['mail_check_timeperiod'] = "60";
$c['manager_lang_attribute'] = "en";
$c['manager_direction'] = "ltr";
$c['tinymce_editor_theme'] = "editor";
$c['tinymce_custom_plugins'] = "style,advimage,advlink,searchreplace,print,contextmenu,paste,fullscreen,nonbreaking,xhtmlxtras,visualchars,media";
$c['tinymce_custom_buttons1'] = "undo,redo,selectall,separator,pastetext,pasteword,separator,search,replace,separator,nonbreaking,hr,charmap,separator,image,link,unlink,anchor,media,separator,cleanup,removeformat,separator,fullscreen,print,code,help";
$c['tinymce_custom_buttons2'] = "bold,italic,underline,strikethrough,sub,sup,separator,bullist,numlist,outdent,indent,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,separator,styleprops";
$c['tree_show_protected'] = "0";
$c['site_id'] = "482f44b20c0e9";
$c['xhtml_urls'] = "0";
$c['site_unavailable_page'] = "";
$c['allow_duplicate_alias'] = "0";
$c['automatic_alias'] = "1";
$c['tinymce_custom_buttons3'] = "";
$c['tinymce_custom_buttons4'] = "";
$c['tinymce_css_selectors'] = "";
$c['reset_template'] = "1";
$this->aliasListing = array();
$a = &$this->aliasListing;
$d = &$this->documentListing;
$m = &$this->documentMap;
$d['home'] = 1;
$a[1] = array('id' => 1, 'alias' => 'home', 'path' => '');
$m[] = array('0' => '1');
$d['about-us'] = 2;
$a[2] = array('id' => 2, 'alias' => 'about-us', 'path' => '');
$m[] = array('0' => '2');
$d['support-us'] = 8;
$a[8] = array('id' => 8, 'alias' => 'support-us', 'path' => '');
$m[] = array('0' => '8');
$d['contact'] = 10;
$a[10] = array('id' => 10, 'alias' => 'contact', 'path' => '');
$m[] = array('0' => '10');
$d['calendar'] = 12;
$a[12] = array('id' => 12, 'alias' => 'calendar', 'path' => '');
$m[] = array('0' => '12');
$d['about-us/vision'] = 3;
$a[3] = array('id' => 3, 'alias' => 'vision', 'path' => 'about-us');
$m[] = array('2' => '3');
$d['about-us/about-the-pastor'] = 4;
$a[4] = array('id' => 4, 'alias' => 'about-the-pastor', 'path' => 'about-us');
$m[] = array('2' => '4');
$d['about-us/faith'] = 6;
$a[6] = array('id' => 6, 'alias' => 'faith', 'path' => 'about-us');
$m[] = array('2' => '6');
$d['about-us/photo_gallery'] = 11;
$a[11] = array('id' => 11, 'alias' => 'photo_gallery', 'path' => 'about-us');
$m[] = array('2' => '11');
$d['about-us/about-the-pastor/pastors-facebook-page'] = 13;
$a[13] = array('id' => 13, 'alias' => 'pastors-facebook-page', 'path' => 'about-us/about-the-pastor');
$m[] = array('4' => '13');
$d['support-us/capital-campaign'] = 7;
$a[7] = array('id' => 7, 'alias' => 'capital-campaign', 'path' => 'support-us');
$m[] = array('8' => '7');
$d['contact/location'] = 5;
$a[5] = array('id' => 5, 'alias' => 'location', 'path' => 'contact');
$m[] = array('10' => '5');
$c = &$this->contentTypes;
$c[1] = 'text/html';
$c[2] = 'text/html';
$c[3] = 'text/html';
$c[4] = 'text/html';
$c[5] = 'text/html';
$c[6] = 'text/html';
$c[7] = 'text/html';
$c[8] = 'text/html';
$c[13] = 'text/html';
$c[10] = 'text/html';
$c[11] = 'text/html';
$c[12] = 'text/html';
$c = &$this->chunkCache;
$c['WebLoginSideBar'] = '<!-- #declare:separator <hr> --> 
<!-- login form section-->
<form method="post" name="loginfrm" action="[+action+]" style="margin: 0px; padding: 0px;"> 
<input type="hidden" value="[+rememberme+]" name="rememberme"> 
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td><b>User:</b></td>
	<td><input type="text" name="username" tabindex="1" onkeypress="return webLoginEnter(document.loginfrm.password);" size="5" style="width: 100px;" value="[+username+]" /></td>
  </tr>
  <tr>
	<td><b>Password:</b></td>
	<td><input type="password" name="password" tabindex="2" onkeypress="return webLoginEnter(document.loginfrm.cmdweblogin);" size="5" style="width: 100px;" value="" /></td>
  </tr>
  <tr>
	<td><label for="chkbox" style="cursor:pointer">Remember me:&nbsp; </label></td>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td valign="top"><input type="checkbox" id="chkbox" name="chkbox" tabindex="4" size="1" value="" [+checkbox+] onClick="webLoginCheckRemember()" /></td>
		<td align="right">									
		<input type="submit" value="[+logintext+]" name="cmdweblogin" /></td>
	  </tr>
	</table>
	</td>
  </tr>
  <tr>
	<td colspan="2"><a href="#" onclick="webLoginShowForm(2);return false;">Forget Password?</a></td>
  </tr>
</table>
</td>
</tr>
</table>
</form>
<hr>
<!-- log out hyperlink section -->
<a href=\'[+action+]\'>[+logouttext+]</a>
<hr>
<!-- Password reminder form section -->
<form name="loginreminder" method="post" action="[+action+]" style="margin: 0px; padding: 0px;">
<input type="hidden" name="txtpwdrem" value="0" />
<table border="0">
	<tr>
	  <td>Enter the email address of your account <br />below to receive your password:</td>
	</tr>
	<tr>
	  <td><input type="text" name="txtwebemail" size="24" /></td>
	</tr>
	<tr>
	  <td align="right"><input type="submit" value="Submit" name="cmdweblogin" />
	  <input type="reset" value="Cancel" name="cmdcancel" onclick="webLoginShowForm(1);" /></td>
	</tr>
  </table>
</form>

';
$c['ServiceTimes'] = '<h3>Service Times</h3>
          <p><strong>Sunday</strong><br />
            9:30 am - Sunday School<br />
            10:45 am - Worship Service<br />
             Deaf Services are available</p>
          <p><strong>Wednesday</strong><br />
12:30 PM - Midday Prayer <br />           
7:00 pm - Prayer / Bible Study</p>';
$c['SiteFooter'] = '<h4>The Ultimate Worship Experience</h4>
<p><strong>&copy; [[CurrentYear]] Christ First Christian Fellowship Center</strong>.  All Rights Reserved</p>';
$c['Address'] = '<h3>Church Address</h3>
<p>100 Jones Franklin RD<br />
 Raleigh , NC 27606<br />
(919) 851-5540<br />
<a href="[~5~]" title="Directions">Directions</a>
</p>
<h3>Mailing Address</h3>
<p>P.O.Box 554<br />
Cary, North Carolina 27512</p>';
$c['GoodSearch'] = '<a href="http://www.goodsearch.com/"><img src="http://www.goodsearch.com/_gfx/title_smaller.gif" alt="GoodSearch logo" /></a><br />
  <label for="goodsearch_keywords_6" >GoodSearch keywords to search for</label>
  <input type="text" name="goodsearch_keywords_6" id="goodsearch_keywords_6" onkeydown="return CatchEnter_6(event);"  onclick="this.style.backgroundImage=\'url(http://www.goodsearch.com/_gfx/spacer.gif)\';"  />
  <input type="button" name="goodsearch_submit_6" id="goodsearch_submit_6" value="Search" onclick="javascript:GoGoodSearch_6();" />
  <br />
  <input type="radio" name="goodsearch_searchtype_6"  value="web" />
  Web
  <input type="radio" name="goodsearch_searchtype_6" value="site" />
  This Site  ';
$c['ContactForm'] = '<p>[+validationmessage+]</p>					
<p><strong>Note:</strong> <img src="/assets/images/required.png" alt="Required" /> indicates a required field.</p>
<form id="feedbackForm" method="post" action="[~[*id*]~]">
						<fieldset>
							<legend><span>Contact Information</span></legend>
							<ol>
							<li>
									<label for="contact_title">Title:</label> 
									<select id="contact_title" name="contact_title"> 
										<option value="Mr.">Mr.</option>
										<option value="Mrs.">Mrs.</option>
										<option value="Ms.">Ms.</option>
										<option value="Miss">Miss</option>
										<option value="Dr.">Dr.</option>
									 </select> 
								</li> 
								<li>
									<label for="contact_name"><img src="/assets/images/required.png" alt="Required" />Name:</label>
									<input id="contact_name" name="contact_name" type="text" class="text" value="[+contact_name+]" eform="Your Name::1:Expected at least two words:#REGEX /^\\w+\\s\\w+/i" />
								</li>
								<li>
									<label for="contact_email"><img src="/assets/images/required.png" alt="Required" />Email:</label>
									<input id="contact_email" name="contact_email" type="text" class="text" value="[+contact_email+]" eform="Your Email Address:email:1"/>
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend><span>Feedback</span></legend>
							<ol>
								<li>
									<label for="feedback_message"><img src="/assets/images/required.png" alt="Required" />Message:</label>
									<textarea id="feedback_message" name="feedback_message" eform="Your Message:html:1">[+feedback_message+]</textarea>
								</li>
							</ol>
						</fieldset>	
						<fieldset class="submit">
							<input type="submit" class="button" name="submit" value="Submit" />
							<input type="reset" class="button"  value="Reset" />
						</fieldset>
					</form>	';
$c['ContactAutoMessage'] = '<p>Thank you for your message sent to the [(site_name)] website.  This is what we have received from you.
<p>
	<strong>Name: </strong> [+contact_title+] [+contact_name+] <br />
	<strong>Email: </strong> [+contact_email+]<br />
	<strong>Message: </strong> [+feedback_message+]
</p>

<p>Please <strong>DO NOT</strong> respond to this email.  All responses will go to an unmonitored email account.</p>';
$c['ContactReport'] = '<p>This is a response sent by [+contact_title+] [+contact_name+]  using the contact form on the Christ First Christian Fellowship Center website. The details of the message follow below:</p>
<p>
	<strong>Name: </strong> [+contact_title+] [+contact_name+] <br />
	<strong>Email: </strong> [+contact_email+]<br />
	<strong>Message: </strong> [+feedback_message+]
</p>';
$c['ContactThankYou'] = '<p>Thank You, for taking the time to send us a message.  Your message has been sent and will be reviewed by someone soon.</p>
';
$c['PaypalDonateButton'] = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="submit"  name="submit"  value="Donate Through PayPal" class="button"/>
<!-- <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHiAYJKoZIhvcNAQcEoIIHeTCCB3UCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYC+TtYwUArS2D5k8/I9fnDM8W3nWtc6/wudemflHLFM8d9KHVUwHFU5dIzxqmKNWLENoSsz4fU0NpC2gQgxDxq/SKJl/kxROe/ELCLABCSoEnsrJSvIkttlSEKBi+YAnC2YciHUFO3XK4x5hTuKi0Hni1pig2OGBtO9icZ0Yq0b2jELMAkGBSsOAwIaBQAwggEEBgkqhkiG9w0BBwEwFAYIKoZIhvcNAwcECNuuIL4wHJ7JgIHgY3kBL+AKTLpEw3bNsrQjfNvH9nJMa8UVbweyysftsRPdO+Pl5Doskoi0FaonPHfUyp0Ssrn7B7BuwckBzvsuWvVNW0V7ykL4harcNp6d86So3rBKDVl7YuCPTpdx6E6i5i9dAyzGx4W77SMSs91TRSdFAj0XNqUazbioPW55t2LGKMHEnjg215JR3JZ7BZVtY8ZCe4XPAik7VhF7T8abD6/hUvKFL+Kj+hwHufvfjLlNe8AVyK6i4UhYsIHYwmlHWUTWDWCnqdyYcgZv66j/RScQecoE412YPKp1uwrqQ9ygggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0wODA3MDgxMzUwMTVaMCMGCSqGSIb3DQEJBDEWBBRnZvA0ZMCSZrMitTo+mV8L4ySPETANBgkqhkiG9w0BAQEFAASBgDsShXjV2ntRtyVlMJu4AnZ28vM3uuwZ+B7mZDAnzIW/tPfIo549e7Z67STmGIPYRfzVPuXDUCvOlNAdCtIzajpIchBGVwcQrTcUyouk3VV3CXSGUch44gZ5SPxgp2j/nXlmhYFE+wdQ2WDdkeQic5whC4mBQ0dljYJoWcdiXWMZ-----END PKCS7-----
">
</form>';
$s = &$this->snippetCache;
$s['AjaxSearch'] = '/* -------------------------------------------------------------
:: Snippet: Ajax Search
----------------------------------------------------------------
    Short Description: 
        Ajax-driven search form

    Version:
        1.6

    Created by:
	    Jason Coward (opengeek - jason@opengeek.com)
	    Kyle Jaebker (kylej - kjaebker@muddydogpaws.com)
	    Ryan Thrash (rthrash - ryan@vertexworks.com)
	    
	    Live Search by Thomas (Shadock)
	    Fixes & Additions by identity/Perrine/mikkelwe

    Date:
        02/18/2007

    Required Usage:
        [!AjaxSearch!]

    Changelog:
	22-Jan-07 
		-- Added templating support (includes/templates.inc.php)
		-- Added language support
		-- Switched from prototype/scriptaculous to Mootools
	03-Jan-07 -- Added many bugfixes/additions from AjaxSearch forum
	18-Sep-06 -- Added code to only show results for allowed pages
	05-May-06 -- Added liveSearch functionality and new parameter
	21-Apr-06 -- Added code to make it compatible with tagcloud snippet
	20-Apr-06 -- Added code from eastbind & japanese community for other language searching
	4-Apr-06 -- Added search term highlighting
	1-Apr-06 -- initial commit into SVN
	30-Mar-06 -- initial work based on FSF_ajax from KyleJ

----------------------------------------------------------------
:: Description
----------------------------------------------------------------
    Ajax search form that degrades (works without JS enabled), and that provides for either live search or click-to-submit. Results returned to the current page without reloading.

----------------------------------------------------------------
:: Parameters
----------------------------------------------------------------

    &AS_showForm [1 | 0] (optional)
        Show the search form with the results. Default is 1 (true)
        
    &AS_landing [int] (optional)
        Document id you would like the search to show on. (For non-ajax search)
        
    &AS_showResults [1 | 0] (optional)
        Show the results with the snippet. (For non-ajax search)
        
    &extract [1 | 0] (optional)
        Show the search words highlighting.
        
    &ajaxSearch [1 | 0] (optional)
        Use the ajaxSearch. Default is 1 (true)

    &ajaxSearchType [1 | 0] (optional)
        There are two forms of the ajaxSearch.
        0 - The form button is displayed and searching does not start until the button is pressed by the user.
        1 - There is no form button, the search is started automatically as the user types

    &ajaxMax [int] (optional)
        The number of results you would like returned from the ajax search.
        
    &grabMax [int] (optional)
        The number of results per page returned for non-ajax search and for the more results page.
        
    &showMoreResults [1 | 0] (optional)
        If you want a link to show all of the results from the ajax search.
        
    &moreResultsPage [int] (optional)
        Page you want the more results link to point to. This page should contain another call to this snippet for displaying results.
        
    &addJscript [1 | 0] (Default: 1)
        If you want the prototype and the scriptaculous libraries added to the header of your pages automatically set this to 1.  Set to
        0 if you do not want them inculded automatically.


----------------------------------------------------------------
:: CSS                         
----------------------------------------------------------------
    The following items are used to style the starting form and
    ajax result container.

    #ajaxSearch_form - id of the search form
    #ajaxSearch_input - id of the input box on the form
    #ajaxSearch_submit - id of the submit button
    #ajaxSearch_output - id of the div that the ajax results are returned in
    
    The following items are used to style the reults when the user does not have javascript or they have clicked the more results link
    
    #ajaxSearch_resultListContainer - id of the results container
    .ajaxSearch_paging - class for span of result pages listing
    .ajaxSearch_pagination - class for pagination paragraph
    .ajaxSearch_result - class for result container div
    .ajaxSearch_resultLink - class for result link
    .ajaxSearch_resultDescription - class for result description span
    .ajaxSearch_extract - class for content extract div (for highlighting)
    .ajaxSearch_highlight1,2,3 - classes for result highlighting.  You need to
        create as many classes as terms you think a user will search for.
    .ajaxSearch_resultsIntroFailure - class for no results paragraph
    .ajaxSearch_intro - class for intro paragraph

    The following items are used to style the results returned by the ajax request.

    .AS_ajax_result - class for the result container div
    .AS_ajax_resultLink - class for the result link
    .AS_ajax_resultDescription - class for the result description span
    .AS_ajax_extract - class for the content extract div (for highlighting)
    .AS_ajax_hightlight1,2,3 - classes for result highlighting.  You need to create as many classes as terms you think a user will search for.
    .AS_ajax_more - class for more search results div
    .AS_ajax_resultsIntroFailure - class for no results paragraph


----------------------------------------------------------------
:: Example Calls              
----------------------------------------------------------------
[!AjaxSearch!]
    A basic default call that renders a search form with the default images and parametes

[!AjaxSearch? &showMoreResults=`1` &moreResultsPage=`25`!]
    Allows a link to a full-page search to go to another page.
    
[!AjaxSearch? &ajaxMax=`10` &extract=`0`!]
    Overrides the number of maximum results returned and removes search term highlighting.
    

----------------------------------------------------------------
:: Credits
----------------------------------------------------------------
   Based on Flex Search Form (FSF) by jardc@honeydewdsign.com 
   as modified by KyleJ (kjaebker@muddydogpaws.com).
   
   Also based on degradible live search demos at:
     http://orderedlist.com/articles/howto-animated-live-search/
     http://www.gizax.it/experiments/AHAH/degradabile/test/liveSearch.html
     
   The search highlighting was based off of the original FSF
     modification by Marc (MadeMyDay).
------------------------------------------------------------- */

// CONFIGURE

  // MAIN SNIPPET SETUP OPTIONS
  // --------------------------

   // $searchStyle [ \'relevance\' | \'partial\' ]
   // This option allows you to decide to use a faster, relevance sorted search (\'relevance\') which WILL NOT inlclude partial matches. Or use a slower, but more inclusive search (\'partial\') that will include partial matches. Results will NOT be sorted based on relevance.
   // This option contributed by Rich from Snappy Graffix Media to allow partial matching and LIKE matching of the search term. sam@snappygraffix.com
   $searchStyle = \'partial\';

   // $useAllWords [ true | false ]
   // If you want only documents which contain ALL words in the search string, set to true. Otherwise, the search will return all pages with ONE or more of the search words (which can be a LOT more pages).
   $useAllWords = false;

   // $showSearchWithResults [1 | 0]
   // If you would like to turn off the search form when showing results you can set this to false. Can also be set in template by using the snippet variable: AS_showForm like this (1=true, 0=false):
   // [[AjaxSearch? AS_showForm=0]]
   $showSearchWithResults = 1;

   // $resultsPage [int]
   // The default behavior is to show the results on the current page, but you may define the results page any way you like. The priority is:
   // 1- snippet variable - set in page template like this:
   //    [[AjaxSearch? AS_landing=int]]
   //    where int is the page id number of the page you want your results on
   // 2- querystring variable AS_form
   // 3- variable set here
   // 4- use current page
   // This is VERY handy when you want to put the search form in a discrete and/or small place on your page- like a side column, but don\'t want all your results to show up there!
   // Set to results page or leave 0 as default
   $resultsPage = 0;

   // $grabMax [ int ]
   // Set to the max number of records you would like on each page. Set to 0 if unlimited.
   $grabMax = (isset($grabMax))? $grabMax : 10;

   // $pageLinkSeparator [ string ]
   // What you want, if anything, between your page link numbers
   $pageLinkSeparator = " | ";

   // $stripHTML [ true | false ]
   // Allow HTML characters in the search? Probably not.
   $stripHTML = true;

   // $stripSnip [ true | false ]
   // Strip out snippet calls etc from the search string?
   $stripSnip = true;

   // $stripSnippets [ true | false ]
   // Strip out snippet names so users will not be able to "search" to see what snippets are used in your content. This is a security benefit, as users will not be able to search for what pages use specific snippets.
   $stripSnippets = true;

   // $minChars [ int ]
   // Minimum number of characters to require for a word to be valid for searching. MySQL will typically NOT search for words with less than 4 characters (relevance mode). If you have $useAllWords = true and a three or fewer word appears in the search string, the results will always be 0. Setting this drops those words from the search in THAT CIRCUMSTANCE ONLY (relevance mode, useAllWords=true).
   $minChars = 4;

   // $extract [1 | 0]
   // show the search terms highlighted in a little extract (like Google)
   $extract = (isset($extract))? $extract : 1;
   
   // $highlightResult [1 | 0]
   // create links so that search terms will be highlighted when linked page clicked
   $highlightResult = (isset($highlightResult)) ? $highlightResult : 1;

   // $ajaxSearch [1 | 0] (as passed in snippet variable ONLY)
   // Use this to display the search results using ajax You must include the Mootools library in your template
   $ajaxSearch = (isset($ajaxSearch))? $ajaxSearch : 1;

   // $ajaxSearchType [1 | 0] (as passed in snippet variable ONLY)
   // Use this to display the search results using ajax
   $ajaxSearchType = (isset($ajaxSearchType))? $ajaxSearchType : 0;

   // $ajaxMax [int] - The maximum number of results to show for the ajaxsearch
   $ajaxMax = (isset($ajaxMax))? $ajaxMax : 6;

   // $showMoreResults [1 | 0]
   // Set this to 1 if you would like a link to show all of the search results
   $showMoreResults = (isset($showMoreResults))? $showMoreResults : 0;
   
   // $moreResultsPage [int]
   // The document id of the page you want the more results link to point to
   $moreResultsPage = (isset($moreResultsPage ))? $moreResultsPage : 0;

   // $addJscript [1 | 0]
   // Set this to 1 if you would like to include the javascript libraries in the
   // header of your pages automatically.
   $addJscript = (isset($addJscript ))? $addJscript : 1;
   
   //Location of the ajaxsearch, prototype, and scriptaculous libraries
   //These will be set in the page head if they are not included in the template
   $jsInclude = \'assets/snippets/AjaxSearch/AjaxSearch.js\';
   $jsMooTools = \'manager/media/script/mootools/mootools.js\';

   // establish whether to show the form or not
   $showSearchWithResults = (isset($AS_showForm))? $AS_showForm : $showSearchWithResults;

   // establish whether to show the results or not
   $showResults = (isset($AS_showResults))? $AS_showResults : true;

/* -------------
  End configure
 -------------- */

// Set Snippet Paths
$snipPath = $modx->config[\'base_path\'] . "assets/snippets/";

include_once $snipPath."AjaxSearch/includes/AjaxSearch.inc.php";
include $snipPath."AjaxSearch/includes/templates.inc.php";

#include default language file
include($snipPath."AjaxSearch/lang/english.inc.php");

#include other language file if set.
$as_language = isset($language) ? $language : $modx->config[\'manager_language\'];
if($as_language!="english" && $as_language != \'\') {
	if(file_exists($snipPath ."AjaxSearch/lang/".$as_language.".inc.php"))
		include $snipPath ."AjaxSearch/lang/".$as_language.".inc.php";
}

$liveSearch = $ajaxSearchType;

// establish results page
if (isset($AS_landing)) { // set in snippet
	$searchAction = "[~".$AS_landing."~]";
} elseif ($resultsPage > 0) { // locally set
	$searchAction = "[~".$resultsPage."~]";
} else { //otherwise
	$searchAction = "[~".$modx->documentIdentifier."~]";
}

// Set newline variable
$newline = "\\n";

// Initialize search string
$searchString = \'\';

// CLEAN SEARCH STRING
if ( isset($_POST[\'search\']) || isset($_GET[\'AS_search\']) || isset($_GET[\'FSF_search\'])) {
	// Prefer post to get
	if (isset($_POST[\'search\'])) {
		$searchString = $_POST[\'search\'];
	} elseif (isset($_GET[\'AS_search\'])) {
		$searchString = urldecode($_GET[\'AS_search\']);
	} else {
		// Code to make tag cloud snippet work with this search
		$searchString = urldecode($_GET[\'FSF_search\']);
	}

	//**********************************************************************************************************************
	$searchString = initSearchString($searchString,$stripHTML,$stripSnip,$stripSnippets,$useAllWords,$searchStyle,$minChars,$ajaxSearch);
	//**********************************************************************************************************************
} // End cleansing search string

// check querystring
$validSearch = ($searchString != \'\')? true : false ;

//check for offset
$offset = (isset($_GET[\'AS_offset\']))? $_GET[\'AS_offset\'] : 0;

// initialize output
$SearchForm = \'\';
$introMessage = \'\';
$useAllWords = ($useAllWords) ? 1 : 0;

if ($docgrp = $modx->getUserDocGroups()) {
	$docgrp = implode(",", $docgrp);
}

if ($ajaxSearch) {
	$searchFormId = \'id="ajaxSearch_form" \';
	//Adding the javascript libraries to the header
	if ($addJscript) {
		$modx->regClientStartupScript($jsMooTools);
	}
  
	$modx->regClientStartupScript($jsInclude);
	
	$jsVars = <<<EOD
	<script type="text/javascript">
		<!--
		stripHtml = $stripHTML;
		stripSnip = $stripSnip;
		stripSnippets = $stripSnippets;
		useAllWords = $useAllWords;
		searchStyle = \'$searchStyle\';
		minChars = $minChars;
		maxResults = $ajaxMax;
		showMoreResults = $showMoreResults;
		moreResultsPage = $moreResultsPage;
		as_language = \'$as_language\'
		extract = $extract;
		liveSearch = $liveSearch;
		docgrp = \'$docgrp\';
		highlightResult = $highlightResult;
		-->
	</script>
EOD;

	$modx->regClientStartupScript($jsVars);
} else {
	$searchFormId = \'\';
}

// establish form
if (($validSearch && ($showSearchWithResults)) || $showSearchWithResults){
	$formPlaceholders = array(
		\'[+as.formId+]\' => $searchFormId,
		\'[+as.formAction+]\' => $searchAction,
		\'[+as.inputValue+]\' => ($searchString == \'\' && $_lang[\'as_boxText\'] != \'\') ? $_lang[\'as_boxText\'] : $searchString,
		\'[+as.inputOptions+]\' => ($_lang[\'as_boxText\']) ? \' onfocus="this.value=(this.value==\\\'\'.$_lang[\'as_boxText\'].\'\\\')? \\\'\\\' : this.value ;"\' : \'\',
		\'[+as.submitText+]\' => $_lang[\'as_searchButtonText\'],
	);
	
	$finalSearchForm = str_replace( array_keys( $formPlaceholders ), array_values( $formPlaceholders ), $asTemplates[\'form\'] );
} else {
	$finalSearchForm = \'\';
}

$finalResults = \'\';
if ($showResults) {
	if($validSearch) {
	//**********************************************************************************************************************
	$rs = doSearch($searchString,$searchStyle,$useAllWords,$ajaxSearch,$docgrp);
	//**********************************************************************************************************************
	$limit = $modx->recordCount($rs);
	$search = explode(" ", $searchString);
		if($limit>0) {
			// pagination
			if ($grabMax > 0){
				$numResultPages = ceil($limit/$grabMax);
				$resultPagingText = ($limit>$grabMax) ? $_lang[\'as_paginationTextMultiplePages\'] : $_lang[\'as_paginationTextSinglePage\'] ;
				$resultPageLinkNumber = 1;
				$resultPageLinks = \'\';
				for ( $nrp = 0; $nrp < $limit && $limit > $grabMax; $nrp += $grabMax ){
					if($offset == ($resultPageLinkNumber-1)*$grabMax){
						$resultPageUrl = $resultPageLinkNumber;
						$usePageTemplate = \'pagingLinksCurrent\';
					} else {
						$resultPageUrl = $modx->makeUrl($modx->documentIdentifier, \'\', \'AS_offset=\' . $nrp . \'&AS_search=\' . urlencode($searchString));
						$usePageTemplate = \'pagingLinks\';
					}
					
					$useSeperator = ($nrp + $grabMax < $limit) ? $pageLinkSeparator : \'\' ;
					
					$pageLinkPlaceholders = array(
						\'[+as.pagingLink+]\' => $resultPageUrl,
						\'[+as.pagingText+]\' => $resultPageLinkNumber,
						\'[+as.pagingSeperator+]\' => $useSeperator,
					);
					
					$resultPageLinks .= str_replace(array_keys($pageLinkPlaceholders),array_values($pageLinkPlaceholders),$asTemplates[$usePageTemplate]);
					$resultPageLinkNumber++;
				}
				
				$pageLinkPlaceholders = array(
					\'[+as.pagingText+]\' => $resultPagingText,
					\'[+as.pagingLinks+]\' => $resultPageLinks,
				);
				
				$resultPageLinksFinal = str_replace(array_keys($pageLinkPlaceholders),array_values($pageLinkPlaceholders),$asTemplates[\'pagingLinksOuter\']);
				
				$resultsFoundText = ($limit > 1)? $_lang[\'as_resultsFoundTextMultiple\'] : $_lang[\'as_resultsFoundTextSingle\'] ;
				if ($extract) {
					$hits=1;
					$searchwords=\'\';
					foreach ($search as $words) {
						$searchwords .= \'<span class="ajaxSearch_highlight ajaxSearch_highlight\'.$hits.\'">\'.$words.\'</span>&nbsp;\';
						$hits++;
					}
					// Remove trailing \'&nbsp;\'
					$searchwords = substr($searchwords, 0, strlen($searchwords) -6);
					$resultsFoundText = sprintf($resultsFoundText,$limit,$searchwords);
				} else {
					$resultsFoundText = sprintf($resultsFoundText,$limit,$searchString);
				}
				
				$resultInfoPlaceholders = array(
					\'[+as.resultInfoText+]\' => $resultsFoundText,
				);
				
				$resultInfo = str_replace(array_keys($resultInfoPlaceholders),array_values($resultInfoPlaceholders),$asTemplates[\'resultsInfo\']);		
			} // end if grabMax

			// search results
			$useLimit = ($grabMax > 0)? $offset+$grabMax : $limit;
			$allResults = \'\';
			for ($y = $offset; ($y < $useLimit) && ($y<$limit); $y++) {
				$moveToRow = mysql_data_seek($rs,$y);
				$SearchFormsrc=$modx->fetchRow($rs);
				if ($extract) {
					$highlightClass = \'ajaxSearch_highlight\';
					$text=$SearchFormsrc[\'content\'];
					$count=1;
					$summary=\'\';
					$toAdd = PrepareSearchContent( $text, $length=200, $search[0] );
					strip_tags( $text );
					foreach ($search as $searchTerm) {
						if (preg_match(\'/\' . preg_quote($searchTerm) . \'/i\', $text)) {
							if ($count > 1) { // The first summary was already extracted above
								$toAdd = SmartSubstr( $text , $length=200, $searchTerm );
							}
							$summary .= preg_replace( \'/\' . preg_quote( $searchTerm, \'/\' ) . \'/i\', \'<span class="ajaxSearch_highlight ajaxSearch_highlight\'.$count.\'">\\0</span>\', $toAdd ) . \' \';
						}
						$highlightClass .= \' ajaxSearch_highlight\'.$count;
						$count++;
					}
					$text=$summary;
				}
				
				if ($highlightResult) {
					if (!$extract) {
						$highlightClass = \'ajaxSearch_highlight\';
						$count=1;
						foreach ($search as $searchTerm) {
							$highlightClass .= \' ajaxSearch_highlight\'.$count;
							$count++;
						}
					}
				
					$searchFormLink = $modx->makeUrl($SearchFormsrc[\'id\'],\'\',\'searched=\'.urlencode($searchString).\'&amp;highlight=\'.urlencode($highlightClass));
				} else {
					$searchFormLink = $modx->makeUrl($SearchFormsrc[\'id\']);
				}
			
				if ($extract) {
					$extractPlaceholders = array(
						\'[+as.extractClass+]\' => \'ajaxSearch_extract\',
						\'[+as.extract+]\' => $text,
					);
					$resultExtract = str_replace(array_keys($extractPlaceholders),array_values($extractPlaceholders),$asTemplates[\'extractWrapper\']);
				} else {
					$resultExtract = \'\';
				}
				
				if ($SearchFormsrc[\'description\'] != \'\') {
					$descPlaceholders = array(
						\'[+as.descriptionClass+]\' => \'ajaxSearch_resultDescription\',
						\'[+as.description+]\' => $SearchFormsrc[\'description\'],
					);
					$resultDesc = str_replace(array_keys($descPlaceholders),array_values($descPlaceholders),$asTemplates[\'descriptionWrapper\']);
				} else {
					$resultDesc = \'\';
				}
				
				$resultPlaceholders = array(
					\'[+as.resultClass+]\' => \'ajaxSearch_result\',
					\'[+as.resultLinkClass+]\' => \'ajaxSearch_resultLink\',
					\'[+as.resultLink+]\' => $searchFormLink,
					\'[+as.longtitle+]\' => $SearchFormsrc[\'longtitle\'],
					\'[+as.pagetitle+]\' => $SearchFormsrc[\'pagetitle\'],
					\'[+as.description+]\' => $resultDesc,
					\'[+as.extract+]\' => $resultExtract,
				);
				
				$allResults .= str_replace(array_keys($resultPlaceholders),array_values($resultPlaceholders),$asTemplates[\'result\']);
			}
			
			$finalPlaceholders = array(
				\'[+as.results+]\' => $allResults,
				\'[+as.paging+]\' => $resultPageLinksFinal,
				\'[+as.resultInfo+]\' => $resultInfo,
			);
			
			$finalResults .= str_replace(array_keys($finalPlaceholders),array_values($finalPlaceholders),$asTemplates[\'no_ajax_outer\']);
		} else {
			$noResultsPlaceholder = array(
				\'[+as.noResultClass+]\' => \'ajaxSearch_resultsIntroFailure\',
				\'[+as.noResultText+]\' => $_lang[\'as_resultsIntroFailure\'],
			);
			$finalResults .= str_replace(array_keys($noResultsPlaceholder),array_values($noResultsPlaceholder),$asTemplates[\'noResults\']);
		} // end if records found
	} else if (!$validSearch && isset($_POST[\'sub\'])) {
		// message to show if search was performed but for something invalid
		$noResultsPlaceholder = array(
			\'[+as.noResultClass+]\' => \'ajaxSearch_resultsIntroFailure\',
			\'[+as.noResultText+]\' => $_lang[\'as_resultsIntroFailure\'],
		);
		$finalResults .= str_replace(array_keys($noResultsPlaceholder),array_values($noResultsPlaceholder),$asTemplates[\'noResults\']);
	} else { // end if validSearch
		$introMessage = str_replace(\'[+as.introMessage+]\',$_lang[\'as_introMessage\'],$asTemplates[\'introMessage\']);
	} // end if not validSearch
} // end if showResults

if ($ajaxSearch) {
    $finalResults = \'<div id="ajaxSearch_output" style="opacity:0;"> </div>\';
	$introMessage = \'\';
}

$finalPlaceholders = array(
	\'[+as.form+]\' => $finalSearchForm,
	\'[+as.intro+]\' => $introMessage,
	\'[+as.results+]\' => $finalResults,
);

$SearchForm .= str_replace(array_keys($finalPlaceholders),array_values($finalPlaceholders),$asTemplates[\'layout\']);

return $SearchForm;';
$s['Breadcrumbs'] = '// --------------------
// Snippet: Breadcrumbs
// --------------------
// Version: 0.9d
// Date: 2006.06.12
// jaredc@honeydewdesign.com
// Honorable mentions:
// - Bill Wilson
// - wendy@djamoer.net
// - grad
//
// This snippet was designed to show the path through the various
// levels of site structure back to the root. It is NOT necessarily
// the path the user took to arrive at a given page.

// Configuration Settings

    // $maxCrumbs [number]
    // Max number of elements to have in a path.
    // 100 is an arbitrary high number.
    // If you make it smaller, like say 2, but you
    // you are 5 levels deep, it will appear as:
    // Home > ... > Level 4 > Level 5
    // It should be noted that "Home" and the current
    // page do not count. Each of these are configured
    // separately.
    (isset($maxCrumbs)) ? $maxCrumbs : $maxCrumbs = 100;

    // $pathThruUnPub [ 1 | 0 ]
    // When your path includes an unpublished folder, setting this to 
    // 1 will show all documents in path EXCEPT the unpublished.
    // Example path (unpublished in caps)
    // home > news > CURRENT > SPORTS > skiiing > article
    // $pathThruUnPub = true would give you this:
    // home > news > skiiing > article
    // $pathThruUnPub = false  would give you this:
    // home > skiiing > article (assuming you have home crumb turned on)
    (isset($pathThruUnPub)) ? $pathThruUnPub : $pathThruUnPub = 1;
   
    // $respectHidemenu [ 1 | 0 ]
    // Setting this to 1 will hide items in the breadcrumb list that
    // are set to be hidden in menus.
    (isset($respectHidemenu)) ? $respectHidemenu : $respectHidemenu = 1;

    // $showHomeCrumb [ 1 | 0 ]
    // Would you like your crumb string to start
    // with a link to home? Some would not because
    // a home link is usually found in the site logo
    // or elsewhere in the navigation scheme.
    (isset($showHomeCrumb)) ? $showHomeCrumb : $showHomeCrumb = 1;

    // $showCrumbsAtHome [ 1 | 0 ]
    // You can use this to turn off the breadcrumbs on the
    // home page with 1.
    // grad: actually \'1\' shows and \'0\' hides crumbs at homepage
    (isset($showCrumbsAtHome)) ? $showCrumbsAtHome : $showCrumbsAtHome = 0;

    // $showCurrentCrumb [ 1 | 0 ]
    // Show the current page in path with 1 or not with 0.
    (isset($showCurrentCrumb)) ? $showCurrentCrumb : $showCurrentCrumb = 1;

    // $currentAsLink [ 1 | 0]
    // If you want the current page crumb to be a
    // link (to itself) then set to 1.
    (isset($currentAsLink)) ? $currentAsLink : $currentAsLink = 0;

    // $crumbSeparator [string]
    // Define what you want between the crumbs
    (isset($crumbSeparator)) ? $crumbSeparator : $crumbSeparator = "&raquo;";

    // $homeCrumbTitle [string]
    // Just in case you want to have a home link,
    // but want to call it something else
    (isset($homeCrumbTitle)) ? $homeCrumbTitle : $homeCrumbTitle = \'Home\';

    // $homeCrumbDescription [string]
    // In case you want to have a custom description of the home link
    // Defaults to title of home link
    (isset($homeCrumbDescription)) ? $homeCrumbDescription : $homeCrumbDescription = $homeCrumbTitle; 

    // $titleField [string]
    // To change default page field to be used as
    // a breadcrumb title, default is pagetitle
    (isset($titleField)) ? $titleField : $titleField = \'pagetitle\';

    // $descField [string]
    // To change default page field to be used as
    // a breadcrumb description, default is description (GA: falls back to pagetitle if description is empty)
    (isset($descField)) ? $descField : $descField = \'description\';

    // Included classes
    // .B_crumbBox        Span that surrounds all crumb output
    // .B_hideCrumb       Span surrounding the "..." if there are more crumbs than will be shown
    // .B_currentCrumb    Span or A tag surrounding the current crumb
    // .B_firstCrumb      Span that always surrounds the first crumb, whether it is "home" or not
    // .B_lastCrumb       Span surrounding last crumb, whether it is the current page or not
    // .B_crumb           Class given to each A tag surrounding the intermediate crumbs (not home, or hide)
    // .B_homeCrumb       Class given to the home crumb
    

// ***********************************
// END CONFIG SETTINGS
// THE REST SHOULD TAKE CARE OF ITSELF
// ***********************************

// Check for home page
if ($showCrumbsAtHome || (!$showCrumbsAtHome && ($modx->documentIdentifier != $modx->config[\'site_start\'])) ){

    //initialize crumb array
    $ptarr = array();
    // get current page parent info
    $docInfo = $modx->getDocument($modx->documentIdentifier,\'id,pagetitle,menutitle,published,deleted,parent,hidemenu,description,longtitle,introtext\');
    $pid = $docInfo[\'parent\'];
    // show current page, as link or not
    if ($showCurrentCrumb){
        $titleToShow = ($docInfo[$titleField])? $docInfo[$titleField] : $docInfo[\'pagetitle\'] ;
        if ($currentAsLink && (!$respectHidemenu || ($respectHidemenu && $docInfo[\'hidemenu\'] != 1 ))){
            $descriptionToUse = ($docInfo[$descField]) ? $docInfo[$descField] : $docInfo[\'pagetitle\'] ;
            $ptarr[] = \'<a class="B_currentCrumb" href="[~\'.$modx->documentIdentifier.\'~]" title="\'.$descriptionToUse.\'">\'.$titleToShow.\'</a>\';
        } else {
            $ptarr[] = \'<span class="B_currentCrumb">\'.$docInfo[\'pagetitle\'].\'</span>\';
        }
    }
    // assemble intermediate crumbs
    $crumbCount = 0;
    //$activeOnly = ($pathThruUnPub)? 0 : 1;
    //while (($parent=$modx->getPageInfo($pid,$activeOnly,"id,pagetitle,menutitle,published,deleted,parent,hidemenu,description,longtitle,introtext")) && ($crumbCount < $maxCrumbs)) {
    while (($parent=$modx->getPageInfo($pid,!$pathThruUnPub,"id,pagetitle,menutitle,published,deleted,parent,hidemenu,description,longtitle,introtext")) && ($crumbCount < $maxCrumbs)) {
        if ($parent[\'published\'] && !$parent[\'deleted\'] && $parent[\'id\'] != $modx->config[\'site_start\']){
            if (!$respectHidemenu || ($respectHidemenu && $parent[\'hidemenu\'] != 1 )){
                $titleToShow = ($parent[$titleField])? $parent[$titleField] : $parent[\'pagetitle\'] ;
                $descriptionToUse = ($parent[$descField]) ? $parent[$descField] : $parent[\'pagetitle\'] ;
                $ptarr[] = \'<a class="B_crumb" href="[~\'.$parent[\'id\'].\'~]" title="\'.$descriptionToUse.\'">\'.$titleToShow.\'</a>\';
            }
        } // end if   
        $pid = $parent[\'parent\'];
        $crumbCount++;
    } // end while

    // insert \'...\' if maximum number of crumbs exceded
    if ($parent != 0){
        $ptarr[] = \'<span class="B_hideCrumb">...</span>\';
    }

    // add home link if desired
    if ($showHomeCrumb && ($modx->documentIdentifier != $modx->config[\'site_start\'])){
        $ptarr[] = \'<a class="B_homeCrumb" href="[~\'.$modx->config[\'site_start\'].\'~]" title="\'.$homeCrumbDescription.\'">\'.$homeCrumbTitle.\'</a>\';
    }

    $ptarr = array_reverse($ptarr);
    $ptarr[0] = \'<span class="B_firstCrumb">\'.$ptarr[0].\'</span>\';
    $ptarr[count($ptarr)-1] = \'<span class="B_lastCrumb">\'.$ptarr[count($ptarr)-1].\'</span>\';
    return \'<span class="B_crumbBox">\'. join($ptarr, " $crumbSeparator ").\'</span>\';

}';
$s['Ditto'] = '/*
 * Title: Ditto Snippet
 * 
 * Description:
 *  	Aggregates documents to create blogs, article/news
 *  	collections, and more,with full support for templating.
 * 
 * Author: 
 * 		Mark Kaplan for MODx CMF
 * 
 * Version: 
 * 		2.0.2
*/

//---Core Settings---------------------------------------------------- //

$ditto_version = "2.0.2";
	// Ditto version being executed

$ditto_base = isset($ditto_base) ? $modx->config[\'base_path\'].$ditto_base : $modx->config[\'base_path\']."assets/snippets/ditto/";
/*
	Param: ditto_base
	
	Purpose:
	Location of Ditto files

	Options:
	Any valid folder location containing the Ditto source code with a trailing slash

	Default:
	[(base_path)]assets/snippets/ditto/
*/
$dittoID = (!isset($id)) ? "" : $id."_";
$GLOBALS["dittoID"] = $dittoID;
/*
	Param: id

	Purpose:
	Unique ID for this Ditto instance for connection with other scripts (like Reflect) and unique URL parameters

	Options:
	Any combination of characters a-z, underscores, and numbers 0-9
	
	Note:
	This is case sensitive

	Default:
	"" - blank
*/		
$language = (isset($language))? $language : "english";
/*
	Param: language

	Purpose:
	language for defaults, debug, and error messages

	Options:
	Any language name with a corresponding file in the &ditto_base/lang folder

	Default:
	"english"
*/
$format = (isset($format)) ? strtolower($format) : "html" ;
/*
	Param: format

	Purpose:
 	Output format to use

	Options:
	- "html"
	- "json"
	- "xml"
	- "atom"
	- "rss"

	Default:
	"html"
*/
$config = (isset($config)) ? $config : "default";
/*
	Param: config

	Purpose:
 	Load a custom configuration

	Options:
	"default" - default blank config file
	CONFIG_NAME - Other configs installed in the configs folder or in any folder within the MODx base path via @FILE

	Default:
	"default"
	
	Related:
	- <extenders>
*/
$debug = isset($debug)? $debug : 0;
/*
	Param: debug

	Purpose:
 	Output debugging information

	Options:
	0 - off
	1 - on
	
	Default:
	0 - off
	
	Related:
	- <debug>
*/
$phx = (isset($phx))? $phx : 1;
/*
	Param: phx

	Purpose:
 	Use PHx formatting

	Options:
	0 - off
	1 - on
	
	Default:
	1 - on
*/		
$extenders = isset($extenders) ? explode(",",$extenders) : array();
/*
	Param: extenders

	Purpose:
 	Load an extender which adds functionality to Ditto

	Options:
	Any extender in the extenders folder or in any folder within the MODx base path via @FILE

	Default:
	[NULL]

	Related:
	- <config>
*/
	// Variable: extenders
	// Array that can be added to by configs or formats to load that extender
	
$placeholders = array();
	// Variable: placeholders
	// Initialize custom placeholders array for configs or extenders to add to

$filters = array("custom"=>array(),"parsed"=>array());
	// Variable: filters
	// Holds both the custom filters array for configs or extenders to add to 
	// and the parsed filters array. To add to this array, use the following format
	// (code)
	// $filters["parsed"][] = array("name" => array("source"=>$source,"value"=>$value,"mode"=>$mode));
	// $filters["custom"][] = array("source","callback_function");
	
//---Includes-------------------------------------------------------- //

$files = array (
	"language" => $ditto_base."lang/$language.inc.php",
	"main_class" => $ditto_base."classes/ditto.class.inc.php",
	"template_class" => $ditto_base."classes/template.class.inc.php",
	"filter_class" => $ditto_base."classes/filter.class.inc.php",
	"format" => $ditto_base."formats/$format.format.inc.php",
	"config" => (substr($config, 0, 5) != "@FILE") ? $ditto_base."configs/$config.config.php" : $modx->config[\'base_path\'].trim(substr($config, 5))
);
if ($phx == 1) {
	$files["prePHx_class"] = $ditto_base."classes/phx.pre.class.inc.php";
}
if (isset($randomize)) {
	$files["randomize_class"] = $ditto_base."classes/random.class.inc.php";
}
if ($debug == 1) {
	$files["modx_debug_class"] = $ditto_base."debug/modxDebugConsole.class.php";
	$files["debug_class"] = $ditto_base."classes/debug.class.inc.php";
	$files["debug_templates"] = $ditto_base."debug/debug.templates.php";
}

foreach ($files as $filename => $filevalue) {
	if (file_exists($filevalue) && strpos($filename,"class")) {
		include_once($filevalue);
	} else if (file_exists($filevalue)) {
		include($filevalue);
	} else if ($filename == "language") {
		$modx->logEvent(1, 3, "Language file does not exist Please check: " . $filevalue, "Ditto " . $ditto_version);
		return "Language file does not exist Please check: " . $filevalue;
	} else {
		$modx->logEvent(1, 3, $filevalue . " " . $_lang[\'file_does_not_exist\'], "Ditto " . $ditto_version);
		return $filevalue . " " . $_lang[\'file_does_not_exist\'];
	}
}

//---Initiate Class-------------------------------------------------- //
if (class_exists(\'ditto\')) {
	$ditto = new ditto($dittoID,$format,$_lang,$dbg_templates);
		// create a new Ditto instance in the specified format and language with the requested debug level
} else {
	$modx->logEvent(1,3,$_lang[\'invalid_class\'],"Ditto ".$ditto_version);
	return $_lang[\'invalid_class\'];
}

//---Initiate Extenders---------------------------------------------- //
if (isset($tagData)) {
	$extenders[] = "tagging";
}
if(count($extenders) > 0) {
	$extenders = array_unique($extenders);
	foreach ($extenders as $extender) {
			if(substr($extender, 0, 5) != "@FILE") {
				$extender_path = $ditto_base."extenders/".$extender.".extender.inc.php";				
			} else {
				$extender_path = $modx->config[\'base_path\'].trim(substr($extender, 5));
			}
			
			if (file_exists($extender_path)){
				include($extender_path);
			} else {
				$modx->logEvent(1, 3, $extender . " " . $_lang[\'extender_does_not_exist\'], "Ditto ".$ditto_version);
				return $extender . " " . $_lang[\'extender_does_not_exist\'];
			}		
	}	
}

//---Parameters------------------------------------------------------- /*

if (isset($startID)) {$parents = $startID;}
if (isset($summarize)) {$display = $summarize;}
if (isset($limit)) {$queryLimit = $limit;}
	// Allow backwards compatibility

$idType = isset($documents) ? "documents" : "parents";
	// Variable: idType
	// type of IDs provided; can be either parents or documents

$parents = isset($parents) ? $ditto->cleanIDs($parents) : $modx->documentIdentifier;

/*
	Param: parents

	Purpose:
	IDs of containers for Ditto to retrieve their children to &depth depth

	Options:
	Any valid MODx document marked as a container

	Default:
	Current MODx Document

	Related:
	- <documents>
	- <depth>
*/
$documents = isset($documents) ? $ditto->cleanIDs($documents) : false;
/*
	Param: documents

	Purpose:
	IDs of documents for Ditto to retrieve

	Options:
	Any valid MODx document marked as a container

	Default:
	None

	Related:
	- <parents>
*/

$IDs = ($idType == "parents") ? $parents : $documents;
	// Variable: IDs
	// Internal variable which holds the set of IDs for Ditto to fetch

$depth = isset($depth) ? $depth : 1;
/*
	Param: depth

	Purpose:
	Number of levels deep to retrieve documents

	Options:
	Any number greater than or equal to 1

	Default:
	1

	Related:
	- <seeThruUnpub>
*/
$paginate = isset($paginate)? $paginate : 0;
/*
	Param: paginate

	Purpose:
	Paginate the results set into pages of &show lenght

	Options:
	0 - off
	1 - on
	
	Default:
	0 - off
	
	Related:
	- <paginateAlwaysShowLinks>
	- <paginateSplitterCharacter>
	- <show>
*/
$dateSource = isset($dateSource) ? $dateSource : "createdon";
/*
	Param: dateSource

	Purpose:
	Source of the [+date+] placeholder

	Options:
	# - Any UNIX timestamp from MODx fields or TVs such as createdon, pub_date, or editedon
	
	Default:
	"createdon"
	
	Related:
	- <dateFormat>
*/
$dateFormat = isset($dateFormat)? $dateFormat : $_lang["dateFormat"];
/*
	Param: dateFormat

	Purpose:
	Format the [+date+] placeholder in human readable form

	Options:
	Any PHP valid strftime option

	Default:
	[LANG]
	
	Related:
	- <dateSource>
*/
$display = isset($display) ? $display : 3;
/*
	Param: display

	Purpose:
	Number of documents to display in the results

	Options:
	# - Any number
	"all" - All documents found

	Default:
	3
	
	Related:
	- <queryLimit>
	- <total>
*/
$total = isset($total) ? $total : "all";
/*
	Param: total

	Purpose:
	Number of documents to retrieve
	
	Options:
	# - Any number
	"all" - All documents found

	Default:
	"all" - All documents found
	
	Related:
	- <show>
	- <queryLimit>
*/
$showPublishedOnly = isset($showPublishedOnly) ? $showPublishedOnly : 1;
/*
	Param: showPublishedOnly

	Purpose:
	Show only published documents

	Options:
	0 - show only unpublished documents
	1 - show only published documents
	
	Default:
	1 - show only published documents
	
	Related:
	- <seeThruUnpub>
	- <hideFolders>
	- <showPublishedOnly>
	- <where>
	
	Todo:
	- Allow when set to 0 show both published and unpublished documents
*/

$showInMenuOnly = isset($showInMenuOnly) ? $showInMenuOnly : 0;
/*
	Param: showInMenuOnly

	Purpose:
	Show only documents visible in the menu

	Options:
	0 - show all documents
	1 - show only documents with the show in menu flag checked
	
	Default:
	0 - show all documents
	
	Related:
	- <seeThruUnpub>
	- <hideFolders>
	- <where>
*/

$hideFolders = isset($hideFolders)? $hideFolders : 0;
/*
	Param: hideFolders

	Purpose:
	Don\'t show folders in the returned results

	Options:
	0 - keep folders
	1 - remove folders
	
	Default:
	0 - keep folders
	
	Related:
	- <seeThruUnpub>
	- <showInMenuOnly>
	- <where>
*/
$seeThruUnpub = (isset($seeThruUnpub))? $seeThruUnpub : 1 ;
/*
	Param: seeThruUnpub

	Purpose:
	See through unpublished folders to retrive their children
	Used when depth is greater than 1

	Options:
	0 - off
	1 - on
	
	Default:
	0 - off
	
	Related:
	- <hideFolders>
	- <showInMenuOnly>
	- <where>
*/
$queryLimit = (isset($queryLimit))? $queryLimit : 0;
/*
	Param: queryLimit

	Purpose:
	Number of documents to retrieve from the database, same as MySQL LIMIT

	Options:
	# - Any number
	0 - automatic

	Default:
	0 - automatic
	
	Related:
	- <where>
*/
$where = (isset($where))? $where : "";
/*
	Param: where

	Purpose:
	Custom MySQL WHERE statement

	Options:
	A valid MySQL WHERE statement using only document object items (no TVs)

	Default:
	[NULL]
	
	Related:
	- <queryLimit>
*/
$noResults = isset($noResults)? $ditto->getParam($noResults,"no_documents") : $_lang[\'no_documents\'];
/*
	Param: noResults

	Purpose:
	Text or chunk to display when there are no results

	Options:
	Any valid chunk name or text

	Default:
	[LANG]
*/
$removeChunk = isset($removeChunk) ? explode(",",$removeChunk) : false;
/*
	Param: removeChunk

	Purpose:
 	Name of chunks to be stripped from content separated by commas
	- Commonly used to remove comments

	Options:
	Any valid chunkname that appears in the output

	Default:
	[NULL]
*/
$hiddenFields = isset($hiddenFields) ? explode(",",$hiddenFields) : false;
/*
	Param: hiddenFields

	Purpose:
	Allow Ditto to retrieve fields its template parser cannot handle such as nested placeholders and [*fields*]

	Options:
	Any valid MODx fieldnames or TVs comma separated

	Default:
	[NULL]
*/
$sortDir = isset($sortDir) ? strtoupper($sortDir) : \'DESC\';
/*
	Param: sortDir

	Purpose:
 	Direction to sort documents

	Options:
	ASC - ascending
	DESC - descending

	Default:
	"DESC"
	
	Related:
	- <sortBy>
*/
$sortBy = isset($sortBy) ? $ditto->parseSort($sortBy, $randomize) : "createdon";
/*
	Param: sortBy

	Purpose:
 	Field to sort documents by

	Options:
	Any document object field or TV

	Default:
	"createdon"
	
	Related:
	- <sortDir>
*/
$offset = isset($start) ? $start : 0;
$start = (isset($_GET[$dittoID.\'start\'])) ? intval($_GET[$dittoID.\'start\']) : 0;
/*
	Param: start

	Purpose:
 	Number of documents to skip in the results
	
	Options:
	Any number

	Default:
	0
*/
$globalFilterDelimiter = isset($globalFilterDelimiter) ? $globalFilterDelimiter : "|";
/*
	Param: globalFilterDelimiter

	Purpose:
 	Filter delimiter used to separate filters in the filter string
	
	Options:
	Any character not used in the filters

	Default:
	"|"
	
	Related:
	- <localFilterDelimiter>
	- <filter>
	- <parseFilters>
*/
	
$localFilterDelimiter = isset($localFilterDelimiter) ? $localFilterDelimiter : ",";
/*
	Param: localFilterDelimiter

	Purpose:
	Delimiter used to separate individual parameters within each filter string
	
	Options:
	Any character not used in the filter itself

	Default:
	","
	
	Related:
	- <globalFilterDelimiter>
	- <filter>
	- <parseFilters>
*/
$filters["custom"] = isset($cFilters) ? array_merge($filters["custom"],$cFilters) : $filters["custom"];
$filters["parsed"] = isset($parsedFilters) ? array_merge($filters["parsed"],$parsedFilters) : $filters["parsed"];
	// handle 2.0.0 compatibility
$filter = (isset($filter) || ($filters["custom"] != false) || ($filters["parsed"] != false)) ? $ditto->parseFilters($filter,$filters["custom"],$filters["parsed"],$globalFilterDelimiter,$localFilterDelimiter) : false;
/*
	Param: filter

	Purpose:
	Only show items meeting a criteria
	Use in the format field,criteria,mode with the comma being the local delimiter

	*Mode* *Meaning*
	
	1 - !=
	2 - ==
	3 - <
	4 - >
	5 - <=
	6 - >=
	7 - Text not in field value
	8 - Text in field value
	
	@EVAL:
		@EVAL in filters works the same as it does in MODx exect it can only be used 
		with basic filtering, not custom filtering (tagging, etc). Make sure that
		you return the value you wish Ditto to filter by and that the code is valid PHP.

	Default:
	[NULL]
	
	Related:
	- <localFilterDelimiter>
	- <globalFilterDelimiter>
	- <parseFilters>
*/
$keywords = (isset($keywords))? $keywords : 0;
/*	
	Param: keywords
	
	Purpose: 
	Enable fetching of associated keywords for each document
	Can be used as [+keywords+] or as a tagData source
	
	Options:
	0 - off
	1 - on
	
	Default:
	0 - off
*/

$randomize = (isset($randomize))? $randomize : 0;
/*	
	Param: randomize
	
	Purpose: 
	Randomize the order of the output
	
	Options:
	0 - off
	1 - on
	Any MODx field or TV for weighted random
	
	Default:
	0 - off
*/
$save = (isset($save))? $save : 0;
/*
	Param: save

	Purpose:
	Saves the ditto object and results set to placeholders
	for use by other snippets

	Options:
	0 - off; returns output
	1 - remaining; returns output
	2 - all;
	3 - all; returns ph only

	Default:
		0 - off; returns output
*/
$templates = array(
	"default" => "@CODE".$_lang[\'default_template\'],
	"base" => $tpl,
	"alt" => $tplAlt,
	"first" => $tplFirst,
	"last" => $tplLast,
	"current" => $tplCurrentDocument
);
/*
	Param: tpl

	Purpose:
	User defined chunk to format the documents 

	Options:
	- Any valid chunk name
	- Code via @CODE
	- File via @FILE

	Default:
	[LANG]
*/
/*
	Param: tplAlt

	Purpose:
	User defined chunk to format every other document

	Options:
	- Any valid chunk name
	- Code via @CODE
	- File via @FILE

	Default:
	&tpl
*/
/*
	Param: tplFirst

	Purpose:
	User defined chunk to format the first document 

	Options:
	- Any valid chunk name
	- Code via @CODE
	- File via @FILE

	Default:
	&tpl
*/
/*
	Param: tplLast

	Purpose:
	User defined chunk to format the last document 

	Options:
	- Any valid chunk name
	- Code via @CODE
	- File via @FILE

	Default:
	&tpl
*/
/*
	Param: tplCurrentDocument

	Purpose:
	User defined chunk to format the current document

	Options:
	- Any valid chunk name
	- Code via @CODE
	- File via @FILE

	Default:
	&tpl
*/

//-------------------------------------------------------------------- */
	
$templates = $ditto->template->process($templates);
	// parse the templates for TV\'s and store them for later use

$ditto->setDisplayFields($ditto->template->fields,$hiddenFields);
	// parse hidden fields
	
$ditto->parseFields($placeholders,$seeThruUnpub,$dateSource,$randomize);
	// parse the fields into the field array
		
$documentIDs = $ditto->determineIDs($IDs, $idType, $ditto->fields["backend"]["tv"], $sortBy, $sortDir, $depth, $showPublishedOnly, $seeThruUnpub, $hideFolders, $showInMenuOnly, $where, $keywords, $queryLimit, $display, $filter,$paginate, $randomize);
	// retrieves a list of document IDs that meet the criteria and populates the $resources array with them
$count = count($documentIDs);
	// count the number of documents to be retrieved
$count = $count-$offset;
	// handle the offset
if ($count > 0) {
	// if documents are returned continue with execution
	
	$total = ($total == "all") ? $count : min($total,$count);
		// set total equal to count if all documents are to be included
	
	$display = ($display == "all") ? min($count,$total) : min($display,$total);
		// allow show to use all option

	$stop = ($save != "1") ? min($total-$start,$display) : min($count,$total);
		// set initial stop count

	if($paginate == 1) {
		$paginateAlwaysShowLinks = isset($paginateAlwaysShowLinks)? $paginateAlwaysShowLinks : 0;
		/*
			Param: paginateAlwaysShowLinks

			Purpose:
			Determine whether or not to always show previous next links

			Options:
			0 - off
			1 - on

			Default:
			0 - off
		
			Related:
			- <paginate>
			- <paginateSplitterCharacter>
		*/
		$paginateSplitterCharacter = isset($paginateSplitterCharacter)? $paginateSplitterCharacter : $_lang[\'button_splitter\'];
		/*
			Param: paginateSplitterCharacter

			Purpose:
			Splitter to use if always show is disabled

			Options:
			Any valid character

			Default:
			[LANG]
		
			Related:
			- <paginate>
			- <paginateSplitterCharacter>
		*/
		$tplPaginatePrevious = isset($tplPaginatePrevious)? $ditto->template->fetch($tplPaginatePrevious) : $_lang[\'prev\'];
		/*
			Param: tplPaginatePrevious

			Purpose:
			Template for the inside of the previous link

			Options:
			- Any valid chunk name
			- Code via @CODE
			- File via @FILE

			Default:
			[LANG]
		
			Related:
			- <tplPaginateNext>
			- <paginateSplitterCharacter>
		*/
		$tplPaginateNext = isset($tplPaginateNext)? $ditto->template->fetch($tplPaginateNext) : $_lang[\'next\'];
		/*
			Param: tplPaginateNext

			Purpose:
			Template for the inside of the next link

			Options:
			- Any valid chunk name
			- Code via @CODE
			- File via @FILE

			Default:
			[LANG]
		
			Related:
			- <tplPaginatePrevious>
			- <paginateSplitterCharacter>
		*/
		$ditto->paginate($start, $stop, $total, $display, $tplPaginateNext, $tplPaginatePrevious, $paginateAlwaysShowLinks, $paginateSplitterCharacter);
			// generate the pagination placeholders
	}

	$dbFields = $ditto->fields["display"]["db"];
		// get the database fields
	$TVs = $ditto->fields["display"]["tv"];
		// get the TVs
	
	switch($sortDir) {
		case "DESC":
			$stop = ($ditto->prefetch === false) ? $stop + $start + $offset : $stop + $offset; 
			$start += $offset;
		break;
		case "ASC":
			$start += $offset;
			$stop += $start;
		break;
	}

	if ($ditto->prefetch !== false) {
		$documentIDs = array_slice($documentIDs,$start,$stop);
			// set the document IDs equal to the trimmed array
		$dbFields = array_diff($dbFields,$ditto->prefetch["fields"]["db"]);
			// calculate the difference between the database fields and those already prefetched
		$dbFields[] = "id";
			// append id to the db fields array
		$TVs = array_diff($TVs,$ditto->prefetch["fields"]["tv"]);
			// calculate the difference between the tv fields and those already prefetched
		$start = 0;
		$stop = min($display,count($documentIDs));
	} else {
		$queryLimit = ($queryLimit == 0) ? "" : $queryLimit;
	}

	$resource = $ditto->getDocuments($documentIDs, $dbFields, $TVs, $keywords, $showPublishedOnly, 0, $where, $queryLimit, $sortBy, $sortDir,$randomize);
		// retrieves documents
	$output = $header;
		// initialize the output variable and send the header

	if ($resource) {
		if ($randomize != "0" && $randomize != "1") {
			$resource = $ditto->weightedRandom($resource,$randomize,$stop);
				// randomize the documents
		}
		
		$resource = array_values($resource);

		for ($x=$start;$x<$stop;$x++) {
			$template = $ditto->template->determine($templates,$x,0,$stop,$resource[$x]["id"]);
				// choose the template to use and set the code of that template to the template variable
			$renderedOutput = $ditto->render($resource[$x], $template, $removeChunk, $dateSource, $dateFormat, $placeholders,$phx);
				// render the output using the correct template, in the correct format and language
			$modx->setPlaceholder($dittoID."item[".abs($start-$x)."]",$renderedOutput);
			/*
				Placeholder: item[x]

				Content:
				Individual items rendered output
			*/
			$output .= $renderedOutput;
				// send the rendered output to the buffer
		}
	} else {
		$output .= $noResults;
			// if no documents are found return a no documents found string
	}
	$output .= $footer;
		// send the footer

	// ---------------------------------------------------
	// Save Object
	// ---------------------------------------------------

	if($save) {
		$modx->setPlaceholder($dittoID."ditto_object", $ditto);
		$modx->setPlaceholder($dittoID."ditto_resource", ($save == "1") ? array_slice($resource,$display) : $resource);
	}
} else {
	$output = $header.$noResults.$footer;
}
// ---------------------------------------------------
// Handle Debugging
// ---------------------------------------------------

if ($debug == 1) {
	$ditto_params = func_get_args();
	if (!isset($_GET["ditto_".$dittoID."debug"])) {
	$_SESSION["ditto_debug_$dittoID"] = $ditto->debug->render_popup($ditto, $ditto_base, $ditto_version, $ditto_params[1], $documentIDs, array("db"=>$dbFields,"tv"=>$TVs), $display, $templates, $sortBy, $sortDir, $start, $stop, $total,$filter,$resource);
	}
	if (isset($_GET["ditto_".$dittoID."debug"])) {
		switch ($_GET["ditto_".$dittoID."debug"]) {
			case "open" :
				exit($_SESSION["ditto_debug_$dittoID"]);
			break;
			case "save" :
				$ditto->debug->save($_SESSION["ditto_debug_$dittoID"],"ditto".strtolower($ditto_version)."_debug_doc".$modx->documentIdentifier.".html");
			break;
		}
	} else {
		$output = $ditto->debug->render_link($dittoID,$ditto_base).$output;
	}
}

return ($save != 3) ? $output : "";
';
$s['eForm'] = '# eForm 1.4.4 - Electronic Form Snippet
# Original created by Raymond Irving 15-Dec-2004.
# Version 1.3+ extended by Jelle Jager (TobyL) September 2006
# -----------------------------------------------------
# local version: $Id: eform.snippet.tpl,v 1.2 2006/11/22 14:53:38 jelle Exp $
# Captcha image support - thanks to Djamoer
# Multi checkbox, radio, select support - thanks to Djamoer
# Form Parser and extened validation - by Jelle Jager
#
# see eform/docs/eform.htm for history, usage and examples
#

# Set Snippet Paths
#new in 1.4.4 - sub-folder set by parameter
$snipFolder = isset($snipFolder)?$snipFolder:\'eform\';
$snipPath = $modx->config["base_path"].\'assets/snippets/\'.$snipFolder.\'/\';


# check if inside manager
if ($modx->isBackend()) {
return \'\'; # don\'t go any further when inside manager
}

//tidying up some casing errors in parameters
if(isset($eformOnValidate)) $eFormOnValidate = $eformOnValidate;
if(isset($eformOnBeforeMailSent)) $eFormOnBeforeMailSent = $eformOnBeforeMailSent;
if(isset($eformOnMailSent)) $eFormOnMailSent = $eformOnMailSent;
if(isset($eformOnValidate)) $eFormOnValidate = $eformOnValidate;
if(isset($eformOnBeforeFormMerge)) $eFormOnBeforeFormMerge = $eformOnBeforeFormMerge;
if(isset($eformOnBeforeFormParse)) $eFormOnBeforeFormParse = $eformOnBeforeFormParse;
//for sottwell :)
if(isset($eFormCSS)) $cssStyle = $eFormCSS;

# Snippet customize settings
$params = array (
   // Snippet Path
   \'snipPath\' => $snipPath, //includes $snipFolder
	 \'snipFolder\' => $snipFolder,

// eForm Params
   \'vericode\' => isset($vericode)? $vericode:"",
   \'formid\' => isset($formid)? $formid:"",
   \'from\' => isset($from)? $from:$modx->config[\'emailsender\'],
   \'fromname\' => isset($fromname)? $fromname:$modx->config[\'site_name\'],
   \'to\' => isset($to)? $to:$modx->config[\'emailsender\'],
   \'cc\' => isset($cc)? $cc:"",
   \'bcc\' => isset($bcc)? $bcc:"",
   \'subject\' => isset($subject)? $subject:"",
   \'ccsender\' => isset($ccsender)? 1:0,
   \'sendirect\' => isset($sendirect)? 1:0,
   \'mselector\' => isset($mailselector)? $mailselector:0,
   \'mobile\' => isset($mobile)? $mobile:\'\',
   \'mobiletext\' => isset($mobiletext)? $mobiletext:\'\',
   \'autosender\' => isset($autosender)? $autosender:$from,
   \'autotext\' => isset($automessage)? $automessage:"",
   \'category\' => isset($category)? $category:0,
   \'keywords\' => isset($keywords)? $keywords:"",
   \'gid\' => isset($gotoid)? $gotoid:$modx->documentIdentifier,
   \'noemail\' => isset($noemail)? ($noemail):false,
   \'saveform\' => isset($saveform)? ($saveform? true:false):true,
   \'tpl\' => isset($tpl)? $tpl:"",
   \'report\' => isset($report)? $report:"",
   \'allowhtml\' => isset($allowhtml)? 1:0,
   //Added by JJ
   \'replyto\' => isset($replyto)? $replyto:"",
   \'language\' => isset($language)? $language:$modx->config[\'manager_language\'],
   \'thankyou\' => isset($thankyou)? $thankyou:"",
   \'isDebug\' => isset($debug)? $debug:0,
   \'reportAbuse\' => isset($reportAbuse)? $reportAbuse:false,
   \'disclaimer\' => isset($disclaimer)?$disclaimer:\'\',
   \'sendAsHtml\' => isset($sendAsHtml)?$sendAsHtml:false,
   \'sendAsText\' => isset($sendAsText)?$sendAsText:false,
   \'sessionVars\' => isset($sessionVars)?$sessionVars:false,
   \'postOverides\' => isset($postOverides)?$postOverides:0,
   \'eFormOnBeforeMailSent\' => isset($eFormOnBeforeMailSent)?$eFormOnBeforeMailSent:\'\',
   \'eFormOnMailSent\' => isset($eFormOnMailSent)?$eFormOnMailSent:\'\',
   \'eFormOnValidate\' => isset($eFormOnValidate)?$eFormOnValidate:\'\',
   \'eFormOnBeforeFormMerge\' => isset($eFormOnBeforeFormMerge)?$eFormOnBeforeFormMerge:\'\',
   \'eFormOnBeforeFormParse\' => isset($eFormOnBeforeFormParse)?$eFormOnBeforeFormParse:\'\',
   \'cssStyle\' => isset($cssStyle)?$cssStyle:\'\',
   \'jScript\' => isset($jScript)?$jScript:\'\',
   \'submitLimit\' => (isset($submitLimit) &&  is_numeric($submitLimit))?$submitLimit*60:0,
   \'protectSubmit\' => isset($protectSubmit)?$protectSubmit:1,
   \'requiredClass\' => isset($requiredClass)?$requiredClass:"required",
   \'invalidClass\' => isset($invalidClass)?$invalidClass:"invalid",
   \'runSnippet\' => ( isset($runSnippet) && !is_numeric($runSnippet) )?$runSnippet:\'\',
   \'autoSenderName\' => isset($autoSenderName)?$autoSenderName:\'\',
   \'version\' => \'1.4.4\'
);

# Start processing

include_once ($snipPath."eform.inc.php");

$output = eForm($modx,$params);

# Return
return $output;';
$s['FirstChildRedirect'] = '/**
 * @name FirstChildRedirect
 * @author Jason Coward <jason@opengeek.com>
 * @modified-by Ryan Thrash <ryan@vertexworks.com>
 * @license Public Domain
 * @version 1.0
 * 
 * This snippet redirects to the first child document of a folder in which this
 * snippet is included within the content (e.g. [!FirstChildRedirect!]).  This
 * allows MODx folders to emulate the behavior of real folders since MODx
 * usually treats folders as actual documents with their own content.
 * 
 * Modified to make Doc ID a required parameter... now defaults to the current 
 * Page/Folder you call the snippet from.
 * 
 * &docid=`12` 
 * Use the docid parameter to have this snippet redirect to the
 * first child document of the specified document.
 */

$docid = (isset($docid))? $docid: $modx->documentIdentifier;

$children= $modx->getActiveChildren($docid, \'menuindex\', \'ASC\');
if (!$children === false) {
    $firstChild= $children[0];
    $firstChildUrl= $modx->makeUrl($firstChild[\'id\']);
} else {
    $firstChildUrl= $modx->makeUrl($modx->config[\'site_start\']);
}
return $modx->sendRedirect($firstChildUrl);
';
$s['Jot'] = '/*####
#
#	Name: Jot
#	Version: 1.1.2
#	Author: Armand "bS" Pondman (apondman@zerobarrier.nl)
#	Date: Feb 19, 2006 15:26 CET
#
# Latest Version: http://modxcms.com/Jot-998.html
# Jot Demo Site: http://projects.zerobarrier.nl/modx/
# Documentation: http://wiki.modxcms.com/index.php/Jot (wiki)
#
####*/

$jotPath = $modx->config[\'base_path\']. \'assets/snippets/jot/\';
include_once($jotPath.\'jot.class.inc.php\');

$Jot = new CJot;
$Jot->VersionCheck("1.1.2");
$Jot->Set("path",$jotPath);
$Jot->Set("action", $action);
$Jot->Set("postdelay", $postdelay);
$Jot->Set("docid", $docid);
$Jot->Set("tagid", $tagid);
$Jot->Set("subscribe", $subscribe);
$Jot->Set("moderated", $moderated);
$Jot->Set("captcha", $captcha);
$Jot->Set("badwords", $badwords);
$Jot->Set("bw", $bw);
$Jot->Set("sortby", $sortby);
$Jot->Set("numdir", $numdir);
$Jot->Set("customfields", $customfields);
$Jot->Set("guestname", $guestname);
$Jot->Set("canpost", $canpost);
$Jot->Set("canview", $canview);
$Jot->Set("canedit", $canedit);
$Jot->Set("canmoderate", $canmoderate);
$Jot->Set("trusted", $trusted);
$Jot->Set("pagination", $pagination);
$Jot->Set("placeholders", $placeholders);
$Jot->Set("subjectSubscribe", $subjectSubscribe);
$Jot->Set("subjectModerate", $subjectModerate);
$Jot->Set("notify", $notify);
$Jot->Set("validate", $validate);
$Jot->Set("title", $title);
$Jot->Set("authorid", $authorid);
$Jot->Set("css", $css);
$Jot->Set("cssFile", $cssFile);
$Jot->Set("cssRowAlt", $cssRowAlt);
$Jot->Set("cssRowMe", $cssRowMe);
$Jot->Set("cssRowAuthor", $cssRowAuthor);
$Jot->Set("tplForm", $tplForm);
$Jot->Set("tplComments", $tplComments);
$Jot->Set("tplModerate", $tplModerate);
$Jot->Set("tplNav", $tplNav);
$Jot->Set("tplNotify", $tplNotify);
$Jot->Set("tplNotifyModerator", $tplNotifyModerator);
$Jot->Set("tplSubscribe", $tplSubscribe);
$Jot->Set("debug", $debug);
$Jot->Set("output", $output);
return $Jot->Run();';
$s['ListIndexer'] = '// --------------------
// Snippet: ListIndexer
// --------------------
// Version: 1.0
// Date: 10 Oct 2005
//
// Derived from ListIndex 0.6j by jaredc@honeydewdesign.com
// Now supports Show In Menu
//
// This snippet was designed to be a VERY flexible way
// of showing what has been recently added. You can use
// this snippet to show news from one folder, or what has
// been recently added site wide. You can even show what\'s
// new in a \'section\' (everything under a defined folder)!
//

// Configuration Settings

   // Set the following snippet defaults the way you would normally
   // use this snippet, then use snippet variables in other situations
   // to override the default behaviors.

   // GENERAL OPTIONS

   // $rootFolder [ NULL | string (comma separated page id\'s) ]
   // Decide which folder to pull recent documents from.
   // If you want to specify a few folders, comma separate them.
   // The default NULL will set current page as root. Using 0
   // would search site wide. Can be set with snippet parameter
   // $LIn_root like:
   // [[ListIndexer?LIn_root=3,6,88]] 
   $rootFolder = NULL;

   // $descendentDepth [ int ]
   // How many levels below the root folder(s) do you want to
   // include? Can be overridden in snippet call with LIn_depth:
   // [[ListIndexer?LIn_depth=2]]
   // Uncomment one of these common two or create your own:
   // $descendentDepth = 1; // just children of root folder(s)
   $descendentDepth = 0; // all decendents of root folder(s)

   // $seeThruUnpub [ true | false ]
   // When using descendents, do you want to consider files below
   // an unpublished (hidden) folder? Usually no. But you decide.
   // Snippet parameter: LIn_seeThru
   // [[ListIndexer?LIn_seeThru=1]]
   $seeThruUnpub = false;

   // $seeShowInMenu [ true | false ]
   // When using descendents, do you want to consider files flagged
   // to be hidden from the menus? Usually no. But you decide.
   // Snippet parameter: LIn_seeShowInMenu
   // [[ListIndexer?LIn_seeShowInMenu=1]]
   $seeShowInMenu = false;

   // $mode [ \'short\' | \'full\' ]
   // Defines whether this list should be a full, paged
   // list of all documents, or a short list of the most
   // recent few (how many will be defined next). Can be
   // overridden in snippet call with $LIn_mode:
   // [[ListIndexer?LIn_mode=full]]
   $mode = \'short\';
   
   // $sortBy [ \'alpha\' | \'date\' | \'menuindex\' ]
   // The default date will sort by most recent items first, but
   // by using the \'alpha\' option, and using full mode, you could
   // use this to create an index, or directory.
   // Settable with snippet call $LIn_sort:
   // [[ListIndexer?LIn_sort=alpha]]
   $sortBy = \'date\';
   
   // $sortDir [ \'ASC\' | \'DESC\' ]
   // Sort direction ascending or descending. Is applied to whatever $sortBy
   // field you have chosen above. If left blank, menuindex and alpha will sort
   // ASC and date DESC.
   // $LIn_dir in snippet call:
   // [[ListIndexer?LIn_dir=ASC&LIn_sortBy=menuindex]]
   $sortDir = \'\';

   // WHAT TO DISPLAY

   // $defaultTitle [ string ]
   // If you want a default title for your list
   // you can declare it here. Or use an empty
   // string to leave this off. This can be overridden
   // in the snippet call with the variable $LIn_title:
   // [[ListIndexer?LIn_title=Some new title]]
   $defaultTitle = \'\';

   // $shortDesc [ true | false ]
   // Show the description on the short list, or not. Snippet
   // parameter $LIn_sDesc:
   // [[ListIndexer?LIn_sDesc=0]]
   $shortDesc = true;

   // $fullDesc [ true | false ]
   // Show the description on the full list, or not. Snippet
   // parameter $LIn_fDesc:
   // [[ListIndexer?LIn_fDesc=0]]
   $fullDesc = true;

   // $linkToIndex [ int ]
   // If you have a page set up as an \'index\' for all the 
   // documents in this list, you can link to it by specifying 
   // its id- can also be set in snippet call with LIn_link:
   // [[ListIndexer?LIn_link=8]]
   // The default 0 will eliminate this link
   $linkToIndex = 0;

   // $indexText [ string ]
   // If you want a link to an index (probably a page running this
   // snippet in "full" mode), you can declare what you want that
   // link to say here. Or in the snippet call with LIn_indexText:
   // [[ListIndexer?LIn_indexText=Financial News Index]]
   $indexText = \'Index\';

   // $showCreationDate [ true | false ]
   // Decide to include date of creation in output or not. From
   // snippet call $LIn_showDate use 1 (true) or 0 (false)
   // [[ListIndexer?LIn_showDate=1]]
   $showCreationDate = true;

   // $dateFormat [ string ]
   // Used to define how date will be displayed (if using date)
   // Y = 4 digit year     y = 2 digit year
   // M = Jan - Dec        m = 01 - 12
   // D = Sun - Sat        d = 01 -31
   // Other standard PHP characters may be used
   $dateFormat = \'Y.m.d\';

   // $shortQty [ int ]
   // Number of entries to list in the short list. Can be
   // overridden in snippet call with $LIn_sQty:
   //[[ListIndexer?LIn_sQty=3]]
   $shortQty = 3;

   // PAGING

   // $fullQty [ int ]
   // Number of entries PER PAGE to list in the full list
   // Can be overridden in snippet call with $LIn_fQty:
   // [[ListIndexer?LIn_fQty=20]]
   // To show all set to 0 here or in snippet call
   $fullQty = 10;
   
   // $pageSeparator [ string ]
   // What you want your page number links to be separated by.
   // You NEED to include spaces if you want them. They are NOT
   // created automatically to facilitate styling ability.
   // For instance, " | " will render links like:
   // 1 | 2 | 3 | 4
   $pageSeparator = " | ";
   
   // $pgPosition [ \'top\' | \'bottom\' | \'both\']
   // Pick where you want your pagination links to appear.
   $pgPosition = \'both\';

   // PERFORMANCE

   // $useFastUrls [ true | false ]
   // IMPORTANT- using fast urls will reduce database queries
   // and improve performance WHEN IN FULL MODE ONLY and 
   // should NOT be used when multiple instances of this snippet
   // appear on the same page. With snippet call LIn_fast use 1
   // (true) or 0 (false)
   // [[ListIndexer?LIn_fast=0]]
   $useFastUrls = false;

   // $newLinesForLists [ true | false ]
   // Depending on how you want to style your list, you may
   // or may not want your <li>s on new lines. Generally, if you
   // are displaying then inline (horizontal, you do not want new
   // lines, but standard vertical block styling you do. This is
   // for IE, real browsers don\'t care.
   $newLinesForLists = true;

// Styles
//
// The following are the styles included in this snippet. It is up
// to you to include these styles in your stylesheet to get them to
// look the way you want.

   // div.LIn_title {}          List title div
   // ul.LIn_fullMode {}        UL class
   // ul.LIn_shortMode {}       UL class
   // span.LIn_date {}          Span surrounding pub/created date
   // span.LIn_desc {}          Span surrounding description
   // div.LIn_pagination        Div surrounding pagination links
   // span.LIn_currentPage {}   Span surrounding current page of
   //                           pagination (which wouldn\'t be css-able
   //                           by virtue of its <a> tag)


// **********************************************************************
// END CONFIG SETTINGS
// THE REST SHOULD TAKE CARE OF ITSELF
// **********************************************************************

// Take care of IE list issue
$ie = ($newLinesForLists)? "\\n" : \'\' ;

// Use snippet call defined variables if set
$activeTitle = (isset($LIn_title))? $LIn_title : $defaultTitle ;
$mode = (isset($LIn_mode))? $LIn_mode : $mode ;
$descendentDepth = (isset($LIn_depth))? $LIn_depth : $descendentDepth ;
$seeThruUnpub = (isset($LIn_seeThru))? $LIn_seeThru : $seeThruUnpub ;
$seeShowInMenu = (isset($LIn_seeShowInMenu))? $LIn_seeShowInMenu : $seeShowInMenu ;
$linkToIndex = (isset($LIn_link))? $LIn_link : $linkToIndex ;
$rootFolder = (isset($LIn_root))? $LIn_root : $rootFolder ;
$shortQty = (isset($LIn_sQty))? $LIn_sQty : $shortQty ;
$fullQty = (isset($LIn_fQty))? $LIn_fQty : $fullQty ;
$showCreationDate = (isset($LIn_showDate))? $LIn_showDate : $showCreationDate ;
$indexText = (isset($LIn_indexText))? $LIn_indexText : $indexText ;
$useFastUrls = (isset($LIn_fast))? $LIn_fast : $useFastUrls ;
$sortBy = (isset($LIn_sort))? $LIn_sort : $sortBy;
$shortDesc = (isset($LIn_sDesc))? $LIn_sDesc : $shortDesc ;
$fullDesc = (isset($LIn_fDesc))? $LIn_fDesc : $fullDesc ;
$sortDir = (isset($LIn_dir))? $LIn_dir : $sortDir ;
if ($sortDir == \'\') $sortDir = ($sortBy == \'date\')? \'DESC\' : \'ASC\' ;


// Make useful variable shortcut for the content table
$tbl = $modx->dbConfig[\'dbase\'] . ".`" . $modx->dbConfig[\'table_prefix\'] . "site_content`";

// Initialize output
$output = \'\';

// ---------------------------------------------------
// ---------------------------------------------------
// Query db for parent folders, or not. First check to
// see if a querystring cheat has been provided- this
// should speed things up considerably when using this
// in full mode. (a.k.a. fastUrls)
// ---------------------------------------------------
// ---------------------------------------------------
$inFolder= isset($_GET[\'LIn_f\'])? $_GET[\'LIn_f\']: 0;
if ((!$inFolder && $useFastUrls) || !$useFastUrls ){
  // Only run all the database queries if we don\'t already
  // know the folders AND fastUrls are desired.

  // ---------------------------------------------------
  // Seed list of viable parents
  // ---------------------------------------------------

  if ($rootFolder == NULL){
    $rootFolder = $modx->documentIdentifier;
  }
  // Set root level parent array
  $seedArray = explode(\',\',$rootFolder);
  $parentsArray = array();
  foreach($seedArray AS $seed){
    $parentsArray[\'level_0\'][] = $seed;
  }

  // ---------------------------------------------------
  // Make array of all allowed parents
  // ---------------------------------------------------

  // Process valid parents
  $levelCounter = 1;

  while (((count($parentsArray) < $descendentDepth) || ($descendentDepth == 0)) && ($levelCounter <= count($parentsArray)) && ($levelCounter < 10)){

    // Find all decendant parents for this level
    $pLevel = \'level_\'.($levelCounter - 1);
    $tempLevelArray = $parentsArray[$pLevel];

    foreach($tempLevelArray AS $p){

      // Get children who are parents (isfolder = 1)
      $validParentSql = "";
      $validParentSql .= "SELECT id FROM $tbl WHERE ";
      $validParentSql .= "isfolder = 1 AND parent = $p ";
      $validParentSql .= "AND $tbl.deleted=0 ";
      $validParentSql .= ($seeThruUnpub)? ";" : "AND $tbl.published = 1;";

      // Run statement
      $rsTempParents = $modx->dbQuery($validParentSql);
      // Get number of results
      $countTempParents = $modx->recordCount($rsTempParents);

      // If there are results, put them in an array
      $tempValidArray = false;
      if ($countTempParents){
        for ($i=0;$i<$countTempParents;$i++){
          $tempId = $modx->fetchRow($rsTempParents);
          $tempValidArray[] = $tempId[\'id\'];
        } // end while
      } // end if

	  // populate next level of array 
	  if ($tempValidArray){
	    foreach($tempValidArray AS $kid){
	      $kidLevel = \'level_\'.$levelCounter;
	      $parentsArray[$kidLevel][] = $kid;
	    } // end foreach

	  } // end if
    } // end foreach

    // Do next level
    $levelCounter++;

  } // end while

  // Finalize list of parents
  $validParents = \'\';
  foreach ($parentsArray AS $level){
    foreach ($level AS $validP){
      $validParents .= $validP . \',\';
    }
  }

  // Remove trailing comma
  $validParents = substr($validParents,0,strlen($validParents)-1);

} else {
  $validParents = $_GET[\'LIn_f\'];
}

// ---------------------------------------------------
// Make appropriate SQL statement to pull recent items
// ---------------------------------------------------

// Initialize
$recentSql = "";
$recentSql .= "SELECT id, pagetitle, description";
// Include pub_date or createdon date if date is desired
$recentSql .= ($showCreationDate)? ", IF(pub_date > 0, pub_date, createdon) AS pubDate ": " " ;
$recentSql .= "FROM $tbl ";
$recentSql .= "WHERE ";
// Look everywhere, or just under valid parents
$recentSql .= (($rootFolder == 0) && $seeThruUnpub && ($descendentDepth == 0))? "" : "parent IN ($validParents) AND " ;
// Published
$recentSql .= "$tbl.published = 1 ";
// Show In Menu
$recentSql .= ($seeShowInMenu)? " " : " AND $tbl.hidemenu=0 " ;
// Not deleted
$recentSql .= "AND $tbl.deleted=0 ";
// Choose sort method
switch ($sortBy){
  case \'alpha\':
    $recentSql .= "ORDER BY pagetitle ";
    break;
  case \'menuindex\':
    $recentSql .= "ORDER BY menuindex ";
    break;
  default:
    $recentSql .= "ORDER BY IF(pub_date>0, pub_date, createdon) ";
    break;
}
// Provide a sort direction
$recentSql .= $sortDir;

// If this is a short list, just pull a limited number
$recentSql .= ($mode == \'short\')? " LIMIT $shortQty;" : ";" ;

// Run statement
$rsRecent = $modx->dbQuery($recentSql);
// Count records
$recentLimit = $modx->recordCount($rsRecent);

// ---------------------------------------------------
// Generate pagination string if needed
// ---------------------------------------------------
$offsetParam = isset($_GET[\'LIn_o\'])? $_GET[\'LIn_o\']: 0;
$offset = ($offsetParam && ($mode == \'full\'))? $offsetParam : 0 ;
$pagination = \'\';

// Don\'t bother unless there are enough records to justify it
if ( ($mode == \'full\') && ($recentLimit > $fullQty) && ($fullQty) ){
  $fullUrl = $_SERVER[\'REQUEST_URI\'];
  $urlPieces = parse_url($fullUrl);
  $urlPath = $urlPieces[\'path\'];
  $otherQs = \'\';

  if ($urlPieces[\'query\']){
    foreach($_GET AS $qsKey=>$qsValue){
	  if (($qsKey != \'LIn_o\') && ($qsKey != \'LIn_f\')){
	    $otherQs .= \'&\'.$qsKey.\'=\'.$qsValue;
	  }
	}
  } 
  
  $fastUrl = $urlPath.\'?LIn_f=\'.$validParents.$otherQs;

  // Determine number of pages needed to show results
  $totalPages = ceil($recentLimit/$fullQty);
  
  // Make links
  for ($j = 0 ; $j < $totalPages; $j++){
    // only include links to OTHER pages, not current page
    if($offset == $j*$fullQty){
	  $pagination .= \'<span class="LIn_currentPage">\'.($j+1) .\'</span>\';
	} else {
      $pagination .= \'<a href="\'.$fastUrl.\'&LIn_o=\'.($j*$fullQty).\'" title="\'.($j+1).\'">\'.($j+1) .\'</a>\';
	}
	if ($j < $totalPages-1){
	  $pagination .= $pageSeparator;
	}
  }
  
  // Make final pagination link set in it\'s own div
  $pagination = \'<div class="LIn_pagination">\'."\\n".$pagination."\\n</div>\\n";
  
}


// ---------------------------------------------------
// Create title if wanted
// ---------------------------------------------------

if ($activeTitle){
  $output .= \'<div class="LIn_title">\'.$activeTitle.\'</div>\'."\\n";
}

// ---------------------------------------------------
// Create list of recent items
// ---------------------------------------------------

// Include pagination
$output .= ($pgPosition == \'top\' || $pgPosition == \'both\')? $pagination : \'\' ;

$output .= \'<ul class="LIn_\'.$mode.\'Mode">\' . $ie;

$recentCounter = $offset;
if ($mode == \'short\') {
  $recentCounterLimit = min($shortQty,$recentLimit);
} else {
  $recentCounterLimit = ($fullQty)? min(($fullQty+$offset),$recentLimit) : $recentLimit ;
}

while (($recentCounter < $recentCounterLimit) && $rsRecent && ($recentLimit > 0)){
  mysql_data_seek($rsRecent,$recentCounter);
  $recentRecord = $modx->fetchRow($rsRecent);
  $output .= \'<li>\';
  // Link to page
  $output .= \'<a href="[~\'.$recentRecord[\'id\'].\'~]" title="\'.strip_tags($recentRecord[\'pagetitle\']).\'">\'.$recentRecord[\'pagetitle\'].\'</a> \';
  // Date if desired
  if ($showCreationDate){
    $output .= \'<span class="LIn_date">\'.date($dateFormat,$recentRecord[\'pubDate\']).\'</span> \';
  }
  // Description if desired
  if ((($mode == \'short\') && ($shortDesc)) || (($mode == \'full\') && ($fullDesc))){
   $output .= \'<span class="LIn_desc">\'.$recentRecord[\'description\'].\'</span>\';
  }
  // wrap it up
  $output .= \'</li>\' . $ie;
  $recentCounter ++;
}

$output .= \'</ul>\' . $ie;

$output .= ($pgPosition == \'bottom\' || $pgPosition == \'both\')? $pagination : \'\' ;

// ---------------------------------------------------
// Link to index
// ---------------------------------------------------

if ($linkToIndex) {

  $output .= \'<div class="LIn_index">\';
  $output .= \'<a href="[~\'.$linkToIndex.\'~]" title="\'.$indexText.\'">\'.$indexText.\'</a>\';
  $output .= \'</div>\';

}

// ---------------------------------------------------
// Send to browser
// ---------------------------------------------------

return $output;';
$s['MemberCheck'] = '#::::::::::::::::::::::::::::::::::::::::
# Snippet name: MemberCheck 
# Short Desc: checks logged in groups and displays a chunk
# Version: 1.0
# Created By Ryan Thrash (vertexworks.com)
# Sanitized By Jason Coward (opengeek.com)
#
# Date: November 29, 2005
#
# Changelog: 
# Nov 29, 05 -- initial release
# Jul 13, 06 -- adjusted Singleton to work under PHP4, added placeholder code (by: garryn)
#
#::::::::::::::::::::::::::::::::::::::::
# Description: 	
#	Checks to see if users belong to a certain group and 
#	displays the specified chunk if they do. Performs several
#	sanity checks and allows to be used multiple times on a page.
#
# Params:
#	&groups [array] (REQUIRED)
#		array of webuser group-names to check against
#
#	&chunk [string] (REQUIRED)
#		name of the chunk to use if passes the check
#
#	&ph [string] (optional)
#		name of the placeholder to set instead of directly retuning chunk
#
#	&debug [boolean] (optional | false) 
#		turn on debug mode for extra troubleshooting
#
# Example Usage:
#
#	[[MemberCheck? &groups=`siteadmin, registered users` &chunk=`privateSiteNav` &ph=`MemberMenu` &debug=`true`]]
#
#	This would place the \'members-only\' navigation store in the chunk \'privateSiteNav\'
#	into a placeholder (called \'MemberMenu\'). It will only do this as long as the user 
#	is logged in as a webuser and is a member of the \'siteadmin\' or the \'registered users\'
#	groups. The optional debug parameter can be used to display informative error messages 
#	when configuring this snippet for your site. For example, if the developer had 
#	mistakenly typed \'siteowners\' for the first group, and none existed with debug mode on, 
#	it would have returned the error message: The group siteowners could not be found....
#
#::::::::::::::::::::::::::::::::::::::::

# debug parameter
$debug = isset ($debug) ? $debug : false;

# check if inside manager
if ($m = $modx->insideManager()) {
	return \'\'; # don\'t go any further when inside manager
}

if (!isset ($groups)) {
	return $debug ? \'<p>Error: No Group Specified</p>\' : \'\';
}

if (!isset ($chunk)) {
	return $debug ? \'<p>Error: No Chunk Specified</p>\' : \'\';
}

# turn comma-delimited list of groups into an array
$groups = explode(\',\', $groups);

if (!class_exists(\'MemberCheck\')) {
	class MemberCheck {
		var $allGroups = NULL;
		var $debug;

		function getInstance($debug) {
			static $instance;
			if (!isset ($instance)) {
				$instance = new MemberCheck($debug);
			}
			return $instance;
		}

		function MemberCheck($debug = false) {
			global $modx;

			$this->debug = $debug;
			if ($debug) {
				$this->allGroups = array ();
				$tableName = $modx->getFullTableName(\'webgroup_names\');
				$sql = "SELECT name FROM $tableName";
				if ($rs = $modx->db->query($sql)) {
					while ($row = $modx->db->getRow($rs)) {
						array_push($this->allGroups, stripslashes($row[\'name\']));
					}
				}
			}
		}

		function isValidGroup($groupName) {
			$isValid = !(array_search($groupName, $this->allGroups) === false);
			return $isValid;
		}

		function getMemberChunk(& $groups, $chunk) {
			global $modx;
			$o = \'\';
			if (is_array($groups)) {
				for ($i = 0; $i < count($groups); $i++) {
					$groups[$i] = trim($groups[$i]);
					if ($this->debug) {
						if (!$this->isValidGroup($groups[$i])) {
							return "<p>The group <strong>" . $groups[$i] . "</strong> could not be found...</p>";
						}
					}
				}

				$check = $modx->isMemberOfWebGroup($groups);

				$chunkcheck = $modx->getChunk($chunk);

				$o .= ($check && $chunkcheck) ? $chunkcheck : \'\';
				if (!$chunkcheck)
					$o .= $this->debug ? "<p>The chunk <strong>$chunk</strong> not found...</p>" : \'\';
			} else {
				$o .= "<p>No valid group names were specified!</p>";
			}

			return $o;
		}
	}
}

$memberCheck = MemberCheck :: getInstance($debug);

if (!isset ($ph)) {
	return $memberCheck->getMemberChunk($groups, $chunk);
} else {
	$modx->setPlaceholder($ph, $memberCheck->getMemberChunk($groups, $chunk));
	return \'\';
}';
$s['NewsPublisher'] = '#::::::::::::::::::::::::::::::::::::::::
#
#  Snippet Name: NewsPublisher 
#  Short Desc: Create articles directly from front end (news, blogs, PR, etc.)
#  Created By: Raymond Irving (xwisdom@yahoo.com), August 2005
#
#  Version: 1.4
#  Modified: December 13, 2005
#
#  Changelog: 
#	 Mar 05, 06 -- modx_ prefix removed [Mark]
#    Dec 13, 05 -- Now inherrits web/manager docgroups thanks to Jared Carlow
#
#::::::::::::::::::::::::::::::::::::::::
#  Description: 	
#    Checks to see if users belong to a certain group and 
#    displays the specified chunk if they do. Performs several
#    sanity checks and allows to be used multiple times on a page.
#    Only meant to be used once per page.
#::::::::::::::::::::::::::::::::::::::::
#  
#  Parameters:
#    &folder      - folder id where comments are stored
#    &makefolder  - set to 1 to automatically convert the parent document to a folder. Defaults to 0
#    &postid      - document id to load after posting news item. Defaults to the page created
#    &canpost     - comma delimitted web groups that can post comments. leave blank for public posting
#    &badwords    - comma delimited list of words not allowed in post
#    &template    - name of template to use for news post
#    &headertpl   - header template (chunk name) to be inserted at the begining of the news content
#    &footertpl   - footer template (chunk name) to be inserted at the end of the news content
#    &formtpl     - form template (chunk name)
#    &rtcontent   - name of a richtext content form field 
#    &rtsummary   - name of a richtext summary form field 
#    &showinmenu  - sets the flag to true or false (1|0) as to whether or not it shows in the menu. defaults to false (0)
#    &aliastitle  - set to 1 to use page title as alias suffix. Defaults to 0 - date created.
#    &clearcache  - when set to 1 the system will automatically clear the site cache after publishing an article.
#  
#::::::::::::::::::::::::::::::::::::::::

// get user groups that can post articles
$postgrp = isset($canpost) ? explode(",",$canpost):array();
$allowAnyPost = count($postgrp)==0 ? true : false;

// get clear cache
$clearcache	 = isset($clearcache) ? 1:0;

// get alias title
$aliastitle	 = isset($aliastitle) ? 1:0;

// get folder id where we should store articles
// else store in current document
$folder = isset($folder) ? intval($folder):$modx->documentIdentifier;

// set rich text content field
$rtcontent = isset($rtcontent) ? $rtcontent:\'content\';

// set rich text summary field
$rtsummary = isset($rtsummary) ? $rtsummary:\'introtext\';

// get header
$header = isset($headertpl) ? "{{".$headertpl."}}":\'\';

// get footer
$footer = isset($footertpl) ? "{{".$footertpl."}}":\'\';

// get postback status
$isPostBack = isset($_POST[\'NewsPublisherForm\']) ? true:false;

// get badwords
if(isset($badwords)) {
    $badwords = str_replace(\' \',\'\', $badwords);
    $badwords = "/".str_replace(\',\',\'|\', $badwords)."/i";
}

// get menu status
$hidemenu = isset($showinmenu) && $showinmenu==1 ? 0 : 1;

// get template
$template = isset($template) ? $modx->db->getValue(\'SELECT id FROM \'.$modx->getFullTableName(\'site_templates\').\' WHERE templatename=\\\'\'.mysql_escape_string($template).\'\\\'\'):$modx->config[\'default_template\'];

$message = \'\';

// get form template
if(isset($formtpl)) $formTpl = $modx->getChunk($formtpl);
if(empty($formTpl)) $formTpl = \'
    <form name="NewsPublisher" method="post">
        <input name="NewsPublisherForm" type="hidden" value="on" />
        Page title:<br /><input name="pagetitle" type="text" size="40" value="[+pagetitle+]" /><br />
        Long title:<br /><input name="longtitle" type="text" size="40" value="[+longtitle+]" /><br />
        Description:<br /><input name="description" type="text" size="40" value="[+description+]" /><br />
        Published date:<br /><input name="pub_date" type="text" value="[+pub_date+]" size="40" readonly="readonly" />
        <a onClick="nwpub_cal1.popup();" onMouseover="window.status=\\\'Select date\\\'; return true;" onMouseout="window.status=\\\'\\\'; return true;" style="cursor:pointer; cursor:hand"><img align="absmiddle" src="manager/media/images/icons/cal.gif" width="16" height="16" border="0" alt="Select date" /></a>
        <a onClick="document.NewsPublisher.pub_date.value=\\\'\\\'; return true;" onMouseover="window.status=\\\'Remove date\\\'; return true;" onMouseout="window.status=\\\'\\\'; return true;" style="cursor:pointer; cursor:hand"><img align="absmiddle" src="manager/media/images/icons/cal_nodate.gif" width="16" height="16" border="0" alt="Remove date"></a><br />
        Unpublished date:<br /><input name="unpub_date" type="text" value="[+unpub_date+]" size="40" readonly="readonly" />
        <a onClick="nwpub_cal2.popup();" onMouseover="window.status=\\\'Select date\\\'; return true;" onMouseout="window.status=\\\'\\\'; return true;" style="cursor:pointer; cursor:hand"><img align="absmiddle" src="manager/media/images/icons/cal.gif" width="16" height="16" border="0" alt="Select date" /></a>
        <a onClick="document.NewsPublisher.unpub_date.value=\\\'\\\'; return true;" onMouseover="window.status=\\\'Remove date\\\'; return true;" onMouseout="window.status=\\\'\\\'; return true;" style="cursor:pointer; cursor:hand"><img align="absmiddle" src="manager/media/images/icons/cal_nodate.gif" width="16" height="16" border="0" alt="Remove date"></a><br />
        Summary:<br /><textarea name="introtext" cols="50" rows="5">[+introtext+]</textarea><br />
        Content:<br /><textarea name="content" cols="50" rows="8">[+content+]</textarea><br />
        <input name="send" type="submit" value="Submit" />
    </form>
    <script language="JavaScript" src="manager/media/script/datefunctions.js"></script>
    <script type="text/javascript">
        var elm_txt = {}; // dummy
        var pub = document.forms["NewsPublisher"].elements["pub_date"];
        var nwpub_cal1 = new calendar1(pub,elm_txt);
        nwpub_cal1.path="[(base_url)]manager/media/";
        nwpub_cal1.year_scroll = true;
        nwpub_cal1.time_comp = true;	

        var unpub = document.forms["NewsPublisher"].elements["unpub_date"];
        var nwpub_cal2 = new calendar1(unpub,elm_txt);
        nwpub_cal2.path="[(base_url)]manager/media/";
        nwpub_cal2.year_scroll = true;
        nwpub_cal2.time_comp = true;	
    </script>\';


// switch block
switch ($isPostBack) {
    case true:
        // process post back
        // remove magic quotes from POST
        if(get_magic_quotes_gpc()){
            $_POST = array_map("stripslashes", $_POST);
        }	
        if(trim($_POST[\'pagetitle\'])==\'\') $modx->webAlert(\'Missing page title.\');
        elseif($_POST[$rtcontent]==\'\') $modx->webAlert(\'Missing news content.\');
        else {
            // get created date
            $createdon = time();

            // set alias name of document used to store articles
            if(!$aliastitle) $alias = \'article-\'.$createdon;
            else {
                $alias = $modx->stripTags($_POST[\'pagetitle\']);
                $alias = strtolower($alias);
                $alias = preg_replace(\'/&.+?;/\', \'\', $alias); // kill entities
                $alias = preg_replace(\'/[^\\.%a-z0-9 _-]/\', \'\', $alias);
                $alias = preg_replace(\'/\\s+/\', \'-\', $alias);
                $alias = preg_replace(\'|-+|\', \'-\', $alias);
                $alias = trim($alias, \'-\');			
                $alias = \'article-\'.$modx->db->escape($alias);
            }

            $user = $modx->getLoginUserName();
            $userid = $modx->getLoginUserID();
            if(!$user && $allowAnyPost) $user = \'anonymous\';

            // check if user has rights
            if(!$allowAnyPost && !$modx->isMemberOfWebGroup($postgrp)) {
                return \'You are not allowed to publish articles\';
            }

            $allowedTags = \'<p><br><a><i><em><b><strong><pre><table><th><td><tr><img><span><div><h1><h2><h3><h4><h5><font><ul><ol><li><dl><dt><dd>\';

            // format content
            $content = $modx->stripTags($_POST[$rtcontent],$allowedTags);
            $content = str_replace(\'[+user+]\',$user,$content);
            $content = str_replace(\'[+createdon+]\',strftime(\'%d-%b-%Y %H:%M\',$createdon),$content);
            foreach($_POST as $n=>$v) {
                if(!empty($badwords)) $v = preg_replace($badwords,\'[Filtered]\',$v); // remove badwords
                $v = $modx->stripTags(htmlspecialchars($v));
                $v = str_replace("\\n",\'<br />\',$v);
                $content = str_replace(\'[+\'.$n.\'+]\',$v,$content);
            }

            $title = mysql_escape_string($modx->stripTags($_POST[\'pagetitle\']));
            $longtitle = mysql_escape_string($modx->stripTags($_POST[\'longtitle\']));
            $description = mysql_escape_string($modx->stripTags($_POST[\'description\']));
            $introtext = mysql_escape_string($modx->stripTags($_POST[$rtsummary],$allowedTags));
            $pub_date = $_POST[\'pub_date\'];
            $unpub_date = $_POST[\'unpub_date\'];
            $published = 1;

            // check published date
            if($pub_date=="") {
                $pub_date="0";
            } else {
                list($d, $m, $Y, $H, $M, $S) = sscanf($pub_date, "%2d-%2d-%4d %2d:%2d:%2d");
                $pub_date = strtotime("$m/$d/$Y $H:$M:$S");

                if($pub_date < $createdon) {
                    $published = 1;
                }    elseif($pub_date > $createdon) {
                    $published = 0;	
                }
            }

            // check unpublished date
            if($unpub_date=="") {
                $unpub_date="0";
            } else {
                list($d, $m, $Y, $H, $M, $S) = sscanf($unpub_date, "%2d-%2d-%4d %2d:%2d:%2d");
                $unpub_date = strtotime("$m/$d/$Y $H:$M:$S");
                if($unpub_date < $createdon) {
                    $published = 0;
                }
            }

            // set menu index
            $mnuidx = $modx->db->getValue(\'SELECT MAX(menuindex)+1 as \\\'mnuidx\\\' FROM \'.$modx->getFullTableName(\'site_content\').\' WHERE parent=\\\'\'.$folder.\'\\\'\');
            if($mnuidx<1) $mnuidx = 0;

            // post news content
            $flds = array(
                \'pagetitle\'     => $title,
                \'longtitle\'     => $longtitle,
                \'description\' => $description,
                \'introtext\'     => $introtext,
                \'alias\'             => $alias,
                \'parent\'            => $folder, 
                \'createdon\'     => $createdon,
                \'createdby\'     => ($userid>0 ? $userid * -1:0),
                \'editedon\'        => \'0\',
                \'editedby\'        => \'0\',
                \'published\'     => $published,
                \'pub_date\'        => $pub_date,
                \'unpub_date\'    => $unpub_date,
                \'deleted\'         => \'0\',
                \'hidemenu\'        => $hidemenu,
                \'menuindex\'     => $mnuidx,
                \'template\'        => $template,
                \'content\'         => mysql_escape_string($header.$content.$footer)
            );
            $redirectid = $modx->db->insert($flds,$modx->getFullTableName(\'site_content\'));

            // Doc group thing
            // look in save_content.processor.php for tips (or below)
            $lastInsertId = $modx->db->getInsertId();

            // Get doc groups based on $folder (parent id)
            $parentDocGroupsSql = "SELECT * FROM " . $modx->getFullTableName(\'document_groups\'). " where document=".$folder;
            $parentDocGroupsRs = $modx->db->query($parentDocGroupsSql);
            $parentDocGroupsLimit = $modx->db->getRecordCount($parentDocGroupsRs);
            for ($pdgi = 0; $pdgi < $parentDocGroupsLimit; $pdgi++) { 
                $currentDocGroup = $modx->db->getRow($parentDocGroupsRs);
                $parentDocGroupsArray[$pdgi] = $currentDocGroup[\'document_group\'];
            }

            // put the document in the document_groups it should be in
            // check that up_perms are switched on!
            if($modx->config[\'use_udperms\']==1) {
                if(is_array($parentDocGroupsArray)) {
                    foreach ($parentDocGroupsArray as $dgKey=>$dgValue) {
                        $insertDocSql = "INSERT INTO ".$modx->getFullTableName(\'document_groups\')."(document_group, document) values(".stripslashes($dgValue).", $lastInsertId)";
                        $insertDocRs = $modx->db->query($insertDocSql);
                        if(!$insertDocRs){
                            exit;
                        }
                    } // end foreach
                } // end if doc group array exists
            } // end if perms are used

            // Handle privateweb
            $modx->db->query("UPDATE ".$modx->getFullTableName("site_content")." SET privateweb = 0 WHERE id=\'$lastInsertId\';");
            $privatewebSql =    "
                SELECT DISTINCT ".$modx->getFullTableName(\'document_groups\').".document_group 
                FROM ".$modx->getFullTableName(\'document_groups\').", ".$modx->getFullTableName(\'webgroup_access\')." 
                WHERE 
                ".$modx->getFullTableName(\'document_groups\').".document_group = ".$modx->getFullTableName(\'webgroup_access\').".documentgroup 
                AND 
                ".$modx->getFullTableName(\'document_groups\').".document = $lastInsertId;";
                $privatewebIds = $modx->db->getColumn("document_group",$privatewebSql);
                if(count($privatewebIds)>0) {
                    $modx->db->query("UPDATE ".$modx->getFullTableName("site_content")." SET privateweb = 1 WHERE id = $lastInsertId;");	
                }

                // And privatemgr
                $modx->db->query("UPDATE ".$modx->getFullTableName("site_content")." SET privatemgr = 0 WHERE id=\'$lastInsertId\';");
                $privatemgrSql =    "
                    SELECT DISTINCT ".$modx->getFullTableName(\'document_groups\').".document_group 
                    FROM ".$modx->getFullTableName(\'document_groups\').", ".$modx->getFullTableName(\'membergroup_access\')." 
                    WHERE 
                    ".$modx->getFullTableName(\'document_groups\').".document_group = ".$modx->getFullTableName(\'membergroup_access\')." .documentgroup 
                    AND 
                    ".$modx->getFullTableName(\'document_groups\').".document = $lastInsertId;";
                    $privatemgrIds = $modx->db->getColumn("document_group",$privatemgrSql);
                    if(count($privatemgrIds)>0) {
                        $modx->db->query("UPDATE ".$modx->getFullTableName("site_content")." SET privatemgr = 1 WHERE id = $lastInsertId;");	
                    }
            // end of document_groups stuff!

            if(!empty($makefolder)) {
                // convert parent into folder
                $modx->db->update(array(\'isfolder\'=>\'1\'),$modx->getFullTableName(\'site_content\'),\'id=\\\'\'.$folder.\'\\\'\');
            }

            // empty cache
            if($clearcache==1){
                include_once $modx->config[\'base_path\']."manager/processors/cache_sync.class.processor.php";
                $sync = new synccache();
                $sync->setCachepath("assets/cache/");
                $sync->setReport(false);
                $sync->emptyCache(); // first empty the cache		
            }

            // get redirect/post id
            $redirectid = $modx->db->getValue(\'SELECT id as \\\'redirectid\\\' FROM \'.$modx->getFullTableName(\'site_content\').\' WHERE createdon=\\\'\'.$createdon.\'\\\'\');
            $postid = isset($postid) ? $postid:$redirectid;

            // redirect to post id
            $modx->sendRedirect($modx->makeUrl($postid));
        }

    default: 
        // display news form
        // check if user has rights to post comments
        if(!$allowAnyPost && !$modx->isMemberOfWebGroup($postgrp)) {
            $formTpl = \'\';
        } else {
            foreach($_POST as $n=>$v) {
                $formTpl = str_replace(\'[+\'.$n.\'+]\',$v,$formTpl);
            }
        }
        // return form
        return $message.$formTpl;
        break;
}';
$s['Personalize'] = '#::::::::::::::::::::::::::::::::::::::::
# Snippet Name: Personalize 
# Short Desc: calls a chunk if the user is logged in, otherwise calls another
# Version: 2.0
# Created By: 	Ryan Thrash (modx@vertexworks.com), and then
#		powered up by kudo (kudo@kudolink.com)
#
# Date: Aug 03, 2006
#
# Changelog: 
# Dec 01, 05 -- initial release
# Jun 19, 06 -- updated description
# Jul 19, 06 -- hacked by kudo to output chunks
# Aug 03, 06 -- added placeholder for username
#
#::::::::::::::::::::::::::::::::::::::::
# Description: 	
#	Checks to see if webusers are logged in and displays yesChunk if the user
#	is logged or noChunk if user is not logged. Insert only the chunk name as
#	param, without {{}}. Can use a placeholder to output the username.
#	TESTED: can be used more than once per page.
#	TESTED: chunks can contain snippets.
#	
#	
# Params:
#	&yesChunk [string] [REQUIRED]
#		Output for LOGGED users
#
#	&noChunk [string] [REQUIRED] 
#		Output for NOT logged users
#
#	&ph [string] (optional) 
#		Placeholder for placing the username
#		ATTENTION!: place this ph only in yesChunk!
#	
#
# Example Usage:
#
#	[[LoggedOrNot? &yesChunk=`Link` &noChunk=`Register` &ph=`name`]]
#
#	Having Chunks named {{Link}} and another {{Register}}, the first will be
#	published to registered user, the second to non-registered users.
#
#::::::::::::::::::::::::::::::::::::::::

# prepare params and variables
$o = \'\';
$yesChunk = (isset($yesChunk))? $yesChunk : \'\';
$noChunk = (isset($noChunk))? $noChunk : \'\';

# do the work
$test = $modx->getLoginUserName();
if ($test) {
    $o = $modx->getChunk($yesChunk);
  } else {
    $o = $modx->getChunk($noChunk);
}

if (isset($ph)) {
	$modx->setPlaceholder($ph,$test);
	return $o;
} else {
	return $o;
}
';
$s['Reflect'] = '/*
 * Title: Reflect Snippet
 * 
 * Description: 
 * 		Generates date based archives using Ditto
 * 
 * Author: 
 * 		Mark Kaplan for MODx CMF
 * 
 * Version: 
 * 		1.0.2
 * 
 * Note: 
 * 		 If Reflect is not retrieving its own documents, make sure that the
 *		 Ditto call feeding it has all of the fields in it that you plan on
 *       calling in your Reflect template. Furthermore, Reflect will ONLY
 * 		 show what is currently in the Ditto result set.
 *       Thus, if pagination is on it will ONLY show that page\'s items.
*/
 
// ---------------------------------------------------
//  Includes
// ---------------------------------------------------

$reflect_base = isset($reflect_base) ? $modx->config[\'base_path\'].$reflect_base : $modx->config[\'base_path\']."assets/snippets/reflect/";
/*
	Param: ditto_base
	
	Purpose:
	Location of Ditto files

	Options:
	Any valid folder location containing the Ditto source code with a trailing slash

	Default:
	[(base_path)]assets/snippets/ditto/
*/

$config = (isset($config)) ? $config : "default";
/*
	Param: config

	Purpose:
 	Load a custom configuration

	Options:
	"default" - default blank config file
	CONFIG_NAME - Other configs installed in the configs folder or in any folder within the MODx base path via @FILE

	Default:
	"default"
	
	Related:
	- <extenders>
*/

require((substr($config, 0, 5) != "@FILE") ? $reflect_base."configs/$config.config.php" : $modx->config[\'base_path\'].trim(substr($config, 5)));



// ---------------------------------------------------
//  Parameters
// ---------------------------------------------------

$id = isset($id) ? $id."_" : false;
/*
	Param: id
	
	Purpose:
	Unique ID for this Ditto instance for connection with other scripts (like Reflect) and unique URL parameters

	Options:
	Any valid folder location containing the Ditto source code with a trailing slash

	Default:
	"" - blank
*/
$getDocuments = isset($getDocuments) ? $getDocuments : 0;
/*
	Param: getDocuments

	Purpose:
 	Force Reflect to get documents

	Options:
	0 - off
	1 - on
	
	Default:
	0 - off
*/
$showItems = isset($showItems) ? $showItems : 1;
/*
	Param: showItems

	Purpose:
 	Show individual items in the archive

	Options:
	0 - off
	1 - on
	
	Default:
	1 - on
*/
$groupByYears = isset($groupByYears)? $groupByYears : 1;
/*
	Param: groupByYears

	Purpose:
 	Group the archive by years

	Options:
	0 - off
	1 - on
	
	Default:
	1 - on
*/
$targetID = isset($targetID) ? $targetID : $modx->documentObject[\'id\'];
/*
	Param: targetID

	Purpose:
 	ID for archive links to point to

	Options:
	Any MODx document with a Ditto call setup with extenders=`dateFilter`
	
	Default:
	Current MODx Document
*/
$dateSource = isset($dateSource) ? $dateSource : "createdon";
/*
	Param: dateSource

	Purpose:
	Date source to display for archive items

	Options:
	# - Any UNIX timestamp from MODx fields or TVs such as createdon, pub_date, or editedon
	
	Default:
	"createdon"
	
	Related:
	- <dateFormat>
*/
$dateFormat = isset($dateFormat) ? $dateFormat : "%d-%b-%y %H:%M";	
/*
	Param: dateFormat
	
	Purpose:
	Format the [+date+] placeholder in human readable form

	Options:
	Any PHP valid strftime option

	Default:
	"%d-%b-%y %H:%M"
	
	Related:
	- <dateSource>
*/
$yearSortDir = isset($yearSortDir) ? $yearSortDir : "DESC";
/*
	Param: yearSortDir

	Purpose:
 	Direction to sort documents

	Options:
	ASC - ascending
	DESC - descending

	Default:
	"DESC"
	
	Related:
	- <monthSortDir>
*/
$monthSortDir = isset($monthSortDir) ? $monthSortDir : "ASC";
/*
	Param: monthSortDir

	Purpose:
 	Direction to sort the months

	Options:
	ASC - ascending
	DESC - descending

	Default:
	"ASC"
	
	Related:
	- <yearSortDir>
*/
$start = isset($start)? intval($start) : 0;
/*
	Param: start

	Purpose:
 	Number of documents to skip in the results

	Options:
	Any number

	Default:
	0
*/	
$phx = (isset($phx))? $phx : 1;
/*
	Param: phx

	Purpose:
 	Use PHx formatting

	Options:
	0 - off
	1 - on
	
	Default:
	1 - on
*/

// ---------------------------------------------------
//  Default Templates
// ---------------------------------------------------

$defaultTemplates[\'tpl\'] = <<<TPL
<h3>Archives</h3>
<div class="reflect_archive_list">
	[+archive_items+]
</div>
TPL;

$defaultTemplates[\'year\'] = <<<TPL
<a href="[+url+]" title="[+year+]" class="reflect_year_link">[+year+]</a>
TPL;

$defaultTemplates[\'month\'] = <<<TPL
<a href="[+url+]" title="[+month+] [+year+]" class="reflect_month_link">[+month+]</a>
TPL;

$defaultTemplates[\'item\'] = <<<TPL
<a href="[~[+id+]~]" title="[+pagetitle+]" class="reflect_item_link">[+pagetitle+]</a> (<span class="reflect_date">[+date+]</span>)
TPL;

// ---------------------------------------------------
//  Initialize Ditto
// ---------------------------------------------------
$placeholder = ($id != false && $getDocuments == 0) ? true : false;
if ($placeholder === false) {
	$rID = "reflect_".rand(1,1000);
	$itemTemplate = isset($tplItem) ? $tplItem: "@CODE:".$defaultTemplates[\'item\'];
	$dParams = array(
		"id" => "$rID",
		"save" => "3",	
		"summarize" => "all",
		"dateFormat" => $dateFormat,
		"dateSource" => $dateSource,
		"tpl" => $itemTemplate,
	);

	if (isset($dittoSnippetParameters)) {
		$givenParams = explode("|",$dittoSnippetParameters);

		foreach ($givenParams as $parameter) {
			$p = explode(":",$parameter);
			$dParams[$p[0]] = $p[1];
		}
	}
	/*
		Param: dittoSnippetParameters

		Purpose:
	 	Pass parameters to the Ditto instance used to retreive the documents
	
		Options:
		Any valid ditto parameters in the format name:value 
		with multiple parameters separated by a pipe (|)

		Default:
		[NULL]
	*/
	$dittoSnippetName = isset($dittoSnippetName) ? $dittoSnippetName : "Ditto";
	/*
		Param: dittoSnippetName

		Purpose:
		Name of the Ditto snippet to use

		Options:
		Any valid snippet name

		Default:
		"Ditto"
	*/
	$modx->runSnippet($dittoSnippetName,$dParams);
	$ditto = $modx->getPlaceholder($rID."_ditto_object");
	$resource = $modx->getPlaceholder($rID."_ditto_resource");
} else {
	$ditto = $modx->getPlaceholder($id."ditto_object");
	$resource = $modx->getPlaceholder($id."ditto_resource");
}

if (!is_object($ditto) || !isset($ditto) || !isset($resource)) {
	return "The Ditto object is invalid. Please check it.";
}

// ---------------------------------------------------
//  Templates
// ---------------------------------------------------

$templates[\'tpl\'] = isset($tplContainer) ? $ditto->template->fetch($tplContainer): $defaultTemplates[\'tpl\'];
/*
	Param: tplContainer

	Purpose:
	Container template for the archive

	Options:
	- Any valid chunk name
	- Code via @CODE:
	- File via @FILE:

	Default:
	(code)
	<h3>Archives</h3>
	<div class="reflect_archive_list">
		[+archive_items+]
	</div>
*/
$templates[\'year\'] = isset($tplYear) ? $ditto->template->fetch($tplYear): $defaultTemplates[\'year\'];
/*
	Param: tplYear

	Purpose:
	Template for the year item (inside of li)

	Options:
	- Any valid chunk name
	- Code via @CODE:
	- File via @FILE:

	Default:
	(code)
	<a href="[+url+]" title="[+year+]" class="reflect_year_link">[+year+]</a>
*/
$templates[\'month\'] = isset($tplMonth) ? $ditto->template->fetch($tplMonth): $defaultTemplates[\'month\'];
/*
	Param: tplMonth

	Purpose:
	Template for the month item (inside of li)

	Options:
	- Any valid chunk name
	- Code via @CODE:
	- File via @FILE:

	Default:
	(code)
	<a href="[+url+]" title="[+month+] [+year+]" class="reflect_month_link">[+month+]</a>
*/
$templates[\'item\'] = isset($tplItem) ? $ditto->template->fetch($tplItem): $defaultTemplates[\'item\'];
/*
	Param: tplItem

	Purpose:
	Template for the individual item (inside of li)

	Options:
	- Any valid chunk name
	- Code via @CODE:
	- File via @FILE:

	Default:
	(code)
	<a href="[~[+id+]~]" title="[+pagetitle+]" class="reflect_item_link">[+pagetitle+]</a> (<span class="reflect_date">[+date+]</span>)
*/

$ditto->addField("date","display","custom");
	// force add the date field if receiving data from a Ditto instance

// ---------------------------------------------------
//  Reflect
// ---------------------------------------------------
if (function_exists("reflect") === FALSE) {
function reflect($archiveDocumentID, $showItems, $groupByYears, $resource, $archiveDateSource, $dateFormat, $ditto, $archive,$id,$start,$yearSortDir,$monthSortDir) {
	global $modx;
	$cal = array();
	$output = \'\';
	$build = array();
	$stop = count($resource);

	// loop and fetch all the results
	for ($i = $start; $i < $stop; $i++) {
		$date = getdate($resource[$i][$archiveDateSource]);
		$year = $date["year"];
		$month = $date["mon"];
		$cal[$year][$month][] = $resource[$i];
	}
	if ($yearSortDir == "DESC") {
	krsort($cal);
	} else {
		ksort($cal);
	}
	foreach ($cal as $year=>$months) {
		if ($monthSortDir == "ASC") {
		ksort($months);
		} else {
			krsort($months);
		}
		$build[$year] = $months;
	}
	$output .= \'<ul class="reflect_archive">\';
	foreach ($build as $year=>$months) {
		$year_url = $ditto->buildURL("year=".$year."&month=false&day=false&start=0",$archiveDocumentID,$id);
		if ($groupByYears) $output .=  \'<li class="reflect_year">\'.str_replace(array("[+year+]","[+url+]"),array($year,$year_url),$archive[\'year\'])."\\n\\n";	
		foreach ($months as $mon=>$month) {
			$month_text = $ditto->formatDate(mktime(10, 10, 10, $mon, 10, $year),"%B");
			$month_url = $ditto->buildURL("month=".$mon."&year=".$year."&day=false&start=0",$archiveDocumentID,$id);
			if ($groupByYears) $output .=  \'<ul>\';
			$output .= \'<li class="reflect_month">\'.str_replace(array("[+year+]","[+month+]","[+url+]"),array($year,$month_text,$month_url),$archive[\'month\'])."\\n";
			if ($showItems) {
				$output .=  \'<ul class="reflect_items">\'."\\n";
				foreach ($month as $resource) {
					$output .=  \'<li class="reflect_item">\'.$ditto->render($resource, $archive[\'item\'], false, $archiveDateSource, $dateFormat, array(),$phx).\'</li>\';
				}
				$output .= \'</ul>\';
			}
			$output .= \'</li>\';
			if ($groupByYears) $output .= \'</ul>\';
		}
		if ($groupByYears) $output .= \'</li>\';
	}
	$output .= \'</ul>\';
return str_replace("[+archive_items+]",$output, $archive[\'tpl\']);
	
}
}

return reflect($targetID, $showItems, $groupByYears, $resource, $dateSource, $dateFormat, $ditto, $templates,$id,$start,$yearSortDir,$monthSortDir);';
$s['UltimateParent'] = '/**
 * @name UltimateParent
 * @version 2.0 beta (requires MODx 0.9.5+)
 * @author Jason Coward <modx@opengeek.com>
 * 
 * @param &id The id of the document whose parent you want to find.
 * @param &top The top node for the search.
 * @param &topLevel The top level node for the search (root = level 1)
 * 
 * @license Public Domain, use as you like.
 * 
 * @example [[UltimateParent? &id=`45` &top=`6`]] 
 * Will find the ultimate parent of document 45 if it is a child of document 6;
 * otherwise it will return 45.
 * 
 * @example [[UltimateParent? &topLevel=`2`]]
 * Will find the ultimate parent of the current document at a depth of 2 levels
 * in the document hierarchy, with the root level being level 1.
 * 
 * This snippet travels up the document tree from a specified document and
 * returns the "ultimate" parent.  Version 2.0 was rewritten to use the new
 * getParentIds function features available only in MODx 0.9.5 or later.
 * 
 * Based on the original UltimateParent 1.x snippet by Susan Ottwell
 * <sottwell@sottwell.com>.  The topLevel parameter was introduced by staed and
 * adopted here.
 */
$top= isset ($top) && intval($top) ? $top : 0;
$id= isset ($id) && intval($id) ? intval($id) : $modx->documentIdentifier;
$topLevel= isset ($topLevel) && intval($topLevel) ? intval($topLevel) : 0;
if ($id && $id != $top) {
    $pid= $id;
    if (!$topLevel || count($modx->getParentIds($id)) >= $topLevel) {
        while ($parentIds= $modx->getParentIds($id, 1)) {
            $pid= array_pop($parentIds);
            if ($pid == $top) {
                break;
            }
            $id= $pid;
            if ($topLevel && count($modx->getParentIds($id)) < $topLevel) {
                break;
            }
        }
    }
}
return $id;';
$s['Wayfinder'] = '/*
::::::::::::::::::::::::::::::::::::::::
 Snippet name: Wayfinder
 Short Desc: builds site navigation
 Version: 2.0
 Authors: 
	Kyle Jaebker (muddydogpaws.com)
	Ryan Thrash (vertexworks.com)
 Date: February 27, 2006
::::::::::::::::::::::::::::::::::::::::
Description:
    Totally refactored from original DropMenu nav builder to make it easier to
    create custom navigation by using chunks as output templates. By using templates,
    many of the paramaters are no longer needed for flexible output including tables,
    unordered- or ordered-lists (ULs or OLs), definition lists (DLs) or in any other
    format you desire.
::::::::::::::::::::::::::::::::::::::::
Example Usage:
    [[Wayfinder? &startId=`0`]]
::::::::::::::::::::::::::::::::::::::::
*/

$wayfinder_base = $modx->config[\'base_path\']."assets/snippets/wayfinder/";

//Include a custom config file if specified
$config = (isset($config)) ? "{$wayfinder_base}configs/{$config}.config.php" : "{$wayfinder_base}configs/default.config.php";
if (file_exists($config)) {
	include_once("$config");
}

include_once("{$wayfinder_base}wayfinder.inc.php");

if (class_exists(\'Wayfinder\')) {
   $wf = new Wayfinder();
} else {
    return \'error: Wayfinder class not found\';
}

$wf->_config = array(
	\'id\' => isset($startId) ? $startId : $modx->documentIdentifier,
	\'level\' => isset($level) ? $level : 0,
	\'includeDocs\' => isset($includeDocs) ? $includeDocs : 0,
	\'excludeDocs\' => isset($excludeDocs) ? $excludeDocs : 0,
	\'ph\' => isset($ph) ? $ph : FALSE,
	\'debug\' => isset($debug) ? TRUE : FALSE,
	\'ignoreHidden\' => isset($ignoreHidden) ? $ignoreHidden : FALSE,
	\'hideSubMenus\' => isset($hideSubMenus) ? $hideSubMenus : FALSE,
	\'useWeblinkUrl\' => isset($useWeblinkUrl) ? $useWeblinkUrl : TRUE,
	\'fullLink\' => isset($fullLink) ? $fullLink : FALSE,
	\'nl\' => isset($removeNewLines) ? \'\' : "\\n",
	\'sortOrder\' => isset($sortOrder) ? strtoupper($sortOrder) : \'ASC\',
	\'sortBy\' => isset($sortBy) ? $sortBy : \'menuindex\',
	\'limit\' => isset($limit) ? $limit : 0,
	\'cssTpl\' => isset($cssTpl) ? $cssTpl : FALSE,
	\'jsTpl\' => isset($jsTpl) ? $jsTpl : FALSE,
	\'rowIdPrefix\' => isset($rowIdPrefix) ? $rowIdPrefix : FALSE,
	\'textOfLinks\' => isset($textOfLinks) ? $textOfLinks : \'menutitle\',
	\'titleOfLinks\' => isset($titleOfLinks) ? $titleOfLinks : \'pagetitle\',
	\'displayStart\' => isset($displayStart) ? $displayStart : FALSE,
);

//get user class definitions
$wf->_css = array(
	\'first\' => isset($firstClass) ? $firstClass : \'\',
	\'last\' => isset($lastClass) ? $lastClass : \'last\',
	\'here\' => isset($hereClass) ? $hereClass : \'active\',
	\'parent\' => isset($parentClass) ? $parentClass : \'\',
	\'row\' => isset($rowClass) ? $rowClass : \'\',
	\'outer\' => isset($outerClass) ? $outerClass : \'\',
	\'inner\' => isset($innerClass) ? $innerClass : \'\',
	\'level\' => isset($levelClass) ? $levelClass: \'\',
	\'self\' => isset($selfClass) ? $selfClass : \'\',
	\'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\',
);

//get user templates
$wf->_templates = array(
	\'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
	\'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
	\'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
	\'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
	\'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
	\'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
	\'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
	\'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
	\'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
	\'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
	\'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\',
);

//Process Wayfinder
$output = $wf->run();

if ($wf->_config[\'debug\']) {
	$output .= $wf->renderDebugOutput();
}

//Ouput Results
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}';
$s['WebChangePwd'] = '# WebChangePwd 1.0
# Created By Raymond Irving April, 2005
#::::::::::::::::::::::::::::::::::::::::
# Usage: 	
#	Allows a web user to change his/her password from the website
#
# Params:	
#
#	&tpl			- (Optional)
#		Chunk name or document id to use as a template
#				  
#	Note: Templats design:
#			section 1: change pwd template
#			section 2: notification template 
#
# Examples:
#
#	[[WebChangePwd? &tpl=`ChangePwd`]] 

# Set Snippet Paths 
$snipPath  = (($modx->insideManager())? "../":"");
$snipPath .= "assets/snippets/";

# check if inside manager
if ($m = $modx->insideManager()) {
	return \'\'; # don\'t go any further when inside manager
}


# Snippet customize settings
$tpl		= isset($tpl)? $tpl:"";

# System settings
$isPostBack		= count($_POST) && isset($_POST[\'cmdwebchngpwd\']);

# Start processing
include_once $snipPath."weblogin/weblogin.common.inc.php";
include_once $snipPath."weblogin/webchangepwd.inc.php";

# Return
return $output;



';
$s['WebChangePwdProps'] = '&tpl=Template;string; ';
$s['WebLogin'] = '# WebLogin 1.0
# Created By Raymond Irving 2004
#::::::::::::::::::::::::::::::::::::::::
# Usage: 	
#	Allows a web user to login to the website
#
# Params:	
#	&loginhomeid 	- (Optional)
#		redirects the user to first authorized page in the list.
#		If no id was specified then the login home page id or 
#		the current document id will be used
#
#	&logouthomeid 	- (Optional)
#		document id to load when user logs out	
#
#	&pwdreqid 	- (Optional)
#		document id to load after the user has submited
#		a request for a new password
#
#	&pwdactid 	- (Optional)
#		document id to load when the after the user has activated
#		their new password
#
#	&logintext		- (Optional) 
#		Text to be displayed inside login button (for built-in form)
#
#	&logouttext 	- (Optional)
#		Text to be displayed inside logout link (for built-in form)
#	
#	&tpl			- (Optional)
#		Chunk name or document id to as a template
#				  
#	Note: Templats design:
#			section 1: login template
#			section 2: logout template 
#			section 3: password reminder template 
#
#			See weblogin.tpl for more information
#
# Examples:
#
#	[[WebLogin? &loginhomeid=`8` &logouthomeid=`1`]] 
#
#	[[WebLogin? &loginhomeid=`8,18,7,5` &tpl=`Login`]] 

# Set Snippet Paths 
$snipPath = $modx->config[\'base_path\'] . "assets/snippets/";

# check if inside manager
if ($m = $modx->insideManager()) {
	return \'\'; # don\'t go any further when inside manager
}

# deprecated params - only for backward compatibility
if(isset($loginid)) $loginhomeid=$loginid;
if(isset($logoutid)) $logouthomeid = $logoutid;
if(isset($template)) $tpl = $template;

# Snippet customize settings
$liHomeId	= isset($loginhomeid)? explode(",",$loginhomeid):array($modx->config[\'login_home\'],$modx->documentIdentifier);
$loHomeId	= isset($logouthomeid)? $logouthomeid:$modx->documentIdentifier;
$pwdReqId	= isset($pwdreqid)? $pwdreqid:0;
$pwdActId	= isset($pwdactid)? $pwdactid:0;
$loginText	= isset($logintext)? $logintext:\'Login\';
$logoutText	= isset($logouttext)? $logouttext:\'Logout\';
$tpl		= isset($tpl)? $tpl:"";

# System settings
$webLoginMode = isset($_REQUEST[\'webloginmode\'])? $_REQUEST[\'webloginmode\']: \'\';
$isLogOut		= $webLoginMode==\'lo\' ? 1:0;
$isPWDActivate	= $webLoginMode==\'actp\' ? 1:0;
$isPostBack		= count($_POST) && (isset($_POST[\'cmdweblogin\']) || isset($_POST[\'cmdweblogin_x\']));
$txtPwdRem 		= isset($_REQUEST[\'txtpwdrem\'])? $_REQUEST[\'txtpwdrem\']: 0;
$isPWDReminder	= $isPostBack && $txtPwdRem==\'1\' ? 1:0;

$site_id = isset($site_id)? $site_id: \'\';
$cookieKey = substr(md5($site_id."Web-User"),0,15);

# Start processing
include_once $snipPath."weblogin/weblogin.common.inc.php";
include_once ($modx->config[\'base_path\'] . "manager/includes/crypt.class.inc.php");

if ($isPWDActivate || $isPWDReminder || $isLogOut || $isPostBack) {
	# include the logger class
	include_once $modx->config[\'base_path\'] . "manager/includes/log.class.inc.php";
	include_once $snipPath."weblogin/weblogin.processor.inc.php";
}

include_once $snipPath."weblogin/weblogin.inc.php";

# Return
return $output;
';
$s['WebLoginProps'] = '&loginhomeid=Login Home Id;string; &logouthomeid=Logout Home Id;string; &logintext=Login Button Text;string; &logouttext=Logout Button Text;string; &tpl=Template;string; ';
$s['WebSignup'] = '# WebSignup 1.1
# Created By Raymond Irving April, 2005
#::::::::::::::::::::::::::::::::::::::::
# Usage:     
#    Allows a web user to signup for a new web account from the website
#    This snippet provides a basic set of form fields for the signup form
#    You can customize this snippet to create your own signup form
#
# Params:    
#
#    &tpl        - (Optional) Chunk name or document id to use as a template
#    &groups     - Web users groups to be assigned to users
#    &useCaptcha - (Optional) Determine to use (1) or not to use (0) captcha
#                  on signup form - if not defined, will default to system
#                  setting. GD is required for this feature. If GD is not 
#                  available, useCaptcha will automatically be set to false;
#                  
#    Note: Templats design:
#        section 1: signup template
#        section 2: notification template 
#
# Examples:
#
#    [[WebSignup? &tpl=`SignupForm` &groups=`NewsReaders,WebUsers`]] 

# Set Snippet Paths 
$snipPath = $modx->config[\'base_path\'] . "assets/snippets/";

# check if inside manager
if ($m = $modx->insideManager()) {
    return \'\'; # don\'t go any further when inside manager
}


# Snippet customize settings
$tpl = isset($tpl)? $tpl:"";
$useCaptcha = isset($useCaptcha)? $useCaptcha : $modx->config[\'use_captcha\'] ;
// Override captcha if no GD
if ($useCaptcha && !gd_info()) $useCaptcha = 0;

# setup web groups
$groups = isset($groups) ? explode(\',\',$groups):array();
for($i=0;$i<count($groups);$i++) $groups[$i] = trim($groups[$i]);

# System settings
$isPostBack        = count($_POST) && isset($_POST[\'cmdwebsignup\']);

$output = \'\';

# Start processing
include_once $snipPath."weblogin/weblogin.common.inc.php";
include_once $snipPath."weblogin/websignup.inc.php";

# Return
return $output;';
$s['WebSignupProps'] = '&tpl=Template;string; ';
$s['CurrentYear'] = '
// CopyYears - snippet for MODx
// Automatically updating copyright date
// License GPL
// Written 04-2006 by scraf

// &startYear - first year of notice
//              defaults to current year
// [!CopyYears?startYear=`2005`!]
// will display 2005 - 2006 or 2005 - 2007, whatever the current year is.

$spacer = " - ";
$now = date("Y");
$startYear = isset($startYear)? $startYear : $now;
$years = ($now > $startYear) ? $startYear.$spacer.$now : $now;
return "$years";
';
$p = &$this->pluginCache;
$p['Bottom Button Bar'] = '/* BottomButtonBar v1.0 (by Mitch)
 *
 * I just got tired of scrolling up after editing a document/snippet/etc... 
 * to save it. The GoUp plugin improved it a bit, but I was not completely 
 * satisfied. So I wrote this plugin that will add the complete buttonbar 
 * at the bottom of the edit screen. Also there is a GoUp link in the bottombar.
 *
 * To use the plugin you have to enable the following events:
 *
 *   OnChunkFormRender
 *   OnDocFormRender
 *   OnModFormRender
 *   OnPluginFormRender
 *   OnSnipFormRender
 *   OnTVFormRender
 *   OnTempFormRender
 *   OnUserFormRender
 *   OnWUsrFormRender
 *
 * Hope you like it as much as I do.
 * 
 */


// I know the code looks messy, but that is mainly because of the copy/pasting.

// Load the language file
include $modx->config[\'base_path\'].\'manager/includes/lang/\'.$modx->config[\'manager_language\'].\'.inc.php\';

//Get Manager Theme - added by garryn
$manager_theme = $modx->config[\'manager_theme\'] ? $modx->config[\'manager_theme\'] : \'\';

// Get a reference to the event
$e = & $modx->Event;

// For every form basicially the code is just copied from the appropriate
// mutate_XXXXXX.dynamic.action.php file. Then the CSS id\'s are updated so they
// are unique. I just added __ after it.

switch ($e->name) {

//-------------------------------------------------------------------
   case "OnDocFormRender":

// From mutate_content.dynamic.action.php
ob_start();
?>
<div class="subTitle" style="width:100%">
	<span class="right"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/_tx_.gif" width="1" height="5" /><br />"<a href=\'javascript:scroll(0,0);\'><?php echo $_lang[\'scroll_up\']; ?></a>"</span>

	<table cellpadding="0" cellspacing="0" class="actionButtons">
		<tr>
			<td id="Button1__"><a href="#" onclick="documentDirty=false; document.mutate.save.click();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/save.gif" align="absmiddle" /> <?php echo $_lang[\'save\']; ?></a></td>
			<td id="Button2__"><a href="#" onclick="deletedocument();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/delete.gif" align="absmiddle" /> <?php echo $_lang[\'delete\']; ?></span></a></td>
				<?php if($_REQUEST[\'a\']==\'4\' || $_REQUEST[\'a\']==72) { ?><script>document.getElementById("Button2__").className=\'disabled\';</script><?php } ?>
			<td id="Button5__"><a href="<?php echo $id==0 ? "index.php?a=2" : "index.php?a=3&id=$id"; ?>"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/cancel.gif" align="absmiddle" /> <?php echo $_lang[\'cancel\']; ?></a></td>
		</tr>
	</table>
</div>
<?php
$output = ob_get_clean();
    break;


//-------------------------------------------------------------------
   case "OnSnipFormRender":

// From mutate_snippet.dynamic.action.php
ob_start();
?>
<div class="subTitle" style="width:100%">
	<span class="right"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/_tx_.gif" width="1" height="5" /><br />"<a href=\'javascript:scroll(0,0);\'><?php echo $_lang[\'scroll_up\']; ?></a>"</span>

	<table cellpadding="0" cellspacing="0" class="actionButtons">
		<td id="Button1__"><a href="#" onclick="documentDirty=false; document.mutate.save.click(); saveWait(\'mutate\');"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/save.gif" align="absmiddle" /> <?php echo $_lang[\'save\']; ?></a></td>
<?php if($_GET[\'a\']==\'22\') { ?>
		<td id="Button2__"><a href="#" onclick="duplicaterecord();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/copy.gif" align="absmiddle" /> <?php echo $_lang["duplicate"]; ?></a></td>
		<td id="Button3__"><a href="#" onclick="deletedocument();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/delete.gif" align="absmiddle" /> <?php echo $_lang[\'delete\']; ?></a></td>
<?php } ?>
		<td id="Button4__"><a href="index.php?a=76"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/cancel.gif" align="absmiddle" /> <?php echo $_lang[\'cancel\']; ?></a></td>
	</table>
</div>
<?php
$output = ob_get_clean();
    break;

//-------------------------------------------------------------------
   case "OnChunkFormRender":

// From mutate_htmlsnippet.dynamic.action.php
ob_start();
?>
<div class="subTitle" style="width:100%">
	<span class="right"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/_tx_.gif" width="1" height="5" /><br />"<a href=\'javascript:scroll(0,0);\'><?php echo $_lang[\'scroll_up\']; ?></a>"</span>

	<table cellpadding="0" cellspacing="0" class="actionButtons">
		<td id="Button1__"><a href="#" onclick="documentDirty=false; document.mutate.save.click(); saveWait(\'mutate\');"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/save.gif" align="absmiddle" /> <?php echo $_lang[\'save\']; ?></a></td>
<?php if($_REQUEST[\'a\']==\'78\') { ?>
		<td id="Button2__"><a href="#" onclick="duplicaterecord();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/copy.gif" align="absmiddle" /> <?php echo $_lang["duplicate"]; ?></a></td>
		<td id="Button3__"><a href="#" onclick="deletedocument();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/delete.gif" align="absmiddle" /> <?php echo $_lang[\'delete\']; ?></a></td>
<?php } ?>
		<td id="Button4__"><a href="index.php?a=76"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/cancel.gif" align="absmiddle" /> <?php echo $_lang[\'cancel\']; ?></a></td>
	</table>
</div>
<?php
$output = ob_get_clean();
    break;

//-------------------------------------------------------------------
   case "OnModFormRender":

// From mutate_module.dynamic.action.php
ob_start();
?>
<div class="subTitle" style="width:100%">
	<span class="right"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/_tx_.gif" width="1" height="5"><br />"<a href=\'javascript:scroll(0,0);\'><?php echo $_lang[\'scroll_up\']; ?></a>"</span>

	<table cellpadding="0" cellspacing="0" class="actionButtons">
		<tr>
		<td id="Button1__"><a href="#" onclick="documentDirty=false; document.mutate.save.click(); saveWait(\'mutate\');"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/save.gif" align="absmiddle"> <?php echo $_lang[\'save\']; ?></a></td>
<?php if($_GET[\'a\']==\'108\') { ?>
		<td id="Button2__"><a href="#" onclick="duplicaterecord();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/copy.gif" align="absmiddle"> <?php echo $_lang["duplicate"]; ?></a></td>
		<td id="Button3__"><a href="#" onclick="deletedocument();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/delete.gif" align="absmiddle"> <?php echo $_lang[\'delete\']; ?></a></td>
<?php } ?>
		<td id="Button4__"><a href="#" onclick="documentDirty=false;document.location.href=\'index.php?a=106\';"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/cancel.gif" align="absmiddle"> <?php echo $_lang[\'cancel\']; ?></a></td>
		</tr>
	</table>
</div>
<?php
$output = ob_get_clean();
    break;

//-------------------------------------------------------------------
   case "OnPluginFormRender":

// From mutate_plugin.dynamic.action.php
ob_start();
?>
<div class="subTitle" style="width:100%">
	<span class="right"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/_tx_.gif" width="1" height="5" /><br />"<a href=\'javascript:scroll(0,0);\'><?php echo $_lang[\'scroll_up\']; ?></a>"</span>

	<table cellpadding="0" cellspacing="0" class="actionButtons">
		<td id="Button1__"><a href="#" onclick="documentDirty=false; document.mutate.save.click(); saveWait(\'mutate\');"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/save.gif" align="absmiddle" /> <?php echo $_lang[\'save\']; ?></a></td>
<?php if($_GET[\'a\']==\'102\') { ?>
		<td id="Button2__"><a href="#" onclick="duplicaterecord();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/copy.gif" align="absmiddle" /> <?php echo $_lang["duplicate"]; ?></a></td>
		<td id="Button3__"><a href="#" onclick="deletedocument();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/delete.gif" align="absmiddle" /> <?php echo $_lang[\'delete\']; ?></a></td>
<?php } ?>
		<td id="Button4__"><a href="index.php?a=76"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/cancel.gif" align="absmiddle"> <?php echo $_lang[\'cancel\']; ?></a></td>
	</table>
</div>
<?php
$output = ob_get_clean();
    break;

//-------------------------------------------------------------------
   case "OnTVFormRender":

// From mutate_tmplvars.dynamic.action.php
ob_start();
?>
<div class="subTitle" style="width:100%">
	<span class="right"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/_tx_.gif" width="1" height="5" /><br />"<a href=\'javascript:scroll(0,0);\'><?php echo $_lang[\'scroll_up\']; ?></a>"</span>

	<table cellpadding="0" cellspacing="0" class="actionButtons">
		<td id="Button1__"><a href="#" onclick="documentDirty=false; document.mutate.save.click(); saveWait(\'mutate\');"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/save.gif" align="absmiddle" /> <?php echo $_lang[\'save\']; ?></a></td>
<?php if($_GET[\'a\']==\'301\') { ?>
		<td id="Button2__"><a href="#" onclick="duplicaterecord();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/copy.gif" align="absmiddle" /> <?php echo $_lang["duplicate"]; ?></a></td>
		<td id="Button3__"><a href="#" onclick="deletedocument();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/delete.gif" align="absmiddle" /> <?php echo $_lang[\'delete\']; ?></a></td>
<?php } ?>
		<td id="Button4__"><a href="index.php?a=76"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/cancel.gif" align="absmiddle" /> <?php echo $_lang[\'cancel\']; ?></a></td>
	</table>
</div>
<?php
$output = ob_get_clean();
    break;

//-------------------------------------------------------------------
   case "OnTempFormRender":

// From mutate_templates.dynamic.action.php
ob_start();
?>
<div class="subTitle" style="width:100%">
	<span class="right"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/_tx_.gif" width="1" height="5" /><br />"<a href=\'javascript:scroll(0,0);\'><?php echo $_lang[\'scroll_up\']; ?></a>"</span>

	<table cellpadding="0" cellspacing="0" class="actionButtons">
		<td id="Button1__"><a href="#" onclick="documentDirty=false; document.mutate.save.click(); saveWait(\'mutate\');"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/save.gif" align="absmiddle" /> <?php echo $_lang[\'save\']; ?></a></td>
<?php if($_REQUEST[\'a\']==\'16\') { ?>
		<td id="Button2__"><a href="#" onclick="duplicaterecord();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/copy.gif" align="absmiddle" /> <?php echo $_lang["duplicate"]; ?></a></td>
		<td id="Button3__"><a href="#" onclick="deletedocument();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/delete.gif" align="absmiddle" /> <?php echo $_lang[\'delete\']; ?></a></td>
<?php } ?>
		<td id="Button4__"><a href="index.php?a=76"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/cancel.gif" align="absmiddle" /> <?php echo $_lang[\'cancel\']; ?></a></td>
	</table>
</div>
<?php
$output = ob_get_clean();
    break;

//-------------------------------------------------------------------
   case "OnWUsrFormRender":

// From mutate_web_user.dynamic.action.php
ob_start();
?>
<div class="subTitle" style="width:100%">
	<span class="right"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/_tx_.gif" width="1" height="5" /><br />"<a href=\'javascript:scroll(0,0);\'><?php echo $_lang[\'scroll_up\']; ?></a>"</span>

	<table cellpadding="0" cellspacing="0" class="actionButtons">
		<tr>
			<td id="Button1__"><a href="#" onclick="documentDirty=false; document.userform.save.click();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/save.gif" align="absmiddle" /> <?php echo $_lang[\'save\']; ?></a></td>
			<td id="Button2__"><a href="#" onclick="deleteuser();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/delete.gif" align="absmiddle" /> <?php echo $_lang[\'delete\']; ?></a></td>
				<?php if($_GET[\'a\']!=\'88\') { ?>
					<script>document.getElementById("Button2__").className=\'disabled\';</script>
				<?php } ?>
			<td id="Button3__"><a href="index.php?a=99"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/cancel.gif" align="absmiddle" /> <?php echo $_lang[\'cancel\']; ?></a></td>
		</tr>
	</table>
</div>
<?php
$output = ob_get_clean();
    break;

//-------------------------------------------------------------------
   case "OnUserFormRender":

// From mutate_user.dynamic.action.php
ob_start();
?>
<div class="subTitle" style="width:100%">
	<span class="right"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/_tx_.gif" width="1" height="5" /><br />"<a href=\'javascript:scroll(0,0);\'><?php echo $_lang[\'scroll_up\']; ?></a>"</span>

	<table cellpadding="0" cellspacing="0" class="actionButtons">
		<tr>
			<td id="Button1__"><a href="#" onclick="documentDirty=false; document.userform.save.click();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/save.gif" align="absmiddle" /> <?php echo $_lang[\'save\']; ?></a></td>
			<td id="Button2__"><a href="#" onclick="deleteuser();"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/delete.gif" align="absmiddle" /> <?php echo $_lang[\'delete\']; ?></a></td>
				<?php if($_GET[\'a\']!=\'12\') { ?>	
					<script>document.getElementById("Button2__").className=\'disabled\';</script>
				<?php } ?>
			<td id="Button3__"><a href="index.php?a=75"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/cancel.gif" align="absmiddle" /> <?php echo $_lang[\'cancel\']; ?></a></td>
		</tr>
	</table>
</div>
<?php
$output = ob_get_clean();
    break;

}

// Add the new bar to the output
$e->output($output);
';
$p['Forgot Manager Login'] = '
if(!class_exists(\'ForgotManagerPassword\')) {
class ForgotManagerPassword{

 function ForgotManagerPassword(){
 
  $this->errors = array();
 
  $this->checkLang();

 }

 function getLink() {
 
  global $_lang;
 
$link = <<<EOD
<a id="ForgotManagerPassword-show_form" href="index.php?action=show_form">{$_lang[\'forgot_your_password\']}</a>
EOD;

  return $link;

 }

 function getForm() {

  global $_lang;

$form = <<<EOD
<label id="FMP-email_label" for="FMP_email">{$_lang[\'account_email\']}:</label>
<input id="FMP-email" type="text" />
<button id="FMP-email_button" type="button" onclick="window.location = \'index.php?action=send_email&email=\'+document.getElementById(\'FMP-email\').value;">{$_lang[\'send\']}</button>
EOD;

  return $form;

 }

 // Get user info including a hash unique to this user, password, and day
 function getUser($user_id=0, $username=\'\', $email=\'\', $hash=\'\') {

  global $modx, $_lang;
 
  $user_id = $modx->db->escape($user_id);
  $username = $modx->db->escape($username);
  $email = $modx->db->escape($email);
  $emaail = $modx->db->escape($hash);
  
  $pre = $modx->db->config[\'table_prefix\'];
  $site_id = $modx->config[\'site_id\'];
  $today = date(\'Yz\'); // Year and day of the year
  $wheres = array();
  $where = \'\';
  $user = array(\'id\'=>0, \'username\'=>\'\', \'email\'=>\'\', \'hash\'=>\'\');
 
  if(!empty($user_id)) { $wheres[] = "id = \'{$user_id}\'"; }
  if(!empty($username)) { $wheres[] = "username = \'{$username}\'"; }
  if(!empty($email)) { $wheres[] = "email = \'{$email}\'"; }
  if(!empty($hash)) { $wheres[] = "MD5(CONCAT(usr.username,usr.password,\'{$site_id}\',\'{$today}\')) = \'{$hash}\'"; }
 
  if($wheres) {
  
   $where = \' WHERE \'.implode(\' AND \',$wheres);
   $sql = "SELECT usr.id, usr.username, attr.email, MD5(CONCAT(usr.username,usr.password,\'{$site_id}\',\'{$today}\')) AS hash
           FROM `{$pre}manager_users` usr
           INNER JOIN `{$pre}user_attributes` attr ON usr.id = attr.internalKey
           {$where};";
   
   if($result = $modx->db->query($sql)){
    if($modx->db->getRecordCount($result)==1) {
     $user = $modx->db->getRow($result);
    }
   }
   
  }
  
  if(!$user[\'id\']) { $this->errors[] = $_lang[\'could_not_find_user\']; }

  return $user;

 }

 // Send an email with a link to login
 function sendEmail($to) {

  global $modx, $_lang;

  $subject = $_lang[\'password_change_request\'];
  $headers  = "MIME-Version: 1.0\\n".
              "Content-type: text/html; charset=iso-8859-1\\n".
              "From: MODx\\n".
              "Reply-To: no-reply@{$_SERVER[\'HTTP_HOST\']}\\n".
              "X-Mailer: PHP/".phpversion();
  
  $user = $this->getUser(0, \'\', $to);

  if($user[\'username\']) {

$body = <<<EOD
<p>{$_lang[\'forgot_password_email_intro\']} <a href="{$modx->config[\'site_url\']}manager/processors/login.processor.php?username={$user[\'username\']}&hash={$user[\'hash\']}">{$_lang[\'forgot_password_email_link\']}</a></p>

<p>{$_lang[\'forgot_password_email_instructions\']}</p>

<p><small>{$_lang[\'forgot_password_email_fine_print\']}</small></p>
EOD;

   $mail = mail($to, $subject, $body, $headers);
 
   if(!$mail) { $this->errors[] = $_lang[\'error_sending_email\']; }
 
   return $mail;
   
  }

 }
 
 function unblockUser($user_id) {
  
  global $modx, $_lang;
  $pre = $modx->db->config[\'table_prefix\'];
  
  $modx->db->update(array(\'blocked\'=>\'\', \'blockeduntil\'=>\'\'), "`{$pre}user_attributes`", "internalKey = \'{$user_id}\'");
  
  if(!$modx->db->getAffectedRows()) { $this->errors[] = $_lang[\'user_doesnt_exist\']; return; }
  
  return true;
  
 }
 
 function checkLang() {
  
  global $_lang;
  $eng = array();
  
  $eng[\'forgot_your_password\'] = \'Forgot your password?\';
  $eng[\'account_email\'] = \'Account email\';
  $eng[\'send\'] = \'Send\';
  $eng[\'password_change_request\'] = \'Password change request\';
  $eng[\'forgot_password_email_intro\'] = \'A request has been made to change the password on your account.\';
  $eng[\'forgot_password_email_link\'] = \'Click here to complete the process.\';
  $eng[\'forgot_password_email_instructions\'] = \'From there you will be able to change your password from the My Account menu.\';
  $eng[\'forgot_password_email_fine_print\'] = \'* The URL above will expire once you change your password or after today.\';
  $eng[\'error_sending_email\'] = \'Error sending email\';
  $eng[\'could_not_find_user\'] = \'Could not find user\';
  $eng[\'user_doesnt_exist\'] = \'User does not exist\';
  $eng[\'email_sent\'] = \'Email sent\';
  
  foreach($eng as $key=>$value) {
   if(empty($_lang[$key])) { $_lang[$key] = $value; }
  }
  
 }
 
 function getErrorOutput() {
 
  $outptut = \'\';
 
  if($this->errors) {
   $output = \'<span class="error">\'.implode(\'</span><span class="errors">\', $this->errors).\'</span>\';
  }
 
  return $output;
 
 }
 
}
}

global $_lang;

$output = \'\';
$event_name = $modx->Event->name;
$action = (empty($_GET[\'action\']) ? \'\' : $_GET[\'action\']);
$username = (empty($_GET[\'username\']) ? \'\' : $_GET[\'username\']);
$to = (empty($_GET[\'email\']) ? \'\' : $_GET[\'email\']);
$hash = (empty($_GET[\'hash\']) ? \'\' : $_GET[\'hash\']);
$forgot = new ForgotManagerPassword();

if($event_name == \'OnManagerLoginFormRender\') {

 switch($action) {

  case \'show_form\':
   $output = $forgot->getForm();
   break;
  
  case \'send_email\':
   if($forgot->sendEmail($to)) { $output = $_lang[\'email_sent\']; }
   break;
  
  default:
   $output = $forgot->getLink();

 }
 
 if($forgot->errors) { $output = $forgot->getErrorOutput() . $forgot->getLink(); }
 
}

if($event_name == \'OnBeforeManagerLogin\') {
 $user = $forgot->getUser(0, $username, \'\', $hash);
 if($user[\'id\'] && !$forgot->errors) {
  $forgot->unblockUser($user[\'id\']);
 }
}

if($event_name == \'OnManagerAuthentication\' && $hash) {
 $user = $forgot->getUser(0, \'\', \'\', $hash);
 $output = ($user[\'id\'] > 0 && !$forgot->errors);
}

$modx->Event->output($output);
';
$p['Inherit Parent Template'] = '/*
 * Inherit Template from Parent
 * Written By Raymond Irving - 12 Oct 2006
 *
 * Simply results in new documents inherriting the template 
 * of their parent folder upon creating a new document
 *
 * Configuration:
 * check the OnDocFormPrerender event
 *
 * Version 1.0
 *
 */

global $content;
$e = &$modx->Event;

switch($e->name) {
  case \'OnDocFormPrerender\':
    if(($_REQUEST[\'pid\'] > 0) && ($id == 0)) {
      if($parent = $modx->getPageInfo($_REQUEST[\'pid\'],0,\'template\')) {
        $content[\'template\'] = $parent[\'template\'];
      }
    }
    break;

  default:
    return;
    break;
}
';
$p['QuickEdit'] = '/*
 *  Written by: Adam Crownoble
 *  Contact: adam@obledesign.com
 *  Created: 8/14/2005
 *  Updated: 11/27/2005 - Added support for show Manager & Help links option
 *  Updated: 12/05/2005 - Added support for editable fields as a module configuration option
 *  For: MODx cms (modxcms.com)
 *  Name: QuickEdit
 *  Description: Renders QuickEdit links in the frontend
 *  Shared parameters from: QuickEdit module
 *  Events: OnParseDocument, OnWebPagePrerender
 */

/*
                             License

QuickEdit - A MODx module which allows the editing of content via
            the frontent of the site
Copyright (C) 2005  Adam Crownoble

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

// Don\'t do anything if we aren\'t logged in
if(isset($_SESSION[\'mgrValidated\']) && $_SESSION[\'mgrValidated\']) {

 // Set configuration variables if not already set
 if(!isset($mod_path)) { $mod_path = $modx->config[\'base_path\'].\'assets/modules/quick_edit\'; }
 if(!isset($show_manager_link)) { $show_manager_link = 1; }
 if(!isset($show_help_link)) { $show_help_link = 1; }
 if(!isset($editable)) { $editable = \'pagetitle,longtitle,description,content,alias,introtext,menutitle,published,hidemenu,menuindex,searchable,cacheable\'; }

 // If we can\'t find the module files...
 if(!file_exists($mod_path)) {

  // Only log the error if we haven\'t already logged it...
  if(!isset($GLOBALS[\'quick_edit_not_found_sent\'])) {

   // Set a global variable so that we can only log this once
   $GLOBALS[\'quick_edit_not_found_sent\'] = true;

   // Log an error
   $error_message = \'<strong>QuickEdit module not found!</strong></p><p>Edit the QuickEdit module, click the Configuration tab and change the Module Path to point to the module.</p>\';
   $modx->logEvent(0, 3, $error_message, \'QuickEditor\');

  }

 } else {

  // Set globals from QE Module\'s shared paramaters so we can get them from the frontend
  $GLOBALS[\'qe_show_manager_link\'] = $show_manager_link;
  $GLOBALS[\'qe_show_help_link\'] = $show_help_link;
  $GLOBALS[\'qe_editable\'] = $editable;

  // Set the mod_path as a global variable
  $GLOBALS[\'quick_edit_path\'] = $mod_path;
  if (!class_exists(\'Output\')) include_once($mod_path.\'/output.class.inc.php\');

  $outputObject = new Output;

  switch($modx->Event->name) {

   case \'OnParseDocument\' :

    $outputObject->output = $modx->documentOutput;

    // Merge QuickEdit comment into the output
    $outputObject->mergeTags();

    break;

   case \'OnWebPagePrerender\' :

    $outputObject->output = &$modx->documentOutput;

    include_once($mod_path.\'/module.class.inc.php\');
    $module = new Module;
    $module->getIdFromDependentPluginName($modx->Event->activePlugin);

    // Replace QuickEdit comments with QuickEdit links
    $outputObject->mergeLinks($module->id);

    break;

  }

  // Set the event output
  $modx->documentOutput = $outputObject->output;

  // Logout ?
  $qe_logout= (isset($_GET[\'QuickEdit_logout\'])? $_GET[\'QuickEdit_logout\']: \'\');
  if($qe_logout == \'logout\') {
   $_SESSION = array();
  }

 }

}
';
$p['QuickEditProps'] = ' &mod_path=Module Path (from site root);string;assets/modules/quick_edit &show_manager_link=Show Manager Link;int;1 &show_help_link=Show Help Link;int;1 &editable=Editable Fields;string;pagetitle,longtitle,description,content,alias,introtext,menutitle,published,hidemenu,menuindex,searchable,cacheable,template';
$p['TinyMCE'] = '/*
 * TinyMCE RichText Editor Plugin 
 * Written By Jeff Whitfield - September 9, 2005
 * Modified On - September 1, 2007
 *
 * Version 2.1.2
 *
 * Events: OnRichTextEditorInit, OnRichTextEditorRegister, OnInterfaceSettingsRender
 *
 */

include_once $modx->config[\'base_path\'].\'assets/plugins/tinymce212/tinymce.lang.php\';
include_once $modx->config[\'base_path\'].\'assets/plugins/tinymce212/tinymce.functions.php\';

// Set path and base setting variables
if(!isset($tinyPath)) { 
	global $tinyPath, $tinyURL;
	$tinyPath = $modx->config[\'base_path\'].\'assets/plugins/tinymce212\'; 
	$tinyURL = $modx->config[\'base_url\'].\'assets/plugins/tinymce212\'; 
}
$base_url = $modx->config[\'base_url\'];
$displayStyle = ( ($_SESSION[\'browser\']==\'mz\') || ($_SESSION[\'browser\']==\'op\') ) ? "table-row" : "block" ;

// Handle event
$e = &$modx->Event; 
switch ($e->name) { 
	case "OnRichTextEditorRegister": // register only for backend
		$e->output("TinyMCE");
		break;

	case "OnRichTextEditorInit": 
		if($editor=="TinyMCE") {
			$elementList = implode(",", $elements);
			if(isset($forfrontend)||$modx->isFrontend()){
				$frontend = \'true\';
				$frontend_language = isset($modx->config[\'fe_editor_lang\']) ? $modx->config[\'fe_editor_lang\']:"";
				$tinymce_language = getTinyMCELang($frontend_language);
				$html = getTinyMCEScript($elementList,$webtheme,$width,$height,$tinymce_language,$frontend,$base_url, $webPlugins, $webButtons1, $webButtons2, $webButtons3, $webButtons4, $disabledButtons, $tinyFormats, $entity_encoding, $entities, $tinyPathOptions, $tinyCleanup, $tinyResizing, $modx->config[\'editor_css_path\'], $modx->config[\'tinymce_css_selectors\'], $modx->config[\'use_browser\'], $webAlign, null, null, $tinyLinkList, $customparams, $tinyURL);
			} else {
				$frontend = \'false\';
				$manager_language = $modx->config[\'manager_language\'];
				$tinymce_language = getTinyMCELang($manager_language);
				$html = getTinyMCEScript($elementList, $modx->config[\'tinymce_editor_theme\'], $width=\'100%\', $height=\'400px\', $tinymce_language, $frontend, $modx->config[\'base_url\'], $modx->config[\'tinymce_custom_plugins\'], $modx->config[\'tinymce_custom_buttons1\'], $modx->config[\'tinymce_custom_buttons2\'], $modx->config[\'tinymce_custom_buttons3\'], $modx->config[\'tinymce_custom_buttons4\'], $disabledButtons, $tinyFormats, $entity_encoding, $entities, $tinyPathOptions, $tinyCleanup, $tinyResizing, $modx->config[\'editor_css_path\'], $modx->config[\'tinymce_css_selectors\'], $modx->config[\'use_browser\'], $modx->config[\'manager_direction\'], $advimage_styles, $advlink_styles, $tinyLinkList, $customparams, $tinyURL);
			}
			$e->output($html);
		}		
		break;

	case "OnInterfaceSettingsRender":
		global $usersettings,$settings;
		$action = $modx->manager->action;
		switch ($action) {
    		case 11:
        		$tinysettings = "";
        		break;
    		case 12:
        		$tinysettings = $usersettings;
        		break;
    		default:
        		$tinysettings = $settings;
        		break;
    	}
		$tinymce_editor_theme = $tinysettings[\'tinymce_editor_theme\'];
		$tinymce_css_selectors = $tinysettings[\'tinymce_css_selectors\'];
		$tinymce_custom_plugins = $tinysettings[\'tinymce_custom_plugins\'];
		$tinymce_custom_buttons1 = $tinysettings[\'tinymce_custom_buttons1\'];
		$tinymce_custom_buttons2 = $tinysettings[\'tinymce_custom_buttons2\'];
		$tinymce_custom_buttons3 = $tinysettings[\'tinymce_custom_buttons3\'];
		$tinymce_custom_buttons4 = $tinysettings[\'tinymce_custom_buttons4\'];
		$manager_language = $modx->config[\'manager_language\'];
		$html = getTinyMCESettings($_lang, $tinyPath, $modx->config[\'manager_language\'], $modx->config[\'use_editor\'], $tinymce_editor_theme, $tinymce_css_selectors, $tinymce_custom_plugins, $tinymce_custom_buttons1, $tinymce_custom_buttons2, $tinymce_custom_buttons3, $tinymce_custom_buttons4, $displayStyle, $action);
		$e->output($html);
		break;

   default :    
      return; // stop here - this is very important. 
      break; 
}
';
$p['TinyMCEProps'] = '&tinyFormats=Block Formats;text;p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address &entity_encoding=Entity Encoding;list;named,numeric,raw;named &entities=Entities;text; &tinyPathOptions=Path Options;list;rootrelative,docrelative,fullpathurl;docrelative &tinyCleanup=Cleanup;list;enabled,disabled;enabled &tinyResizing=Advanced Resizing;list;true,false;false &advimage_styles=Advanced Image Styles;text; &advlink_styles=Advanced Link Styles;text; &disabledButtons=Disabled Buttons;text; &tinyLinkList=Link List;list;enabled,disabled;enabled &webtheme=Web Theme;list;simple,advanced,editor,custom;simple &webPlugins=Web Plugins;text;style,advimage,advlink,searchreplace,print,contextmenu,paste,fullscreen,nonbreaking,xhtmlxtras,visualchars,media &webButtons1=Web Buttons 1;text;undo,redo,selectall,separator,pastetext,pasteword,separator,search,replace,separator,nonbreaking,hr,charmap,separator,image,link,unlink,anchor,media,separator,cleanup,removeformat,separator,fullscreen,print,code,help &webButtons2=Web Buttons 2;text;bold,italic,underline,strikethrough,sub,sup,separator,bullist,numlist,outdent,indent,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,separator,styleprops &webButtons3=Web Buttons 3;text; &webButtons4=Web Buttons 4;text; &webAlign=Web Toolbar Alignment;list;ltr,rtl;ltr ';
$p['Search Highlighting'] = '/*
  ------------------------------------------------------------------------
  Plugin: Search_Highlight v1.2.1
  ------------------------------------------------------------------------
  Changes:
  01/03/07 - Added fies/updates from forum from users mikkelwe/identity
  (better highlight replacement, additional div around term/removal message)
  ------------------------------------------------------------------------
  Description: When a user clicks on the link from the AjaxSearch results
    the target page will have the terms highlighted.
  ------------------------------------------------------------------------
  Created By:  Susan Ottwell (sottwell@sottwell.com)
               Kyle Jaebker (kjaebker@muddydogpaws.com)
  ------------------------------------------------------------------------
  Based off the the code by Susan Ottwell (www.sottwell.com)
    http://modxcms.com/forums/index.php/topic,1237.0.html
  ------------------------------------------------------------------------
  CSS:
    The classes used for the highlighting are the same as the AjaxSearch
  ------------------------------------------------------------------------
  Notes:
    To add a link to remove the highlighting and to show the searchterms
    put the following on your page where you would like this to appear:
    
      <!--search_terms-->
    
    Example output for this:
    
      Search Terms: the, template
      Remove Highlighting
      
    Set the following variables to change the text:
    
      $termText - the text before the search terms
      $removeText - the text for the remove link
  ------------------------------------------------------------------------
*/

if(isset($_GET[\'searched\']) && isset($_GET[\'highlight\'])) {

  // Set these to customize the text for the highlighting key
  // --------------------------------------------------------
     $termText = \'<div class="searchTerms">Search Terms: \';
     $removeText = \'Remove Highlighting\';
  // --------------------------------------------------------

  $highlightText = $termText;

  $searched = strip_tags(urldecode($_REQUEST[\'searched\'])); 
  $highlight = strip_tags(urldecode($_REQUEST[\'highlight\'])); 
  $output = $modx->documentOutput; // get the parsed document

  $body = explode("<body>", $output); // break out the head

  $searchArray = explode(\' \', $searched); // break apart the search terms

  $highlightClass = explode(\' \',$highlight); // break out the highlight classes

  $i = 0; // for individual class names

  foreach($searchArray as $word) {
    $i++;
    $class = $highlightClass[0].\' \'.$highlightClass[$i];

    $highlightText .= ($i > 1) ? \', \' : \'\';
    $highlightText .= \'<span class="\'.$class.\'">\'.$word.\'</span>\';

    $pattern = \'/\' . preg_quote($word) . \'(?=[^>]*<)/i\';
    $replacement = \'<span class="\' . $class . \'">${0}</span>\';
    $body[1] = preg_replace($pattern, $replacement, $body[1]);
  }

  $output = implode("<body>", $body);

  $removeUrl = $modx->makeUrl($modx->documentIdentifier);
  $highlightText .= \'<br /><a href="\'.$removeUrl.\'" class="ajaxSearch_removeHighlight">\'.$removeText.\'</a></div>\';

  $output = str_replace(\'<!--search_terms-->\',$highlightText,$output);

  $modx->documentOutput = $output;
}';
$p['PNG-Alpha for MSIE'] = '
/** 
 *	PNG-Alpha for MSIE (PNGAlpha4MSIE).
 *	Written by Raymond Irving
 *
 *	Fixes PNG-24 Alpha Transparency bug MSIE 5.5+
 *	
 *	This plugin uses KOIVI PNG Alpha IMG Tag Replacer for PHP
 *	See http://koivi.com/ie-png-transparency/
 *
 *	Plugin configuration: &spacer=PNG Spacer Path;string;assets/images &sm=Size Method;list;Scale,Crop,Image;Image
 *
 */

$e = &$modx->Event;
switch($e->name) {
	case "OnWebPagePrerender":
		$o = &$modx->documentOutput; // get a reference of the output
		$sm = strtoLower($sm);
		$o = replacePngTags($o,$spacer,$sm);
		break;

	default:	// stop here
		break;
}

/* 
KOIVI PNG Alpha IMG Tag Replacer for PHP (C) 2004-2005 Justin Koivisto 
Version 2.0.7 
Last Modified: 4/21/2005 

    This library is free software; you can redistribute it and/or modify it 
    under the terms of the GNU Lesser General Public License as published by 
    the Free Software Foundation; either version 2.1 of the License, or (at 
    your option) any later version. 

    This library is distributed in the hope that it will be useful, but 
    WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
    or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public 
    License for more details. 

    You should have received a copy of the GNU Lesser General Public License 
    along with this library; if not, write to the Free Software Foundation, 
    Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA 

    Full license agreement notice can be found in the LICENSE file contained 
    within this distribution package. 

    Justin Koivisto 
    justin.koivisto@gmail.com 
    http://www.koivi.com 
*/ 

/* 
*   Modifies IMG and INPUT tags for MSIE5+ browsers to ensure that PNG-24 
*   transparencies are displayed correctly.  Replaces original SRC attribute 
*   with a transparent PNG file (spacer.png) that is located in the same 
*   directory as the orignal image, and adds the STYLE attribute needed to for 
*   the browser. (Matching is case-insensitive. However, the width attribute 
*   should come before height. 
* 
*   Also replaces code for PNG images specified as backgrounds via: 
*   background-image: url(image.png); or background-image: url(\'image.png\'); 
*   When using PNG images in the background, there is no need to use a spacer.png 
*   image. (Only supports inline CSS at this point.) 
* 
*   @param  $x  String containing the content to search and replace in. 
*   @param  $img_path   The path to the directory with the spacer image relative to 
*                       the DOCUMENT_ROOT. If none os supplied, the spacer.png image 
*                       should be in the same directory as PNG-24 image. 
*   @param  $sizeMeth   String containing the sizingMethod to be used in the 
*                       Microsoft.AlphaImageLoader call. Possible values are: 
*                       crop - Clips the image to fit the dimensions of the object. 
*                       image - Enlarges or reduces the border of the object to fit 
*                               the dimensions of the image. 
*                       scale - Default. Stretches or shrinks the image to fill the borders 
*                               of the object. 
*   @result Returns the modified string. 
*/ 
function replacePngTags($x,$img_path=\'\',$sizeMeth=\'scale\'){ 
    $arr2=array(); 
    // make sure that we are only replacing for the Windows versions of Internet 
    // Explorer 5+ 
    $msie=\'/msie\\s(5\\.[5-9]|[6-9]\\.[0-9]*).*(win)/i\'; 
    if( !isset($_SERVER[\'HTTP_USER_AGENT\']) || 
        !preg_match($msie,$_SERVER[\'HTTP_USER_AGENT\']) || 
        preg_match(\'/opera/i\',$_SERVER[\'HTTP_USER_AGENT\'])) 
        return $x; 

    // find all the png images in backgrounds 
    preg_match_all(\'/background-image:\\s*url\\(([\\\\"\\\\\\\']?)([^\\)]+\\.png)\\1\\);/Uis\',$x,$background); 
    for($i=0;$i<count($background[0]);$i++){ 
        // simply replace: 
        //  "background-image: url(\'image.png\');" 
        // with: 
        //  "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader( 
        //      enabled=true, sizingMethod=scale src=\'image.png\');" 
        // I don\'t think that the background-repeat styles will work with this... 
        $x=str_replace($background[0][$i],\'filter:progid:DXImageTransform.\'. 
                \'Microsoft.AlphaImageLoader(enabled=true, sizingMethod=\'.$sizeMeth. 
                \' src=\\\'\'.$background[2][$i].\'\\\');\',$x); 
    } 

    // find all the IMG tags with ".png" in them 
    $pattern=\'/<(input|img)[^>]*src=([\\\\"\\\\\\\']?)([^>]*\\.png)\\2[^>]*>/i\'; 
    preg_match_all($pattern,$x,$images); 
    for($num_images=0;$num_images<count($images[0]);$num_images++){ 
        // for each found image pattern 
        $original=$images[0][$num_images]; 
        $quote=$images[2][$num_images]; 
        $atts=\'\'; $width=0; $height=0; $modified=$original; 

        // We do this so that we can put our spacer.png image in the same 
        // directory as the image - if a path wasn\'t passed to the function 
        if(empty($img_path)){ 
            $tmp=split(\'[\\\\/]\',$images[3][$num_images]); 
            $this_img=array_pop($tmp); 
            $img_path=join(\'/\',$tmp); 
            if(empty($img_path)){ 
                // this was a relative URI, image should be in this directory 
                $tmp=split(\'[\\\\/]\',$_SERVER[\'SCRIPT_NAME\']); 
                array_pop($tmp);    // trash the script name, we only want the directory name 
                $img_path=join(\'/\',$tmp).\'/\'; 
            }else{ 
                $img_path.=\'/\'; 
            } 
        }else if(substr($img_path,-1)!=\'/\'){ 
            // in case the supplied path didn\'t end with a / 
            $img_path.=\'/\'; 
        } 

        // If the size is defined by styles, find them 
        preg_match_all( 
            \'/style=([\\\\"\\\\\\\']).*(\\s?width:\\s?([0-9]+(px|%));).*\'. 
            \'(\\s?height:\\s?([0-9]+(px|%));).*\\\\1/Ui\', 
            $images[0][$num_images],$arr2); 
        if(is_array($arr2) && count($arr2[0])){ 
            // size was defined by styles, get values 
            $width=$arr2[3][0]; 
            $height=$arr2[6][0]; 

            // remove the width and height from the style 
            $stripper=str_replace(\' \',\'\\s\',\'/(\'.$arr2[2][0].\'|\'.$arr2[5][0].\')/\'); 
            // Also remove any empty style tags 
            $modified=preg_replace( 
                \'`style=\'.$arr2[1][0].$arr2[1][0].\'`i\', 
                \'\', 
                preg_replace($stripper,\'\',$modified)); 
        }else{ 
            // size was not defined by styles, get values from attributes 
            preg_match_all(\'/width=([\\\\"\\\\\\\']?)([0-9%]+)\\\\1/i\',$images[0][$num_images],$arr2); 
            if(is_array($arr2) && count($arr2[0])){ 
                $width=$arr2[2][0]; 
                if(is_numeric($width)) 
                    $width.=\'px\'; 
     
                // remove width from the tag 
                $modified=str_replace($arr2[0][0],\'\',$modified); 
            } 
            preg_match_all(\'/height=([\\\\"\\\\\\\']?)([0-9%]+)\\\\1/i\',$images[0][$num_images],$arr2); 
            if(is_array($arr2) && count($arr2[0])){ 
                $height=$arr2[2][0]; 
                if(is_numeric($height)) 
                    $height.=\'px\'; 
     
                // remove height from the tag 
                $modified=str_replace($arr2[0][0],\'\',$modified); 
            } 
        } 
         
        if($width==0 || $height==0){ 
            // width and height not defined in HTML attributes or css style 
            if(file_exists($_SERVER[\'DOCUMENT_ROOT\'].$img_path.$images[3][$num_images])){ 
                // image is on this filesystem, get width & height 
                $size=getimagesize($_SERVER[\'DOCUMENT_ROOT\'].$img_path.$images[3][$num_images]); 
                $width=$size[0].\'px\'; 
                $height=$size[1].\'px\'; 
            } 
        } 
         
        // end quote is already supplied by originial src attribute 
        $replace_src_with=$quote.$img_path.\'spacer.png\'.$quote.\' style="width: \'.$width. 
            \'; height: \'.$height.\'; filter: progid:DXImageTransform.\'. 
            \'Microsoft.AlphaImageLoader(src=\\\'\'.$images[3][$num_images].\'\\\', sizingMethod=\'. 
            $sizeMeth.\');"\'; 

        // now create the new tag from the old 
        $new_tag=str_replace($quote.$images[3][$num_images].$quote,$replace_src_with, 
            str_replace(\'  \',\' \',$modified)); 
        // now place the new tag into the content 
        $x=str_replace($original,$new_tag,$x); 
    } 
    return $x; 
} 
';
$p['PNG-Alpha for MSIEProps'] = '&spacer=PNG Spacer Path;string;assets/images &sm=Size Method;list;Scale,Crop,Image;Image ';
$e = &$this->pluginEvent;
$e['OnBeforeManagerLogin'] = array('Forgot Manager Login');
$e['OnChunkFormRender'] = array('Bottom Button Bar');
$e['OnDocFormPrerender'] = array('Inherit Parent Template');
$e['OnDocFormRender'] = array('Bottom Button Bar');
$e['OnInterfaceSettingsRender'] = array('TinyMCE');
$e['OnManagerAuthentication'] = array('Forgot Manager Login');
$e['OnManagerLoginFormRender'] = array('Forgot Manager Login');
$e['OnModFormRender'] = array('Bottom Button Bar');
$e['OnParseDocument'] = array('QuickEdit');
$e['OnPluginFormRender'] = array('Bottom Button Bar');
$e['OnRichTextEditorInit'] = array('TinyMCE');
$e['OnRichTextEditorRegister'] = array('TinyMCE');
$e['OnSnipFormRender'] = array('Bottom Button Bar');
$e['OnTempFormRender'] = array('Bottom Button Bar');
$e['OnTVFormRender'] = array('Bottom Button Bar');
$e['OnUserFormRender'] = array('Bottom Button Bar');
$e['OnWebPagePrerender'] = array('QuickEdit','Search Highlighting','PNG-Alpha for MSIE');
$e['OnWUsrFormRender'] = array('Bottom Button Bar');
?>