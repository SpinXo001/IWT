<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" href="privacypolicy.css" >

</head>

<body bgcolor="#000000">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="0">
    <tr>
      <td width="1044" height="99"><p align="left"><img src="WEBSITE LOGO_2.PNG" width="311" height="80" alt="logo" /></p></td>
      </td>
    </tr>
    <br />
  </table> 
  
  <p><br />
  </p>
  <center><h1>Login form</h1>
    
  </center> 
  
  <div class="header-main">
			
  <center> <p><img src="login.png" width="90" /></p> <table width="327" height="317" border="0" >
  <tr>
    <td><center> <input class="txtfeild" type="text" placeholder="Email"
     name="txtEmail" id="txtEmail"  /> </center></td>
  </tr>
  <tr>
    <td><input class="password" type="password" placeholder="Password" 
      name="txtPassword" id="txtPassword" /></td>
  </tr>
  
  <tr>
  	<td> 
    <div class="login-check">
      <p>
        <input type="checkbox" name="chklog" id="chklog" checked="" />	  
        <i> Keep Me Logged In? </i>    </p>
    </div>
    </td>
  </tr>
  <tr>
    <td><center><input type="submit" name="btLogin" id="btLogin" value="Login" class="button button1" /></center></td>
  </tr>
  <tr>
  <td><p><a href="register.php">Forgot Password?</a></p>
			<p class="right"><a href="register.php">New User? Register</a> <p>&nbsp;</p> </p>

	<div class="clear"></div>
  </td>
  </tr>
  
  
</table>
</center>
</div>


<!------------------------------------------------------------------->

  <?php
  
 
   if(isset($_POST["btLogin"]))
	   {
	      $email=$_POST["txtEmail"];
	      $password=$_POST["txtPassword"];
		  $valid=false;
		  
		  
		
		  
		  $con = mysqli_connect("localhost","root","","wadproject");
		   if(!$con)
			{	
				die("Cannot connect to DB server");		
			}
			
			$sql="SELECT * FROM `busbususer` WHERE `email`='".$email."' and `password`='".$password."'";
			
			$result = mysqli_query($con,$sql);
		 
		  
 if(mysqli_num_rows($result) >0)
		{

			  $valid=true;
		  }
		  else
		  {
			  $valid=false;
		  }
		  
		  if($valid)
		  {
			  $_SESSION["username"] =$email;
			  header('Location:booking.php');
		  }
		  
		  else
		  {
			  
			  echo "Please enter the correct username and password";
		  }
	
	   
	   }
	  
	   ?>
  
  

  
</form>
<p><!--<img src="cartoon-bus-stop-with-transport-and-people-vector-13237302.jpg" width="1519" height="720">
<!--<div class="container">

	<div class="inner">
		<p><b>Privacy Policy</b></p>
</div>
</div>

</div>
 
<div class="footer-main-div" >
<!--<p>
  <center><embed src="Bus Bus -privacy-policy.pdf" type="application/pdf" width="1200" height="600" ></embed></center> 
  <br>
  <br>
  <br>
</p>
-->
  <br  />
  <br  />
  <br  />
  <br  />
  <br  /><br  />
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br  />
  <br  />
  <br  />
  
</p>
<div class="footer-main-div">
<div class="footer-social-icons">
    	<ul>
        	<li><a href="icon/facebook-f-30.png" target="_blank"><i class="fa fa-facebook"></i></a><img src="icon/facebook-f-30.png" width="40" height="40" alt="iconFB" /></li>
            <li><a href="icon/twitter-26.png" target="_blank"><i class="fa fa-twitter"><img src="icon/twitter-26.png" alt="icontwitter" width="31" height="31" usemap="#Map" border="0" />
                  <map name="Map" id="Map">
                    <area shape="circle" coords="33,30,3" href="#" />
                  </map>
          </i></a></li>
            <li><a href="icon/google-plus-32.png" target="_blank"><i class="fa fa-googleplus"></i></a><img src="icon/google-plus-32.png" width="35" height="35" alt="icongoogleplus" /></li>
            <li><a href="icon/youtube-26.png" target="_blank"><i class="fa fa-youtube"></i></a><img src="icon/youtube-26.png" width="34" height="34" alt="iconYouTube" /></li>

  </ul>
</div>
   
   <div class="footer-menu-one">
   	<ul>
        	<li></li>
   	</ul>
   	<ul>
   	  <li><a href="#"> T&C   </a> </li>
   	  <li><a href="#"> Privacy Policy  </a>  </li>
   	  <li><a href="#"> Carries  </a> </li>
   	  <li><a href="#"> Contact  </a> </li>
   	  <li></li>
     </ul>
     
     <div class="copyright">
                    	<p class="white">
                        	<br />
                        	<center> &copy; Copyright &copy; 2019-Transport Service Lanka(Pvt)Ltd.All Right Reserved. </center>
                        </p>
                    <div class="bordernow"></div>
     </div>
</div>


</body>
 </html>
