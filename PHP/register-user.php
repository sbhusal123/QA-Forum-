<?php

$username = $_POST["user"];
$pwd = $_POST["pwd"];
$repwd = $_POST["repwd"];
$email = $_POST["email"];



    $conn = new mysqli("localhost", "root", "", "project");
$sql = "SELECT username,password FROM access";
$result = $conn->query($sql);

$user_check = false;
while ($row = $result->fetch_assoc()) {
    if ($username == $row["username"]) {
        $user_check = true;
        echo "User Already Exists";
        exit();
    }
}

if ($username == "" || $pwd == "" || $email == "" || $repwd == "") {
    echo "Please fillup all the fields.";
} else if ($pwd != $repwd) {
    echo "Please Enter same Password.";
} else if ($user_check == false) {
    
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit();
    }
    $def="0";
    $conn = new mysqli("localhost", "root", "", "project");
    $stmt = $conn->prepare("INSERT INTO  access(username,password,email,accstat) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssss", $username, $pwd , $email, $def);
    $stmt->execute();
    echo "User Registred Succesfully.";
    $stmt->close();
    $conn->close();
}
?>