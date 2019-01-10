 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body 
{
	 background-image: url("bgcolor2.jpg");
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
	border-right: 5px solid #00FFCC;
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

.dropdown-content a:hover {background-color: #f9f9f9}

.dropdown:hover .dropdown-content 
{
    display: block;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
</head>

<body>
<center><h1>PLUSIZE'S BAJU KURUNG</h1></center>
<b><font size="4" color="red">NOTE : You need to login or sign up as a member to see our products</font>
<ul>
  <li><a href="homebefore.php">Home</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Products</a>
    <div class="dropdown-content">
     <a href="#">Modern</a>
      <a href="#">Kebaya</a>
       <a href="#">Abaya</a>
    </div>
  </li>
  <li style="float:right"><a class="active" href="login.php">Login</a></li>
  <li style="float:right"><a class="active" href="signUp.php">Sign Up</a></li>
</ul>

<head><title>Home</title>
</head>

<center>
<font face="Times New Roman" size="3">
    <table border="0">
    	<td colspan="3" align="center"><img src="jubah1.jpg" width="380" height="400" />
        <center><b>Abaya</b></center></td>&nbsp;
        
    	<td colspan="3" align="center"><img src="kurungmodern1.jpg" width="380" height="400"/>
        <center><b>Kurung Modern</b></center></td>&nbsp;&nbsp;
        
    	<td colspan="3" align="center"><img src="kebaya1.jpg" width="380" height="400"/>
        <center><b>Kebaya</b></center></td>
    </table>
</font>
    &nbsp;
    &nbsp;
    &nbsp;
</center>
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