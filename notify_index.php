<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Floating Notification</title>
<style type="text/css">

body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: black;
            color: white;
            padding: 10px 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="tel"],
        input[type="date"],
        textarea,
        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px  #f2f2f2;
            font-size: 16px;
            border-bottom: 1px solid black;

        }

        textarea {
            height: 100px;
            resize: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        ::placeholder {
            color: #999;
        }
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

<head>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<title>AYNA</title>
	<!-- viewport meta -->
	<meta name="AYNA" content="All You Need for Agronomy">

	<!-- styles -->
	<!-- helpers -->
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
<!-- Start mainmenu -->
<div class="header">
    <a href="index.php"  class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
    <br>
    <div class="header-right">
        <a style="font-size: larger;" href="index2.php">Home</a>
        <div class="subnav">
            <button class="subnavbtn">Weather<i class="#"></i></button>
            <div class="subnav-content">
                <li><a href="weatherwebsite/index.php">Search</a></li>
                <li><a href="weatherwebsite/currentLocationW/index.php">Your Current Location</a></li>
            </div>
        </div>
        <a href="govts.php">Government Schemes</a>
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

<form id="notificationForm" action="accept-reject.php" method="post">
    <input type="text" id="fullName" name="fullName" placeholder="Full Name">
    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
    <input type="tel" id="City" name="City" placeholder="City">
    <input type="text" id="cropInfo" name="cropInfo" placeholder="Crop Information">
    <input type="date" id="date" name="date" placeholder="Date">
    <textarea id="description" name="description" placeholder="Description"></textarea>
    <button type="submit">Submit</button>
</form>

<script>
    document.getElementById("notificationForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        var fullName = document.getElementById("fullName").value;
        var phoneNumber = document.getElementById("phoneNumber").value;
        var city = document.getElementById("City").value;
        var cropInfo = document.getElementById("cropInfo").value;
        var date = document.getElementById("date").value;
        var description = document.getElementById("description").value;

        var notificationMessage = "New submission:\nFull Name: " + fullName +
            "\nPhone Number: " + phoneNumber +
            "\nCity: " + city +
            "\nCrop Information: " + cropInfo +
            "\nDate: " + date +
            "\nDescription: " + description;

        if (Notification.permission === "granted") {
            // Create a new notification
            var notification = new Notification("Floating Notification", {
                body: notificationMessage,
                icon: "./aynaLogo.png", // You can change the icon URL
            });

            // Close the notification after 5 seconds
            setTimeout(function() {
                notification.close();
                // Open accept-reject.php with form data as URL parameters
                window.open("accept-reject.php?fullName=" + encodeURIComponent(fullName) +
                            "&phoneNumber=" + encodeURIComponent(phoneNumber) +
                            "&city=" + encodeURIComponent(city) +
                            "&cropInfo=" + encodeURIComponent(cropInfo) +
                            "&date=" + encodeURIComponent(date) +
                            "&description=" + encodeURIComponent(description), "_blank");
            }, 5000);
        } else if (Notification.permission !== "denied") {
            // Ask the user for permission to show notifications
            Notification.requestPermission().then(function(permission) {
                if (permission === "granted") {
                    // Show the notification if permission is granted
                    showNotification(notificationMessage);
                }
            });
        }
    });

    function showNotification(message) {
        // Create a new notification
        var notification = new Notification("Floating Notification", {
            body: message,
            icon: "https://via.placeholder.com/100", // You can change the icon URL
        });

        // Close the notification after 5 seconds
        setTimeout(function() {
            notification.close();
            // Open accept-reject.php with form data as URL parameters
            window.open("accept-reject.php?fullName=" + encodeURIComponent(fullName) );
        }, 5000);
        
    }
    window.addEventListener("message", function(event) {
  // Display the response from child window
  alert("Response: " + event.data);
});
</script>

</body>
</html>