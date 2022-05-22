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
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4" style="margin-top: 20px;">                
                <table class="table table-striped">
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>                                   
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>             
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' id='link' >Remove </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>                                      
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php?item_id=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else { ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>                                
                                    <th>Price</th>    
                                </tr>
                            </thead>
                 <?php       }
                        ?>
                        <?php
                        ?>
                    </table>
            </div>    
        </main>
        <?php include './includes/footer.php'; ?>
    </body>
</html>
