<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION["userid"])) {
    echo "<script>window.location = 'login.php'</script>";
}
?>

<html lang="en">
    <head>
        <title>User | Question</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.js" type="text/javascript"></script>
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
                
                <div class="container-fluid" style="margin-top:20px">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>   Post a new question. </h3>
                </div>

                <div class="panel-heading"><span style="font-size:15px"><b>Title</b> </span>
                    <input type="text" 
                     style="margin-left:20px;width:300px;border:1px solid black;border-radius: 3px;height:30px;font-size:15px;text-align: center"
                     placeholder="Type a title." id="q-title"
                     />
                </div>

                <div class="panel-body">
                    <p style="font-size: 18px"> Type A Full Question Here. </p> <br>
                    <textarea id="q" style="width:100%;height:200px;resize: none;margin-top:-15px;border-radius: 10px">
                        
                    </textarea>
                </div>

                <div class="panel-footer">

                    <button class="btn btn-success" id="submit-question">Submit</button>
                </div>

            </div>
        </div>

              </div>

        </div>
</body>
</html>