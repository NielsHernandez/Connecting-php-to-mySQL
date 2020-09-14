<?php
//prueba de conexion unicamente no lo usaremos para subir datos.
//etiqueta de apertura
$servername = "localhost";
$username = "root";
$password = "";

// crear conexion a la base de datos
$conn = new mysqli($servername, $username, $password);

// revisar si la conexion se realizo
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "conexion realizada con exito";


//etiqueta de cerradura
?>