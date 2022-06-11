<?php
include 'database_connectivity.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $filter=$_POST['filter'];
  $lat="SELECT * FROM  sell_data  WHERE product_name='$filter'";
}
else{
$lat="SELECT * FROM  sell_data ";
}
$data=mysqli_query($connec,$lat);
echo"<div style='display:flex;flex-direction:column'>
<div style='border-bottom:1px solid #bbbfbd;width:100%;background-color:white;margin-bottom:10px;display:inline;padding-top:20px;padding-bottom: 20px;padding-left:8px;padding-right:8px'>
      <div style='color:#b9bdbb;width:15%;text-align:center;font-size:30px;display:inline-block;font-family:fantasy;padding-left:10px;padding-right:40px;'>Seller</div>
      <div style='color:#b9bdbb;width:15%;text-align:center;font-size:30px;display:inline-block;font-family:fantasy;padding-left:10px;padding-right:40px;'>Product</div>
      <div style='color:#b9bdbb;width:15%;text-align:center;font-size:30px;display:inline-block;font-family:fantasy;padding-left:10px;padding-right:40px;'>Price</div>
     <div style='color:#b9bdbb;width:15%;text-align:center;font-size:30px;display:inline-block;font-family:fantasy;padding-left:10px;padding-right:40px;'>Limit/Availabel</div>
      
      
      </div>";

    while($all_found =mysqli_fetch_assoc($data))
    {
        
        echo"<div style='display:flex;flex-direction:column'>
        <div style='border-bottom:1px solid #bbbfbd;width:100%;background-color:white;margin-bottom:10px;display:inline;padding-top:20px;padding-bottom: 20px;padding-left:8px;padding-right:8px'>
             <div style='font-weight:bold;color:#34e8eb;width:15%;text-align:center;font-size:20px;display:inline-block;font-family:arial;padding-left:10px;padding-right:40px;'>".$all_found['user_name']."</div>
             <div style='color:#b9bdbb;width:15%;text-align:center;font-size:20px;display:inline-block;font-family:arial;padding-left:10px;padding-right:40px;'>".$all_found['product_name']."</div>
             <div style='color:#b9bdbb;width:15%;text-align:center;font-size:20px;display:inline-block;font-family:arial;padding-left:10px;padding-right:40px;'>".$all_found['price']." <p style='font-size:10px'>".strtoupper($all_found['currency'])."</p></div>
             <div style='color:#b9bdbb;width:20%%;text-align:center;font-size:20px;display:inline-block;font-family:arial;padding-left:10px;padding-right:40px;'>Limit   ".$all_found['low_limit']."-".$all_found['upper_limit']. " Kg's<p style='font-size:15px'>Availabel   ".strtoupper($all_found['availabel'])." Kg</p></div>
             <div style='color:#b9bdbb;width:15%;text-align:center;font-size:20px;display:inline-block;font-family:arial;padding-left:15px;padding-right:40px;margin-right:5%'><button style='border-radius:2px;padding-top:8px;padding-bottom:8px;'>Buy</button></div>
             
             
             </div>
                ";
    }
   
  echo"</div>";




?>