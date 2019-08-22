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
     <br>
     <div class="container" style="padding-top:60px">
        <div class="card" style="width:400px">
            <div class="card-body text-center">
                <img class="logo" src="./src/img/user.png" alt="">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="email">Usuario</label>
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
    <br>
   <!-- Footer -->
   <?php include "include/footer.php"; ?>
    <!-- Fin de footer -->

    <!-- FIN - CONTENIDO DE LA PAGINA -->

    <?php include "./include/scriptsComun.php"; ?>

</body>
</html>