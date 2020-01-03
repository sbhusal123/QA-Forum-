<?php

$pin=$_POST['input'];
if(!isset($_SESSION['userid']))
{
    session_start();
}
$userid=$_SESSION['userid'];
if ($pin=="") {
    echo "Empty Fields !!";
    exit(1);
} else {
    
        $conn = new mysqli("localhost", "root", "", "project");
    $sql = "SELECT username,pin,accstat FROM access";
    $result = $conn->query($sql);
    
    $def="1";
    while ($row = $result->fetch_assoc()) {
        if ($row["username"] == $userid) {
            $dbpin = $row["pin"];
        }
    }

    if ($dbpin == $pin) {

        $stmt = $conn->prepare("UPDATE access SET accstat = ?  WHERE username = ?");
        $stmt->bind_param('ss', $def, $userid);
        $stmt->execute();
        $stmt->close();
        echo "Verification Succesfull.";
    } else {
        echo "PIN incorrect.";
    }
}

$conn->close();
?>