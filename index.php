<?php
$servername   = "localhost";
$database = "test";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
    die("Konekcija nije uspela: " . $conn->connect_error);
}
    echo "Konekcija uspela";

