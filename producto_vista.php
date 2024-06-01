<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE PROYECTOS</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://www.que.es/wp-content/uploads/2020/10/joji-nectar.png');
            background-size: cover; /* Asegura que la imagen cubra toda la pantalla */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
            background-position: center; /* Centra la imagen en el fondo */
            background-attachment: fixed; /* Mantiene la imagen fija al desplazarse */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 40%;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.3); /* Fondo transparente con opacidad */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centra el contenido del contenedor */
            color: red; /* Cambia el color del texto del contenedor a rojo */
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left; /* Alinea el contenido de .form-group a la izquierda */
            color: red; /* Cambia el color del texto de .form-group a rojo */
        }

        label {
            display: inline-block;
            width: 120px; /* Ancho fijo para etiquetas */
            font-weight: bold;
            margin-bottom: 5px;
            color: red; /* Cambia el color del texto de las etiquetas a rojo */
        }

        input[type="text"] {
            width: calc(100% - 150px); /* Reduce el ancho de la casilla */
            max-width: 300px; /* Establece un ancho máximo para la casilla */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            color: red; /* Cambia el color del texto de los inputs a rojo */
        }

        button[type="submit"] {
            background-color: #0B1413;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #2349BC;
        }

        h2 {
            color: red; /* Cambia el color del texto del título a rojo */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>AGREGAR PRODUCTO</h2>
        <form action="producto_controlador.php" method="post">
            <div class="form-group">
                <label for="nombre_producto">nombre producto:</label>
                <input type="text" id="nombre_producto" name="nombre_producto" required>
            </div>

            <div class="form-group">
                <label for="descripcion">descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" required>
            </div>
            <button type="submit">AGREGAR</button>
        </form>
    </div>
</body>
</html>
