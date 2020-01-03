<?php 

     $db_title = $db_question = " ";
        

        $id= $_POST['id'];
    
       
            $conn = new mysqli("localhost", "root", "", "project");
        $sql = "SELECT id,title,question FROM questions";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
        if ($row["id"] == $id) {
        $db_title = $row["title"];
        $db_question = $row["question"];
        }
        }



?>
<script>
    
$(document).ready(function(){

    $("#submit_edit").click(function(){

    var edit_title,edit_question,id;

    id="<?php echo  $id;?>";
    check=3;
    edit_question=$("#edit_que").val();
    edit_title=$("#edit_title").val();

    if(edit_title=="" || edit_question==""){
        alert("Empty fileds not allowed.");

    }else{
                $.ajax({
                url: 'PHP/question.php',
                type: 'POST',
                data:{quid:id,title:edit_title,questions:edit_question,check:check},
                success: function (data) {
                    alert(data);
                    location.reload();
                }
                });
        }
    });
})

</script>
<div id="modal-control">
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">


<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Edit Question</h4>
</div>
<div class="modal-body">



<div class="panel panel-default">
<div class="panel-heading"><span style="font-size:15px"><b>Title</b> </span>
<input type="text" 
style="margin-left:20px;width:300px;border:1px solid black;border-radius: 3px;height:30px;font-size:15px;text-align: center"
placeholder="Type a title." id="edit_title" value="<?php echo $db_title; ?>"
/>
</div>

<div class="panel-body">
<p style="font-size: 18px"> Type A Full Question Here. </p> <br>
<textarea id="edit_que" style="width:100%;height:200px;resize: none;margin-top:-15px;border-radius: 10px" ><?php echo $db_question; ?>
</textarea>

</textarea>
</div>

<div class="panel-footer">

<button class="btn btn-success" id="submit_edit">Submit</button>
</div>

</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>        

</div>