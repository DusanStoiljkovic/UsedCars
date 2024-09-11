<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polovniautomobili";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) 
    die("Neuspela konekcija sa bazom podataka". mysqli_connect_error());

?>