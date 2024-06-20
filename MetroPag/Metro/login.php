<?php
session_start();

// Verificar si hay un mensaje de sesión cerrada
$mensaje = isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : '';
unset($_SESSION['mensaje']); // Limpiar el mensaje de sesión después de leerlo

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="icon" type="text/css" href="img/logo.png">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mensajes.css">
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
        <!-- Mostrar mensaje de cierre de sesión si está presente -->
        <?php if(isset($_GET['logout']) && $_GET['logout'] == 1): ?>
            <div class="notification-box success">
                <span class="close" onclick="cerrarMensaje()">x</span>
                <h3>Sesión cerrada correctamente</h3>
            </div>
        <?php endif; ?>

        <!-- Mostrar mensaje de éxito o error -->
        <?php if (!empty($mensaje)) : ?>
            <div class="notification-box <?php echo strpos($mensaje, 'Error') !== false ? 'error' : 'success'; ?>">
                <span class="close" onclick="cerrarMensaje()">x</span>
                <h3><?php echo $mensaje; ?></h3>
            </div>
        <?php endif; ?>
        
        <h2>Login</h2>
        <form id="loginForm" action="ingresar.php" method="POST">
            <label>Usuario:</label>
            <input type="email" name="usuario" placeholder="Ingresa correo" id="email" required autofocus>
            <br><br>
            <label>Contraseña:</label>
            <input type="password" name="contrasena" placeholder="Ingresa contraseña" id="password" required>
            <br><br>
            <input name="Ingresar" type="submit" value="Ingresar" class="enviar">
            <div id="div_registrate"><p>¿No tienes cuenta? <a href="sign_up.php">Regístrate</a></p></div>
        </form>
    </section>

    <footer>
        <ul>
            <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
            <li><a href="https://www.whatsapp.com/?lang=es_LA/" target="_blank">WhatsApp</a></li>
            <li><a href="https://twitter.com/?lang=es" target="_blank">Twitter</a></li>
        </ul>
    </footer>

    <script src="js/cerrarMensaje.js"></script>
</body>
</html>
