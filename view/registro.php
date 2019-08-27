<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/registro.css">
    <style>
    </style>
</head>
<body>

    <!-- MENU -->
    <?php include "./include/header.php"; ?>

<!-- INICIO - CONTENIDO DE LA PAGINA -->
    <div class="container">
        <div class="row">  
            <div class="card  col-12 col-md-10 col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <h4 class="text-center" style="font-weight:600; color:#008376; margin-bottom: 50px;">Registro de usuarios</h4>
                        <img src="./src/img/aprendices.png" alt="" width="100%" style="padding-right: 20px;">
                    </div>
                    <div class="col-lg-8" style="border-left: .5px solid #e9ecef">
                            <div class="row">
                                    <div class="col-12">
                                        <p class="col-12 text-center"><b>Datos Personales</b></p>
                                    </div>
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="sel_tipoid">Tipo de identificacion: </label>
                                            <select id="sel_tipoid" class="form-control">
                                                <option selected>- Escoja una opción -</option>
                                            </select>
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Numero de identificación: </label>                                
                                            <input type="text" class="form-control" placeholder="Ingrese identificación ..." />
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Nombres: </label>                                
                                            <input type="text" class="form-control" placeholder="Ingrese nombres ..." />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Apellidos: </label>                                
                                            <input type="text" class="form-control" placeholder="Ingrese apellidos ..." />
                                        </div>
                                    </div>      
                                    
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Sexo: </label>
                                            <select name="cars" class="form-control">
                                                <option selected>- Escoja una opción -</option>
                                                <option value="volvo">Masculino</option>
                                                <option value="fiat">Femenino</option>
                                            </select>
                                        </div>
                                    </div>   
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Ciudad: </label>                                
                                            <input type="text" class="form-control" placeholder="Ingrese teléfono ..." />
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Teléfono: </label>                                
                                            <input type="text" class="form-control" placeholder="Ingrese teléfono ..." />
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Fecha Nacimiento: </label>                                
                                            <input type="date" class="form-control" placeholder="Ingrese teléfono ..." />
                                        </div>
                                    </div>
                
                                </div>
                                <hr style="margin: 10px 15px;">
                                <div class="row">
                                    <div class="col-12">
                                            <p class="col-12 text-center"><b>Datos de usuario</b></p>
                                    </div>                 
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Email: </label>                                
                                            <input type="text" class="form-control" placeholder="Ingrese teléfono ..." />
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Verificar email: </label>                                
                                            <input type="text" class="form-control" placeholder="Ingrese teléfono ..." />
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Contraseña: </label>                                
                                            <input type="text" class="form-control" placeholder="Ingrese teléfono ..." />
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Verificar Contraseña: </label>                                
                                            <input type="text" class="form-control" placeholder="Ingrese teléfono ..." />
                                        </div>
                                    </div>
                                </div>
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
    <script src="../controller/registro.js"></script>
</body>
</html>