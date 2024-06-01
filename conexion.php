<?php

// Conexión a la base de datos (reemplaza con tus propios datos de conexión)
$servername = "localhost";
$username = "root";
$password = "rootleon";
$database = "p_final";


// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);


// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
else
{
    echo " ";
}
?>