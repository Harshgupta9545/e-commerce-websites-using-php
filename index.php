<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
  header('location: home.php');
}

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

    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check_if_added.php';
        include 'includes/modal.php';
        ?>
        <main>
            <div class="container-fluid" style="padding-top: 35px;"> 
            <div class="row">
                <div class="col-md-4 col-sm-6" >
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p >Mobile 1</p>
                        </div>
                        <div class="panel-body">
                            <center>
                                <img src="img/samsungnote8plus.png" style="width: 60%;">

                                <p>Samsung Note 8 Plus</p>
                                <a href="sign_up.php"><button  class="btn btn-block btn-primary">Order Now</button></a>
                            </center>
                        </div>       
                    </div>                  
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p >Mobile 2</p>
                        </div>
                        <div class="panel-body">
                            <center>
                                <img src="img/op3.png" style="width: 60%;">

                                <p>iphone pro OP3</p>
                                <a href="sign_up.php"><button  class="btn btn-block btn-primary">Order Now</button></a>
                            </center>
                        </div>      
                    </div>                  
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p >Mobile 3</p>
                        </div>
                        <div class="panel-body">
                            <center>
                                <img src="img/redminote4.png" style="width: 60%;">

                                <p>Redmi Note 4</p>
                                <a href="sign_up.php"><button  class="btn btn-block btn-primary">Order Now</button></a>
                            </center>
                        </div>      
                    </div>                  
                </div>

                
                <div class="col-md-4 col-sm-6" >
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p >Mobile 4</p>
                        </div>
                        <div class="panel-body">
                            <center>
                                <img src="img/mimax2.png" style="width: 60%;">

                                <p>Mi MAX 2</p>
                                <a href="sign_up.php"><button  class="btn btn-block btn-primary">Order Now</button></a>
                            </center>
                        </div>       
                    </div>                  
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p >Mobile 5</p>
                        </div>
                        <div class="panel-body">
                            <center>
                                <img src="img/mia1.png" style="width: 60%;">

                                <p>Micromax iphone</p>
                                <a href="sign_up.php"><button  class="btn btn-block btn-primary">Order Now</button></a>
                            </center>
                        </div>      
                    </div>                  
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p >Mobile 6</p>
                        </div>
                        <div class="panel-body">
                            <center>
                                <img src="img/mimix2.png" style="width: 60%;">

                                <p>Mi MIX 2</p>
                                <a href="sign_up.php"><button  class="btn btn-block btn-primary">Order Now</button></a>
                            </center>
                        </div>      
                    </div>                  
                </div>

            </div>
        </div>
        </main>
        <?php include './includes/footer.php'; ?>
    </body>
</html>
