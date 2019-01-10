<?php
include("homeAfterBanner.php");
@session_start;
?>

<title>Profile Update</title>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/plussize/connectionHost.php';
?>

<style>
* {
    box-sizing: border-box;
}

.main {
    width: 100%;
	height: fixed;
	float: center;
	border-style: transparent;
	padding: 15px;
	background: #E6E6E6;
}

.footer {
    background-color:transparent;
    color:black;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
</style>

<body> 
<div class="main">
<?php

$ic = $_GET['custIC'];

$sqlone = "SELECT custName,custIC,custAddress,custPhoneNo,custEmail,password
		   FROM customer
		   WHERE custIC=$ic";//the query for get all data in customer
	   
		   $rs = mysql_query ($sqlone);

$hasil = mysql_query($sqlone);
		   
$row_kira = mysql_num_rows($hasil);
if($hasil=="")
	echo "SQL error:".mysql_error();
else
	$papar = mysql_fetch_array($hasil);?>
		
	<h2 align="center"><b>MY PROFILE</b></h2>
    <form method="post" action="">
		<table width="530" height="118" border="1" bordercolor="#CCCCCC" bgcolor="#333333" align="center">
		<tr bgcolor="#ECB3FF">
  			<td width="150" align="center"><div align="left"><strong>&nbsp;Name</strong></div></td>
  			<td><?php echo $papar['custName']; ?></td>
  		</tr>
        <tr bgcolor="#ECB3FF">
  			<td width="150" align="center"><div align="left"><strong>&nbsp;IC Number</strong></div></td>
  			<td><?php echo $papar['custIC']; ?></td>
  		</tr>
        <tr bgcolor="#ECB3FF">
  			<td width="150" align="center"><div align="left"><strong>&nbsp;Address</strong></div></td>
            <td><textarea name="txtAddress" rows="4" cols="50" maxLength="100"><?php echo $papar['custAddress']?></textarea></td>
  		</tr>
        <tr bgcolor="#ECB3FF">
  			<td align="center"><div align="left"><strong>&nbsp;Phone Number</strong></div></td>
  			<td><input type="text" id="word" size="10" maxlength="12" name="txtPhoneNo" value="<?php echo $papar['custPhoneNo']?>"></td>
  		</tr>
  		<tr bgcolor="#ECB3FF">
			<td width="150" align="center"><div align="left"><strong>&nbsp;Email</strong></div></td>
    		<td><?php echo $papar['custEmail']; ?></td>
		</tr>
  		<tr bgcolor="#ECB3FF">
  			<td width="150" align="center"><div align="left"><strong>&nbsp;Password</strong></div></td>
  			<td><input type="text" id="word" size="10" maxlength="9" name="txtPass" value="<?php echo $papar['password']?>"></td>
  		</tr>
		<tr bgcolor="#ECB3FF">
		<td colspan="2" align="center"><div align="right">
			<input type="Submit" name="submit1" value="UPDATE">&nbsp;
			<input type="Submit" name="submit2" value="BACK"></div></td>
		</tr>
		</table>
		<br>
	
<?php
if(isset($_POST["submit1"]))//process to updating password, address, phone number
{
	$address = $_POST['txtAddress'];
	$phoneNo = $_POST['txtPhoneNo'];
	$pass = $_POST['txtPass'];
	
	//to update custAddress
	$sqlone1="UPDATE customer 
			SET custAddress='$address' 
			WHERE custIC='$ic'";
	$hasil1=mysql_query($sqlone1);

	if($hasil1==false)
		echo "SQL error:".mysql_error();
	else
	{
		?>
    	<?php
	}
	
	//to update custPhoneNo
	$sqlone2="UPDATE customer 
			SET custPhoneNo='$phoneNo' 
			WHERE custIC='$ic'";
	$hasil2=mysql_query($sqlone2);

	if($hasil2==false)
		echo "SQL error:".mysql_error();
	else
	{
		?>
    	<?php
	}
	
	//to update password
	$sqlone3="UPDATE customer 
			SET password='$pass' 
			WHERE custIC='$ic'";
	$hasil3=mysql_query($sqlone3);

	if($hasil3==false)
		echo "SQL error:".mysql_error();
	else
	{
		?>
    	<?php
	}?>
    
	<script language="javascript"> alert("Update Success!");window.location="profile.php";</script><?php
}
?>
<?php
if(isset($_POST["submit2"]))
{?>
	<script language="javascript">window.location="profile.php";</script>
<?php }
?>
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