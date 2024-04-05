<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "parivahan";

$mysqli = mysqli_connect($host,$user,$password,$database);

if(!$mysqli){
    echo "Connection Error";
}

// die();
?>