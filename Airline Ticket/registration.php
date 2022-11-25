<?php 

$con = new mysqli("localhost","root","","airline");



if(!$con) {
  die("Not Conncted"); 
}

else{

  if(isset($_POST['register']))
  {
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $phone =mysqli_real_escape_string($con,$_POST['number']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password= mysqli_real_escape_string($con,$_POST['password']);
    $conformpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
 

        $sql="INSERT INTO registration(user_name,phone_number,email,password,confirm_password) VALUES('$name','$phone','$email','$password','$conformpassword')";
      


        

       

        if(mysqli_query($con,$sql))
        {
            echo "Records added successfully.";
        }
         else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
      
        }
        mysqli_close($con);
  }
}



?>