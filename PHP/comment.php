<?php

ob_start();
session_start();
?>

<?php

class comments_db {



    function write_comment($username, $id, $comment) {
    $conn = new mysqli("localhost", "root", "", "project");
        $sql = "SELECT * FROM comment";
        $result = $conn->query($sql);
        $stmt = $conn->prepare("INSERT INTO  comment(link_id,comment,username) VALUES (?, ?,?)");
        $stmt->bind_param("sss", $id, $comment, $username);
        $stmt->execute();
        echo "Commet posted";
        $stmt->close();
        $conn->close();
    }
    
        function delete_comment($id) {
        
        $conn = new mysqli("localhost", "root", "", "project");
    	$sql = "DELETE FROM comment WHERE id='$id'";
    	if ($conn->query($sql) === TRUE) {
    	echo "Comment deleted successfully";
		} else {
    	echo "Error deleting record: ";
		}

		$conn->close();
        
    }

    function submit_edit_comm($id,$comment)
    {

        $conn = new mysqli("localhost", "root", "", "project");
        $sql = "SELECT * FROM comment";
        $result = $conn->query($sql);
        $stmt = $conn->prepare("UPDATE comment SET comment = ?   WHERE id = ?");
        $stmt->bind_param('ss', $comment,$id);
        $stmt->execute();
        $stmt->close();
        echo "Comment updated.";
        $conn->close();
    }
    

}

function main() {
    $cm_op = new comments_db();
    if ($_POST["check"] == 1) {
        $cm_op->write_comment($_SESSION["userid"], $_POST['id'], $_POST['cmt']);
    } else if ($_POST["check"] == 2) {
        $cm_op->delete_comment($_POST['id']);
    }else if($_POST["check"]==3)
    {
        $cm_op->submit_edit_comm($_POST["cmid"],$_POST["comment"]);
    }
}

main();
?>