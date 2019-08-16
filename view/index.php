<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/index.css">
</head>
<body>

    <!-- MENU -->
    <?php include "./include/header.php"; ?>

    <!-- INICIO - CONTENIDO DE LA PAGINA -->
    <div class="row">
        <video class="d-block w-100" muted autoplay loop>
            <source src="./src/video/banner.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <!-- FIN - CONTENIDO DE LA PAGINA -->

    <?php include "./include/scriptsComun.php"; ?>
</body>
</html>