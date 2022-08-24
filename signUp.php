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
    <title>Join Now-HRS</title>
</head>
<body>
    
    <section class="Register-wrap" id="home">
        <div class="register-title">
            <h1>Join HRS</h1>
            <h3>To enjoy member benefits, exclusive member rate and more</h3>

            <div class="box-container container"> 
      
                <div class="box">
                   <img src="images/premium.png" alt="premium">
                   <p>Member Exclusive Offers</p>
                </div>
          
                <div class="box">
                   <img src="images/phone.png" alt="phone">
                   <p>Mobile Check-In & -Out</p>
                </div>
          
                <div class="box">
                   <img src="images/moon.png" alt="moon">
                   <p>Earn Free Nights</p>
                </div>
            </div>
        </div>

        <div class="register-content">
            <form class="register-form" action="signUp.php" method="POST">
                <div class="form-group">
                  <label for="Fullname">Full Name</label>
                  <input type="text" class="form-control" name="Fullname" id="Fullname" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email Address</label>
                    <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp" placeholder="Enter Email Address" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="Mobile">Mobile No</label>
                    <input type="number" class="form-control" name="Mobile" id="Mobile" placeholder="Enter Mobile No" required>
                </div>
                <div class="form-group">
                    <label for="NIC">NIC</label>
                    <input type="text" class="form-control" name="NIC" id="NIC" placeholder="Enter NIC" required>
                </div>
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" name="Username" id="Username" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="Password" id="Password" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" name="Address" id="Address" placeholder="Enter Address" required> 
                </div>
                <button type="submit" name="signup" class="link-btn" style="width: 100%;">Submit</button>
              </form>
              <div class="signup_link" style="padding-top: 2rem; text-align: center; font-size: 2rem;">
                Already Member? <a href="login.php">Login</a>
              </div>
        </div>
  
    </section>

    <?php
        if(isset($_POST['signup'])){
                $count=0;
                $sql="SELECT Username FROM customer";
                $result=mysqli_query($db,$sql);

                while($row=mysqli_fetch_assoc($result))
                {
                    if($row['Username']==$_POST['Username'])
                    {
                        $count=$count+1;
                    }
                }
                if($count == 0){
                    mysqli_query($db, "insert into customer (Full_name, Email, Contact_No, NIC, Address, username, password) VALUES('$_POST[Fullname]', '$_POST[Email]', '$_POST[Mobile]', '$_POST[NIC]', '$_POST[Address]', '$_POST[Username]', '$_POST[Password]'); ");

                    $_SESSION['user'] = $_POST['Username'];
                    $uid = $row["Customer_ID"];
                    $_SESSION["uid"] = $uid;
                    ?>
                        <script type="text/javascript">
                            alert("Registration Successfuly");
                            window.location="addCarddetails.php"
                        </script>
                    <?php
                }
                else
                {
                    ?>
                    <script type="text/javascript">
                        alert("The Username already exist..!");
                    </script>
                <?php  
                }
                
            
        }
    ?>

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