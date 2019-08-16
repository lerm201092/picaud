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
        <div class="card  col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="card-body">
            <!-- Inicio Formulario -->

                <div class="row">
                    <p style="text-align: center; width:100%;">Registro Usuario</p>
                </div>

                <div class="row">
                    <!-- Small -->
                    <div class="input-group col-md-6" >
                        <select name="cars" class="form-control">
                            <option selected>Cedula Ciudadania</option>
                            <option value="volvo">Tarjeta de identidad</option>
                            <option value="fiat">Cedula Extranjera</option>
                        </select>
                    </div>

                    <div class="input-group col-md-6" >
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Identificación">
                    </div>

                    <div class="input-group col-md-6" >
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombres">
                    </div>
                    
                    <div class="input-group col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Apellidos">
                    </div>

                    <div class="input-group col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Teléfono">
                    </div>
                    
                    <div class="input-group col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="number" class="form-control" placeholder="Edad">
                    </div>

                    <div class="input-group col-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-at"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Correo Electronico">
                    </div>
                </div>

                <div class="row">
                    <p style="text-align:center; width:100%">
                        <a href="" class="btn btn-sm btn-light"> <i class="fa fa-home"></i> Regresar</a>&nbsp;&nbsp;
                        <a href="" class="btn btn-sm btn-primary"> <i class="fa fa-check"></i> Guardar</a>
                    </p>
                </div>


            <!-- Fin Formulario -->
            </div>  
        </div>
    </div>  
    <!-- FIN - CONTENIDO DE LA PAGINA -->

    <?php include "./include/scriptsComun.php"; ?>
</body>
</html>