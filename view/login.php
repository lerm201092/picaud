<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/login.css">
</head>
<body>

    <!-- MENU -->
    <?php include "./include/header.php"; ?>

    <!-- INICIO - CONTENIDO DE LA PAGINA -->
     <div class="contenedor_pagina" id="div_login">
         <div class="row">
            <div style="width: 100%; min-width: 350px; max-width: 450px; margin: 0 auto;">
                <div class="card">
                    <div class="card-body">
                        <img id="img_login" src="./src/img/user.png">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="email">Ususario</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Contraseña</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">Recordar contraseña
                            </label>
                            </div>
                            <a type="button" href="./pagina1.php" class="btn btn-primary">Iniciar</a>
                        </form>
                    </div>
                </div>            
            </div>
         </div>       
    </div>
   <!-- Footer -->
   <?php include "include/footer.php"; ?>
    <!-- Fin de footer -->

    <!-- FIN - CONTENIDO DE LA PAGINA -->

    <?php include "./include/scriptsComun.php"; ?>

</body>
</html>