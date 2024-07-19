<?php

session_start();
if (!isset($_SESSION['user'])){
    header('Location: login.php');
}

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
    <link rel="stylesheet" text="text/css" href="cartstyle.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                <li><a href="login.php">Login</a></li> 
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="logout.php" class="btn btn-danger" >Log Out</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class='bx bx-shopping-bag'></i></a></li>
                <a href="#" id="close"><i class='bx bx-x-circle'></i></a>
            </ul>
        </div>
        <div id="mobile">
          <a href="cart.php"><i class='bx bx-shopping-bag'></i></a>
          <i id="bar" class='bx bx-menu'></i>
        </div>
</section>

<section id="page-header21"> 
    <h2 class="title11">Shopping Bag</h2>
    <p  class="title-p"></p>    
</section>
                            

<section id="cart" class="section-p1">
    <table widt="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Images</td>
                <td>Products</td>
                <td>Prices</td>
                <td>Quantity</td>
                <td>Size</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <tr onclick="remove(this)" id="myList">        
                <td><a href="#"><i class='bx bx-x-circle'></i></a></td>
                <td><img src="assets/index/jeanpaul.jpg" alt="" ></td>
                <td>Jean Paul Gaultier</td>
                <td>230€</td>
                <td><input type="number" value="1"></td>
                <td>150ml</td>
                <td>230€</td>
            </tr>
         
            <tr onclick="remove(this)" id="myList">  
                <td><a href="#"><i class='bx bx-x-circle'></i></a></td>
                <td><img src="assets/index/armani.jpg" alt="" ></td>
                <td>Armani Stronger With You</td>
                <td>100€</td>
                <td><input type="number" value="1"></td>
                <td>50ml</td>
                <td>100€</td>   
            </tr>
            <tr onclick="remove(this)">  
                <td><a href="#"><i class='bx bx-x-circle'></i></a></td>
                <td><img src="assets/index/prada.jpg" alt="" ></td>
                <td>Prada Paradoxe</td>
                <td>170€</td>
                <td><input type="number" value="1"></td>
                <td>120ml</td>
                <td>170€</td>
            </tr>
        </tbody>
    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: 700;">Apply Coupon</h3>
    <div>
    <input text="text" placeholder="Enter your Coupon">
    <button type="button" class="btn btn-success">Apply</button>
    </div>
    </div>

    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>500€</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>500€</strong></td>
            </tr>
        </table>
        <button type="button" class="btn btn-dark" style="text-decoration:none;">Proceed to checkout</button>
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
    
    
    <script>
            function remove(e){
            e.parentNode.removeChild(e);
            }


    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>