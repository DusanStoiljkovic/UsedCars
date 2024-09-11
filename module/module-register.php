<?php 
require_once "config.php";
if ($_POST) {
    if (empty($_POST["username"])) 
        $usernameErr = "Type username";
    else
        $username = $_POST['username'];
    if (empty($_POST['password']))
        $passwordErr = "Type password";
    else
        $password = $_POST['password'];
    if (empty($_POST['verified_password']))
        $verified_passwordErr = "Retype password";
    else
        $verified_password = $_POST['verified_password'];

    if ($password !== $verified_password) 
        $password_matchErr = "Passwords are not maching";

    if (empty($usernameErr) && empty($passwordErr) &&  empty($verified_passwordErr) && empty($password_matchErr)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `user` (`username`, `password`, `user_level`) VALUES (?, ?, ?)";
        $run = $conn->prepare($sql);
        $user_level = 2;
        $run->bind_param("ssi", $username, $hashed_password, $user_level);
        $run->execute();
        $user_id = $conn->insert_id;

        $_SESSION['user_level'] = $user_level;
        $_SESSION['log_status'] = 1;
        $_SESSION['user_id'] = $user_id;
        header("location: index.php");        
    }
    echo "<br>Unsuccessful input in database";
}

include "template/view-register.php";
?>


