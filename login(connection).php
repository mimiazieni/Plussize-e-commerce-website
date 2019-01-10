<?php
session_start();
/* include db connection file */
include("connectionHost.php");

if(isset($_POST['submit1']))
{
	/* capture values from HTML form */
	$email = $_POST['custEmail'];
	$password1 = $_POST['password'];

	$sql = "SELECT * FROM customer 
	WHERE custEmail = '$email' AND 
	password = '$password1'";	
	$query = mysql_query($sql) or die("Error:" . mysql_error());
	$row = mysql_num_rows($query);
		
	if($row == 0)
	{
		header("Location: login.php?log=fail");	
	}
	else
	{
		$r = mysql_fetch_assoc($query);					
		$_SESSION['LEVEL'] = 1;
		$_SESSION['CUSTEMAIL'] = $r['custEmail'];
		$_SESSION['CUSTIC']= $r['custIC'];
		header("Location: Customer/homeafter.php");	
	}
}
?>
