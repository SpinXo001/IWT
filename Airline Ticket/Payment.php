<?php 
	include_once 'config.php';
?>

<?php
		//variables for input booking data
		$CName = $_POST["CardName"];
		$CNO = $_POST["CardNO"];
		$EDate = $_POST["ExpireDate"];
		$Pcvv = $_POST["CvvNO"];
		
		$sql="insert into payment(Payment_Code ,Card_Name,Card_NO,Expire_Date,CVV)values('','$CName','$CNO','$EDate','$Pcvv')";
		
		
		if(mysqli_query($conn,$sql)){
			/*echo "operation success1!!";*/
			echo '<script>alert("Record inserted sucessfully")</script>';
			/*header("Location:Payment.html");*/
		}
		else
		{
			echo '<script>alert("Record inserted unsucessfully")</script>';
			//echo "<script> ('Record inserted unsucessfully!!!!') </script>";
		}

	//close the function_exists
	mysqli_close($conn);
	
?>

