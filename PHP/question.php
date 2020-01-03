<?php

if (!isset($_SESSION["userid"])) {
    session_start();
}

class question_db {

    private $conn;

    function write_question($username, $title, $question) {
            $conn = new mysqli("localhost", "root", "", "project");
        $sql = "SELECT username,title,question FROM access";
        $result = $conn->query($sql);
        $stmt = $conn->prepare("INSERT INTO  questions(username,title,question) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $title, $question);
        $stmt->execute();
        echo "Question posted";
        $stmt->close();
        $conn->close();
    }

    function delete_question($id){
    	       $conn = new mysqli("localhost", "root", "", "project");
    	$sql = "DELETE FROM questions WHERE id='$id'";
    	if ($conn->query($sql) === TRUE) {
    	echo "Record deleted successfully";
		} else {
    	echo "Error deleting record: ";
		}

		$conn->close();
    }


    function edit_questions($id,$title,$question)
    {

            $conn = new mysqli("localhost", "root", "", "project");
        $sql = "SELECT * FROM questions";
        $result = $conn->query($sql);
        $stmt = $conn->prepare("UPDATE questions SET title = ? , question=?  WHERE id = ?");
        $stmt->bind_param('sss', $title,$question,$id);
        $stmt->execute();
        $stmt->close();
        echo "Question has been changed.";
        $conn->close();

    }

}

function main() {
    $q_oper = new question_db;
    if ($_POST["check"] == 1) {
        
        $title = $_POST["title"];
        $question = $_POST["question"];
        $user = $_SESSION["userid"];
        if ($title == " " || $question == " ") {
            echo "Fields empty";
        } else {
            $q_oper->write_question($user, $title, $question);
            exit(1);
        }
    }

    else if ($_POST["check"] == 2) {
     	$q_oper->delete_question($_POST['qid']);
     }

    else if ($_POST["check"] == 3) {
        $id = $_POST["quid"];
        $question=$_POST["questions"];
        $title=$_POST["title"];
        $q_oper->edit_questions($id,$title,$question);
     }


}

main();
?>