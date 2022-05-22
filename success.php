<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['item_id'];
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
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
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4" style="margin-top: 20px;">                
                <center>
                    <p>Thank you for ordering from E-Store. The order shall be delivered to you shortly.</p>
                    <hr>
                    <p>Order some more electronic Items <a id="link" href="home.php" >here</a></p>    
                </center>
            </div>    
        </main>
        <?php include './includes/footer.php'; ?>
    </body>
</html>
