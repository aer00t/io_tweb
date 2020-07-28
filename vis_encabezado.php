<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery3.5.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>

<body>
    <div id="encabezado">
        <img id="banner" src="./img/banner4.png" alt="banner">

        <div class="container-fluid">
            <nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php">Inicio</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bienvenido -tal-
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="mod_dashboard.php">Dashboard</a>
                                <a class="dropdown-item" href="mod_preguntas.php">Preguntas & contenido</a>
                                <a class="dropdown-item" href="mod_alumnos.php">Gestionar Alumnos</a>
                                <a class="dropdown-item" href="mod_usuarios.php">Adminsitradores</a>
                            </div>
                        </li>
                    </ul>
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Salir</button>

                </div>
            </nav>
        </div>
    </div>