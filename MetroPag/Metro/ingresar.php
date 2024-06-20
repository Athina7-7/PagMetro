<?php
include("conexion.php");
session_start();

if (isset($_POST['Ingresar'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1) {
        $usuario = trim($_POST['usuario']);
        $contrasena = trim($_POST['contrasena']);

        // Consulta para verificar si el usuario está registrado
        $consulta = "SELECT * FROM registro WHERE usuario='$usuario' AND contraseña='$contrasena'";
        $resultado = mysqli_query($conex, $consulta);

        if (mysqli_num_rows($resultado) > 0) {
            // Usuario encontrado, obtener sus datos
            $fila = mysqli_fetch_assoc($resultado);

            // Almacenar el nombre de usuario y idRegistro en la sesión
            $_SESSION['usuario'] = $usuario;
            $_SESSION['idRegistro'] = $fila['idRegistro'];

            // Mostrar mensaje de éxito y luego redirigir
            $_SESSION['mensaje'] = 'Inicio de sesión exitoso';
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['mensaje'] = 'Usuario o contraseña incorrectos';
        }
    } else {
        $_SESSION['mensaje'] = 'Se deben llenar todos los campos';
    }
}

// Mostrar mensaje de error y redirigir a login.php
$_SESSION['mensaje'] = 'Usuario o contraseña incorrectos';
header("Location: login.php");
exit();
?>
