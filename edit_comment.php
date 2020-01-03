<?php 
	$db_comm="";
	$id= $_POST["id"];




	   $conn = new mysqli("localhost", "root", "", "project");
        $sql = "SELECT * FROM comment";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {

        if ($row["id"] == $id) {
        $db_comm = $row["comment"];
        }

        }

        $conn->close();

 ?>

<script>
    
$(document).ready(function(){

    $("#submit_edit").click(function(){

    var edit_title,edit_question,id;

    id="<?php echo  $id;?>";
    check=3;
    edit_com=$("#edit_com").val();

    if(edit_com==""){
        alert("Empty fileds not allowed.");

    }else{
                $.ajax({
                url: 'PHP/comment.php',
                type: 'POST',
                data:{cmid:id,comment:edit_com,check:check},
                success: function (data) {
                    alert(data);
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
<h4 class="modal-title">Edit Comment</h4>
</div>
<div class="modal-body">



<div class="panel panel-default">

<div class="panel-body">
<textarea id="edit_com" style="width:100%;height:200px;resize: none;margin-top:-15px;border-radius: 10px" ><?php echo $db_comm ?>
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