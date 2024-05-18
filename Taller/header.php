<?php 
session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Menu</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <nav id="sidebar" class="p-0 col-md-3 col-lg-2 d-md-block sidebar border-end" style="background-color: #000040;">
                <div class="sidebar-header bg-white">
                    <!-- <img src="" class="w-100" alt=""/> -->
                </div>

                <ul class="nav flex-column mt-3 mb-5">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link active">
                            <i class="fas fa-home"></i>
                            <span class="text-white">Login</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="cerrarSesion.php" class="nav-link">
                            <i class="fas fa-right-from-bracket"></i>
                            <span class="text-white">Cerrar sesión</span>
                        </a>
                    </li> 
                </ul>
            </nav>
