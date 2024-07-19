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
    <link rel="stylesheet" href="responsive.css">
    <!-- bootstrap-->
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
                <li><a class="active" href="contact.php">Contact</a></li>
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

<section id="page-header2"> 
    <h2 onclick="alert('Call Now +355 67 3333 3223')" class="title1">#Let's Talk <i class='bx bxs-phone-call bx-tada bx-rotate-90'></h2></i>  
    <p  class="title-p">Leave a  Message for us! We will get back to you as soon as possible.</p>    
</section>

<section id="contact-details" class="section-p1">
    <div class="details">
        <span>Get In Touch</span>
        <h2>Visit  Our Store Today and Enjoy Your Shopping Experience!</h2>
        <h3>Head Office</h3>
        <div>
    <li>
        <i class='bx bx-map' undefined ></i>
        <p>Tirana, Albania Komuna e Parisit</p>
    </li>
    <li>
        <i class='bx bx-envelope'></i>
        <p>luxuryfragrance@gmail.com</p>
    </li>
    <li>
        <i class='bx bx-phone'></i>
        <p>+355 67 89 99999 / +355 67 89 77777</p>
    </li>    
    <li>
        <i class='bx bxs-watch'></i>
        <p>10:00 - 19:00 , Monday - Saturday</p>
    </li>
        </div> 
    </div>   

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5039.956165027449!2d19.807535503113122!3d41.
    31373930073644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135030f8d866fe71%3A0xbb9b8a1a6971692b!
    2sKompleksi%20Dinamo%2C%20Rruga%20Anton%20Ashta%2C%20Tirana%2C%20Albania!5e0!3m2!1sen!2s!4v1707240232752!5m2!1sen!2s"
     width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>    

</section>


<section id="form-details">
<?php

$errors = [];

if (!empty($_POST)) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  if (empty($name)) {
      $errors[] = 'Name is empty';
  }

  if (empty($email)) {
      $errors[] = 'Email is empty';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Email is invalid';
  }

  if (empty($message)) {
      $errors[] = 'Message is empty';
  }
}
?>
    <form action="save.php" method="post">
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name" name="name">
        <input type="email" placeholder="Email Address" name="email">
        <input type="text" placeholder="Subject" name="subject">
        <textarea name="message" cols="30" rows="10" placeholder="Your Message" >
        </textarea required>
        <input type="submit" value="Submit" name="submit" class="btn btn-danger" >
        <!-- <button  type="button" class="btn btn-danger">Submit</button> -->
     </form>
     
<div class="people">
    <div>
     <img src="assets/shop/people.jpg" alt="">
     <p><span>John Doe</span> Senior Marketing Manger <br><i class='bx bx-phone'></i>+355  67 89 99999<br><i class='bx bx-envelope'></i>
    Email: johnfragrance@gmail.com</p>
   </div>
   <div>
     <img src="assets/shop/person2.jpg" alt="">
     <p><span>Alice Stone</span> Senior Marketing Manger <br><i class='bx bx-phone'></i>+355  67 89 99999<br><i class='bx bx-envelope'></i> 
    Email: alicefragrance@gmail.com</p>
   </div>
   <div>
     <img src="assets/shop/person3.jpg" alt="">
     <p><span>Stephania Smith</span> Senior Marketing Manger <br><i class='bx bx-phone'></i>+355  67 89 99999<br><i class='bx bx-envelope'></i> 
    Email: stephaniafragrance@gmail.com</p>
   </div>
</div>

</section>

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
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
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
