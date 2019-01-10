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
}

.active 
{
    background-color: lightpink;
}

/*pictures fb and instagram*/
#navlist {
    position: relative;
}

#navlist li 
{
	margin: 10;
	padding: 10;
	list-style: none;
	position: absolute;
	top: 10px;
}

#navlist li, #navlist a 
{
    height: 44px;
    /*display: block;*/
}

/*dropdown button*/
li a, .dropbtn 
{
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
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
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #00FFCC}

.dropdown:hover .dropdown-content 
{
    display: block;
}

</style>

<body>
<center><h1>PLUSIZE'S BAJU KURUNG</h1></center>

<ul>
  <li><a href="homeafter.php">Home</a></li>
  <li><a href="#news">About Us</a></li>
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