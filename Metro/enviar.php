<?php 

session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['contrasena'] = $_POST['contrasena'];


header('location:bienvenido.php');
?>