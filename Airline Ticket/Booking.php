<?php 
	include_once 'config.php';
?>

<?php
		//variables for input booking data
		$Fno = $_POST["flightNO"];
		$Fname = $_POST["FlightName"];
		$Aname = $_POST["Airportname"];
		$Fcity = $_POST["fromcity"];
		$Tcity = $_POST["ToCity"];
		$Adu = $_POST["Adults"];
		$Chil = $_POST["children"];
		
		
		$sql="insert into booking(Plane_ID,FlightNO,FlightName,AirportName,FromCity,ToCity,Adults,Children)values('','$Fno','$Fname','$Aname','$Fcity','$Tcity','$Adu','$Chil')";
		
		
		if(mysqli_query($conn,$sql)){
			/*echo "operation success1!!";*/
			echo '<script>alert("Record inserted sucessfully")</script>';
			header("Location:Payment.html");
		}
		else
		{
			echo '<script>alert("Record inserted unsucessfully")</script>';
			//echo "<script> ('Record inserted unsucessfully!!!!') </script>";
		}

	//close the function_exists
	mysqli_close($conn);
	
?>

