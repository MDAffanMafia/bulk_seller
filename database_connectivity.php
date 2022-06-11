<?php 
$url="localhost";
$username="root";
$password="";
//$database="beipaari";
$connec=mysqli_connect($url,$username,$password,'beipaari');
if(! $connec)
{
    die('Could not connect to the server ');
    echo"could not connect";
}
else{
    echo"";
}
?>