<?php 

require_once "config.php";

$sql = "SELECT * FROM `car` WHERE `car_condition` = 'novo' ORDER BY `price` ASC";
$run = $conn->prepare($sql);
$run->execute();
$result = $run->get_result();
if ($result->num_rows > 0) {
    include "./template/view-fast_search.php";
}


?>

