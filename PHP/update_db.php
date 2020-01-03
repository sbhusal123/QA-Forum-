<?php

ob_start();
session_start();

class operations {

    private $conn;

    function db_connect() {
            $conn = new mysqli("localhost", "root", "", "project");
    }

    function update_email($newemail, $userid) {

        if (!filter_var($newemail, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit(1);
        }
        $def="0";
            $conn = new mysqli("localhost", "root", "", "project");
        $sql = "SELECT username,email FROM access";
        $result = $conn->query($sql);
        $stmt = $conn->prepare("UPDATE access SET email = ? , accstat=?  WHERE username = ?");
        $stmt->bind_param('sss', $newemail,$def,$userid);
        $stmt->execute();
        $stmt->close();
        echo "Email Changed. Please Verify It.";
        $conn->close();
    }

    function update_password($newpass, $oldpass, $userid) {
        
        if ($newpass == "" || $oldpass == "") {
            echo "Empty Fields !!";
            exit();
        } else {

            $dbpwd = "";
                $conn = new mysqli("localhost", "root", "", "project");
            $sql = "SELECT username,password FROM access";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                if ($row["username"] == $userid) {
                    $dbpwd = $row["password"];
                }
            }

            if ($dbpwd == $oldpass) {

                $stmt = $conn->prepare("UPDATE access SET password = ?  WHERE username = ?");
                $stmt->bind_param('ss', $newpass, $userid);
                $stmt->execute();
                $stmt->close();
                echo "Password Changed";
            } else {
                echo "Please type valid old password";
            }
        }

        $conn->close();
    }

}

function main() {
    $op = new operations;
    $op->db_connect();
    if ($_POST["stat"] == 1) {
        $op->update_password($_POST["new_pwd"], $_POST["old_pwd"], $_SESSION["userid"]);
    } else if ($_POST["stat"] == 2) {
        $op->db_connect();
        $op->update_email($_POST["new_email"], $_SESSION["userid"]);
    }
}

main();
?>