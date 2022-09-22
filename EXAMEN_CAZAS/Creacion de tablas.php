<?php
$servername = "localhost";
$username = "root";
$password = "";
$examenbd = $_POST["examenbd"];
$tabla = $_POST["tabla"];
$dato1 = $_POST["1erCampo"];
$dato2 = $_POST["2doCampo"];
$dato3 = $_POST["3erCampo"];
$dato4 = $_POST["4toCampo"];
$dato5 = $_POST["5toCampo"];


$conn = new mysqli($servername, $username, $password,$examenbd);


if ($conn->connect_error) {
  die("Falló la conexión: " .$conn->connect_error);
}
echo "Conexión correcta";

$sql = "CREATE TABLE $tabla(
    $dato1 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    $dato2 VARCHAR(20);
    $dato3 VARCHAR(20);
    $dato4 VARCHAR(20);
    $dato5 VARCHAR(20)
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla creada correctamente";
} 
else {
  echo "Error al crear la tabla: " .$conn->error;
}

$conn->close();
?>