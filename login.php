<?php
         ob_start();
        session_start();
        if(isset($_SESSION["userid"]))
        {
             echo "<script>window.location = 'logpage.php'</script>";
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | Register</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.js" type="text/javascript"></script>
        <script src="Bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script src="script.js" type="text/javascript"></script>
        <script>
            
            $(document).keypress(function(e) {
            if(e.which == 13) {
            $("#login").click();
            }
            });

        </script>
    </head>
    <body style="background: teal">
        <div class="container">
            <?php
            require './navigation.php';
            ?>
            <div style="margin-top: 10%;margin-left: 30%;margin-right:30%;
                  border:2px solid green;background: lightcoral;padding:20px;width:400px;border-radius: 8px">
                <p style="width:111.5%;background: #2b542c;margin: -20px;
                   height:30px;font-size: 20px;text-align: center;padding-right:-20px">Log In/Register</p><br><br>
                <span style="color:indigo;font-size: 20px"> User Name</span>:&nbsp;&nbsp;<input type="text" id="username" style="font-size: 18px;border-radius: 8px;text-align: center" placeholder="User Name"><br><br>
                <span style="color:indigo;font-size: 20px">Password</span>:&nbsp;&nbsp;&nbsp; <input  type="password" id="password" style="font-size: 18px;border-radius: 8px;text-align: center"  placeholder="Password">
                <br><br>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" id="login">Login</button>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Register</button>
                </div>
                <p id="loger" style="color:red;font-size:15px;margin-top:10px;text-align: center"></p>
            </div>
            
        </div>
                     

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="border-radius: 8px;background: green;padding:10px">Register New User</h4>
                    </div>
                    <div class="modal-body" style="padding:70px">
                        <p style="color:red"><span style="color:red;font-size: 20px">*</span>Required Field</p> <br>
                        <span style="color:indigo;font-size: 20px">Username:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="reg-user"/><span style="color:red;font-size: 20px">*</span> <br>
                         <span style="color:indigo;font-size: 20px">Emai:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;</span><input type="email" id="reg-email"/><span style="color:red;font-size: 20px">*</span> <br>
                         <span style="color:indigo;font-size: 20px">Password:</span>&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="reg-pass"/><span style="color:red;font-size: 20px">*</span> <br>
                         <span style="color:indigo;font-size: 20px">Re-Password:</span> &nbsp;&nbsp; <input type="password" id="re-pass"/><span style="color:red;font-size: 20px">*</span><br> <br>
                          <p id="reger" style="color:red;font-size: 15px"></p><br>
                        <button class="btn btn-primary" id="register">Register </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>