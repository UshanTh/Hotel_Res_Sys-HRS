<?php
    include "server.php";
    session_start();
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

    <title>Add Payment Method</title>
</head>
<body>

<section class="Register-wrap" id="home" style="margin-top: 8rem;">
        <div class="register-title">
            <h1 style="text-align: left;">Stay Summery: </h1>
        </div>
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
        <div class="register-title">
            <h1>Credit Card Guarantee</h1>
            <h3>Your credit card will be used as a guarantee for your room reservation. It will not be charged at the time of booking.</h3>
        </div>
        <div class="register-content">
            <form class="register-form" action="addCarddetails.php" method="POST">
                <div class="form-group">
                  <label for="Payment_Method">Select Payment Method</label>
                    <select class="custom-select " id="inputGroupSelect01" name="Payment_Method">
                        <option selected>Choose...</option>
                        <option value="Visa">VISA</option>
                        <option value="Master Card">MASTER CARD</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="Username">Username</label>
                  <input type="text" class="form-control" value="<?php echo $_SESSION['user']; ?>" name="Username" id="Username" readonly>
                </div>
                <div class="form-group">
                  <label for="CardNo">Card Number</label>
                  <input type="text" class="form-control" name="CardNo" id="CardNo" placeholder="Enter Card Number" required>
                </div>
                <div class="form-group">
                    <label for="ExpDate">Expire Date</label>
                    <input type="date" class="form-control" name="ExpDate" id="ExpDate"  required>
                </div>
                <div class="form-group">
                    <label for="CVN">CVN No</label>
                    <input type="number" class="form-control" name="CVN" id="CVN" placeholder="Enter CVN No" required>
                </div>
                <button type="submit" name="Add" class="link-btn" style="width: 100%;">Submit</button>

                <?php

                $qry="SELECT * FROM customer WHERE username='$_SESSION[user]'";
                $result = mysqli_query($db,$qry);

                while($row = mysqli_fetch_assoc($result)) 
                {
                    $Cus_ID=$row['Customer_ID'];
                    $username=$row['username'];
                }

                if(isset($_POST['Add'])){
                    $count=0;
                    $sql="SELECT username FROM card_details";
                    $result=mysqli_query($db,$sql);
    
                    while($row=mysqli_fetch_assoc($result))
                    {
                        if($row['username']==$_POST['Username'])
                        {
                            $count=$count+1;
                        }
                    }
                    if($count == 0){
                        mysqli_query($db, "insert into card_details (username, Card_Type, Card_NO, Expire_date, CVN) VALUES('$_POST[Username]', '$_POST[Payment_Method]', '$_POST[CardNo]', '$_POST[ExpDate]', '$_POST[CVN]'); ");
    
                        ?>
                            <script type="text/javascript">
                                alert("Payment Method added Successfuly");
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
              </form>
              <div class="signup_link" style="padding-top: 2rem; text-align: center; font-size: 2rem;">
                Skip For Now? <a href="login.php">Login</a>
              </div>

        </div>
  
    </section>  
    <!-- customer JS -->
    <script src="js/script.js"></script>

    <!-- Bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>