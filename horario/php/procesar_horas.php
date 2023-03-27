<?php

require '.db/integracion-datos.php';

$hora_inicio_lunes = $_POST['hora_inicio_lunes'];
$hora_fin_lunes = $_POST['hora_fin_lunes'];
$materia_lunes = $_POST['materia_lunes'];
$docente_lunes = $_POST['docente_lunes'];
$aula_lunes = $_POST['aula_lunes'];
$grupo_lunes = $_POST['grupo_lunes'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO horario (hora_inicio_lunes, hora_fin_lunes, materia_lunes, docente_lunes, aula_lunes, grupo_lunes) VALUES ('$hora_inicio_lunes', '$hora_fin_lunes', '$materia_lunes', '$docente_lunes', '$aula_lunes', '$grupo_lunes')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
  echo "Los datos han sido guardados exitosamente";
} else {
  echo "Error al guardar los datos: " . $conn->error;
}