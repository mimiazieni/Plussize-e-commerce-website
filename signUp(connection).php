<?php
session_start();
/* include db connection file */
include("connectionHost.php");

if(isset($_POST['submit1']))
{
	/* capture values from HTML form */
	$name = $_POST['custName'];
	$email = $_POST['custEmail'];
	$ic = $_POST['custIC'];
	$password1 = $_POST['password'];
	$address = $_POST['custAddress'];
	$phoneNumber = $_POST['custPhoneNo'];
	
	$sql2 = "INSERT INTO customer 
	(custName, custEmail, custIC, password, custAddress, custPhoneNo)
	VALUES ('" . $name . "', '" . $email . "', '" . $ic . "','" . $password1 . "','" . $address . "','" . $phoneNumber . "')";
	mysql_query($sql2) or die ("Error: " . mysql_error());
	
	/* display a message */
	header("Location: login.php?log=first");
}

/* close db connection */
mysql_close($connectionHost);
?>
