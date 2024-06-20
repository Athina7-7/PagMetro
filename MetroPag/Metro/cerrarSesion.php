<?php
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Finalmente, destruir la sesión.
session_destroy();

// Redirigir al login con mensaje de sesión cerrada
header('Location: login.php?logout=1');
exit();
?>
