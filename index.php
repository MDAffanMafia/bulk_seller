<?php
session_start();

/*
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    echo"
    <!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale='1'>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

 Full-width input fields 
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

 Set a style for all buttons 
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

 Extra styles for the cancel button 
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

 Center the image and position the close button 
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

 The Modal (background) 
.modal {
  display: block;  Hidden by default 
  position: fixed;  Stay in place 
  z-index: 1;  Sit on top 
  left: 0;
  top: 0;
  width: 100%;  Full width 
  height: 100%;  Full height 
  overflow: auto;  Enable scroll if needed 
  background-color: rgb(0,0,0);  Fallback color 
  background-color: rgba(0,0,0,0.4);  Black w/ opacity 
  padding-top: 60px;
}

 Modal Content/Box 
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;  5% from the top, 15% from the bottom and centered 
  border: 1px solid #888;
  width: 80%;  Could be more or less, depending on screen size 
}

 The Close Button (x) 
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

 Add Zoom Animation 
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

 Change styles for span and cancel button on extra small screens 
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div id='id01' class='modal'>
  
  <form class='modal-content animate' action='setup_login.php' method='post'>
    <div class='imgcontainer'>
      <span onclick='document.getElementById('id01').style.display='none'' class='close' title='Close Modal'>&times;</span>
      <img src='img_avatar2.png' alt='Avatar' class='avatar'>
    </div>

    <div class='container'>
      <label for='uname'><b>Username</b></label>
      <input type='text' placeholder='Enter Username' name='uname' required>

      <label for='psw'><b>Password</b></label>
      <input type='password' placeholder='Enter Password' name='psw' required>
        
      <button type='submit'>Login</button>
      <label>
        <input type='checkbox' checked='checked' name='remember'> Remember me
      </label>
    </div>

    <div class='container' style='background-color:#f1f1f1'>
      <button type='button' onclick='document.getElementById('id01').style.display='none' class='cancelbtn'>Cancel</button>
      <span class='psw'>Forgot <a href='#'>password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>

</body>
</html>";
exit;
}*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beypaari</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="system.css" rel="stylesheet">
  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->
  <!--bootstrap css!-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Beipaari<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a style="border-bottom:1px solid #0ea2bd"  class="nav-link scrollto" href="index.php">Home</a></li>
          <?php
          if(isset($_SESSION['Id'])){
          echo"<li><a class='nav-link scrollto' href='login.php'>Sign In</a></li>";
          }
          
          ?>
          <li><a class="nav-link scrollto" href="business.php">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">Profile</a></li>
          <li class="dropdown megamenu"><a href="#"><span>Food Items</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Grains</a>
                <a href="#">Spices</a>
                <a href="#">Vegies</a>
                <a href="#">Fruits</a>
                <a href="#">Backery Items</a>
              </li>
              
            </ul>
          </li>
          <li class="dropdown megamenu"><a href="#"><span>Industrial Raw</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Sugarcane</a>
                <a href="#">Cotton</a>
                <a href="#">Jute</a>
                <a href="#">milk</a>
                <a href="#">Big Tomatoes</a>
               
              </li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
      <?php
          if(isset($_SESSION['Id'])){
          echo"<a class='btn-getstarted scrollto' href='logout.php'>Logout</a>";
    
        }
          else{
            echo"<a class='btn-getstarted scrollto' href='login.php'>Get Started</a>";
          
          }
          
          ?>
      
    </div>
  </header><!-- End Header -->

  


  <main id="main">
<div class="container" style="margin-top: 10%; margin-bottom:40%">
<div id="carouselExampleCaptions" class="carousel slide  " " data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/groc.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/farmer.jpg" class="d-block w-100 " style="height: 30%;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/man.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
      <!-- Vendor JS Files -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Template Main JS File -->
  <!--bootrap js!-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>