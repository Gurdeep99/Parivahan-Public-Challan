<?php

$sname="localhost";
$lUser= "root";
$lpassword= "";
$dn= "parivahan";

$mysqli = mysqli_connect($sname, $lUser, $lpassword, $dn);
 if(!$mysqli){
     echo "Connection Failed!";
 }
 //else{
   //echo "connect";
 //}
 ?>