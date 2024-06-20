<?php
include("conexion.php");

// Verificar si la sesión ya está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['enviar'])) {
    if (strlen($_POST['comentario']) >= 1) {
        $comentario = trim($_POST['comentario']);

        // Obtener el idRegistro de la sesión
        if (isset($_SESSION['idRegistro'])) {
            $id_registro = $_SESSION['idRegistro'];

            // Insertar el comentario en la tabla comentarios, asegurándose de incluir el idRegistro correspondiente
            $consulta = "INSERT INTO comentarios(Id_Nombre, comentario) VALUES('$id_registro', '$comentario')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                $_SESSION['mensaje'] = 'Comentario enviado correctamente';
            } else {
                $_SESSION['mensaje'] = 'Error al enviar el comentario';
            }
        } else {
            $_SESSION['mensaje'] = 'Error: No se pudo obtener el ID del usuario. ID no está en la sesión.';
        }
    } else {
        $_SESSION['mensaje'] = 'Error: Debes ingresar un comentario';
    }
}

header("Location: comentarios.php");
exit();
?>
