<?php
    include "server.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custome css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <title>Document</title> -->
</head>
<body>
    <!-- header section -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="index.php" class="logo">HRS</a>
                <nav class="nav navbar ">
                    <a href="index.php">Home</a>
                    <a href="addCarddetails.php">Hotels</a>
                    <a href="#about">about</a>
                    <a href="#contact">contact</a>
                    <a href="signUp.php">Register</a>
                </nav>

                <a href="login.php" class="link-btn">Sign in</a>

                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
      <!-- header section ends -->
</body>
</html>