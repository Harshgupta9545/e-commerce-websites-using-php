<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-Store</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet">
        <meta charset="UTF-8">
        <style>
            #link{               
                color: rgb(0,0,255);
            }
            #link:hover{
                color: rgb(0,0,150);
            }
        </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check_if_added.php';
        include 'includes/modal.php';
        ?>
        <main>
            <div class="container">
                <div class="col-xs-12 col-sm-6">
                    <img src="img/signuppage.jpg" style="width: 100%;">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <h2 >SIGN UP</h2>
                    <form  action="signup_script.php" method="POST">
                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>
                        <div class="form-group col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>
                        <div class="form-group col-sm-10">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                        </div>
                        <div class="form-group col-sm-10">
                            <input type="text" class="form-control"  placeholder="Contact" maxlength="11" name="contact" required>                               
                        </div>
                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="City" name="city"  >
                        </div>
                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>  
                        <div class="col-sm-10">
                            Already have an account ?<a href="modal.php" id="link"> Login</a>
                        </div>
                </form>
                </div>
            </div>
        </main>
        <?php include './includes/footer.php'; ?>
    </body>
</html>
