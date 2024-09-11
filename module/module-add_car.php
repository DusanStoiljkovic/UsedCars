<?php 

require_once "config.php";


if ($_POST) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year  = $_POST['year'];
    $color = $_POST['color'];
    $price = $_POST['price'];

    $img_name = $_FILES['img_upload']['name'];
    $tmp_img_name = $_FILES['img_upload']['tmp_name'];
    $folder = "public/upload/";
    move_uploaded_file($tmp_img_name, $folder . $img_name);

    $image_url = $folder . $img_name;


    $sql = "INSERT INTO `car` (`brand`, `model`, `year`, `color`, `price`, `image_url`, `user_id`) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $run = $conn->prepare($sql);
    $run->bind_param("ssisdsi", $brand, $model, $year, $color, $price, $image_url, $_SESSION['user_id']);
    $run->execute();
}

include "template/view-add_car.php";
?>
         
