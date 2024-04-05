<?php
session_start();
include "wq.php";

if (isset($_POST['loginUser']) && isset($_POST['loginPassword']))

{   function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
    $loginUser = validate($_POST['loginUser']);
    $loginpassword = validate($_POST['loginPassword']);

    if(empty($loginUser)){
        header("Location: Login.php?error=Username is required");
        exit();

    }else if(empty($loginpassword)){
        header("Location: Login.php?error=Password is required");
        exit();

    }else{
        $sql = "SELECT * FROM `users` WHERE loginUser='$loginUser' AND loginPassword='$loginpassword'";
        $result = mysqli_query($mysqli, $sql);

        if(mysqli_num_rows($result) === 1) 
        {
            $row = mysqli_fetch_assoc($result);
            if($row['loginUser'] === $loginUser && $row['loginPassword'] === $loginpassword )
                { $_SESSION['loginUser'] = $row['loginUser'];
                  $_SESSION['type'] = $row['type'];
                  $_SESSION['name'] = $row['name'];
                  $_SESSION['default_location'] = $row['default_location'];
                  $_SESSION['id'] = $row['id'];
                  header("Location: html/backend.php");
                    exit();

                }else{
                    header("Location: login.php?error=Incorrect User Name and Password");
                    exit();
                    }
        }else{
            header("Location: login.php?error=Incorrect User Name and Password");
            exit();

        }
    }

}
else{
    header("Location: index.php");
    exit();
}