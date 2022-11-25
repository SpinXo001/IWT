\<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add</title>
		<link rel="stylesheet" href="Add.css">
</head>

<body bgcolor="#000000">
<form action="add.php" method="post" enctype="multipart/form-data" >
  <table width="100%" border="0">
    <tr>
      <td width="1044" height="78"><p align="left"><img src="WEBSITE LOGO_2.PNG" width="267" height="71" alt="logo" /></p></td>
      
     <td width="60"><p align="center"><a href="https://www.facebook.com/" ><img src="facebook.png" width="30" height="30" /></p></td>
      
      <td width="60"><p align="center"><a href="https://www.instagram.com/"> <img src="instagram.png" width="30" height="30" /></p></td>
      
      <td width="60"><p align="center"><a href="https://twitter.com/"><img src="twitter.png" width="35" height="35" /> </p></td>
      
      <td width="30"></td>
      
      
      <td width="50">
      <div class="dropdown">
    <center><button class="dropbtn"><b>Admin@gmail.com</b>
      <i class="fa fa-caret-down"></i>
    </button></center>
    <div class="dropdown-content">
      <a href="#">Profile</a>
      <a href="#">Inbox</a>
    </div>
   </div></td>
   
      <td width="50"><p align="center"><img src="man.png" width="40" height="40" />
      </p></td>
    </tr>
    <br />
  </table> 

 <div class="navbar">
  <a href="Admin_Panel.php"><b>DashBoard</b></a>
  <a href="Add.php"><b>Add</b></a>
  
  <!--<div class="dropdown">
    <button class="dropbtn"><b>Delete</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="login.php">High-Way A/C</a>
      <a href="login.php">Normal-Way A/C</a>
    </div>
   </div> -->
  
   <a href="Delete.php"><b>Delete</b></a>
     <a href="Update.php"><b>Update</b></a> 
     <a href="home.php"><img src="location.png" width="25" /><b></b></a> 
</div>

 
<br />

<p><center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><img src="add-friend.png" width="200" height="200" /></p>
</center></p>

  
<div class="container">
  
</p>
<table width="514" height="119" align="center">
  <tr>
    <td>
    <h1 class="h1">ADD NOW</h1>
    </td>
    </tr>
    <tr>
<td width="506" height="46">
<input method="post" name="txtpickme" type="text"  placeholder="Pick-Up Location" id="txtpickme"/>
</td>
</tr>
<tr>
<td>
<input method="post" name="txtdropoff" type="text" placeholder="Drop-Off Location" id="txtdropoff" />
</td>
</tr>
<tr><td><input method="post" name="txtNumber" type="text" placeholder="Bus-NO" id="txtNumber" /></td>
</tr>
<tr>
<td>
<input method="post" name="txtfee" type="text" placeholder="Cost"   id="txtfee"/>
</td>
</tr>
<tr>
</tr>
<tr>
<td>
<br />
<br />
<center><input type="submit" name="btLogin" id="btLogin" value="ADD" class="button" />
</center>

</td>
</tr>
</table>

   <br />
   <br />
   <br />
   <br />
   <br />
   <br /> 
   <br />
   <br />
   
   
<div class="footer-main-div" >
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
   <br />
   <br />
<div class="footer-menu-one">
   	<ul >
        	<li></li>
        	<li><a href="#">  T&C   </a> </li>
            <li><a href="#">  Privacy Policy   </a>  </li>
            <li><a href="#">  Carries   </a> </li>
            <li><a href="#">  Contact   </a> </li>
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
<?php

     if(isset($_POST["btLogin"]))
	 {
		
		 $pickmelocation = $_POST["txtpickme"];
		 $dropofflocation = $_POST["txtdropoff"];
		 $busnum = $_POST["txtNumber"];
		 $fee = $_POST["txtfee"];
		 
		 $con = mysqli_connect("localhost","root","","wadproject");
					if(!$con)
					{	
					die("Cannot connect to DB server");		
					}
					
              $sql = "INSERT INTO `busshedule`(`rootID`,`pickmelocation`, `dropofflocation`, `busnum`, `fee`) VALUES (NULL,'".$pickmelocation."','".$dropofflocation."','".$busnum."','".$fee."');";
					
					mysqli_query($con,$sql);
	 }

?>
</form>
</body>
</html>
