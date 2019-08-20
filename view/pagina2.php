<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/pagina_contenido.css">
    <link rel="stylesheet" href="./src/css/animacion-letras.css">
</head>
<body>

    <!-- MENU -->
    <?php include "./include/header.php"; ?>

    <!-- INICIO - CONTENIDO DE LA PAGINA -->


    <div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
      <h2>Titulo del tema</h2>
      <div> <img src="./src/img/discapacidad-2.png" alt="" width="180" height="200"> </div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <p>breve descripcion...</p>
      <h3>Seguimiento de los temas</h3>

      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Tema 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tema 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tema 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Tema 4</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>


    <div class="col-sm-9">

    <div class="card">
  <div class="card-body">
  <h2> <button><</button> 1/10 <button>></button> </h2><br>
      <h4>¿ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet expedita, adipisci quaerat quo ?</h3><br>
      <h5>A)<i>Respuesta 1</i></h5>
      <h5>A)<i>Respuesta 2</i></h5>
      <h5>A)<i>Respuesta 3</i></h5>
      <h5>A)<i>Respuesta 4</i></h5>
      <br>
        <a type="button" href="./pagina2.php" class="btn btn-outline-success">Siguiente tema <i class="fa fa-arrow-circle-o-right"></i></a>
  </div>
</div>
<h4>Recuerda

</h4>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias amet porro illum maxime totam explicabo hic, dolor ex qui repudiandae doloribus dolores enim ad ea, unde earum similique dicta saepe.

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