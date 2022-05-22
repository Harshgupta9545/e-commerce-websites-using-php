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
        <div class="container">
            <div class="col-sm-4">
                <div class="panel panel-default" style="border-style: none;">
                   <div class="panel-body">
                    <h3>WHO WE ARE</h3>
                    <img src="./img/about-img.jpg" alt="about image"><br><br>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<p>
                </div>
                </div>
            </div>            
            <div class="col-sm-4">
                <div class="panel panel-default" style="border-style: none">
                   <div class="panel-body">
                    <h3>OUR HISTORY</h3><br>
                    <h4 style="color:blue">1988&#45;</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <br>
                    <h4 style="color:blue">2002&#45;</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <br>
                    <h4 style="color:blue">2016&#45;</h4>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
                </div>        
            <div class="col-sm-4">
                <div class="panel panel-default" style="border-style: none;">
                   <div class="panel-body" >
                    <h3>OPPORTUNITIES</h3><br>
                        <b>Available Roles</b>
                            <ol>
                                <li>Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internships]</li>
                                <li>Bussiness Apprentise [6 Months Internships]</li>
                                <li>Manager at backend operations[Full Time Role + also available as a 6 Months Internships]</li>
                            </ol>
                        </div>
                </div>
            </div>   
        </div>
        </main>
        <?php include './includes/footer.php'; ?>
    </body>
</html>
