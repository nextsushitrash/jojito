<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MENU</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://media2.giphy.com/media/mxHTrfvaw7FFYwcCad/giphy.gif?cid=6c09b952qq26pe4jnb1dtvhybq0l1qkin0q46iaeojbttg2q&ep=v1_gifs_search&rid=giphy.gif&ct=g');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #00FFFF; /* Color celeste */
        }

        h2 {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.0); /* Fondo transparente */
            padding: 10px 20px; /* Espaciado interior */
            border-radius: 5px; /* Bordes redondeados */
        }

        nav {
            background-color: rgba(0, 0, 0, 0.8); /* Color de fondo muy oscuro */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px; /* Espaciado interior */
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            flex: 1;
        }

        nav ul li a {
            display: block;
            padding: 14px 20px;
            color: #00FFFF; /* Color celeste */
            text-align: center;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Color de fondo semi-transparente al pasar el cursor */
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body>
    <h2>MENU</h2>
    
    <nav>
        <ul>
            <li><a href="producto_vista.php">PRODUCTOS</a></li>
            <li><a href="tamaño_vista.php">TAMAÑO</a></li>
            <li><a href="categoria_vista.php">CATEGORIA</a></li>
            <li><a href="vista_color.php">COLOR</a></li>
        </ul>
    </nav>
</body>
</html>