<!DOCTYPE html>
<html lang"en">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="signUp.css" />
    <script src="signUp.js"></script>
  </head>
  <body>
 
<div class="cont_principal">
 </br> </br> </br> </br> </br> </br> 
  <center><h1><font color="#FF3366" > Sign Up now !</font></h1> </center>
  <div class="cont_centrar">
  <div class="cont_login">
    <form name="form1" action="signUp(connection).php" method="POST">
  	
    <div class="cont_tabs_login">
      <ul class='ul_tabs'>
        <li class="active"><a href="#" onclick="sign_up()">SIGN UP</a>
        <span class="linea_bajo_nom"></span>
        </li>
        <li><a href="login.php" onclick="sign_in()">SIGN IN</a><span class="linea_bajo_nom"></span>
        </li>
      </ul>
      </div>
      <?php

	  ?>
  <div class="cont_text_inputs">

     <input type="text" class="input_form_sign d_block  active_inp " placeholder="NAME" name="custName" />
    
    <input type="text" class="input_form_sign d_block  active_inp" placeholder="EMAIL" name="custEmail" />
    
    <input type="text" class="input_form_sign d_block  active_inp " placeholder="IC" name="custIC" />

    <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="password" />  
   <input type="password" class="input_form_sign d_block  active_inp" placeholder="CONFIRM PASSWORD" name="conf_pass_us" />
  
  <input type="text" class="input_form_sign d_block  active_inp " placeholder="ADDRESS" name="custAddress" />
    <input type="text" class="input_form_sign d_block  active_inp " placeholder="PHONE NUMBER" name="custPhoneNo" />

    
    <a href="login.php" class="link_forgot_pass d_block" >Have an account?</a>    
<div class="terms_and_cons d_none">
  
  
    </div>
      </div>
<div class="cont_btn">
     <button class="btn_sign" name="submit1">SIGN UP</button>
      
      </div>
      
    </form>
    </div>
    
  </div>
    </body>
   
</html>

</div>