<?php

include("conexion.php");
include("modelo.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores de los números enviados por el formulario
    $id=null;
    $codigo_color=$_POST["codigo_color"];
    $nombre_color= $_POST["nombre_color"];
    insertarcolor($conn, $codigo_color, $nombre_color);

}
?>