<?php 
require("isdk.php");
session_start(); 
/*
$name = $_POST['Name'];
$message = $_POST['message'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$pin = $_POST['pin'];
$state = $_POST['state'];
$country = $_POST['country'];
*/

$name = $_POST['Name'];
$message = $_POST['Address'];
$email = $_POST['email'];
$contact = $_POST['Contact'];
$city = $_POST['City'];
$pin = $_POST['Pincode'];
$state = $_POST['State'];
$country = $_POST['Country'];
$amount  = $_POST['amount'];
$_SESSION['total']= $amount;
$_SESSION["email"]=$email;
$_SESSION["phone"]=$contact;
if (!$_SESSION["email"]) 
{
	header('location: index.php');
} 

$app = new iSDK;

if ($app->cfgCon("connectionName")) 

{
  
   
  	 	$conID = $app->addWithDupCheck(array('FirstName' => $name, 'Email' => $email), 'EmailAndName');
  

	$conDat = array('Phone1' => $contact, 'StreetAddress1' => $message, 'City' => $city , 'PostalCode' => $pin, 'State' => $state, 'Country' => $country );
    $conID = $app->updateCon($conID, $conDat);
	
 	$_SESSION["contactId"] = $conID;
	
	    
	    //Signed up from FB for SMB 7-8/14
	    
   $contactId =$conID;
   $groupId = 911;
   $result = $app->grpAssign($contactId, $groupId);
   
  
 
 }

?>

  <script>window.location = "Checkout1.php";</script>