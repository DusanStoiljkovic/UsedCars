<?php
$usernameErr = $emailErr = $messageErr = "";
$username = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = $_POST['message'];
    }
    

    $to = "dusanstoiljkovic@gmail.com";
    $subject = "Message from $username";
    $mail_check = mail($to, $subject, $message);
    if ($mail_check) 
        $_SESSION['respond'] = "Successfully sent";
    else   
        $_SESSION['respond'] = "Message is not delivered. Try later";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_SESSION["respond"])) {
    echo $_SESSION['respond'];
    unset($_SESSION["respond"]);
}

include "template/view-contact.php";
?>


