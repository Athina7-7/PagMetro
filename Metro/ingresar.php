<?php
include("conexion.php");

session_start();

$_SESSION['usuario'] = $_POST['usuario'];

//header('location:login.php');

if(isset($_POST['Ingresar'])){
    if(strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1) {
        $usuario = trim($_POST['usuario']);
        $contrasena = trim($_POST['contrasena']);

        // Consulta para verificar si el usuario está registrado
        $consulta = "SELECT * FROM registro WHERE usuario='$usuario' AND contraseña='$contrasena'";
        $resultado = mysqli_query($conex, $consulta);

        
        if(mysqli_num_rows($resultado) > 0) {
            // Usuario encontrado, redirigir a la página de inicio
            header("Location:index.php");
            exit();
        } else {
            // Usuario no encontrado
            $mensaje = '<div class="notification-box error">
                            <span class="close" onclick="cerrarMensaje()">x</span>
                            <h3>Usuario o contraseña incorrectos</h3>
                        </div>';
        }
    } else {
        // Campos incompletos
        $mensaje = '<div class="notification-box error">
                        <span class="close" onclick="cerrarMensaje()">x</span>
                        <h3>Se deben llenar todos los campos</h3>
                    </div>';
    }
}
?>

