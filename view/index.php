<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php";?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/index.css">
</head>
<body>

	 <!-- Preload -->
	 
	 <div class="containerPre" id="container">
                        <div class="containerPreload" id="loader">
                                <div class="circular-container">
                                  <div class="circle circular-loader1">
                                    <div class="circle circular-loader2">    </div>
                                  </div>
                                </div>
                        </div>
                </div>
               
	 <!-- fin de preload -->

    <!-- MENU -->
    <?php include "./include/header.php"; ?>

	<!-- CONTENEDOR DE LA PAGINA -->
	<div id="container_video">
		<video class="d-block w-100" muted autoplay>
			<source src="./src/video/banner.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some example text. Some example text.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some example text. Some example text.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some example text. Some example text.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
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