<?php
/* include db connection file */
include $_SERVER['DOCUMENT_ROOT'].'/plussize/connectionHost.php';

session_start();
//to get customer's email & ic
if(isset($_SESSION['CUSTEMAIL'])){
	$custIC= $_SESSION['CUSTIC'];
	$sqlone = "SELECT *
		   	FROM customer
		   	WHERE custIC=$custIC";//the query for get all data in customer
		   
		   	$hasil = mysql_query($sqlone);
}
if(isset($_POST['submit1'])){
	/* capture values from HTML form */
	$custEmail = $_SESSION['CUSTEMAIL'];
	$itemQuantity = $_POST['itemQuantity'];
	$itemName = 'Kebaya Kimono';
	$itemColor = $_POST['itemColor'];
	$itemSize = $_POST['itemSize'];
	
	if($itemQuantity==1)
		$itemTotPrice = $itemQuantity*130;
	else if($itemQuantity==2)
		$itemTotPrice = $itemQuantity*130;
	else if($itemQuantity==3)
		$itemTotPrice = $itemQuantity*130;
	else if($itemQuantity==4)
		$itemTotPrice = $itemQuantity*130;
	else
		$itemTotPrice = $itemQuantity*130;
	
	$sql1 = "INSERT INTO items 
	(custEmail, custIC, itemQuantity, itemName, itemTotPrice, itemColor, itemSize)
	VALUES ('" . $custEmail . "', '" . $custIC . "','" . $itemQuantity . "','" . $itemName . "','" . $itemTotPrice . "','" . $itemColor . "', '" . $itemSize . "')";
	mysql_query($sql1) or die ("Error: " . mysql_error());
	
	/* display a message */
	header("Location: payment.php");
}

/* close db connection */
mysql_close($connectionHost);
?>
