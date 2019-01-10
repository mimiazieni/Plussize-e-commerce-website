<?php
include("homeAfterBanner.php");
?>

<title>Profile</title>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/plussize/connectionHost.php';
if(isset($_SESSION['CUSTEMAIL'])){
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
$ic= $_SESSION['CUSTIC'];
$sqlone = "SELECT *
		   FROM customer
		   WHERE custIC=$ic";
	   
		   $rs = mysql_query ($sqlone);

if($rs == false)
	echo "SQL ERROR : Query cannot be executed";
else
{
	while($papar=mysql_fetch_array($rs))
	{
		$e = $papar['custIC'];
		?>
		
        <h2 align="center"><b>MY PROFILE</b></h2>
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
  			<td><?php echo $papar['custAddress']; ?></td>
  		</tr>
        <tr bgcolor="#ECB3FF">
  			<td width="150" align="center"><div align="left"><strong>&nbsp;Phone Number</strong></div></td>
  			<td><?php echo $papar['custPhoneNo']; ?></td>
  		</tr>
  		<tr bgcolor="#ECB3FF">
			<td width="150" align="center"><div align="left"><strong>&nbsp;Email</strong></div></td>
    		<td><?php echo $papar['custEmail']; ?></td>
		</tr>
  		<tr bgcolor="#ECB3FF">
  			<td width="150" align="center"><div align="left"><strong>&nbsp;Password</strong></div></td>
  			<td><?php echo $papar['password']; ?></td>
  		</tr>
		<tr bgcolor="#ECB3FF">
			<td colspan="2"><div align="right">
            <a href="profileUpdate.php?custIC=<?php echo $e ;?>" style="text-decoration: none"><input type="Submit" value="UPDATE PROFILE" name="submit1"/></a></div></td>
  		</tr>
		</table>
		<br>
		<?php
	}
}
?>
</div>
<?php
}
?>
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