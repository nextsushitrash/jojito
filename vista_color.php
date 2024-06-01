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
            background-image: url('https://i.redd.it/054g51sfr3051.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 40%;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.2); /* Fondo transparente con opacidad */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centra el contenido del contenedor */
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left; /* Alinea el contenido de .form-group a la izquierda */
        }

        label {
            display: inline-block;
            width: 120px; /* Ancho fijo para etiquetas */
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: calc(100% - 150px); /* Reduce el ancho de la casilla */
            max-width: 300px; /* Establece un ancho máximo para la casilla */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
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
    </style>
</head>
<body>
    <div class="container">
    <h2>AGREGAR COLOR</h2>
        <form action="color_controlador.php" method="post">
            <div class="form-group">
                <label for="codigo_color">codigo color:</label>
                <input type="text" id="codigo_color" name="codigo_color" required>
            </div>

            <div class="form-group">
                <label for="nombre_color">nombre color:</label>
                <input type="text" id="nombre_color" name="nombre_color" required>
            </div>
            <button type="submit">AGREGAR</button>
        </form>
    </div>
</body>
</html>