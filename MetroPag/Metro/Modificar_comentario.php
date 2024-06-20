<?php
require_once('conexion.php');
require_once('menu.php');

$idcomentario = $_GET['idcomentario'];
$sql = "SELECT * FROM comentarios WHERE IdComentario = $idcomentario";
$comentario = $conex->query($sql)->fetch_assoc();

if (isset($_POST['accion'])) {
    $idcomentario = $_POST['idcomentario'];
    $comentario = $_POST['comentario'];

    $sql = "UPDATE comentarios 
            SET comentario = '$comentario'
            WHERE IdComentario = $idcomentario";

    $result = $conex->query($sql);
    $conex->close();

    if ($result) {
        $_SESSION['mensaje'] = "Comentario actualizado";
    } else {
        $_SESSION['mensaje'] = "Error al actualizar el comentario";
    }

    header('Location: comentarios.php');
    exit(); // Terminamos el script después de redireccionar
}
?>
<div class="row">
    <style>
        
    </style>
    <div class="col-12">
        <h1 class="mt-4">EDITAR COMENTARIO <?= $comentario['comentario'] ?></h1>
        <a href="comentarios.php" class="btn btn-secondary"><i class="fas fa-undo"></i> Regresar</a>
    </div>
</div>
<div class="row mt-4">
    <form method="POST">
        <div class="mb-3">
            <label for="comentario" class="form-label">Comentario</label>
            <input type="text" class="form-control" id="comentario" name="comentario" value="<?= $comentario['comentario'] ?>" required>
        </div>
        
        <input type="hidden" name="accion" value="1">
        <input type="hidden" name="idcomentario" value="<?= $comentario['IdComentario'] ?>">
       
        <button id="btC" type="submit" class="btn btn-success">Guardar</button>
        <a href="comentarios.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
