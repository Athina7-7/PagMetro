<?php
include("menu.php");

// Verificar si la sesión ya está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

$usuario = $_SESSION['usuario'];

// Realizar la conexión a la base de datos
include("conexion.php");

// Mensaje de éxito o error al enviar el comentario
$mensaje = isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : '';
unset($_SESSION['mensaje']); // Limpiar mensaje de sesión después de leerlo

// Consulta SQL para seleccionar el nombre del usuario y el comentario
$consulta_comentarios = "SELECT comentarios.idcomentario, registro.nombre AS nombre_usuario, comentarios.comentario
                         FROM comentarios
                         INNER JOIN registro ON comentarios.Id_Nombre = registro.idRegistro";
$resultado_comentarios = mysqli_query($conex, $consulta_comentarios);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mensajes.css">
    <style>
        .comentario-burbuja {
            background-color: #d3f0d0;
            border: 2px solid #339933;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            clear: both;
            overflow: hidden;
            position: relative;
        }

        .comentario-burbuja strong {
            font-weight: bold;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .comentario-burbuja p {
            margin: 20px 0 10px 0;
            text-align: left;
        }

        .comentario-burbuja a {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            position: absolute;
            bottom: 10px;
        }

        .comentario-burbuja a:first-child {
            right: 10px;
        }

        .comentario-burbuja a:last-child {
            right: 100px;
        }

        .comentario-burbuja a:hover {
            background-color: #45a049;
        }

        
    </style>
</head>
<body>
    <div class="content-wrapper">
        <section>
            <!-- Mostrar mensaje de éxito o error -->
            <?php if (!empty($mensaje)) : ?>
                <div class="notification-box <?php echo strpos($mensaje, 'Error') !== false ? 'error' : 'success'; ?>">
                    <span class="close" onclick="cerrarMensaje()">x</span>
                    <h3><?php echo $mensaje; ?></h3>
                </div>
            <?php endif; ?>

            <h2>Escribe y/o lee comentarios</h2>
            <form id="comentarios" action="enviarComentario.php" method="POST">
                <label>Usuario: <?php echo htmlspecialchars($usuario); ?></label>
                <br><br>
                <label>Escribe tu comentario:</label>
                <br><br>
                <textarea name="comentario" id="comentario" placeholder="Ingrese su comentario" rows="10" required autofocus></textarea>
                <br><br>
                <input type="submit" name="enviar" value="Enviar" class="enviar">
            </form>
        </section>
    </div>

    <div class="content-wrapper">
        <section id="sectionDerecha">
            <?php while ($fila = mysqli_fetch_assoc($resultado_comentarios)) { ?>
                <div class="comentario-burbuja">
                    <strong><?php echo htmlspecialchars($fila['nombre_usuario']); ?></strong>
                    <p><?php echo htmlspecialchars($fila['comentario']); ?></p>
                    <a href="eliminar_Comentario.php?idcomentario=<?php echo $fila['idcomentario']; ?>">Eliminar</a>
                    <a href="modificar_Comentario.php?idcomentario=<?php echo $fila['idcomentario']; ?>">Modificar</a>
                </div>
            <?php } ?>
        </section>
    </div>

    <script src="js/cerrarMensaje.js"></script>
</body>
</html>
