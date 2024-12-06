<?php
    extract($_GET);
    if(isset($name) && !empty($name) && isset($email) && !empty($email) && isset($address) && !empty($address) && isset($mobile_no) && !empty($mobile_no))
    {
           
         $con= mysqli_connect("localhost","root","","sample");
         $sql= "INSERT INTO `p_reg`(`name`, `email`, `address`, `mobile_no`) VALUES ('$name','$email','$address','$mobile_no')";
   
         if(mysqli_query($con,$sql))
         {
             exit(header("Location: ./Registration_form.php?msg=Application Form Registered Successfully"));
         }
         else
         {
             $error=mysqli_error($con);
             exit(header("Location: ./Registration_form.php?msg=$error"));
         } 
       
    }else
    {
      exit(header("Location: ./Registration_form.php?msg=Invalid Request!"));
    }
?>