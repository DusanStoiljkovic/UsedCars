<?php 

require_once "config.php";

if (isset($_GET["action"])) {
    switch($_GET['action']) {
        case 'edit':
            $sql = "SELECT * FROM `car` WHERE `car_id` = ?";
            $run = $conn->prepare($sql);
            $run->bind_param("i", $_GET["car_id"]);
            $run->execute();
            $result = $run->get_result();
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $brand = $row['brand'];
                $model = $row['model'];
                $year = $row['year'];
                $color = $row['color'];
                $price = $row['price'];
                $car_condition = $row['car_condition'];   
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $brand = $_POST['brand'];
                $model = $_POST['model'];
                $year = $_POST['year'];
                $color = $_POST['color'];
                $price = $_POST['price'];
                $car_condition = $_POST['car_condition'];
                
                $sql = "UPDATE `car` SET `brand` = ?, `model` = ?, `year` = ?, `color` = ?, `price` = ?, `car_condition` = ? WHERE `car_id` = ?";
                $run = $conn->prepare($sql);
                $run->bind_param("ssisdsi", $brand, $model, $year, $color, $price, $car_condition, $_GET['car_id']);   
                $run->execute();

                header('location: index.php?module=mycars');

            }
            break;
        case 'delete':
            $sql = "DELETE FROM `car` WHERE `car_id` = ? ";
            $run = $conn->prepare($sql);
            $run->bind_param("i", $_GET['car_id']);
            $run->execute();
            break;
    }
}

include "./template/view-edit.php";


?>