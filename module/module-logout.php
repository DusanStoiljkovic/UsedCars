<?php
    unset($_SESSION['log_status']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_level']);
    header("location: index.php");
?>
