<?php
require_once 'conexion.php';
session_start();

if (isset($_GET['idcomentario'])) {
    $idcomentario = $_GET['idcomentario'];

    $sql = "DELETE FROM comentarios WHERE idcomentario = " . $idcomentario;
    $result = $conex->query($sql);
    $conex->close();

    if ($result) {
        $_SESSION['mensaje'] = 'Comentario eliminado correctamente';
    
    } else {
        $_SESSION['mensaje'] = "Error al eliminar el comentario";
    }
} else {
    $_SESSION['mensaje'] = "Error: No se proporcionó el ID del comentario";
}

header('LOCATION: comentarios.php');
exit();
?>
