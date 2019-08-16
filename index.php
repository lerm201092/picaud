<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./view/include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./view/src/css/index.css">
</head>
<body>

    <!-- MENU -->
    <?php include "./view/include/header.php"; ?>

    <!-- INICIO - CONTENIDO DE LA PAGINA -->
    <div class="row">
        <video id="myvideo" src="./view/src/video/banner.mp4" style="width:100% ; height:auto;"></video>
    </div>
    <!-- FIN - CONTENIDO DE LA PAGINA -->

    <?php include "./view/include/scriptsComun.php"; ?>
    <script>
        document.getElementById("myvideo").play();
    </script>
</body>
</html>