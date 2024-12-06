<?php
    extract($_POST);
    if(isset($full_name) && !empty($full_name) && isset($username) && !empty($username) && isset($contact_no) && !empty($contact_no) && isset($email) && !empty($email) && isset($password) && !empty($password))
    {
           
         $con= mysqli_connect("localhost","root","","agriculture_db");
         $sql= "INSERT INTO
         registration_tb(full_name,username,contact_no,email,password)
         VALUES('$full_name','$username','$contact_no','$email','$password')";
   
         if(mysqli_query($con,$sql))
         {
             exit(header("Location: ./registration2.php?msg=Application Form Registered Successfully"));
         }
         else
         {
            $error=mysqli_error($con);
             exit(header("Location: ./registration2.php?msg=$error"));
         } 
       
    }else
    {
      exit(header("Location: ./registration2.php?msg=Invalid Request!"));
    }
?>