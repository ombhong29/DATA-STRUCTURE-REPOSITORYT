<!DOCTYPE html>
<html>
<!-- navigation style -->
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
		  font-size: 30px;
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
    .center {
  margin-left: auto;
  margin-right: auto;
}
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IOT</title>
  <link rel="stylesheet" href="seed/style.css">
</head>
<style>

table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
  padding: 18px;
}
th, td {
  background-color: green;
}
header{
  display:  block;
}
p {
   text-align: left;
}
#ourParagraph {
   border-style: solid; 
   padding: 30px;
}
p{
    text-align: justify-all;
}
#ourParagraph {
    border-style: solid; 
    padding: 30px;
}           
h3{
    color:orange;
    font:"bold italic";              
}
</style>
<body>
<header>
<div class="header">
	 <a href="index.php" class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
     <center><h3>WELCOME TO OUR IOT MODULE</h3></center> 
	 <br>
	  <div class="header-right">
      
      <a style="font-size: larger;" href="index2.php">Home</a>
      
      <div class="subnav">
		   <button style="font-size: larger;" class="subnavbtn">Seed Price<i class="#"></i></button>
		   <div class="subnav-content">
		   <li><a href="Fertilizer.php">Fertilizer</a></li>
		   </div>
	   </div>
     
	   <!-- <div class="subnav">
		   <button style="font-size: larger;" class="subnavbtn"><a style="font-size: 20px;" href = "seed price.php">Seed Price</a><i class="#"></i></button>
       <li><a href="Fertilizer.php">Fertilizer</a></li>
	   </div> -->
	   <a href="govts.php">Goverment Schemes</a>
	   <a style="font-size: larger;" href="solarpanel.php">Tech Knowledge</a>
	   <a href="Feedback.php">Feedback</a>
	   </div>
</div>

</header>
<br><br><br><br>

        <a href="https://blynk.cloud/dashboard/272713/global/devices/1888491/organization/272713/devices/996695/dashboard"><h3>Click Here to Check Soil Celsius</h3></a>

<h2>LOOK THE TABLE & CHOOSE WHICH CROP IS TO SOW IN YOUR SOIL IN CELSIUS WISE</h2>
<table class="center">
  <tr>
    <th>CROPS</th>
    <th>Temperature</th>
    <th>SOIL</th>
  </tr>

  <tr>
    <td>Rice</td>
    <td>22 -32 degree Celsius  </td>
    <td>Deep clayey and loamy soil</td>
 
  </tr>
  <tr>
    <td>Wheat</td>
    <td>10-15 degree Celsius (Sowing time); 21-26 degree Celsius (Ripening & Harvesting)</td>
    <td>Well-drained fertile loamy and clayey loamy</td>
   
  </tr>
    <tr>
    <td>Millets</td>
    <td>27-32 degree Celsius</td>
    <td>They are less sensitive to soil deficiencies. They can be grown in inferior alluvial or loamy soil</td>
   
  </tr>
    <tr>
    <td>Grams</td>
    <td>20-25 degree Celsius (Mild cool & Dry Climate)    </td>
    <td>Loamy Soil</td>
 
  </tr>
    <tr>
    <td>Sugar Cane</td>
    <td>21-27 degree Celsius </td>
    <td>Deep rich loamy soil</td>
   
  </tr>
    <tr>
    <td>Cotton</td>
    <td>21-30 degree Celsius</td>
    <td>Black soil of Deccan and Malwa Plateau. However, it also grows well in alluvial soils of the Sutlej-Ganga plain and red and laterite soils of the peninsular region</td>
   
  </tr>

    <tr>
    <td>Tea</td>
    <td>20-30 degree Celsius</td>
    <td>Well drained, deep friable loamy soil.</td>
  
  </tr>

  <tr>
    <td>Maize</td>
    <td>15-27 degree Celsius</td>
    <td>Deep-heavy clay to light sandy loam </td>
  
  </tr>

  <tr>
    <td>Groundnut</td>
    <td>20-30 degree Celsius</td>
    <td>well-drained-sandy loams, red and black cotton </td>
    
  </tr>

  <tr>
    <td>Maize</td>
    <td>15-27 degree Celsius</td>
    <td>Deep-heavy clay to light sandy loam </td>
   
  </tr>

</table>
<br><br><br><br>
	
</iframe>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>