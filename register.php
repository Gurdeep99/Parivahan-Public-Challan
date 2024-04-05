<?php
include "wq.php";
    
    
    $name=$_POST['name'];
    $loginUser=$_POST['loginUser'];
    $loginPassword=$_POST['loginPassword'];
    $city=$_POST['city'];
     
     

     if(!$mysqli->connect_error){
    
        $stmt = $mysqli->prepare("insert into users (name, loginUser, loginPassword, city) values(?,?,?,?)");
             $stmt-> bind_param("ssss", $name, $loginUser, $loginPassword, $city);
             $stmt->execute();
             header("Location: login.php");
             $stmt->close();
             $mysqli->close();
         }
        else{
           echo "Some Server Issue Please Contact Admin +91 8979088240";
        }
        ?>