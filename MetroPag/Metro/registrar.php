<?php
session_start();
include("conexion.php");

if (isset($_POST['registrar'])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['contrasena']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $email = trim($_POST['email']);
        $contrasena = trim($_POST['contrasena']);

        $consulta = "INSERT INTO registro(nombre, apellidos, usuario, contraseña)
                    VALUES('$nombre', '$apellidos', '$email', '$contrasena')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            $_SESSION['mensaje'] = "Usuario registrado correctamente";
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['mensaje'] = "Error al registrar usuario";
            header("Location: sign_up.php");
            exit();
        }
    } else {
        $_SESSION['mensaje'] = "Se deben llenar todos los campos";
        header("Location: sign_up.php");
        exit();
    }
}


?>
