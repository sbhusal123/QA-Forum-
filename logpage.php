<!DOCTYPE html>
<?php
ob_start();
session_start();
if (!isset($_SESSION["userid"])) {
    echo "<script>window.location = 'login.php'</script>";
}
?>

<html lang="en">
    <head>
        <title>User | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.js" type="text/javascript"></script>
       <!-- <script src="script.js" type="text/javascript"></script>-->
        <script src="Bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script href="script.js"></script>

        <script src="script1.js"></script>
        
    </head>
    <body  style="background: teal;overflow-y: scroll;overflow-x: hidden;margin-top:50px;">
        <div class="row">
            <?php
            include './lognav.php';
            ?>


            <div class="col-xs-4"  style="background: #040C35;width:200px;border:none;
                 height:650px;border-radius: 0px;position: fixed;">

               
            <?php include 'side-nav.php'; ?>

            </div>



            <div class="col-xs-7 jumbotron" style="position: static;margin-left:250px;margin-top: 10px;padding:10px;border-radius: 10px;background: black">
            <div class="nav" style="background: #5E4646;margin:-10px;border-radius:2px;height: 50px">
                <ul style="line-height: 10px">
                    <li style="color:#B026DD" id="btn-recent">Recent</li>
                    <li style="color: #B026DD" id="btn-users" >Users</li>
                </ul>
            </div>
            <br clear="all">
            
            <div id="recent"  style="padding: 10px;background: black">
    
                    <?php include "PHP/Ajax/refresh_comment.php"; ?>

            </div>
            
            

            



            <div id="user" style="display: none">

                    
                <p>User Pages</p>

            </div>

        <div class="view">
            

        </div>

        
        </div>

</html>