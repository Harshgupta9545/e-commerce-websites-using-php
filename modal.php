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
            <div id="loginmodal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="login_submit.php" method="POST">
                      <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                        <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="text" class="form-control" id="psw" placeholder="Enter password">
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                      </div>
                      <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                    </form>
                  </div>
                    <div class="modal-footer">
                      <?php 
                      if(isset($_GET['error'])){
                          echo "<b style='color:red'>".$_GET['error']."</b>";
                      } 
                      ?>                    
                    <p>Not a member? <a id="link" href="sign_up.php">Sign Up</a></p>
                    <p>Forgot <a id="link" href="sendemail.php">Password?</a></p>
                  </div>
                </div>
              </div>
            </div> 
    </body>
</html>