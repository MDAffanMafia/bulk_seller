<?php
session_start();
if(isset($_POST['upload']) )
{
    include 'database_connectivity.php';
   $user_name=$_SESSION['username'];
    $product_name="sugarcane";
    $price=$_POST['price'];
    $currency=$_POST['currency'];
    $low_limit=$_POST['from_Limit'];
    $upper_limit=$_POST['To_Limit'];
    $description=$_POST['desc'];
    $required=$_POST['required_items'];
    
    $sql_Query="INSERT INTO buy_data (username,product_name,price,currency,lower_limit,upper_limit,address,required) 
    VALUES('$user_name','$product_name','$price','$currency','$low_limit','$upper_limit','$description',$required)";
     
     
     if ($connec->query($sql_Query)===TRUE) {
         echo"heelo";
      header("location:require_upload.php");
     }
     else {
         echo("there is an error".$connec->error);
     }

}




?>