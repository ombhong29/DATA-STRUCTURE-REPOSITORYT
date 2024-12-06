<html>
<head>
<title></title>
    <link rel="stylesheet" type="text/css" href="style_register.css">
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
        <a href="index.php" class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
            <div class="header-right">
            <div class="subnav">
		   <button style="font-size: 20px;" class="subnavbtn"><a href ="index.php">Home</a><i class="#" ></i></button>
		   <div class="subnav-content">
		   <!-- <li><a style="font-size: 20px;" href="weatherwebsite/currentLocationW/index.php">Search</a></li> -->
		   </div>

		   <button style="font-size: 20px;" class="subnavbtn"><a href ="login.php">Log in</a><i class="#" ></i></button>

		   <!-- <button style="font-size: 20px;" class="subnavbtn"><a href ="registration.php">Register</a><i class="#" ></i></button> -->

		   <button style="font-size: 20px;" class="subnavbtn"><a style="font-size: 20px;" href="Feedback.php">Feedback</a><i class="#" ></i></button>
		</div>

            </div>
        </div>
    </header>
    <div class="register">
    <?php
                if(isset($_GET['msg']) && !empty($_GET['msg']))
                {
                    $msg = $_GET['msg'];
                    echo "<h3>$msg</h3>";
                }
    ?>
      <form method="post" id="register" action=" ./p_database.php">  
    <img src="https://coffeelogin.netlify.app/assets/person.jpg" class="avatar" alt="img">
        <h1>Place Your Products</h1>
<div>
    <label>Full Name</label>
    <input type="text" name="full_name" id="full_name" placeholder="Enter Your Full Name" required>
</div>
<br>
<div>
    <label>Address</label>
    <input type="text" name="address" id="address" placeholder="Enter Your Address" required>
</div>
<br>
<div>
    <label>Contact Number</label>
    <input type="text" name="contact_no" id="contact_no" value="" placeholder="Enter your Contact Number" required>
</div>
<br>
<div>
    <label>Email</label>
    <input type="email" name="email" id="email" value="" placeholder="enter your email" required>
</div>
<br>
<div>
    <label>Quantity</label>
    <input type="text" name="Quantity" id="Quantity" placeholder="Enter your Product Quantity" required>
</div>
<input type="submit" value="Submit" id="sub">
        </form>
        
    </div>

</body>
</head>
</html>