<?php
    session_start();
    include "server.php";
    include "header.php";
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
    <title>New Reservation-HRS</title>
</head>
<body>
    
    <section class="Register-wrap reservation" id="home">
        <div class="register-title">
            <h1>Find a Room</h1>
            <h3><?php echo $_SESSION['hotel']; ?></h3>
        </div>
        <div class="register-content reservation-form">
            <form action="New_Reservation.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="Find_hotel" value="<?php echo $_SESSION['hotel']; ?>" name="Find_hotel" placeholder="Find a Hotel or House">
                </div>
                <div class="form-group">
                    <input placeholder="Check-In-Date" name="check-in-date" value="<?php echo $_SESSION['Checkin_Date']; ?>" class="form-control" id="check-in-date">
                </div>
                <div class="form-group">
                   <input placeholder="Check-Out-Date" class="form-control" value="<?php echo $_SESSION['CheckOut_Date']; ?>" name="check-out-date" id="check-in-date">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="Occupants" value="<?php echo $_SESSION['No_of_Occupants']; ?>" placeholder="No of Occupants">
                </div>
                <div class="form-group">
                    <a href="New_Reservation.php" class="link-btn book-now">Search</a>
                </div>
                
            </form>
            <!-- <?php
                echo $_SESSION['hotel'];
                echo $_SESSION['Checkin_Date'];
                echo $_SESSION['CheckOut_Date'];
                echo $_SESSION['No_of_Occupants'];
                ?> -->
        </div>
    </section>

    <section class="room-details">
        <div class="container">
            <div class="row align-items-center">
                <div class="col image">
                    <img src="images/deluxe.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>
                <div class="col-6 content">
                    <strong><h3>Deluxe Room</h3></strong>
                    <p>This offer includes:</p>
                    <ul>
                        <li>Stay in Deluxe Room For One Night</li>
                        <li>Unlimited access to Health Club and Swimming Pool</li>
                        <li>Inclusive of in-room wired internet access and WI-FI access</li>
                        <li>Free Parking</li>
                    </ul>
                </div>
                <div class="col content price">
                    <p>LKR 35,400</p>
                    <a href="#contact" class="link-btn">Book Now</a>
                </div> 
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col image">
                    <img src="images/Executive.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>
                <div class="col-6 content">
                    <strong><h3>Executive Suite</h3></strong>
                    <p>This offer includes:</p>
                    <ul>
                        <li>Stay in Executive  Room For One Night</li>
                        <li>Unlimited access to Health Club and Swimming Pool</li>
                        <li>Inclusive of in-room wired internet access and WI-FI access</li>
                        <li>Free Parking</li>
                    </ul>
                </div>
                <div class="col content price">
                    <p>LKR 65,400</p>
                    <a href="#contact" class="link-btn">Book Now</a>
                </div> 
            </div>
        </div>
    </section>


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