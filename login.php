<html>
<head>
<title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style_login.css">
<body>
    <style>
       style type="text/css">

.header {
  overflow: hidden;
  background-color: black;
  padding: 10px 30px ;
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
    
    <header>
        <div class="header">
        <a href="#default" class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
            <div class="header-right">
            <div class="subnav">
		   <button style="font-size: 20px;" class="subnavbtn"><a href ="index.php">Home</a><i class="#" ></i></button>
		   <div class="subnav-content">
		   <!-- <li><a style="font-size: 20px;" href="weatherwebsite/currentLocationW/index.php">Search</a></li> -->
		   </div>

		   <!-- <button style="font-size: 20px;" class="subnavbtn"><a href ="login.php">Log in</a><i class="#" ></i></button> -->

		   <button style="font-size: 20px;" class="subnavbtn"><a href ="registration.php">Register</a><i class="#" ></i></button>

		   <button style="font-size: 20px;" class="subnavbtn"><a style="font-size: 20px;" href="Feedback.php">Feedback</a><i class="#" ></i></button>
		</div>

            </div>
        </div>
    </header>

        <div class="loginbox">
        <?php
                if(isset($_GET['msg']) && !empty($_GET['msg']))
                {
                    $msg = $_GET['msg'];
                    echo"<h3 >$msg</h3>";
                }
              ?>
            <form action = "login_db.php" method = "post">
    <img src="https://coffeelogin.netlify.app/assets/person.jpg" class="avatar" alt="img">
        <h1>Login Here</h1>
            <p>Username</p>
            <input type="text" name="username" id = "username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" id = "password" placeholder="Enter Password">
            <!-- <input type="submit" name="" value="Login"> -->
            <input type="submit" name="" value="Login">
            <!-- <a href="#">Lost your password?</a><br> -->
            <a href="registration.php">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>