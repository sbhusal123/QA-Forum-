<?php
if(!isset($_SESSION['userid']))
{
    session_start();
}
    
  	$conn = new mysqli("localhost", "root", "", "project");
$sql = "SELECT username,email,accstat FROM access";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    if ($row["username"] == $userid) {
        $us_email = $row["email"];
        $us_accstat= $row["accstat"];
    }
}

$conn->close();
?>