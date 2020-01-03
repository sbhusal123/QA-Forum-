<!DOCTYPE html>
<?php
$id="";
session_start();
if (!isset($_SESSION["userid"])) {
    echo "<script>window.location = 'login.php'</script>";
}
?>

<html lang="en">
    <head>
        <title>User | Posts</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.js" type="text/javascript"></script>
       <!-- <script src="script.js" type="text/javascript"></script>-->
        <script src="Bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script>
            $(document).ready(function(){



                    $(".edit").click(function(){
                    var id;
                    id=this.id;
                
                    $.ajax({
                    url: 'editpost.php',
                    data: {id:id},
                    type: 'POST',

                    success: function (data) {
                      $(".view").html(data); ///must be html
                      $('#myModal').modal('show');

                    }

                    });

                });




            })
        </script>
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
              <div class="col-xs-8" style="margin-left: 20px;margin-top: 50px">

             <div style="margin-top:-10px;margin-left: 20px;overflow-y:scroll;max-height:500px;background:white;border-radius: 8px">
            <table class="table table-hover table-responsive" style="background:white;border-radius: 8px;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Question</th>
                        <th>Options</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $i = 0;
                    $conn =     $conn = new mysqli("localhost", "root", "", "project");
                    $sql = "SELECT * FROM questions";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        if ($row['username'] == $_SESSION["userid"]) {
                            $i++;
                            echo
                            '<tr>' .
                            '<th scope="row">' . $i . '</th>' .
                            '<td>' . $row['title'] . '</td>' .
                            '<td>' . $row['question'] . '</td>' .
                            '<td>' . '<button class="btn btn-sm btn-primary edit"   id="'.$row['id'].'" ><span class="glyphicon glyphicon-pencil"></span></button>'
                            . '<button style="margin-left:2px" class="btn btn-sm btn-danger delete" id="'.$row['id'].'"><span class="glyphicon glyphicon-trash"></span></button>'
                            . '</td>' .
                            '</tr>';
                        }
                    }
                    ?> 
                </tbody>
            </table>
        </div>

              </div>


        <duv class="view">
            

        </duv>
    
</html>