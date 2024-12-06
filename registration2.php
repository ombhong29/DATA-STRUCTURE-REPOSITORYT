<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
  body{
    background-image: url("img1.jpg");
    background-size: 100%;
  }
  /* Styling for the registration form */
  .registration-form {
    background-color: #f0f0f0; /* Set background color for the form container */
    padding: 20px 40px 20px 20px;
    border-radius: 10px;
    opacity: 0.8; /* Set opacity for the form container */
    width: 300px; /* Set width of the form */
    margin: 0 auto; /* Center the form horizontally */
  }

  .registration-form h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .registration-form input[type="text"],
  .registration-form input[type="email"],
  .registration-form input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
   
    background-color: #f0f0f0;
    border-bottom: 2px black;
    /* border: 1px solid #ccc; */
  }

  .registration-form button[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: #3498db; /* Set background color for the sign-up button */
    color: white;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }

  .registration-form button[type="submit"]:hover {
    background-color: #2980b9; /* Change background color on hover */
  }

  .registration-form a {
    display: block;
    text-align: center;
    text-decoration: none;
    color: #666;
    margin-top: 10px;
  }

  .registration-form a:hover {
    color: #333;
  }
  .header {
  overflow: hidden;
  background-color: black;
  padding: 10px 10px ;
  margin: -10px -10px 40px -10px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}
.header a.logo:hover {
  background-color: black;
}

.header a:hover {
  background-color: rgb(86, 246, 11);
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}
.subnav {
  float: left;
  overflow: hidden;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.subnav .subnavbtn {
  border: none;
  outline: none;
  color: white;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}


.subnav-content {
  display: none;
  position: absolute;

  background-color: black;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: rgb(6, 240, 26);
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}


.btn {
 display: inline-block;
 padding: 30px 30px;
 background-color: #0d3c8c;
 color: #f2f4f4;
 text-decoration: none;
 border-radius: 30px;
}

.agrishop1 {
background-color: rgb(80, 180, 80);
font-size:larger;
 /* width: calc(33.33% - 20px); */
 padding: 20px;
 /* border: 1px solid #ccc;
 border-radius: 5px; */
 margin: 10px;
}
  
</style>
</head>
<body >
<header>
        <div class="header">
        <a href="index.php" class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
            <div class="header-right">
            <div class="subnav">
		   <button style="font-size: 20px;" class="subnavbtn"><a href ="index2.php">Home</a><i class="#" ></i></button>
		   <div class="subnav-content">
		   <!-- <li><a style="font-size: 20px;" href="weatherwebsite/currentLocationW/index.php">Search</a></li> -->
		   </div>

		   <button style="font-size: 20px;" class="subnavbtn"><a href ="login2.php">Log in</a><i class="#" ></i></button>

		   <!-- <button style="font-size: 20px;" class="subnavbtn"><a href ="registration.php">Register</a><i class="#" ></i></button> -->

		   <button style="font-size: 20px;" class="subnavbtn"><a style="font-size: 20px;" href="Feedback.php">Feedback</a><i class="#" ></i></button>
		</div>

            </div>
        </div>
    </header>

    <?php
                if(isset($_GET['msg']) && !empty($_GET['msg']))
                {
                    $msg = $_GET['msg'];
                    echo "<h3>$msg</h3>";
                }
    ?>

<div class="registration-form">
  <h2>Sign Up</h2>
  <form action="registration_db.php" method="post">
    <input type="text" placeholder="Fullname" name="full_name" required>
    <input type="text" placeholder="Username" name="username" required>
    <input type="text" placeholder="Contact Number" name="contact_no" required>
    <input type="email" placeholder="Email" name="email" required>
    <input type="password" placeholder="Password" name="password" required>
    <button type="submit">Sign Up</button>
  </form>
  <a href="login.php">Already have an account? Sign In</a>
</div>

</body>
</html>
