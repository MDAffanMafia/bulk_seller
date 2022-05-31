<?php
session_start();
/*
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}
*/
 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>Affan</title>
   <link rel="stylesheet" href="static/user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beypaari</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
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
  <!-- Favicons -->
 <link href="add-item.css" rel="stylesheet" >
</head>
 <body>
   <header>
   <nav id="navbar" class="navbar">
        <ul>
        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Beipaari<span>.</span></h1>
      </a>

          <li class="dropdown"><a href="index.php"><span>Home</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          </li>

          <li><a class="nav-link scrollto" href="business.php">B2B</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Clients</a></li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">Profile</a></li>
          <li><a class="nav-link scrollto" href="index.html#team">Orders</a></li>
        
          <li><a class="nav-link scrollto" href="index.html#contact">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav>
 </header>
 
 <div class="container">

<div class="jumbotron-dup">
    <div id="heading">
  <h1 > Add Items</h1>
  <p> <b></b> </p> <br>
    </div>
  <form class="" action="upload_items.php" method="POST" >
   <div class="input_items">
   <div class="divla"><label>Price</label> </div> 
   <input class="enter"  type="number"  placeholder="Price" name="price" value="">
   </div>
   <div class="input_items">
  <div class="divla"> <label>Currency</label></div>    
   <input class="enter" type="text"   id="currency" placeholder="Rs" name="currency" value="">
   </div>
   <div class="input_items">
    <div class="divla"><label>Available</label></div>
    <input class="enter" type="number"  placeholder="Available" name="Available_items" value="">
    </div>
    <div class="input_items">
     <div class="divla">   <label >Limit</label></div>
    <input class="enter limit" type="number"  placeholder="from" name="from_Limit" value="">
    <input class="enter limit" type="number"   placeholder="to" name="To_Limit" value="">
    </div>
    <div class="input_items">
    <input class="enter" type="text" placeholder="Description..." name="desc" value="">
    </div>
    <div class="signupbutton">
      <button type="submit"  class ="btn btn-success btn-lg bst" name="upload" value="Submit" >Add to market</button>
    </div>
      
    </div> <br><br>
    


  </form>

</div>


</div>

</div>


</div>
 <footer class="page-footer font-small blue">

   

 </footer>
   </body>
 </html>
