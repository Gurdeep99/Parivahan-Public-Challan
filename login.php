<?php
//include "C-Login.php";
//include "C-register.php";
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;600&display=swap" rel="stylesheet">
    <title>Parivagan Public Challan</title>
    <link rel='icon' href="images/icon.png">
    <link rel='stylesheet' href="style.css">
    <script src="https://kit.fontawesome.com/e70f8061ea.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="main">
        <nav>
            <img src="images/logo.png" class="logo">
            <ul>
                <li><a href="index.php">Dashboard</a></li>
            </ul>
        </nav>
        <div class="containerr" id="containerr">
            <div class="form-container ">
    <div class="form-container-in sign-up-c">
       
    
    <form action="register.php" method="POST">
                    <h1 class="create">Create an Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-apple"></i></a>
                    </div>
                    <span class="or">Or</span>
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="text" name="loginUser" placeholder="Email id"required>
                    <input type="password" name="loginPassword" placeholder="Password"required>
                    <input type="text" name="city" placeholder="City" required>
                    <button class="button-m">Create Account</button>
                </form>



    </div>
    
    <div class="form-container-in sign-in-c">
       
    
        <form action="login_t.php" method="POST">
                    <h1 class="create">Log In</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-apple"></i></a>
                    </div>
                    <span class="or">Or</span>
                    
                    <?php 
                    if(isset($_GET['error']))
                    { ?>
                    <p class="errore">
                        <?php echo $_GET['error']; ?>
                    </p> <?php } ?>

                    <input type="text" name="loginUser" placeholder="Email id">
                    <input type="password" name="loginPassword" placeholder="Password">
                    <button  class="button-m">Log In</button>
        </form>

    </div>
            <div class="overlay-container">
                <div class="overlay">
                <dic class="overlay-panel overlay-left">
                        <h1>Welcome Everyone</h1>
                        <p>Help us to make Indian road better</p>
                        <button class="press" id="signin">Sign In</button>
                    </dic>
                    <dic class="overlay-panel overlay-right">
                        <h1>Welcome Back</h1>
                        <p>Help us to make Indian road better</p>
                        <button class="press" id="signup">Sign Up</button>
                    </dic>
                </div>
            </div>
            
            
            </div>
        </div>
</div>

<script>
    const signUpButton = document.getElementById("signup");
    const signInButton = document.getElementById("signin");
    const containerr = document.getElementById("containerr");

        signUpButton.addEventListener('click',()=>{
            containerr.classList.add("right-panel-active");

        })
        signInButton.addEventListener('click',()=>{
            containerr.classList.remove("right-panel-active");

        })
</script>
</body>
</html>