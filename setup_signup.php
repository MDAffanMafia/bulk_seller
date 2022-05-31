<?php
session_start();
if(isset($_POST['upload']) )
{
    include 'database_connectivity.php';
    $username=$_POST['uname'];
    $password =$_POST['psw'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $sql_Query="INSERT INTO user_data (user_name,password,contact,email) 
    VALUES('$user_name','$password','$contact','$currency','$email')";
     
     
     if ($connec->query($sql_Query)===TRUE) {
         echo"heelo";
      header("location:add_item.php");
     }
     else {
         echo("there is an error".$connec->error);
     }

}




?>