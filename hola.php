<?php

$servername = "192.168.205.250";
$username = "root";
$password = "qwerty.1234";
$dbname = "miguelapruebame";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$sql = "SELECT * FROM elementos";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . "<br>";
    }
} else {
    echo "0 resultados";
}
//hola

$conn->close();
?>