<?php
session_start();
if(isset($_POST['upload']) )
{
    include 'database_connectivity.php';
   $user_name=$_SESSION['username'];
    $product_name=$_POST['filter'];
    $price=$_POST['price'];
    $currency=$_POST['currency'];
    $available=$_POST['available'];
    $low_limit=$_POST['from_Limit'];
    $upper_limit=$_POST['To_Limit'];
    $description=$_POST['desc'];
    $available=$_POST['Available_items'];
    
    $sql_Query="INSERT INTO sell_data (user_name,product_name,price,currency,low_limit,upper_limit,address,availabel) 
    VALUES('$user_name','$product_name','$price','$currency','$low_limit','$upper_limit','$description',$available)";
     
     
     if ($connec->query($sql_Query)===TRUE) {
         echo"heelo";
      header("location:add_item.php");
     }
     else {
         echo("there is an error".$connec->error);
     }

}




?>