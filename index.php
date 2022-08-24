<?php
    session_start();
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

    <title>Welcome To HRS</title>
</head>
<body>

    <!-- header section -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">HRS</a>
                <nav class="nav navbar ">
                    <a href="#home">Home</a>
                    <a href="#Hotels">Hotels</a>
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

      <!-- home section starts  -->

   <section class="home" id="home">

      <div class="container">

         <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
               <h3>Book Early and Save with Flexibility</h3>
               <p>Book in advance and save up to 20% with complimentary date changes..</p>
               <a href="login.php" class="link-btn">Join Now</a>
            </div>

            <div class="form-content text-center text-md-center">
               <form action="index.php" method="POST">
                  <div class="form-group">
                     <input type="text" class="form-control" id="Find_hotel" name="hotel_name" placeholder="Find a Hotel or House" required>
                   </div>
                   <div class="form-group">
                     <input name="check-in-date" placeholder="Check in date" class="form-control" type="text" id="check-in-date" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                   </div>
                   <div class="form-group">
                   <input class="form-control" placeholder="Check Out date"  name="check-out-date" type="text" id="check-in-date" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                   </div>
                   <div class="form-group">
                       <input type="number" class="form-control" name="Occupants" placeholder="No of Occupants" required> 
                   </div>
                   <button name="submit" class="link-btn book-now">Book Now</button>
               </form>

               <?php
                  if(isset($_POST['submit'])){
                     $_SESSION['hotel'] = $_POST['hotel_name'];
                     $_SESSION['Checkin_Date'] = $_POST['check-in-date'];
                     $_SESSION['CheckOut_Date'] = $_POST['check-out-date'];
                     $_SESSION['No_of_Occupants'] = $_POST['Occupants'];

                    ?>
                        <script type="text/javascript">
                            window.location="New_Reservation.php"
                        </script>
                    <?php

                  }
               ?>
              
            </div>

         </div>

      </div>

   </section>

<!-- home section ends -->

      <!-- introduction section starts -->

      <section class="introdcution-section">
         <div class="card">
            <h5 class="card-header">Welcome TO HRS</h5>
            <div class="card-body">
               <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, magnam? Numquam quaerat itaque debitis, labore repellendus perspiciatis similique asperiores eveniet, nostrum reprehenderit, ducimus placeat voluptatum ipsa nihil nobis consectetur id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae odio voluptatem, nesciunt nobis dolorem illum esse, quasi et repellendus ad odit sequi ipsam numquam, hic aspernatur dolore eveniet consequuntur! Minus!</p>
            </div>
            </div>
      </section>

      <!-- intorduction section ends -->

      <!-- image section starts -->

      <section class="image-section">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="images/room1.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                     <h5>Deluxe Room</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, delectus.</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/room2.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                     <h5>Heading</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, delectus.</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/room3.webp" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                     <h5>Heading</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, delectus.</p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
            </div>
      </section>
 
      <!-- image section ends -->
 
      <!-- services section starts  -->
      
      <section class="services">
      
         <h1 class="heading">Why book with us?</h1>
      
         <div class="box-container container">
      
            <div class="box">
               <img src="images/cocktail.png" alt="">
               <h3>Complimentary Drinks</h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur non illo vero repellat animi ea ipsa recusandae placeat eos esse! Eos excepturi cum explicabo </p>
            </div>
      
            <div class="box">
               <img src="images/tea-cup.png" alt="">
               <h3>Tea and Cookies</h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur non illo vero repellat animi ea ipsa recusandae placeat eos esse! Eos excepturi cum explicabo </p>
            </div>
      
            <div class="box">
               <img src="images/beverage.png" alt="">
               <h3>Complimentary Beverages</h3>
               <p>LLorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur non illo vero repellat animi ea ipsa recusandae placeat eos esse! Eos excepturi cum explicabo </p>
            </div>
      
         </div>
      
      </section>

      <!-- about section starts  -->

      <section class="about" id="about">

         <div class="container">

            <div class="row align-items-center">

               <div class="col-md-6 image">
                  <img src="images/Foods.jpg" class="w-100 mb-5 mb-md-0" alt="">
               </div>

               <div class="col-md-6 content">
                  <h3>"Delicious food and great service"</h3>
                  <p>"Everything we tried on the menu was delicious. The Tuna Sashimi was the best we have had whilst staying in Sri Lanka. The decor is very charming! One of the very few places you can eat that has air conditioning."</p>
                  <a href="#contact" class="link-btn">Join Now</a>
               </div>

            </div>

         </div>

      </section>

      <!-- about section ends -->

      <!-- footer section starts -->
      <footer class="w-100 flex-shrink-0">
         <div class="container">
            <div class="row gy-4 gx-5">
               <div class="col-lg-4 col-md-6">
                     <h5 class="h1 text-white">HRS</h5>
                     <p class="small">We hope you’ve enjoyed your stay from start to finish.
                        Please note the check-in / out times below:
                        Check-in: 2pm
                        Check-out: 12noon.</p>
                     <p class="small mb-0">&copy; Copyrights. All rights reserved. <a class="copyrights" href="#">HRS.com</a></p>
               </div>
               <div class="col-lg-2 col-md-6">
                     <h5 class="text-white mb-3">Privacy Policy</h5>
                     <ul class="list-unstyled text-muted">
                        <li><a href="#">Terms & Conditions</a></li>
                     </ul>
               </div>
               <div class="col-lg-2 col-md-6">
                     <h5 class="text-white mb-3">Contact</h5>
                     <ul class="list-unstyled">
                        <p class="small text-muted">HRS Hotels 30/40 Fernando Garndes Pelawatta Battaramull Sri Lanka.</p>
                        <h5 class="text-white mb-3">Reservations</h5>
                        <li><a class="contacts" href="#">+94 778 963 214</a></li>
                        <li><a class="contacts" href="#">+94 772 147 852</a></li>
                     </ul>
               </div>
               <div class="col-lg-4 col-md-6">
                     <h5 class="text-white mb-3">Special Offers and
                        Teardrop News</h5>
                     <p class="small text-muted">Sign up here to receive news of exclusive offers.</p>
                     <form action="index.php" method="POST">
                        <div class="input-group mb-3">
                           <input class="form-control" type="text" placeholder="Send Us Your Email Address" aria-label="Recipient's username" aria-describedby="button-addon2">
                           <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                        </div>
                     </form>
               </div>
            </div>
         </div>
      </footer>

      <!-- footer section ends -->

      <!-- customer JS -->
      <script src="js/script.js"></script>

      <!-- Bootstrap js cdn -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>