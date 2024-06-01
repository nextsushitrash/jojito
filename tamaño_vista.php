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
            background-image: url('https://m.media-amazon.com/images/I/81eTlO6KwoL.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #C7C9CE; /* Cambia el color del texto del body */
        }

        .container {
            width: 40%;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.2); /* Fondo transparente con opacidad */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centra el contenido del contenedor */
            color: #C7C9CE; /* Cambia el color del texto del contenedor */
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left; /* Alinea el contenido de .form-group a la izquierda */
            color: #C7C9CE; /* Cambia el color del texto de .form-group */
        }

        label {
            display: inline-block;
            width: 120px; /* Ancho fijo para etiquetas */
            font-weight: bold;
            margin-bottom: 5px;
            color: #C7C9CE; /* Cambia el color del texto de las etiquetas */
        }

        input[type="text"] {
            width: calc(100% - 150px); /* Reduce el ancho de la casilla */
            max-width: 300px; /* Establece un ancho máximo para la casilla */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: black; /* Cambia el color de fondo de las casillas a negro */
            color: #C7C9CE; /* Cambia el color del texto de los inputs */
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
            color: #C7C9CE; /* Cambia el color del texto del título */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>AGREGAR TAMAÑO</h2>
        <form action="tamaño_controlador.php" method="post">
            <div class="form-group">
                <label for="codigo_tamaño">codigo tamaño: </label>
                <input type="text" id="codigo_tamaño" name="codigo_tamaño" required>
            </div>

            <div class="form-group">
                <label for="clasificacion">clasificacion: </label>
                <input type="text" id="clasificacion" name="clasificacion" required>
            </div>
            <button type="submit">AGREGAR</button>
        </form>
    </div>
</body>
</html>
