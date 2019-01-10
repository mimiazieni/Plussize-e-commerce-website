<?php
include $_SERVER['DOCUMENT_ROOT'].'/plussize/connectionHost.php';
session_start();
if(isset($_SESSION['CUSTEMAIL'])){

$ic= $_SESSION['CUSTIC'];
$sqlone = "SELECT *
		   FROM customer
		   WHERE custIC=$ic";//the query for get all data in customer
		   
		   $hasil = mysql_query($sqlone);
		   
$row_kira = mysql_num_rows($hasil);
if($hasil=="")
		echo "SQL error:".mysql_error();
	else
		$papar = mysql_fetch_array($hasil);
?>
<head>
<style>
body 
{
	 background-image: "white";
}
/*plusize title*/
h1 
{
    height: 140px;
    width: 1335px;
	text-shadow: 6px 4px #00FFCC;
	border-bottom: 15px solid #00FFCC;
    background-color: lightpink;
	font-family: "Broadway";
	font-size: 90px;
}

ul 
{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #00FFCC;
	font-color:black;
}

li 
{
    float: left;
}

li a 
{
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
	font-family: "Broadway";
	font-size: 30px;
    text-decoration: none;
	border-right: 5px solid lightpink;
}

li a:hover:not(.active) 
{
    background-color: lightpink;
	border-right: 5px solid #00FFCC;
}

.active 
{
    background-color: lightpink;
}
/*pictures baju kurung*/

/*dropdown button*/
li a, .dropbtn 
{
    display: inline-block;
    color: white;
    text-align: center;
    padding: 12px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn 
{
    background-color: lightpink;
}

li.dropdown 
{
    display: inline-block;
}

.dropdown-content 
{
    display: none;
    position: absolute;
    background-color: #00FFCC;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a 
{
    color: black;
    padding: 16px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f9f9f9}

.dropdown:hover .dropdown-content 
{
    display: block;
}
</style>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>
<center><h1>PLUSIZE'S BAJU KURUNG</h1></center>
<ul>
  <li><a href="homeafter.php">Home</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Products</a>
    <div class="dropdown-content">
     <a href="modern.php">Modern</a>
      <a href="kebaya.php">Kebaya</a>
       <a href="abaya.php">Abaya</a>
    </div>
  </li>
  <li style="float:right">

  	<b>Hi, <?php echo $papar['custName']; ?>&nbsp;&nbsp;<?php }?>
    <a class="active" href="payment.php">Cart</a>&nbsp;
  	<a class="active" href="profile.php">Profile</a>&nbsp;
  	<a class="active" href="../signout.php">Logout</a></li>
</ul>
</body>
</html>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/plussize/connectionHost.php';
if(isset($_SESSION['CUSTEMAIL']))
{?>
	<div class="main"><?php
	
	$email= $_SESSION['CUSTEMAIL'];
	$ic= $_SESSION['CUSTIC'];
	$sqlone1 = "SELECT * 
			FROM customer
		   	WHERE custIC=$ic";//the query for get all data in customer
		   
	$hasil1 = mysql_query($sqlone1);
			
	$row_kira1 = mysql_num_rows($hasil1);
	if($hasil1=="")
		echo "SQL error:".mysql_error();
	while($papar1=mysql_fetch_array($hasil1))
	{
		$e = $papar1['custIC'];
		?>
		<br>
        
		<table border="0" width="95%" height="50" cellpadding="0" bgcolor="transparent" align="center">	
		<form method="post" action="">
			<tr>
			<td colspan="5" align="center" bgcolor="#FFFFFF">
			<font face="Cooper" size="4" color="black">ITEM(s) IN MY BASKET</font><hr>
	
		<table border="0" align="center" width="500">
			<tr>
			<td><font face="Times New Roman">FULL NAME :</font></td>
			<td>&nbsp;<?php echo $papar1['custName'];?></td>
			</tr>
		
			<tr>
			<td><font face="Times New Roman">EMAIL :</font></td>
			<td>&nbsp;<?php echo $papar1['custEmail'];?></td>
			</tr>
		
			<tr>
			<td><font face="Times New Roman">ADDRESS :</font></td>
			<td>&nbsp;<?php echo $papar1['custAddress'];?></td>
			</tr>
		
			<tr>
			<td><font face="Times New Roman">PHONE NUMBER :</font></td>
			<td>&nbsp;<?php echo $papar1['custPhoneNo'];?></td>
			</tr>
		</table></font>
		</tr><?php 
	}?>
	<tr>
		<table border="0" align="center" width="1200">
    	 <tr>
        <td colspan="7"><hr></td>
		</tr>
		<tr>
			<td align="center"><font face="Adobe Gothic Std"><u>Item code</u></td>
			<td align="center"><font face="Adobe Gothic Std"><u>Item name</u></td>	
			<td align="center"><font face="Adobe Gothic Std"><u>Size</u></td>
        	<td align="center"><font face="Adobe Gothic Std"><u>Color</u></td>
			<td align="center"><font face="Adobe Gothic Std"><u>Quantity</u></td>
			<td align="center"><font face="Adobe Gothic Std"><u>Price</u><br></td>
        </tr>
         
        <?php
		$jumlah = 0;
		$sqlone2 = "SELECT * FROM items WHERE custIC=$ic" ;
		
		$hasil2 = mysql_query($sqlone2);
		
		$row_kira2 = mysql_num_rows($hasil2);
		if($hasil2=="")
			echo "SQL error:".mysql_error();
		while($papar2=mysql_fetch_array($hasil2))
		{
			$e = $papar2['custIC'];?><?php
			echo '<tr>
				<td align="center">'.$papar2['itemCode'].'</td>
				<td align="center">'.$papar2['itemName'].'</td>
				<td align="center">'.$papar2['itemSize'].'</td>
				<td align="center">'.$papar2['itemColor'].'</td>
				<td align="center">'.$papar2['itemQuantity'].'</td>
				<td align="center">'.$papar2['itemTotPrice'].'</td>
			</tr>';
				
			$jumlah=$jumlah + $papar2['itemTotPrice'];
		}	
		?>
		<tr>
		<td colspan="10"><hr></td>
		</tr>
		<tr >
        
		   <td colspan="2" align="center" ><b>TOTAL BILLS : </b></td>
		   <td align="center" ><b>RM <?php echo $jumlah; ?>.00 </b></td>
           <td align="right">Payment Method :      
    						<td><select name="payType">
    						<option value="">--PLEASE CHOOSE--</option>
    						<option value="Online Transfer">Online Transfer</option>
        					<option value="Cash Deposit">Cash Deposit</option>
        					</select></td></td>
        </tr>
		<tr >
		   <td colspan="4" align="right" ><br><br><br />
           		<input type="submit" value="Pay" name="submit2">&nbsp;&nbsp;&nbsp;
           		<input type="submit" value="Clear Basket" name="submit3"> &nbsp;&nbsp;&nbsp;
                <a href="homeafter.php" style="text-decoration: none">Continue Shopping ? </a>
           </td>
	  </tr>
      </table>
</div>

<?php
if(isset($_POST["submit2"]))//proces payment
{
	$sql1 = "SELECT itemTotPrice
		   	FROM items
		   	WHERE custIC=$ic";//the query for get all data in customer   
	$hasil1 = mysql_query($sql1);
	
	$payType = $_POST['payType'];
	$jumlah = $jumlah + $hasil1['itemTotPrice'];
	
	$sql2 = "INSERT INTO payment 
	(custEmail,custIC,payType, payTotal)
	VALUES ('" . $email . "', '" . $ic . "', '" . $payType . "', '" . $jumlah . "')";
	mysql_query($sql2) or die ("Error: " . mysql_error());?>

	<script language="javascript">window.location="payMethod.php";</script>
<?php 
}
?>
<?php
if(isset($_POST["submit3"]))//proces delete
{
	$sql3="DELETE FROM items
			 WHERE custIC=$ic";?>
    <script language="javascript"> alert("Product have been deleted");window.location="payment.php";</script><?php
		
	$hasil3=mysql_query($sql3);
	
	$sql4="DELETE FROM payment
			 WHERE custIC=$ic";
    
	$hasil4=mysql_query($sql4);
}
?>   
	</table></form></td>
<?php 
}?>

<table width="100%" cellpadding="">
<tr bgcolor="#00FFCC"><td colspan="5"><font face="Times New Roman" color="#FFFFFF" size="3">
<b><center>Contact Us :</center></b>
<center>Operating Hours : 8.00am - 6.00pm (Mon - Fri)</center>
<center>Phone : 019-9156778&nbsp;&nbsp;|&nbsp;&nbsp;Email : plussize@gmail.com</center>
<center><img src="ig.png" style="width:25px;height:25px;">&nbsp;  <img src="fb.png" style="width:25px;height:25px;">
<center>Copyright @ 2017 plussize</center>
</td></tr>
</table>
