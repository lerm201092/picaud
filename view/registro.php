<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/registro.css">
</head>
<body>

    <!-- MENU -->
    <?php include "./include/header.php"; ?>

    <!-- INICIO - CONTENIDO DE LA PAGINA -->

        <div class="container">

            <br>
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="well well-sm">
                                <form class="form-horizontal" method="post">
                        <fieldset>
                        <legend class="text-center header">Regitro</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                               <div class="col-md-8">
                            <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                        </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                               <div class="col-md-8">
                            <input id="lname" name="name" type="text" placeholder="Apellido" class="form-control">
                        </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                            <input id="email" name="email" type="text" placeholder="Correo" class="form-control">
                        </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                            <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </div>
                        </div>
                        </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div> 

        </div>
        </div>

    

    <!-- FIN - CONTENIDO DE LA PAGINA -->

    <?php include "./include/scriptsComun.php"; ?>
</body>
</html>