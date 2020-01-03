<?php

if (!isset($_SESSION["userid"])) {
  session_start();
}
?>

                    <div class="jumbotron" style="background: black">
                  

                    <?php
                    $i = 0;
                      $conn = new mysqli("localhost", "root", "", "project");
                    $sql = "SELECT * FROM questions ORDER BY id DESC";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()):

                    ?>

                    
                    <div class="panel panel-default" style="border-top:2px solid indigo;box-shadow: 100px 200px solid #E8DEDE;margin-bottom: 50px">
                    <div class="panel-heading">
                    <h4><?php echo $row["title"]; ?></h4></div>
                    <div class="panel-body"><?php echo $row["question"]; ?></div>
                    <div class="panel-footer">
                        <p style="color:violet;border-radius: 5px;width:100%;cursor:pointer;padding:3px;background: green">Comments</p> <br>

                        <div class="panel panel-default" style="margin-top: -40px">
                         <textarea onblur="enable_reload();"  onclick="disable_reload();" style="width: 100%;resize: none" id="comment-text" ></textarea>

                          <button class="btn-primary"  onclick="comment_sub(this);" id="<?php echo $row["id"]; ?>">   Comment </button>
                            <br clear="all"><br>
                          <?php 
                                $conn2 = new mysqli("localhost", "root", "", "project");
                                $sql2 = "SELECT * FROM comment ORDER BY id DESC";
                                 $result2 = $conn->query($sql2);
                                 while ($row2 = $result2->fetch_assoc()):

                           ?>
                         <?php 

                          if($row2["link_id"]==$row["id"])
                          {
                                echo'<div class="panel-footer" style="border:2px solid indigo;border-radius:5px;font-size:17px;margin-bottom:-15px">

                                <p style="height:40px;line-height:40px;padding-left:4px;padding-right:5px;margin-left:-15px;color:gray;margin-top:-10px;margin-right:-15px;font-size:20px;background:indigo">'.$row2["username"].' says:';
                                  if($row2["username"]==$_SESSION["userid"])
                                 { 
                                   echo '<span style="float:right">
                                    <button style="margin-top:-10px" onclick="comment_edt(this);" id="'.$row2["id"].'" class="btn btn-sm btn-primary glyphicon edit_com glyphicon-pencil"></button>
                                      <button style="margin-top:-10px" onclick="comment_del(this);" id="'.$row2["id"].'" class="btn btn-sm btn-danger glyphicon glyphicon-trash"></button>
                                    </span>';
                                  }
                                echo    '</p>

                                <p style="color:red;font-size:17px">'. $row2["comment"].'</p>
                                </div>';
                          } 


                             ?>
                          <?php endwhile;  ?>  
                        </div>
                    


                    <i style="font-family: sans-serif;">Posted By: <b><?php echo $row["username"]; ?></b> At: <b><?php echo $row["time"]; ?></b></i>
                    </div>
                    </div>

            <?php  endwhile; ?>
            
                <!-- Model -->

                
            </div>