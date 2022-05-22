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
                                <p >#1</p>
                            </div>
                            <div class="panel-body">
                                <center>
                                    <img src="img/samsungnote8plus.png" style="width: 60%;">
                                    <p>Samsung Note 8 Plus</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                    } else {
                                        if (check_if_added_to_cart(1)) {
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }}
                                    ?>
                                </center>
                            </div>       
                        </div>                  
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p >#2</p>
                            </div>
                            <div class="panel-body">
                                <center>
                                    <img src="img/op3.png" style="width: 60%;">
                                    <p>iphone pro OP3</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                    } else {
                                        if (check_if_added_to_cart(2)) {
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }}
                                    ?>
                                </center>
                            </div>      
                        </div>                  
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p >#3</p>
                            </div>
                            <div class="panel-body">
                                <center>
                                    <img src="img/redminote4.png" style="width: 60%;">
                                    <p>Redmi Note 4</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                    } else {
                                        if (check_if_added_to_cart(3)) {
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }}
                                    ?>
                                </center>
                            </div>      
                        </div>                  
                    </div>
                    <div class="col-md-4 col-sm-6" >
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p >#4</p>
                            </div>
                            <div class="panel-body">
                                <center>
                                    <img src="img/mimax2.png" style="width: 60%;">
                                    <p>Mi MAX 2</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                    } else {
                                        if (check_if_added_to_cart(4)) {
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }}
                                    ?>
                                </center>
                            </div>       
                        </div>                  
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p >#5</p>
                            </div>
                            <div class="panel-body">
                                <center>
                                    <img src="img/mia1.png" style="width: 60%;">

                                    <p>Micromax iphone</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                    } else {
                                        if (check_if_added_to_cart(5)) {
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }}
                                    ?>
                                </center>
                            </div>      
                        </div>                  
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p >#6</p>
                            </div>
                            <div class="panel-body">
                                <center>
                                    <img src="img/mimix2.png" style="width: 60%;">

                                    <p>Mi MIX 2</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                    } else {
                                        if (check_if_added_to_cart(6)) {
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }}
                                    ?>
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
