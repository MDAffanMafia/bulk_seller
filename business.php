<?php
session_start();


/*if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    echo"
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields 
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons 
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

/* Extra styles for the cancel button 
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button 
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

/* The Modal (background)
.modal {
  display:block; /* Hidden by default
  position: fixed; /* Stay in place
  z-index: 1; /* Sit on top
  left: 0;
  top: 0;
  width: 100%; /* Full width
  height: 100%; /* Full height
  overflow: auto; /* Enable scroll if needed
  background-color: rgb(0,0,0); /* Fallback color
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity
  padding-top: 60px;
}

/* Modal Content/Box
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size
}

/* The Close Button (x)
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

/* Add Zoom Animation
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

/* Change styles for span and cancel button on extra small screens
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
    <div id='id01' class='modal'>
      
      <form class='modal-content animate'  method='post'>
        <div class='imgcontainer'>
          <span onclick='document.getElementById('id01').style.display='none'' class='close' title='Close Modal'>&times;</span>
          
        </div>
    
        <div class='container'>
          <form>
          <label for='uname'><b>Username</b></label>
          <input type='text' placeholder='Enter Username' name='uname' required>
    
          <label for='psw'><b>Password</b></label>
          <input type='password' placeholder='Enter Password' name='psw' required>
            
          <button type='submit'>Login</button>
          <label>
            <input type='checkbox' checked='checked' name='remember'> Remember me
          </label>
          </form>
        </div>
    
        <div class='container' style='background-color:#f1f1f1'>
          <button type='button' onclick='document.getElementById('id01').style.display='none'' class='cancelbtn'>Cancel</button>
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
</script>";
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

          <li class="dropdown"><a href="#"><span>Home</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="login.php" >Login</a></li>
              <li><a href="index-2.html">Home 2 - index-2.html</a></li>
              <li><a href="index-3.html">Home 3 - index-3.html</a></li>
              <li><a href="index-4.html">Home 4 - index-4.html</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="index.html#about">Sign In</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">Profile</a></li>
          <li><a class="nav-link scrollto" href="index.html#team">Clients</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown megamenu"><a href="#"><span>Food Items</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Grains</a>
                <a href="#">Spices</a>
                <a href="#">Vegies</a>
              </li>
              <li>
                <a href="#">Fruits</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a>

    </div>
    <div class="container-fluid d-flex align-items-center justify-content-between">
 <h1 style="box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-left: auto;
    margin-right: auto;
    max-width: 1600px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 16px;
    padding-bottom: 16px;">B2B:By sell your goods in bulk globally</h1>
    <br>
    
    </div>
    <nav id="navbar" class="navbar">
        <ul>
        <button   style="background-color:#0ECB81">Buy</button>
        <button   style="width:auto;background-color:red;">Sell</button>

          <li class="dropdown"><a href="#"><span>Home</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="login.php" >Login</a></li>
              <li><a href="index-2.html">Home 2 - index-2.html</a></li>
              <li><a href="index-3.html">Home 3 - index-3.html</a></li>
              <li><a href="index-4.html">Home 4 - index-4.html</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="index.html#about">Sign In</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">Profile</a></li>
          <li><a class="nav-link scrollto" href="index.html#team">Clients</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown megamenu"><a href="#"><span>Food Items</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Grains</a>
                <a href="#">Spices</a>
                <a href="#">Vegies</a>
              </li>
              <li>
                <a href="#">Fruits</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav>
  </header><!-- End Header -->

  


  <main id="main">

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
  
</body>

</html>