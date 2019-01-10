<html>
<head><title>Kebaya Sri Murni</title>
</head>

<?php
include("bajuBanner.php");
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}

.main {
    width: 50%;
	height: 80%;
	float: left;
	border-style: transparent;
	padding: 15px;
	background: #FFFFFF;
}

.menu {
    width: 50%;
	height: 80%;
    float: right;
	border-style: none none none none;
    padding: 15px;
    background: #FFFFFF;
}

</style>
</head>

<font face="Arial">
<body="#B8B894">

<div class="main">
	<br/><br/>
	<center>
	  <img src="Kebaya/kebaya1.jpg" width="380" height="400"/>
	</center>
</div>

<div class="menu">
<?php

include $_SERVER['DOCUMENT_ROOT'].'/plussize/connectionHost.php';

$sqlone = "SELECT itemCode,itemName,itemMaterial,itemPrice
		   FROM kebaya
		   WHERE itemCode LIKE '%KB-10%'";//the query for get all data in kebaya
		   
		   $hasil = mysql_query($sqlone);
		   
$row_kira = mysql_num_rows($hasil);
if($hasil=="")
		echo "SQL error:".mysql_error();
	else
		$papar = mysql_fetch_array($hasil);
?>	
<br>
	<form name="form1" action="kebayaMurniPross.php" method="POST">
		<!--name of the item-->
		<br/><b><font size="5"><?php echo $papar['itemName'];?></font></b>
        
        <!--code of the item-->
    	<br/><font size="3" color="#CCCCCC"><?php echo $papar['itemCode'];?></font>
        
        <!--price of the item-->
    	<br/><br/><b><font size="5">RM<?php echo $papar['itemPrice'];?>.00</font></b>
        
        <br/><font size="1">6% GST inclusive</font>
        
        <br/><br/><br/><b><font size="5">Product's Details :</font></b><br/>	
		<table width="" border="0" bordercolor="" bgcolor="">
        <tr bgcolor="">
        	<td>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			<td>3XL, 4XL, 5XL & 6XL
		</tr>
        
        <tr bgcolor="">
			<td>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			<td>Blue, Pink, Red & Purple</td>
		</tr>
		
        <tr bgcolor="">
			<td>Material&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			<td><?php echo $papar['itemMaterial'];?></td>
		</tr>
        </table>
        
        <!--size of the item-->
        <br/><br/><font size="3">
        Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>
    	<select name="itemSize">
    		<option value="">--PLEASE CHOOSE--</option>
    		<option value="3XL">3XL</option>
        	<option value="4XL">4XL</option>
        	<option value="5XL">5XL</option>
            <option value="6XL">6XL</option>
        </select>
        
        <!--color of the item-->
        <br/><br/><font size="3">
        Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>
    	<select name="itemColor">
    		<option value="">--PLEASE CHOOSE--</option>
    		<option value="Blue">Blue</option>
        	<option value="Pink">Pink</option>
        	<option value="Red">Red</option>
            <option value="Purple">Purple</option>
        </select>
        
       <!--quantity of the item-->
        <br/><br/><font size="3">
        Quantity :</strong>
    	<select name="itemQuantity">
    		<option value="">--PLEASE CHOOSE--</option>
    		<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
 		
        <br/><br/><br/>
        <input type="Submit" value="ADD TO CART" name="submit1"/>
	</form>
</div>
</body>

<table width="100%" cellpadding="">
<tr bgcolor="#00FFCC"><td colspan="5"><font face="Times New Roman" color="#FFFFFF" size="3">
<b><center>Contact Us :</center></b>
<center>Operating Hours : 8.00am - 6.00pm (Mon - Fri)</center>
<center>Phone : 019-9156778&nbsp;&nbsp;|&nbsp;&nbsp;Email : plussize@gmail.com</center>
<center><img src="ig.png" style="width:25px;height:25px;">&nbsp;  <img src="fb.png" style="width:25px;height:25px;">
<center>Copyright @ 2017 plussize</center>
</td></tr>
</table>
</html>