<?php
    extract($_POST);
    if(isset($name) && !empty($name) && isset($email) && !empty($email) && isset($fback) && !empty($fback) )
    {
         $con= mysqli_connect("localhost","root","","agriculture_db");
         $sql= "INSERT INTO feedback_db(name,email,fback) VALUES('$name','$email','$fback')";
   
         if(mysqli_query($con,$sql))
         {
             exit(header("Location: ./Feedback.php?msg=Application Form Registered Successfully"));
         }
         else
         {
            $error=mysqli_error($con);
             exit(header("Location: ./Feedback.php?msg=$error"));
         } 
       
    }else
    {
      exit(header("Location: ./Feedback.php?msg=Invalid Request!"));
    }
?>