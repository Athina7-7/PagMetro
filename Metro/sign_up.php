<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
    <section  class="formulario">
        <h2>Registro</h2>
        <form id="registroForm" action = "registrar.php" method="POST" >
            <label>Nombre:</label>
            <input type="text" name = "nombre" placeholder="Ingresa nombre" id="name" required autofocus>
            <br>
            <br>
            <label>Apellido:</label>
            <input type="text" name = "apellidos" placeholder="Ingresa apellido" id="lastname" required>
            <br>
            <br>
            <label>Usuario:</label>
            <input type="email" name= "email" placeholder="Ingresa correo" id="email" required>
            <br>
            <br>
            <label>Contraseña:</label>
            <input type="password" name = "contrasena" placeholder="Ingresa contraseña" id="password" required>
            <br>
            
            <br>
            <input type="submit" name = "registrar" value="Registro" class="enviar">
            <div id="div_acceder"><p>¿Ya tienes cuenta? <a href="login.php">Login</a></p></div>
        </form>
    </section>

    <footer>
        <ul>
            <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
            <li><a href="https://www.whatsapp.com/?lang=es_LA/" target="_blank">WhatsApp</a></li>
            <li><a href="hhttps://twitter.com/?lang=es" target="_blank">X</a></li>
        </ul>
    </footer>
    <script src="js/sign_up.js"></script>
</body>
</html>