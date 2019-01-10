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
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include $_SERVER['DOCUMENT_ROOT'].'/plussize/connectionHost.php';
session_start();
if(isset($_SESSION['CUSTEMAIL'])){
?>
<?php
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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment Method</title>
</head>
  <div class="main">
<!--Cash Deposit payment Method-->
<table border="0" width="75%" cellpadding="" bgcolor="transparent" align="center">	

<tr>
	<td colspan="5" align="center"  cellpadding="10" bgcolor="#FFFFFF">
	<font face="Cooper" size="4" color="black">Payment method : Cash Deposit</font><hr>
  
	<table border="0" align="center" width="700">
		<tr>
		<td><font face="Times New Roman" size="4" color="#FF0099">1) Go to Maybank Branch to make cash deposit. </font></td>
		<td></tr></br>
		
		<tr>
		<td><font face="Times New Roman" size="4" color="#FF0099">2) Pay the exact amount to our account Maybank - 15410001020101 (Baju kurung plussize)</font></td>
		<td>
		</tr>
        
        <tr>
		<td><font face="Times New Roman" size="4" color="#FF0099">3) Send the picture of receipt to our email at plussize@gmail.com</font></td>
		<td>
		</tr>
		
	</table></font>
</tr>
</table></td>
 
<!--Online Transfer payment Method-->   
<table border="0" width="75%" cellpadding="5" bgcolor="transparent" align="center">	
	<tr>
	<td colspan="5" align="center" bgcolor="#FFFFFF">
	<font face="Cooper" size="4" color="black">Payment method: Internet Banking</font><hr>
  
<table border="0" align="center" width="700">
	<tr>
		<td><font face="Times New Roman" size="4" color="#FF0099">1) Choose the preferred bank to make online banking. </font></td>
	<td></tr>
		
	<tr>
		<td><font face="Times New Roman" size="4" color="#FF0099">2) Make a transaction.</font></td>
	</tr>
        
    <tr>
		<td><font face="Times New Roman" size="4" color="#FF0099">3) Send the receipt.</font></td>
	</tr>
</table></font>

<table border="0" width="90%" cellpadding="5" bgcolor="transparent" align="center">	
<tr>
	<td colspan="5" align="center" bgcolor="#FFFFFF">
	<font face="Cooper" size="3" color="black">1) Choose your preferred bank for internet banking.</font><hr>
	<table border="0" align="center" width="200">

		<img src="maybank.png" width="130" height="130"  /><tr/> &nbsp;
		<img src="cimb.png" width="130" height="130" /><tr/>&nbsp;
    	<img src="bank islam.jpg" width="130" height="130" /><tr/>&nbsp;	
    	<img src="rhb.png" width="130" height="130"  /><tr/>&nbsp;	
    	<img src="bank rakyat.jpg" width="130" height="130" /><tr/>&nbsp;	
    	<img src="bsn.png" width="130" height="130"  /><tr/>
	</table></font>
</tr>

<table border="0" width="75%" cellpadding="5" bgcolor="transparent" align="center">	
<tr>
	<td colspan="5" align="center" bgcolor="#FFFFFF">
	<font face="Cooper" size="3" color="black">2) Make transaction.</font><hr>
  
	<table border="0" align="center" width="700">
	<tr>
		<td><font face="Times New Roman" size="4" color="#FF0099">1) Pay the exact amount to our account Maybank - 15410001020101 (Baju kurung plussize) </font></td>
	</tr>
		
	<tr>
		<td><font face="Times New Roman" size="4" color="#FF0099">2) Send the picture of receipt to our email at plussize@gmail.com</font></td>
	</tr>
</table></font></td>
</tr>	   
</table>
<tr >
	<td colspan="4" align="right" >
    	<a href="receipt.php" style="text-decoration: none">
    	<input type="submit" value="Proceed to Receipt" name="submit1"> &nbsp;&nbsp;&nbsp;
	</td>
</tr>
</table>
</table>
</div>

<table width="100%" cellpadding="">
<tr bgcolor="#00FFCC"><td colspan="5"><font face="Times New Roman" color="#FFFFFF" size="3">
<b><center>Contact Us :</center></b>
<center>Operating Hours : 8.00am - 6.00pm (Mon - Fri)</center>
<center>Phone : 019-9156778&nbsp;&nbsp;|&nbsp;&nbsp;Email : plussize@gmail.com</center>
<center><img src="ig.png" style="width:25px;height:25px;">&nbsp;  <img src="fb.png" style="width:25px;height:25px;">
<center>Copyright @ 2017 plussize</center>
</td></tr>
</table>