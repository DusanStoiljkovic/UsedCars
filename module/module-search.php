<?php 

require_once "config.php";


if ($_POST) {
    $params = array();
    $conditions = array();
    $types = "";
    
    if(!empty($_POST["brand"])) {
        $conditions[] = "`brand` = ?";
        $params[] = $_POST["brand"];
        $types .= "s";
    }

    if(!empty($_POST["model"])) {
        $conditions[] = "`model` = ?";
        $params[] = $_POST["model"];
        $types .= "s";

    }

    if(!empty($_POST["year"])) {
        $conditions[] = "`year` = ?";
        $params[] = $_POST["year"];
        $types .= "i";
    }
    
    if(!empty($_POST["color"])) {
        $conditions[] = "`color` = ?";
        $params[] = $_POST["color"];
        $types .= "s";
    }

    if(!empty($_POST["price"])) {
        $conditions[] = "`price` = ?";
        $params[] = $_POST["price"];
        $types .= "d";
    }

    $sql = "SELECT *  FROM `car`";

    if (!empty($conditions)) 
        $sql .= " WHERE" . implode(" AND ", $conditions);
    
    $run = $conn ->prepare($sql);
    
    if(!empty($params)) {
        $run->bind_param($types, ...$params);
    }
    
    $run->execute();
    $result = $run->get_result();
}

include "./template/view-search.php";
?>

