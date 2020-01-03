<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forum | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.js" type="text/javascript"></script>
         <script src="script.js" type="text/javascript"></script>
        <script src="Bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-image: url('study.jpg');background-repeat: no-repeat;background-size: cover;width:100%;height:650px;overflow:hidden" class="img-responsive">

        <div class="container">
            <?php 
            include './navigation.php';
            ?>
        
            <div class="row">
                <div class="col-xs-3">

                    <div class="panel-group" style="margin-top:5px;width:200px">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h5>New   Posts</h5></div>

                                               <?php
                    							$i = 0;
                    							$conn = new mysqli("localhost", "root", "", "project");
                    							$sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 4 ";
                    							$result = $conn->query($sql);
                    							while ($row = $result->fetch_assoc()):

                    							?>
                            <div class="panel-body" style="border-bottom:2px solid indigo;color:indigo;">
                            <p style="margin-top:-5px;margin-bottom:-20px"><?php echo $row["question"]; ?></p><br>
                            <h5 style="color:red"><span style="color:black">Category:</span><?php echo $row["title"]; ?></h5>
                            </div>
                        <?php endwhile; ?>
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-9" style="position: relative">
                    <h4 style="text-align: center;color:indigo;margin-bottom:-10px;font-size: 20px">Our Features</h4>
                    <!-- cau slider from here-->

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:20px;margin-left: 35px" >
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                           
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" style="border:2px solid green;border-radius:5px">
                            <div class="item active">
                                <img src="question.jpg"  style="height:400px;width:100%" class="img-responsive">
                                <div class="carousel-caption">
                                    <!-- Content Here -->
                                    <h3>Confised on any topics?</h3>
                                    <p> Just Sign Up and drop a question.</p>
                                    <button type="button" class="btn btn-success">Get to know more..</button>
                                </div>
                            </div>


                            <div class="item">
                                <img src="answer.jpg" style="height:400px;width:100%" class="img-responsive">
                                <div class="carousel-caption">
                                    <h3>Get Answered By our users.</h3>
                                    <p>Really questions are not hard to solve as you think.</p>
                                    <button type="button" class="btn btn-success">Get to know more..</button>
                                </div>
                            </div>


                            <div class="item">
                                <img src="search.jpg" style="height:400px;width:100%" class="img-responsive">
                                <div class="carousel-caption">
                                    <h3>Search</h3>
                                    <p>Type a question to search on database and get answer quickly.</p>
                                    <button type="button" class="btn btn-success">Get to know more..</button>
                                </div>
                            </div>



                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>


                    </div> <!--Crausoal-->
                </div>



                <br clear="all">

            </div>


            <div style=";bottom:0px;margin-bottom:0px;background: #333333;border-radius: 8px;
                 border-top: 2px solid #999999;height:80px;">
                <h3 style="color: #e69eb6;text-align:center;font-family: cursive">All the contents of the Site are copy-right Protected. </h3>
                <h5 style="color: brown;text-align:center;font-family: cursive">All Rights Reserved By Developer. @Inc 2017</h5>
            </div>
        </div>
    </body>
</html>