<title>Receipt</title>
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
img
{
    border-radius: 50%;
	border: 5px solid #00FFCC;
	-webkit-transition: width 2s, height 4s; 
    transition: width 2s, height 4s;
}

img:hover 
{
    width: 300px;
    height: 300px;
}

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
</style>
</head>

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
		$a = $papar1['custIC'];
		?>
		<br>
		<p>&nbsp;</p>
        
		<table border="0" width="95%" height="50" cellpadding="0" bgcolor="transparent" align="center">	
		<form method="post" action="">
			<tr>
			<td colspan="5" align="center" bgcolor="#FFFFFF">
			<font face="Cooper" size="4" color="black">Receipt</font><hr>
	
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
        <td colspan="6"><hr></td>
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
        $sqlone3 = "SELECT * FROM items WHERE custIC=$ic" ;
		
		$hasil3 = mysql_query($sqlone3);
		
		$row_kira3 = mysql_num_rows($hasil3);
		if($hasil3=="")
			echo "SQL error:".mysql_error();
		while($papar3=mysql_fetch_array($hasil3))
		{
			$f = $papar3['custIC'];?><?php
			echo '<tr>
					<td align="center">'.$papar3['itemCode'].'</td>
					<td align="center">'.$papar3['itemName'].'</td>
					<td align="center">'.$papar3['itemSize'].'</td>
					<td align="center">'.$papar3['itemColor'].'</td>
					<td align="center">'.$papar3['itemQuantity'].'</td>
					<td align="center">'.$papar3['itemTotPrice'].'</td>
				</tr>';
		}	
		?>
        </table>
        <table border="0" align="center" width="1200">
    	 <tr>
        <td colspan="6"><hr></td>
		</tr>
		<tr>
			<td align="center"><font face="Adobe Gothic Std"><u>Pay Code</u></td>
			<td align="center"><font face="Adobe Gothic Std"><u>Pay Type</u></td>	
			<td align="center"><font face="Adobe Gothic Std"><u>Total Payment</u></td>
        </tr>
         
        <?php
		$sqlone2 = "SELECT * FROM payment WHERE custIC=$ic" ;
		
		$hasil2 = mysql_query($sqlone2);
		
		$row_kira2 = mysql_num_rows($hasil2);
		if($hasil2=="")
			echo "SQL error:".mysql_error();
		while($papar2=mysql_fetch_array($hasil2))
		{
			$e = $papar2['custIC'];?><?php
			echo '<tr>
					<td align="center">'.$papar2['payCode'].'</td>
					<td align="center">'.$papar2['payType'].'</td>
					<td align="center">'.$papar2['payTotal'].'</td>
				</tr>';
		}	
		?>
		<tr>
		<td colspan="9"><hr></td>
		</tr>
		<tr >
		   <td colspan="4" align="right" >
           		<input type="button" name="button" value="PRINT" onClick="window.print()">&nbsp;
				<a href="payment.php" style="text-decoration: none">Home</a>
           </td>
	  </tr>
      </table>
</div>
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