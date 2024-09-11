
<?php 

require_once "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = test_data($_POST["username"]);
    $password = test_data($_POST["password"]);

    if ($username == "" && $password == "")    
        $Err = "Unesite korisnicko ime i lozinku";
    else {
        $sql = "SELECT * FROM `user` WHERE `username` = ?";
        $run = $conn->prepare($sql);
        $run->bind_param("s", $username);
        $run->execute();

        $result = $run->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user_id = $row['user_id'];

            if (password_verify($password, $row['password'])) {
                $_SESSION['log_status'] = 1;
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_level'] = $row['user_level'];
                header("location: index.php");
            } 
        } else {
            $Err = "Data is not valid";
        }
    }
}


function test_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

include "template/view-login.php";
?>
