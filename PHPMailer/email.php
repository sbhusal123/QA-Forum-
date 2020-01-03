<?php
   if(!isset($_SESSION['userid']))
    {
    session_start();
    }
require 'PHPMailerAutoload.php';


$_SESSION['pin'] = time() . '-' . mt_rand();
$db_email = " ";
$userid = " ";




function write_pin_db() {
        $default="0";
        $userid=$_SESSION['userid'];
            $conn = new mysqli("localhost", "root", "", "project");
        $sql = "SELECT username,pin,accstat FROM access";
        $result = $conn->query($sql);
        $stmt = $conn->prepare("UPDATE access SET pin = ?,accstat=?  WHERE username = ?");
        $stmt->bind_param('sss', $_SESSION['pin'], $default, $userid);
        $stmt->execute();
        $stmt->close();
        $conn->close();   
    
 
}

function email_address() {
    $userid = $_SESSION['userid'];

        $conn = new mysqli("localhost", "root", "", "project");
    $sql = "SELECT username,email FROM access";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        if ($row["username"] == $userid) {
            $db_email = $row["email"];
        }
    }

    $conn->close();
    return $db_email;
}

function pin_mail() {

    email_address();

    $db_email= email_address();
    $userid = $_SESSION['userid'];
    
    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'suryabhusal11@gmail.com';                 // SMTP username
    $mail->Password = '<password>';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('suryabhusal11@gmail.com', 'Q/A');
    $mail->addAddress($db_email,$userid);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('suryabhusal11@gmail.com', 'Developer');


    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Email Confirmation.';
    $mail->Body = 'PIN Code:' . $_SESSION['pin'];

    if (!$mail->send()) {
        echo 'Error';
    } else {
        echo 'PIN Sent Succesfully please check your email.';
    }
}

function main() {
    pin_mail();
    write_pin_db();
    $_SESSION['PIN']="";
}

main();
?>