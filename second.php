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



        main {
            padding: 20px;
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
  width: 300px;
  height:150;
  border: 1px solid #ccc;
  padding: 10px;
  margin: 10px;
}

.product img {
  width: 90%;
  height: 300px;
  object-fit: cover;
  border: 1px solid #ccc;
}

.product h3 {
  font-size: 18px;
  margin: 10px 0;
}

.product p {
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
        font-size:35px;
        font-family:Algerian;
        margin-bottom:30px;
      }    </style>
</head>
<body>
    <header>
        <div class="header">
         <a href="#default" class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
         <br>
          <div class="header-right">

            <a style="font-size: larger;" href="index.html">Home</a>

           <div class="subnav">
               <button style="font-size: 20px;" class="subnavbtn">Weather<i class="#"></i></button>
               <div class="subnav-content">
               <li><a style="font-size: 20px;" href="weatherwebsite/index.html">Search</a></li>
               <li><a style="font-size: 20px;" href="weatherwebsite/currentLocationW/index.html">Your Current Location</a></li>
               </div>
           </div>
           <a style="font-size: 20px;" href="govts.html">Goverment Schemes</a>
           <div class="subnav">
               <button style="font-size: 20px;" class="subnavbtn">Crop<i class="#"></i></button>
               <div class="subnav-content">
               <li><a style="font-size: 20px;" href="seed.html">Info on Seeds</a></li>
               <li><a style="font-size: 20px;" href="seed price.html">Current Seeds Price</a></li>
               <li><a style="font-size: 20px;"  href="Fertilizer.html">Fertilizer</a></li>
               </div>
           </div>
           <div class="subnav">
            <button style="font-size: 20px;" class="subnavbtn">Tech Knowledge<i class="#"></i></button>
            <div class="subnav-content">
            <li><a style="font-size: 20px;"  href="solarpanel.html">Farming Resources</a></li>
            <li><a style="font-size: 20px;" href="tech.html">IOT</a></li>
            </div>
        </div>
           <a style="font-size: 20px;" href="Feedback.html">Feedback</a>
           </div>
    
    </div>
    
    </header>

    <main>
    <div class="product">
      <img src="Product1.jpg" alt="Product1">
      <h3>Product 1</h3>
      <p>Description of Product 1.</p>
      <p>Price: 200</p>
      <a href="Registration_form.html"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="Product2.jpg" alt="Product2">
      <h3>Product 2</h3>
      <p>Description of Product 2.</p>
      <p>Price: 250</p>
      <a href="Registration_form.html"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product3.jpg" alt="Product 3">
      <h3>Product 3</h3>
      <p>Description of Product 3.</p>
      <p>Price: 300</p>
      <a href="Registration_form.html"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product4.jpg" alt="Product 4">
      <h3>Product 4</h3>
      <p>Description of Product 4.</p>
      <p>Price: 500</p>
      <a href="Registration_form.html"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product5.jpg" alt="Product 5">
      <h3>Product 5</h3>
      <p>Description of Product 5.</p>
      <p>Price: 400</p>
      <a href="Registration_form.html"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product6.jpg" alt="Product 6">
      <h3>Product 6</h3>
      <p>Description of Product 6.</p>
      <p>Price: 600</p>
      <a href="Registration_form.html"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product7.jpg" alt="Product 7">
      <h3>Product 7</h3>
      <p>Description of Product 7.</p>
      <p>Price: 240</p>
      <a href="Registration_form.html"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product8.jpg" alt="Product 8">
      <h3>Product 8</h3>
      <p>Description of Product 8.</p>
      <p>Price: 350</p>
      <a href="Registration_form.html"><button>BUY</button></a>
    </div>

    <div class="product">
      <img src="product9.jpg" alt="Product 9">
      <h3>Product 9</h3>
      <p>Description of Product 9.</p>
      <p>Price: 450</p>
      <a href="Registration_form.html"><button>BUY</button></a>
    </div>

    </main>

    <footer>
        <p>Contact us at contact@example.com</p>
    </footer>
</body>
</html>
