<?php

include("conexion.php");
include("modelo.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores de los números enviados por el formulario
    $id=null;
    $nombre_producto=$_POST["nombre_producto"];
    $descripcion= $_POST["descripcion"];
    insertarproducto($conn, $nombre_producto, $descripcion);

}
?>