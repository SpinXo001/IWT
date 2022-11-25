<?php 
	include_once 'config.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HISTORY FLIGHTS</title>
		<link rel="stylesheet" href="veiw.css">
</head>

<body bgcolor="#000000">
<form action="add.php" method="post" enctype="multipart/form-data" >
  <table width="100%" border="0">
    <tr>
      <td width="1044" height="78"><p align="left"><<<img src="FLIGHT LOGO2.png" width="254" height="144" alt="logo" /></p></td>
      
     <td width="60"><p align="center"><a href="https://www.facebook.com/" ><img src="icon\facebook.png" width="30" height="30" /></p></td>
      
      <td width="60"><p align="center"><a href="https://www.instagram.com/"> <img src="icon\instagram.png" width="30" height="30" /></p></td>
      
      <td width="60"><p align="center"><a href="https://twitter.com/"><img src="icon\twitter.png" width="35" height="35" /> </p></td>
      
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
   
      <td width="50"><p align="center"><img src="imgs\man.png" width="40" height="40" />
      </p></td>
    </tr>
    <br />
  </table> 

 <div class="navbar">
  <a href="BOOKING_HOME.html"><b>DashBoard</b></a>
  <a href="veiw.html"><b>History Flights</b></a>
  <a href="#"><b>Cancel Flight</b></a>
  <a href="#"><b>Update</b></a> 
    
</div>

 
<br />

<p><center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><img src="imgs\file.png" width="100" height="100" /></p>
  <p>&nbsp;</p>
</center></p>

  
<div class="container">
  
</p>
<table width="514" height="119" align="center">

<tr>
<td width="680" height="46">
<h2 class="h2">FLIGHT NO: <input method="post" name="txtpickme" type="text"  placeholder="Flight NO" id="txtpickme"/></h2>
<p>&nbsp;</p>
</td>

</td>
</tr>
<tr>
<td width="680" height="46">
<h2 class="h2">DATE: <input style="margin-left:62px" method="post" name="txtpickme" type="date"  placeholder="Flight NO" id="txtpickme"/></h2>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td width="680" height="46">
<br />
<center><input type="submit" name="btLogin" id="btLogin" value="VEIW" class="button button1" />
</center>
</td>
</tr>
</table>

	
   <ul><ul><ul><ul><center>
	<h2 class="h2">ALL BOOKED fLIGHTS </h2>
	<table border="2" width="98%" bgcolor="#FFFFFF">
		<tr>
			<th class="col1"> Flight Number </th>
			<th class="col1"> Flight Name  </th>
			<th class="col1"> Airport Name </th>
			<th class="col1"> From City </th>
			<th class="col1"> To City  </th>
			<th class="col1"> No. Adults  </th>
			<th class="col1"> No. Children   </th>
		</tr>
		<?php
		$sql = "select * from booking";
		$result = $conn->query($sql);
		
		if($result->num_rows>0){
			
			while($row=$result->fetch_assoc()){
				echo "<tr><td>".$row["FlightNO"]."</td><td>".$row["FlightName"]."</td><td>".$row["AirportName"]."</td><td>".$row["FromCity"]."</td><td>".$row["ToCity"]."</td><td>".$row["Adults"]."</td><td>".$row["Children"]."</td></tr>";
				
			}
		}
		else{
			echo "0 results";
		}
		
		echo "</table>";
		
		$conn->close();
		
		?>
		
		</table></ul></ul></ul></ul>

<!-- Footer Implementation -->

<div class="footer-main-div" >
<div class="footer-social-icons">
    	<ul>
        	<li><a href="icon/facebook-f-30.png" target="_blank"><i class="fa fa-facebook"></i></a><img src="icon/facebook-f-30.png" width="50" height="53" alt="iconFB" /></li>
            <li><a href="icon/twitter-26.png" target="_blank"><i class="fa fa-twitter"><img src="icon/twitter-26.png" alt="icontwitter" width="41" height="51" usemap="#Map" border="0" />
                  <map name="Map" id="Map">
                    <area shape="circle" coords="41,48,5" href="#" />
                  </map>
          </i></a></li>
            <li><a href="icon/google-plus-32.png" target="_blank"><i class="fa fa-googleplus"></i></a><img src="icon/google-plus-32.png" width="38" height="47" alt="icongoogleplus" /></li>
            <li><a href="icon/youtube-26.png" target="_blank"><i class="fa fa-youtube"></i></a><img src="icon/youtube-26.png" width="39" height="46" alt="iconYouTube" /></li>

  </ul>
</div>
   
   <div class="footer-menu-one">
   <p>&nbsp;</p>
   	<ul >
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
                        	<center> &copy; Copyright &copy; 2019-Transport Service Lanka(Pvt)Ltd.All Right Reserved. </center>
                        </p>
                    <div class="bordernow"></div>
     </div>
</div>



</body>

</form>
</body>
</html>
