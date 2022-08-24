<?php
    include "server.php";
    include "header.php";
    session_start();
?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
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

    <style type="text/css">
      body{
        background-color: #a2d2ff;
      }
    </style>
  </head>

  <body>

    <div class="form-center">
      <h1>Sign In</h1>
      <form class="login-form" action="login.php" method="POST">
        <div class="txt_field">
          <input name="username" type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input class="password" type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input class="login" type="submit" value="Login" name="submit">
        <div class="signup_link">
          Not a member? <a href="signUp.php">Register</a>
        </div>
      </form>
      <?php

                if(isset($_POST['submit']))
                {
                        $count=0;
                        $result=mysqli_query($db,"SELECT * FROM customer WHERE username = '$_POST[username]' AND password ='$_POST[password]'; ");
                        $row= mysqli_fetch_assoc($result);
                        $count=mysqli_num_rows($result);
            
                        if($count==0)
                        {
                            ?>
                                <div class="msg" style="text-align: center;margin-left: 0%;margin-top: 22px;  ">
                                    <div class="alert alert-danger" role="alert">
                                    The Username or Password does not match..!
                                    </div>
                                </div>
                            <?php
                        }
                        else
                        {
                            ?>
                            <div class="msg" style="text-align: center;margin-left: 0%;margin-top: 22px;  ">
                                    <div class="alert alert-primary" role="alert">
                                    login Successfuly
                                    </div>
                                </div>
                            <!-- <script type="text/javascript">
                              alert("login Successfuly");
                              window.location="addCarddetails.php"
                            </script> -->
                            <?php
                        }
                }
            ?>

    </div>

    <!-- customer JS -->
    <script src="js/script.js"></script>

    <!-- Bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
