<?php

include 'integracion-datos.php';


// Crear tabla "horas"
$sql_horas = "CREATE TABLE horas (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
hora_inicio TIME NOT NULL,
hora_fin TIME NOT NULL
)";

if ($conn->query($sql_horas) === TRUE) {
    echo "Tabla 'horas' creada exitosamente<br>";
} else {
    echo "Error al crear la tabla 'horas': " . $conn->error . "<br>";
}

// Recuperar valores del formulario
$hora_inicio = $_POST['hora_inicio'];
$hora_fin = $_POST['hora_fin'];

// Validar valores
if (!$hora_inicio || !$hora_fin) {
  // Mostrar mensaje de error si faltan valores
  echo "Error: faltan valores";
} else {
  // Insertar valores en la tabla 'horas'
  $query = "INSERT INTO horas (hora_inicio, hora_fin) VALUES ('$hora_inicio', '$hora_fin')";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    // Mostrar mensaje de error si falla la inserción
    echo "Error al insertar los valores en la tabla 'horas'";
  } else {
    // Mostrar mensaje de éxito si se insertan los valores correctamente
    echo "Valores insertados exitosamente en la tabla 'horas'";
  }
}


// Insertar valores en la tabla "horas"
$sql_valores_horas = "INSERT INTO horas (hora_inicio, hora_fin)
VALUES
('07:00:00', '08:30:00'),
('08:30:00', '10:00:00'),
('10:00:00', '11:30:00'),
('11:30:00', '13:00:00'),
('13:00:00', '14:30:00'),
('14:30:00', '16:00:00'),
('16:00:00', '17:30:00'),
('17:30:00', '19:00:00'),
('19:00:00', '20:30:00'),
('20:30:00', '22:00:00')";

if ($conn->query($sql_valores_horas) === TRUE) {
    echo "Valores insertados exitosamente en la tabla 'horas'<br>";
} else {
    echo "Error al insertar valores en la tabla 'horas': " . $conn->error . "<br>";
}

// Crear tabla "clases"
$sql_clases = "CREATE TABLE clases (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
dia_semana VARCHAR(10) NOT NULL,
hora_inicio TIME NOT NULL,
hora_fin TIME NOT NULL,
materia VARCHAR(50) NOT NULL,
docente VARCHAR(50) NOT NULL,
aula VARCHAR(50) NOT NULL,
grupo VARCHAR(10) NOT NULL
)";

if ($conn->query($sql_clases) === TRUE) {
    echo "Tabla 'clases' creada exitosamente<br>";
} else {
    echo "Error al crear la tabla 'clases': " . $conn->error . "<br>";
}

if ($conn->ping()) {
    // la conexión está abierta, podemos ejecutar la consulta
    $result = mysqli_query($conn, "SELECT * FROM horas");
    // ...
  } else {
    // la conexión está cerrada, mostrar un mensaje de error
    $conn = new mysqli($servername, $username, $password, $dbname);
  }

  
?>