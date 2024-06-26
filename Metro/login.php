<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="icon" type="text/css" href="img/logo.png">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <nav id="registroHeader">
            <img src="img/logo.png" alt="logo" id="ImgbannerRegistro">
            <ul>
                <li><a href="sign_up.php">Registro</a></li>
                <li><a href="login.php">Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>
    <section class="formulario">
        <h2>Login</h2>
        <form action="ingresar.php" method="POST" id="loginForm">
            <label>Usuario:</label>
            <input type="email" name = "usuario" placeholder="Ingresa correo" id="email" required autofocus>
            <br>
            <br>
            <label>Contraseña:</label>
            <input type="password" name = "contrasena" placeholder="Ingresa contraseña" id="password" required>
            <br>
            <br>
            <input name = "Ingresar" type="submit" value="Ingresar" class="enviar">
            <div id="div_registrate"><p>¿No tienes cuenta? <a href="sign_up.php">Regístrate</a></p></div>
        </form>
</section>

<footer>
    <ul>
        <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
        <li><a href="https://www.whatsapp.com/?lang=es_LA/" target="_blank">WhatsApp</a></li>
        <li><a href="hhttps://twitter.com/?lang=es" target="_blank">X</a></li>
    </ul>
</footer>

<script src="js/login.js"></script>

</body>
</html>