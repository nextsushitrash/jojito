<?php
include("conexion.php");

function insertarcategorias($conn, $categoria_principal, $nombre_categoria){
    // Consulta SQL para insertar datos
    $sql = "INSERT INTO categorias(categoria_principal, nombre_categoria) VALUES (?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("ss", $categoria_principal, $nombre_categoria);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<p style='color: green;'>NUEVA INFORMACIÓN REGISTRADA CORRECTAMENTE.</p>";
    } else {
        echo "<p style='color: red;'>Error al registrar cliente: " . $stmt->error . "</p>";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();

    // Crear HTML para la boleta
    $boletahtml = "
    <div style='background-color: #f9f9f9; padding: 20px; border-radius: 5px; margin-top: 20px;'>
        <h1 style='color: #333; text-align: center; margin-bottom: 10px;'>REGISTRO</h1>
        <hr style='border: 1px solid #ccc; margin-bottom: 15px;'>
        <h4 style='color: #666;'>CATEGORIA PRINCIPAL:</h4>
        <p>$categoria_principal</p>
        <h4 style='color: #666;'>NOMBRE DE LA CATEGORIA:</h4>
        <p>$nombre_categoria</p>
    </div>";

    echo $boletahtml;
}

include("conexion.php");

function insertarcolor($conn, $codigo_color, $nombre_color){
    // Consulta SQL para insertar datos
    $sql = "INSERT INTO color(codigo_color, nombre_color) VALUES (?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("ss", $codigo_color, $nombre_color);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<p style='color: green;'>NUEVA INFORMACIÓN REGISTRADA CORRECTAMENTE.</p>";
    } else {
        echo "<p style='color: red;'>Error al registrar cliente: " . $stmt->error . "</p>";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();

    // Crear HTML para la boleta
    $boletahtml = "
    <div style='background-color: #f9f9f9; padding: 20px; border-radius: 5px; margin-top: 20px;'>
        <h1 style='color: #333; text-align: center; margin-bottom: 10px;'>REGISTRO</h1>
        <hr style='border: 1px solid #ccc; margin-bottom: 15px;'>
        <h4 style='color: #666;'>CODIGO DEL COLOR:</h4>
        <p>$codigo_color</p>
        <h4 style='color: #666;'>NOMBRE DEL COLOR:</h4>
        <p>$nombre_color</p>
    </div>";

    echo $boletahtml;
}

include("conexion.php");

function insertarproducto($conn, $nombre_producto, $descripcion){
    // Consulta SQL para insertar datos
    $sql = "INSERT INTO producto(nombre_producto, descripcion) VALUES (?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("ss", $nombre_producto, $descripcion);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<p style='color: green;'>NUEVA INFORMACIÓN REGISTRADA CORRECTAMENTE.</p>";
    } else {
        echo "<p style='color: red;'>Error al registrar cliente: " . $stmt->error . "</p>";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();

    // Crear HTML para la boleta
    $boletahtml = "
    <div style='background-color: #f9f9f9; padding: 20px; border-radius: 5px; margin-top: 20px;'>
        <h1 style='color: #333; text-align: center; margin-bottom: 10px;'>REGISTRO</h1>
        <hr style='border: 1px solid #ccc; margin-bottom: 15px;'>
        <h4 style='color: #666;'>NOMBRE DEL PRODUCTO:</h4>
        <p>$nombre_producto</p>
        <h4 style='color: #666;'>DESCRIPCIÓN:</h4>
        <p>$descripcion</p>
    </div>";

    echo $boletahtml;
}




include("conexion.php");

function insertartamaño($conn, $codigo_tamaño, $clasificacion){
    // Consulta SQL para insertar datos
    $sql = "INSERT INTO tamaño(codigo_tamaño, clasificacion) VALUES (?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("ss", $codigo_tamaño, $clasificacion);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<p style='color: green;'>NUEVA INFORMACIÓN REGISTRADA CORRECTAMENTE.</p>";
    } else {
        echo "<p style='color: red;'>Error al registrar cliente: " . $stmt->error . "</p>";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();

    // Crear HTML para la boleta
    $boletahtml = "
    <div style='background-color: #f9f9f9; padding: 20px; border-radius: 5px; margin-top: 20px;'>
        <h1 style='color: #333; text-align: center; margin-bottom: 10px;'>REGISTRO</h1>
        <hr style='border: 1px solid #ccc; margin-bottom: 15px;'>
        <h4 style='color: #666;'>CODIGO DEL TAMAÑO:</h4>
        <p>$codigo_tamaño</p>
        <h4 style='color: #666;'>CLASIFICACIÓN:</h4>
        <p>$clasificacion</p>
    </div>";

    echo $boletahtml;
}
?>