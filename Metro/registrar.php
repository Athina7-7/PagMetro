<?php
include("conexion.php");
session_start();


if(isset($_POST['registrar'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['contrasena']) >= 1 
        
        ){
            $nombre = trim($_POST['nombre']);
            $apellidos = trim($_POST['apellidos']);
            $email = trim($_POST['email']);
            $contrasena = trim($_POST['contrasena']);
            $consulta = "INSERT INTO registro(nombre, apellidos, usuario, contraseña)
                         VALUES('$nombre', '$apellidos', '$email', '$contrasena')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
            header("Location: login.php");
            exit();
            } else {
                $mensaje = '<div class="notification-box error">
                <span class="close" onclick="cerrarMensaje()">x</span>
                <h3>Ocurrió un error</h3>
                </div>';
            }
        } else {
                $mensaje = '<div class="notification-box error">
                <span class="close" onclick="cerrarMensaje()">x</span>
                <h3>Se deben llenar todos los campos</h3>
                </div>';
        }
    

}
?>
