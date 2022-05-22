<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
            <div class=" col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4" style="margin-top: 30px;">
                        <p style="font-size: 25px; ">CHANGE PASSWORD</p>                        
                        <form action="settings_script.php" method="POST">
                            <div class="form-group">
                                <input type="password" name="oldpassword" placeholder="Old Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="newpassword" placeholder="New Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="renewpassword" placeholder="Re-type New Password" class="form-control">
                            </div>                                                 
                            <button class="btn btn-primary">Change</button>                            
                            <?php
                            if(isset($_GET['error'])){
                               echo "<br><br><b>" . $_GET['error'] . "</b>";
                            }
                            ?>                            
                        </form>                          
            </div>
        </main>
        <?php include './includes/footer.php'; ?>
    </body>
</html>
