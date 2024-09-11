<?php 

require_once "config.php";

if (isset($_SESSION['log_status'])) {
    $sql = "SELECT * FROM `car` WHERE `user_id` = ?";
    $run = $conn->prepare($sql);
    $run->bind_param("s", $_SESSION["user_id"]);
    $run->execute();

    $result = $run->get_result();
} 
include "./template/view-mycars.php";

?>