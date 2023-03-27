<?php
// Datos para la conexión a la base de datos
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "horario";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}