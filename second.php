<!DOCTYPE html>
<html>
<head>
    <title>Online Agri Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
    
		.header {
		  overflow: hidden;
		  background-color: #10151b;
		  padding: 5px 40px ;
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



        main {
            padding-right: 10px;
            padding-left: 10px;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

       

        .product img {
            max-width: 100%;
        }

        .product h3 {
            margin-top: 10px;
        }

        .product .price {
            font-weight: bold;
            color: #007bff;
        }

        footer {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        .product-container {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .product {
  display: inline-block;
  width: 230px;
  height:90;
  border: 1px solid #ccc;
  padding: 10px;
  margin: 10px;
}

.product img {
  width: 225px;
  height: 225px;
  object-fit: cover;
  border: 1px solid #ccc;
}

.product h3 {
  font-size: 18px;
  margin: 10px 0;
}

.product p {
height: 130px;
  margin: 10px 0;
}

.product button {
  background-color: #555;
  color: #fff;
  border: none;
  padding: 8px 12px;
  cursor: pointer;
}

.product button:hover {
  background-color: #555;
}
h1
      {
        background-color:lavender;
        text-align:center;
        background-color:rgb(90, 90, 98,0.5);
        color:orange;
        font-size:45px;
        font-family:Algerian;
        margin-bottom:30px;
      }    </style>
</head>
<body>
    <header>
     
        <div class="header">
          <h1> WELCOME TO OUR AGRI SHOP</h1>
         <a href="#default" class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
         <br>
          <div class="header-right">

            <a style="font-size: larger;" href="index2.php">Home</a>

           <!-- <div class="subnav">
               <button style="font-size: 20px;" class="subnavbtn">Weather<i class="#"></i></button>
               <div class="subnav-content">
               <li><a style="font-size: 20px;" href="weatherwebsite/index.php">Search</a></li>
               <li><a style="font-size: 20px;" href="weatherwebsite/currentLocationW/index.php">Your Current Location</a></li>
               </div>
           </div> -->
           <a style="font-size: 20px;" href="govts.php">Goverment Schemes</a>
           <div class="subnav">
               <button style="font-size: 20px;" class="subnavbtn">Crop<i class="#"></i></button>
               <div class="subnav-content">
               <li><a style="font-size: 20px;" href="seed.php">Info on Seeds</a></li>
               <li><a style="font-size: 20px;" href="seed price.php">Current Seeds Price</a></li>
               <li><a style="font-size: 20px;"  href="Fertilizer.php">Fertilizer</a></li>
               </div>
           </div>
           <div class="subnav">
            <button style="font-size: 20px;" class="subnavbtn">Tech Knowledge<i class="#"></i></button>
            <div class="subnav-content">
            <li><a style="font-size: 20px;"  href="solarpanel.php">Farming Resources</a></li>
            <li><a style="font-size: 20px;" href="tech.php">IOT</a></li>
            </div>
        </div>
           <!-- <a style="font-size: 20px;" href="Feedback.php">Feedback</a> -->
           </div>
    
    </div>
    
    </header>

    <main>
    <div class="product">
      <img src="Product1.jpg" alt="Product 1"/>
      <h3>Product 1</h3>
      <p>Cotton Special (1 lit) Organic Liquid Fertilizer For Cotton Plant |
         Essential Fertilizer For Healthy Plant & Maximize Fruiting |
         Complete Nutrition, Immunity & Growth Booster Liq Fertilizer</p>
         <b><p>Price: 590</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="Product2.jpg" alt="Product 2">
      <h3>Product 2</h3>
      <p>Kisan Paddy Crop Liquid Fertilizer (1 lit) | 
        Paddy Yield Booster, Crop Booster, Crop Enhancer | 
        Paddy Tonic |
        54% off Paddy Plant Growth Booster | 
        Multinutrient</p>
        <b><p>Price: 550</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product3.jpg" alt="Product 3">
      <h3>Product 3</h3>
      <p>Relax Potassium Humate 12% W/W Liquid Fertilizer For All Crop | 
        Plant Fertilizer for Potted Plant | 
        Plant Growth Enhancer | 
        Soil Conditioner | 
        Improve Plant Root System (1 lit)</p>
        <b><p>Price: 450</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product4.jpg" alt="Product 4">
      <h3>Product 4</h3>
      <p>Sharp Garuda Battery Sprayer Machine for Garden Plants Agriculture Farming Fertilizer Pesticide Weed Crop Sprayer (20L White)</p>
      <b><p>Price: 4300</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product5.jpg" alt="Product 5">
      <h3>Product 5</h3>
      <p>OEM 2in1 Battery Sprayer 12V8A with Free HI Jet Gun (Battery and Manual Operated)18L Knapsack Multipurpose Agriculture Sprayer(4 Nozzles Free)Big Battery & High Pressure(Heavy Body)Green Color
        43% </p>&emsp


      <b><p>Price: 3000</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product6.jpg" alt="Product 6">
      <h3>Product 6</h3>
      <p>Kisan Grape Special Liquid Fertilizer (1 lit) | Grape Yield Booster | Grape Crop Enhancer | Grap Tonic | Growth

        Booster</p>
        <b><p>Price: 550</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product7.jpg" alt="Product 7">
      <h3>Product 7</h3>
      <p>BT Special Cotton Liq Fertilizer (1 lit) | Essential Fertilizer For Healthy Plant & Maximize Fruiting | Complete Nutrition, Immunity & Growth Booster Liq Fertilizer.</p>
      <b><p>Price: 550</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product8.jpg" alt="Product 8">
      <h3>Product 8</h3>
      <p>ARJUN Double Motor Battery Operated Sprayer      
        12Vx14Ah High-Capacity Tank 20Ltr for Efficient Crop Care, Gardening, Farmers, Sprayer with 1.7Ah Charger, Agricultural Sprayer Excellence/Battery Powered</p>
        <b><p>Price: 4899</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product9.jpg" alt="Product 9">
      <h3>Product 9</h3>
      <p>Kisan Groundnut Special Liquid Fertilizer | PGR | Ground nut Yield Booster |
        crop booster |
        Agri.Gr.Nut Crop Enhancer |
        NUTRIENT (4 lit) Gr.Nut Tonic |
        Growth Booster |
        
        MULTI</p>
        <b><p>Price: 450</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product10.jpg" alt="Product 10">
      <h3>Product 10</h3>
      <p>Kisan Humic Acid (98%) Fertilizer For All Plant 1000gm

        ( Pack of 4-250 gm) | Plant Fertilizer For Potted Plants |
        
        Plant Growth Enhancer | Soil Conditioner | Improves
        
        Plants Root System</p>
        <b><p>Price: 450</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product11.jpg" alt="Product 11">
      <h3>Product 11</h3>
      <p>Kisan Wheat Special Liquid Fertilizer (1 lit) | PGR |

        Wheat Yield Booster | Wheat Crop Booster |
        
        Enhancer |
        
        Tonic |
        
        Wheat Plant Growth Booster |
        Wheat Crop MULTI NUTRIENTI</p>
        <b><p>Price: 450</p></b>
      <a href="p_login.php"><button>BUY</button></a>
    </div>

    </main>

    <footer>
        <p>Contact us at contact@example.com</p>
    </footer>
</body>
</html>
