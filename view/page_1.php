<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/pagina_contenido.css">
</head>
<body>

    <!-- MENU -->
    <?php include "./include/header.php"; ?>

    <!-- INICIO - CONTENIDO DE LA PAGINA -->
    
<div class="container">
    <h2>Titulo</h2>
        <div class="row col-">
            <video id="myvideo" src="./src/video/banner.mp4" style="width:100% ; height:auto;"></video>
        </div>
        <p class="mr-right">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt amet delectus, quasi consectetur porro cum neque unde nam doloremque non aliquid repellat officia libero nesciunt consequatur temporibus rerum? Dolore, nisi.</p>
        <button type="button" class="btn btn-outline-success">comprobar lo aprendido<i class="fa fa-arrow-circle-o-right"></i></button>
    </div>
    <!-- FIN - CONTENIDO DE LA PAGINA -->
    <?php include "./include/scriptsComun.php"; ?>
</html>