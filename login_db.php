<?php
    extract($_POST);
    if(isset($username) && !empty($username) && isset($password) && !empty($password) )
    {
           
         $con= mysqli_connect("localhost","root","","agriculture_db");
         $sql= "INSERT INTO
         login_db(username,password)
         VALUES('$username','$password')";
         
         if(isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            // Check if username and password are not empty
            if(!empty($username) && !empty($password)) {
                // Query to check user credentials
                $sql = "SELECT * FROM registration_tb WHERE username = '$username' AND password = '$password'";
                $result = $con->query($sql);
            
                if ($result->num_rows > 0) {
                    // Redirect user to home page
                    header("Location: index2.php");
                    exit();
                } else {
                    // Invalid credentials, redirect back to login page with error message
                    header("Location: login2.php?msg=Invalid username or password");
                    exit();
                }
            } else {
                // Redirect back to login page with error message
                header("Location: login2.php?msg=Please fill all fields");
                exit();
            }
        } else {
            // Redirect back to login page if form data is not set
            header("Location: login2.php");
            exit();
        }
        if(mysqli_query($con,$sql))
        {
            exit(header("Location: ./login2.php?msg=Application Form Registered Successfully"));
             
         
        }
         else
         {
            $error=mysqli_error($con);
             exit(header("Location: ./login2.php?msg=$error"));
         } 
       
    }else
    {
      exit(header("Location: ./login2.php?msg=Invalid Request!"));
    }
    
?>