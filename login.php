<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Fragrance</title>
    <!-- ikonat boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link css -->
    <link rel="stylesheet" text="text/css" href="style.css">
    <link rel="stylesheet" text="text/css" href="productstyle.css">
    <link rel="stylesheet" text="text/css" href="styleshop.css">
    <link rel="stylesheet" text="text/css" href="contactstyle.css">
    <link rel="stylesheet" text="text/css" href="styleform.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 
    <!-- Navbar logo -->
<section id="header">
        <a href="#"><img src="assets/index/LOGOO.jpg.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class="active" href="login.php">Login</a></li> 
                <li><a href="signup.php">Sign Up</a></li>  
                <li id="lg-bag"><a href="cart.php"><i class='bx bx-shopping-bag'></i></a></li>
                <a href="#" id="close"><i class='bx bx-x-circle'></i></a>
            </ul>
        </div>
        <div id="mobile">
          <a href="cart.php"><i class='bx bx-shopping-bag'></i></a>
          <i id="bar" class='bx bx-menu'></i>
        </div>
</section>

<div class="container">

<?php
      if (isset($_POST["login"])){
        
          $email = $_POST["email"];
          $password = $_POST["password"];
          
    
          require_once "connect.php";
          // Checking empty fields
          $sql = "SELECT * FROM users WHERE email = '$email'";
          $result = mysqli_query($conn, $sql);
          $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
          if ($user) {
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user'] = "yes";
                header( 'Location: cart.php');
                die();
                }else{
                    echo "<div class='alert alert-danger'>Wrong Password! Please try again.</div>";
                }
            }else{
             echo "<div class='alert alert-danger'>Email does not match</div>";
            }
   }
?>
<form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
        <div><p style="margin-top:2%;">Not registered yet.<br> <a href="signup.php" style="text-decoration: none; color:red;">Register Here</a></p></div>    
</form>
</div>  

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail updates about our latest shop and <span><a href="shop.php" style="text-decoration: none;color: blue;">special offers!</a></span></p>
    </div>
    <div class="form">
       <input type="text" placeholder="Your E-mail address">
       <button  onclick="alert('Register Now')" type="button" class="btn btn-danger" style="width: 60%;"><a href="signup.php" style="text-decoration:none;color:white;">Sign Up</a></button>
    </div>
 </section>

<!-- fundi -->
<footer class="section-p1" style="background-color: rgb(255, 255, 255);">
    <div class="col">
      <img src="assets/index/LOGOO.jpg.png" alt="" style="width: 80%; margin-bottom: 30px;">
         <h4>Contact</h4>
         <p><strong>Address:</strong>Tirana, Albania ,Komuna Parisit</p>
         <p><strong>Phone:</strong>+355 67  89 99999  /  +355 67  89 77777</p>
         <p><strong>Hours:</strong> 10:00 - 19:00 , Monday - Saturday</p>
       <div class="follow">
        <h4>Follow Us</h4>
            <div class="icon">
                <a href="https://www.facebook.com/"><i class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.instagram.com/"><i class='bx bxl-instagram' ></i></a>
                <a href="https://www.tiktok.com/en/"><i class='bx bxl-tiktok' ></i></a>
                <a href="https://www.youtube.com/"><i class='bx bxl-youtube' ></i></a>
            </div>
       </div>   
    </div>
<div class="col" >
      <h4>About</h4>
      <a href="about.php">About Us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="contact.php">Contact Us</a>
    <div class="col">
        <h4>My Account</h4>
        <a href="signup.php">Sign In</a>
        <a href="cart.php">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>
  </div>
<div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Store</p>
      <div class="row">
         <a href="https://www.apple.com/app-store/"><img src="assets/index/appstore.jpg" style="width: 40%;"></a>
         <a href="https://play.google.com/store/apps?device=phone"><img src="assets/index/playstore.jpg" style="width: 40%;"></a>
      </div>  
      <p>Secured Paymet Gateways</p>
      <img src="assets/index/payment.jpg" style="width: 90%;">
</div>    
</footer>
 <div class="copyright" style="text-align: center; background-color: #ce8989;">
      <p> &#169 Uendi Pici , Inc., All rights reserved 2024.</p>
</div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>