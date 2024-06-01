<?php

include("conexion.php");
include("modelo.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores de los números enviados por el formulario
    $id=null;
    $categoria_principal=$_POST["categoria_principal"];
    $nombre_categoria= $_POST["nombre_categoria"];
    insertarcategorias($conn, $categoria_principal, $nombre_categoria);

}
?>