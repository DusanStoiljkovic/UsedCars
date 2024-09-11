<?php 

require_once "config.php";

$sql = "SELECT * FROM `car` ORDER BY `price` ASC LIMIT 6";
$run = $conn->prepare($sql);
$run->execute();
$result = $run->get_result();
if ($result->num_rows > 0) {
    include "./template/view-home.php";
}


?>

