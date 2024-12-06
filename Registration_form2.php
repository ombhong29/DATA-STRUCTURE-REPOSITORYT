<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f5f5;
        background-image: url('agri.jpeg');
        background-size: contain;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 500px;
        margin: 50px auto;
        padding: 30px;
        background: #fff;
        border-radius: 10px;
        opacity: 0.7;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    h2 {
        margin-bottom: 20px;
        text-align: center;
        color: #333;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        width: calc(100% - 22px);
        padding: 12px;
        margin: 10px 0;
        border: none;
        border-bottom: 2px solid #ccc;
        outline: none;
        font-size: 16px;
        transition: all 0.3s ease;
        background-color: rgba(255, 255, 255, 0.5);
    }
    input[type="text"]::placeholder, input[type="email"]::placeholder, input[type="password"]::placeholder {
        color: rgba(0, 0, 0, 0.5);
        opacity: 0.8;
    }
    input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
        border-bottom: 2px solid #4CAF50;
    }
    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }
    input[type="radio"] {
        margin-right: 10px;
    }
    .terms {
        margin-top: 20px;
        font-size: 14px;
    }
    input[type="checkbox"] {
        display: inline-block;
        margin-right: 5px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
        width: 100%;
        margin-top: 20px;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
       src:url('./index.php');
    }
    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }
    
    
</style>
</head>
<body>

<div class="container">
    <h2>Registration Form</h2>
    
    <form id="registrationForm"
    action="./index.php" method="get">
        <input type="text" id="firstName" placeholder="Enter your first name">
        <input type="text" id="lastName" placeholder="Enter your last name">
        <input type="text" id="phone" placeholder="Enter your phone number">
        <input type="text" id="address" placeholder="Enter your address">
        <input type="email" id="email" placeholder="Enter your email">
        <input type="password" id="password" placeholder="Enter your password">

        <div>
            <label>Are you a farmer?</label>
            <input type="radio" name="farmer" value="Yes"> Yes
            <input type="radio" name="farmer" value="No"> No
        </div>
        
        <div class="terms">
            <input type="checkbox" id="termsAndConditions"> I agree to the <a href="#">terms and conditions</a>
        </div>
        
        <input type="submit" value="Register" >
    </form>
    <div id="error-msg" class="error"></div>
</div>

<script>
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        event.preventDefault();
        var firstName = document.getElementById("firstName").value.trim();
        var lastName = document.getElementById("lastName").value.trim();
        var phone = document.getElementById("phone").value.trim();
        var address = document.getElementById("address").value.trim();
        var email = document.getElementById("email").value.trim();
        var password = document.getElementById("password").value.trim();
        var termsAndConditions = document.getElementById("termsAndConditions").checked;
        if (firstName === '' || lastName === '' || phone === '' || address === '' || email === '' || password === '') {
            showError("Please fill in all fields");
            return;
        }

        if (!termsAndConditions) {
            showError("Please accept the terms and conditions");
            return;
        }
        alert("Registration successful!");
    });
    function showError(message) {
        document.getElementById('error-msg').innerText = message;
    }
</script>

</body>
</html>
