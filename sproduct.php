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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" text="text/css" href="productstyle.css">
    <link rel="stylesheet" text="text/css" href="styleshop.css">
    <link rel="stylesheet" href="responsive.css">
<!--     bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 
 <!-- Navbar logo -->
<section id="header">
        <a href="#"><img src="assets/index/LOGOO.jpg.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li> 
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

<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="assets/index/bluedechanel.jpg" width="80%" id="MainImg" alt="">
        <div class="small-img-group">
        <div class="small-img-col">
            <img src="assets/index/bluedechanel.jpg" width="80%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
            <img src="assets/shop/chanel2.jpg" width="80%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
            <img src="assets/shop/chanel3.jpg" width="85%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
            <img src="assets/shop/chanel4.jpg" width="80%" class="small-img" alt="">
        </div>
    </div>
</div>
<div class="single-pro-details">
    <h6>EAU DE PARFUM SPRAY</h6>
    <h4>BLEU DE CHANEL</h4>
    <h2>80€ - 150€</h2>
    <select>
        <option>3 Sizes Available</option>
        <option>150ml</option>
        <option>100ml</option>
        <option>50ml</option>
    </select>
    <input type="number" value="1">
    <button  type="button" class="btn btn-success"><a href="cart.php" style="text-decoration: none; color: #ffffff;">Add to Cart</a></button>
    <h1>Product Information</h1>
    <span >
        <h2>Description</h2> 
        An ode to masculine freedom expressed in an aromatic-woody fragrance with a captivating trail. A timeless scent housed in a bottle of deep and mysterious blue.
        BLEU DE CHANEL is presented here in an eau de parfum with an exquisitely pronounced scent that reveals a determined spirit.<br><br>
        
        <h2>Composition</h2>
        BLEU DE CHANEL Eau de Parfum is an aromatic-woody fragrance that teams New Caledonian sandalwood with notes of ambery cedar and tonka bean. Its trail is warm and sensual.<br><br>
        
        <h2>Inspiration</h2>
        The colour of a future that is yours to shape. BLEU DE CHANEL is a fragrance for he who refuses the confines and conformity of a predetermined destiny. 
        Its composition embodies the spirit of a man who is consumed by a quest: the pursuit of a horizon with no vanishing point, one that stretches on infinitely.<br><br>
        
        <h2>Art of Perfuming</h2>
        The eau de parfum is sprayed in a cloud inside clothing or the skin for an enveloping perfuming experience.
        
        BLEU DE CHANEL proposes a full line of shaving and body products for an intensified scent throughout the day.</span>
</div>
</section>

<section id="product1" class="section-p1">
    <h2 style="text-transform: uppercase; color: #17a2b8;">New Arrivals</h2>
    <p style="font-size: 20px; font-weight:700;">Recommended  for you!</p><br/>
<div class="pro-container">
    <!-- produkti 1 -->
<div class="pro" style="border: 3px solid #000000;">
     <img src="assets/index/valentino.jpg" alt="">
     <div class="des">
          <h5 style="color:#1d0ee6;">Valentino Uomo Intense Eau De Parfum</h5>
          <div class="star">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
          </div>  
          <h4>120€ - 220€</h4>
      </div>  
        <a href="#"><i class='bx bxs-cart cart' style="color:rgb(14, 155, 10);background-color:black;"></i></a>  
  </div>
   <!-- produkti 2 -->
<div class="pro"  style="border: 3px solid #000000;">
     <img src="assets/index/1miillion.jpg" alt="">
     <div class="des">
          <h5 style="color:#1d0ee6;">Rabanne 1 Million</h5>
          <div class="star">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
          </div>  
          <h4>170€ - 250€</h4>
      </div>  
        <a href="#"><i class='bx bxs-cart cart'  style="color:rgb(14, 155, 10);background-color:black;"></i></a>  
  </div>
   <!-- produkti 3 -->
<div class="pro"  style="border: 3px solid #000000;">
     <img src="assets/index/maison.jpg" alt="">
     <div class="des">
          <h5 style="color:#1d0ee6;">Maison Francis Kurkdijan Paris</h5>
          <div class="star">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
          </div>  
          <h4>180€ - 300€</h4>
      </div>  
        <a href="#"><i class='bx bxs-cart cart'  style="color:rgb(14, 155, 10);background-color:black;"></i></a>  
  </div>
   <!-- produkti 4 -->
<div class="pro"  style="border: 3px solid #000000;">
     <img src="assets/index/spicebomb.jpg" alt="" style="width: 66.5%;">
     <div class="des">
          <h5 style="color:#1d0ee6;">SpiceBomb Viktor Rolf</h5>
          <div class="star">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
          </div>  
          <h4>150€ - 220€</h4>
      </div>  
        <a href="#"><i class='bx bxs-cart cart'  style="color:rgb(14, 155, 10);background-color:black;"></i></a>  
  </div>
</div>
</section>  

 <!-- newsletter-->
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
      <a href="#">About Us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">Contact Us</a>
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
         <a href="https://play.google.com/store/apps"><img src="assets/index/playstore.jpg" style="width: 40%;"></a>
      </div>  
      <p>Secured Paymet Gateways</p>
      <img src="assets/index/payment.jpg" style="width: 90%;">
</div>    
</footer>

 <!-- copyright -->
 <div class="copyright" style="text-align: center; background-color: #ce8989;">
      <p> &#169 Uendi Pici , Inc., All rights reserved 2024.</p>
</div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>