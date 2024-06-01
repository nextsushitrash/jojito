<?php

include("conexion.php");
include("modelo.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores de los números enviados por el formulario
    $id=null;
    $codigo_tamaño=$_POST["codigo_tamaño"];
    $clasificacion= $_POST["clasificacion"];
    insertartamaño($conn, $codigo_tamaño, $clasificacion);

}
?>