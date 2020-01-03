<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION["userid"])) {
    echo "<script>window.location = 'login.php'</script>";
}
?>

<html lang="en">
    <head>
        <title>User | Settings</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.js" type="text/javascript"></script>
       <!-- <script src="script.js" type="text/javascript"></script>-->
        <script src="Bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body style="background: teal;overflow: hidden;margin-top:50px;">


        <div class="row">
            <?php
            include './lognav.php';
            ?>


            <div class="col-xs-4"  style="background: #040C35;width:200px;border:none;
                 height:650px;border-radius: 0px">

               
            <?php include 'side-nav.php'; ?>

            </div>



            <div class="col-xs-8" style="margin-left: 20px;margin-top: 10px">
              <?php
        $us_email = $us_accstat = " ";
            $conn = new mysqli("localhost", "root", "", "project");
        $sql = "SELECT username,email,accstat FROM access";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            if ($row["username"] == $_SESSION['userid']) {
                $us_email = $row["email"];
                $us_accstat = $row["accstat"];
            }
        }

        function display_stat($status) {
            if ($status == "0") {
                return "Un-Verified. Please verify";
            } else {
                return "Verified.";
            }
        }

        $conn->close();
        ?>
        <div style="margin-bottom: 20px;border:2px solid #4dea7c;border-radius: 8px;width:400px;padding-left: 20px">
            <h3>User-Information</h3>
            <p> <strong> Username: <?php echo $_SESSION['userid']; ?> </strong> </p>
            <p> <strong> Email:  <?php echo $us_email; ?> </strong> </p>
            <p id="ver_status"> <strong> Verification-Status: <?php echo display_stat($us_accstat); ?> </strong> </p>
        </div>

        <div class="row">


            <div class="col-xs-12">


                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Change Password</button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Verify Email</button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">Change Email</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Change Password</h4>
                            </div>
                            <div class="modal-body">

                                Old Password:&nbsp; <input type="password" id="old_pwd" /><br><br>
                                New Password: <input type="password"  id="new_pwd"/><br><br>
                                Re-Password:&nbsp;&nbsp; <input type="password" id="re_pwd"/><br>

                                <button class="btn btn-success" id="change_pwd">Submit</button><br>

                            </div>
                        </div>

                    </div>

                </div>


                <!-- Modal -->
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Verify Email</h4>
                            </div>
                            <div class="modal-body">
                                <strong>Enter the pin number from your email address.</strong>
                                PIN :&nbsp; <input type="password" id="email_pin" /><br><br>

                                <p id="process"></p>
                                <button class="btn btn-success" id="resend_pin">Resend PIN</button>
                                <button class="btn btn-success" id="submit_pin">Submit</button><br>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Change Email</h4>
                            </div>
                            <div class="modal-body">
                                <strong>Enter New Email Address.</strong><br><br>
                                Email Address :&nbsp; <input type="email" id="chg_email" /><br><br>


                                <button class="btn btn-success" id="change_email">Submit</button><br>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <br><br>
        
        <div style="margin-bottom: 10px;border:2px solid #c0c0c0;border-radius: 8px;width:400px;">
            <h4 style="text-align:center">Any Probblem! Email Us:</h4><br>
            &nbsp; <textarea placeholder="Type Your Message Here."
                style="width:380px;height:80px;overflow: scroll;resize: none;border-radius: 8px"></textarea><br>
            <button class="btn btn-warning" style="margin:5px">Send</button><br>
        </div>
        
        <?php
        
        if($us_accstat=="0")
        {
          echo
        "   <div class='alert alert-warning' style='margin-top:70px'>
            
           
            
            <p style='text-align: center;'>   <strong>Warning!</strong>
            Unverified users can only view the answers. Please verify your email 
                for further access. </p>
        </div>";
        }
        else
        {
                   echo
        "   <div class='alert alert-success' style='margin-top:70px'>
      
            <p style='text-align: center'>   <strong>Verified:</strong>
            Your Email  is verified. You can access the advanced features. 
                for further access. </p>
        </div>";
        }
       ?>
            </div>

        </div>
</body>
</html>