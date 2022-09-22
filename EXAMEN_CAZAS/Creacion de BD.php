<?php
$servername = "localhost";
$username = "root";
$password = "";
$examenbd = $_POST ["examenbd"];

$conn = new mysqli($servername, $username, $password );


if ($conn->connect_error) {
    die("Fallo la conexion: " .$conn->error);
}
echo "Conexion correcta ";


$sql = "CREATE DATABASE $examenbd";

if ($conn->query($sql) === TRUE) {
    echo "Tabla creada correctamente";
}
else {
    echo "Error al crear: " .$conn->error;
}
$conn->close();
?>