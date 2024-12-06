<?php
    extract($_POST);
    if(isset($full_name) && !empty($full_name) && isset($address) && !empty($address) && isset($contact_no) && !empty($contact_no)&& isset($email) && !empty($email)&& isset($Quantity) && !empty($Quantity))
    {
           
         $con= mysqli_connect("localhost","root","","agriculture_db");
         $sql= "INSERT INTO
         p_db(full_name,address,contact_no,email,Quantity)
         VALUES('$full_name','$address','$contact_no','$email','$Quantity')";
         
      
        if(mysqli_query($con,$sql))
        {
            exit(header("Location: ./p_login.php?msg=Application Form Registered Successfully"));
             
         
        }
         else
         {
            $error=mysqli_error($con);
             exit(header("Location: ./p_login.php?msg=$error"));
         } 
       
    }else
    {
      exit(header("Location: ./p_login.php?msg=Invalid Request!"));
    }
    
?>