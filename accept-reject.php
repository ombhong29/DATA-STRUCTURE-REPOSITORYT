<!DOCTYPE html>
<html lang="en">
<style type="text/css">

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

body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 35px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        p {
            margin-bottom: 10px;
            color: black;
        }
        strong {
            font-weight: bold;
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
</style>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Accept or Reject</title>
<link rel="stylesheet" href="css/popup.css">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<!-- fontawesome css -->
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
	<!-- strock gap icons -->
	<link rel="stylesheet" href="plugins/Stroke-Gap-Icons-Webfont/style.css">
	<!-- revolution slider css -->
	<link rel="stylesheet" href="plugins/revolution/css/settings.css">
	<link rel="stylesheet" href="plugins/revolution/css/layers.css">
	<link rel="stylesheet" href="plugins/revolution/css/navigation.css">
	<!-- flaticon css -->
	<link rel="stylesheet" href="plugins/flaticon/flaticon.css">
	<!-- jQuery ui css -->
	<link href="plugins/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet">
	<!-- owl carousel css -->
	<link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.theme.default.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="plugins/animate.min.css">
	<!-- fancybox -->
	<link rel="stylesheet" href="plugins/fancyapps-fancyBox/source/jquery.fancybox.css">
	<link rel="icon" href="images/aynaLogo.png" type="image/gif" sizes="16x16">


	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">



</head>
<body>
<style type="text/css">

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
</style>	
</head>
<body>
<header>
	<div class="header">
	 <a href="index.php"  class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
	 <br>
	  <div class="header-right">
		
        <a style="font-size: larger;" href="index.php">Home</a>
     
	   <div class="subnav">
		   <button class="subnavbtn">Weather<i class="#"></i></button>
		   <div class="subnav-content">
		   <li><a href="weatherwebsite/index.php">Search</a></li>
		   <li><a href="weatherwebsite/currentLocationW/index.php">Your Current Location</a></li>
		   </div>
	   </div>
	   <a href="govts.php">Goverment Schemes</a>
	   <div class="subnav">
		   <button class="subnavbtn">Crop<i class="#"></i></button>
		   <div class="subnav-content">
		   <li><a href="seed.php">Info on Seeds</a></li>
		   <li><a href="seed price.php">Current Seeds Price</a></li>
		   <li><a href="Fertilizer.php">Fertilizer</a></li>
		   </div>
	   </div>
	   <div class="subnav">
		<button class="subnavbtn">Tech Knowledge<i class="#"></i></button>
		<div class="subnav-content">
		<li><a href="solarpanel.php">Farming Resources</a></li>
		<li><a href="tech.php">IOT</a></li>
		</div>
	</div>
	   </div>

</div>

</header>
<div class="container">
        <h1 style="color:black;">Farmer Requirement</h1>
        <p><strong>Full Name:</strong> <?php echo isset($_GET['fullName']) ? htmlspecialchars($_GET['fullName']) : 'N/A'; ?></p>
        <p><strong>Phone Number:</strong> <?php echo isset($_GET['phoneNumber']) ? htmlspecialchars($_GET['phoneNumber']) : 'N/A'; ?></p>
        <p><strong>City:</strong> <?php echo isset($_GET['city']) ? htmlspecialchars($_GET['city']) : 'N/A'; ?></p>
        <p><strong>Crop Information:</strong> <?php echo isset($_GET['cropInfo']) ? htmlspecialchars($_GET['cropInfo']) : 'N/A'; ?></p>
        <p><strong>Date:</strong> <?php echo isset($_GET['date']) ? htmlspecialchars($_GET['date']) : 'N/A'; ?></p>
        <p><strong>Description:</strong> <?php echo isset($_GET['description']) ? htmlspecialchars($_GET['description']) : 'N/A'; ?></p>
      <button id="acceptButton">Accept</button>
      <button id="rejectButton">Reject</button>
</div>


<script>
document.getElementById("acceptButton").addEventListener("click", function() {
  // Send message to the parent window indicating accept
  window.opener.postMessage("Accepted", "*");
});

document.getElementById("rejectButton").addEventListener("click", function() {
  // Send message to the parent window indicating reject
  window.opener.postMessage("Rejected", "*");
});
</script>

</body>
</html>
