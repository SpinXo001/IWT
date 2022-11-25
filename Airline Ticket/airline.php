<!DOCTYPE html>
<html>
<head>
	<title>Airline Ticket Reservation</title>
   <link rel="stylesheet" href="css/registration.css"/>

   
</head> 

   <div class="container1">
  <img src="Airline_Runway3.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>Airline Ticket Reservation System</h1>
    <p>Enjoy Your Journey.......</p>
  </div>
</div>
    

<br><br>
         
<form action="" method="POST" enctype="multipart/form-data" name="form1" id="form1" >
  <table width="100%" border="0">
    <tr>
      <td width="500" height="150"><p align="left"><img src="123.png" width="254" height="100" alt="logo" /></p></td>
      
      <td width="350">
      <input style="margin-left:170px" type="text_search" name="search" placeholder="Search..">
      </td>
      
      <td width="217"><label for="txtEmail"></label>

		

     <center> <input class="txtfeild" type="text" placeholder="Email" name="txtEmail" id="txtEmail" /></center></td>
      <td width="217"><label for="txtPassword"></label>
      <center><input type="text" placeholder="Password" name="txtPassword" id="txtPassword" /></center></td>
      <td width="173"><a href="login.html"><input type="submit" name="btLogin" id="btLogin" value="Login" class="button button1"/></a></td>
    </tr>
  
    <br />
  </table> 
</form>

<div class="navbar">
	 <div class="dropdown" style="margin-top: 4px;">
  <a href="#"><b>Home</b></a>
</div>
  <div class="dropdown">
    <button class="dropbtn"><b>Booking</b>
      <i class="fa fa-caret-down"></i> 

    </button>
    <div class="dropdown-content">
   	  <a href="Booking.html">Reservation </a>
      <a href="Payment.html">Payment </a>
      <a href="#">Boarding Pass</a>
    </div>
   </div>
    <div class="dropdown" style="margin-top: 6px;">
  <a href="#"><b>Registration</b></a>  
   <a href="#"><b>Flight</b></a>
     <a href="#"><b>Gallery</b></a> 
       <a href="#"><b>About Us</b></a>
         <a href="#"><b>Inqueries</b></a>  

        </div> 
         <!-- Admin -->
  
        <a href="login_admin.html"><img src="imgs\admin.png" width="32" height="33" /><b></b></a>
        
</div>
 <br><br>
</head>


<body>

	   <script  type="text/javascript" src="registration.js"></script>
s
	
      
    <form action="registration.php" onsubmit="return validateform()" method="POST">
    <div  style="margin-left:20%;width:800px; border:2px solid white;">
                 
        <br><br>  <span style="margin-left:300px;"><strong>REGISTER YOUR DETAILS</strong></span>  <br><br><br>
        <div style="margin-left: 250px;">      

		  <label for="uname"><b>User Name</b></label><br>
		  <input type="textt" placeholder="Enter User Name" name="name" id="uname" required><br><br>

  
		  <label for="no"><b>Phone Number</b></label><br>
		  <input type="number" placeholder="Enter Number" name="number" id="no" required><br><br>


		  <label for="psw"><b>Email</b></label><br>
		  <input type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
  


		  <label for="psw"><b>Password</b></label><br>
		  <input type="password" placeholder="Enter Password" name="password" id="psw" required><br><br>
  
  
  
  
		  <label for="psw"><b>Confirm Password</b></label><br>
		  <input type="password" placeholder="Enter Password" name="cpassword" id="psw2" required><br><br>
  
  
		 
  
		  <button type="submit" name="register" value="register" style="width:50%">Sign In </a></button><br>
		  <label>
			<input type="checkbox"  name="remember"> Remember me

      </label>
  </form>
      <br><br>
      	
     </div>
    </div>  

	 
    <br><br>         
  

  <div class="footer-main-div">
  <div class="footer-social-icons">
    	<ul>
       <li><a href="https://www.facebook.com/welcometoBIAsrilanka/" target="_blank"><i class="fa fa-facebook"></i><img src="icon/facebook-f-30.png" width="40" height="46" alt="iconFB" /></li></a>
       <li><a href="https://twitter.com/bia_srilanka?lang=en" target="_blank"><i class="fa fa-twitter"><img src="icon/twitter-26.png" alt="icontwitter" width="40" height="45" usemap="#Map" border="0"/>
       </i></a></li>

            <li><a href="https://www.airport.lk/" target="_blank"><i class="fa fa-googleplus"></i><img src="icon/google-plus-32.png" width="39" height="45" alt="icongoogleplus" /></li></a>
            <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i><img src="icon/youtube-26.png" width="38" height="44" alt="iconYouTube" /></li></a>

  </ul>
</div>
   
   <div class="footer-menu-one">
   	<ul>
        	<li></li>
        	<li><a href="#"> T&C   </a> </li>
            <li><a href="#"> Privacy Policy  </a>  </li>
            <li><a href="#"> Carries  </a> </li>
            <li><a href="#"> Contact  </a> </li>
            <li></li>
     </ul>
     
     <div class="copyright">
                    	<p class="white">
                        	<br />
                        	<center> &copy; Copyright &copy; 2019-Airline Ticket Reservation (PVT) Ltd.   All Right Reserved. </center>
                        </p>
                    <div class="bordernow"></div>
     </div>
    </div>   


</body>
</html>