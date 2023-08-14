<?php
// Establecer la conexión con la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "registro";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
