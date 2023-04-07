<?php require_once "vistas/parte_superior.php"?>
<!--INICIO del cont principal-->
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login con  PHP - Bootstrap 4</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css"> 		<!-- Establece la codificación de caracteres como UTF-8 -->
        <meta charset="UTF-8" />
        <!-- Establece la compatibilidad con Internet Explorer -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Establece la escala inicial y el ancho para dispositivos móviles -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Establece el título de la página -->
        <title>Menú de navegación</title>
        <!-- Descripción del sitio web -->
        <!-- URL canónica del sitio web -->
        <!-- Favicon del sitio web -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="img/favico.png" type="image/x-icon" />
        <!-- Vincula el archivo de estilo "style.css" -->
        <link rel="stylesheet" href="style.css" />
        <!-- Vincula la fuente de iconos de Font Awesome -->
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
        />
    </head>    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                     
                        <h1 class="display-4 text-center">¡Bienvenido!</h1>

                      <h2 class="text-center">Usuario: <span class="badge badge-primary"><?php echo $_SESSION["s_usuario"];?></span></h2>    
                      <p class="lead text-center">CONFIDENCIALIDAD DE LA INFORMACION
                         La información contenida en los portales a los que Csn Cooperativa tiene acceso se considera privilegiada y confidencial,
                         dado que su liberación representaría beneficios substanciales a competidores de Csn Cooperativa que ofrezcan servicios similares o información de nuestros clientes,
                         por lo que no debe ser reproducido o transmitido sin la autorización expresa y por escrito de Csn Cooperativa..</p>
		<!-- Contenedor principal de la página -->
		<div class="container">
			<!-- Encabezado de la página -->
			<header class="nav">
				<div class="menu">
					<!-- Enlaces de navegación -->
					<a href="index.html">Dashboard</a>
					<a href="#" class="active">Todas</a>
					<a href="#">Producion</a>
					<a href="#">Testing</a>
					<a href="#">Desarrollo</a>
					<!-- Caja de búsqueda con icono de búsqueda de Font Awesome -->
					<div class="searchBox">
						<i class="fas fa-search"></i>
					</div>
					<a href="index.html">Logout</a>
				</div>
			</header>
			<!-- Contenido principal de la página -->
			<div class="main">
				<!-- Sección de Aplicaciones populares -->
				<div class="trendingMovies movies">
					<p>Producion</p>
					<!-- Contenedor para las tarjetas de Aplicaciones -->
					<div class="cards">
						<!-- Tarjeta de una Aplicacion -->
						<a href="http://app1.reverse-words.svc.cluster.local:8080"><div class="card" data-text="APP6-PROD">
							<img src="img/produccion/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="http://app1.reverse-words.svc.cluster.local:8080"><div class="card" data-text="APP6-PROD">
							<img src="img/produccion/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="http://app1.reverse-words.svc.cluster.local:8080"><div class="card" data-text="APP6-PROD">
							<img src="img/produccion/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="http://app1.reverse-words.svc.cluster.local:8080"><div class="card" data-text="APP6-PROD">
							<img src="img/produccion/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="http://app1.reverse-words.svc.cluster.local:8080"><div class="card" data-text="APP6-PROD">
							<img src="img/produccion/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="http://app1.reverse-words.svc.cluster.local:8080"><div class="card" data-text="APP6-PROD">
							<img src="img/produccion/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="http://app1.reverse-words.svc.cluster.local:8080"><div class="card" data-text="APP6-PROD">
							<img src="img/produccion/csn.png" alt="" />
						</div></a>
					</div>
				</div>

				<!-- Sección de Aplicaciones test -->
				<div class="test movies">
					<p>Testing</p>
					<!-- Contenedor para las tarjetas de Aplicaciones -->
					<div class="cards">
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app8.php"><div class="card" data-text="APP1-TEST">
							<img src="img/test/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app9.php"><div class="card" data-text="APP2-TEST">
							<img src="img/test/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app10.php"><div class="card" data-text="APP3-TEST">
							<img src="img/test/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app11.php"><div class="card" data-text="APP4-TEST">
							<img src="img/test/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app12.php"><div class="card" data-text="APP5-TEST">
							<img src="img/test/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app13.php"><div class="card" data-text="APP6-TEST">
							<img src="img/test/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app14.php"><div class="card" data-text="APP7-TEST">
							<img src="img/test/csn.png" alt="" />
						</div></a>
					</div>
				</div>

				<!-- Sección de Aplicaciones STG -->
				<div class="webSeries movies">
					<p>Desarrollo</p>
					<!-- Contenedor para las tarjetas de Aplicaciones -->
					<div class="cards">
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app15.php"><div class="card" data-text="APP1-DEV">
							<img src="img/stg/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app16.php"><div class="card" data-text="APP2-DEV">
							<img src="img/stg/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app17.php"><div class="card" data-text="APP3-DEV">
							<img src="img/stg/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una Aplicacion -->
						<a href="../apps/app18.php"><div class="card" data-text="APP4-DEV">
							<img src="img/stg/csn.png" alt="" />
						</div></a>
					</div>
				</div>
			</div>
		</div>

		<script>
			// Selecciona todos los elementos de enlace del documento
			const a = document.querySelectorAll('a');

			// Añade un evento de clic a cada elemento de enlace
			a.forEach((e) => {
				e.addEventListener('click', (e) => {
					// Muestra el contenido de la lista de clases del elemento de enlace que se ha clicado
					console.log(e.target.classList);
					// Elimina la clase "active" de todos los elementos de enlace
					a.forEach((e) => {
						e.classList.remove('active');
					});
					// Si el elemento de enlace que se ha clicado no tiene la clase "active", se le añade
					if (!e.target.classList.contains('active')) {
						e.target.classList.add('active');
					}
				});
			});
		</script>

		<script>
			const links = document.querySelectorAll('a');
			const movies = document.querySelectorAll('.movies');

			links.forEach((link) => {
				link.addEventListener('click', (e) => {
					// Oculta todas las secciones de Aplicaciones
					movies.forEach((movie) => {
						movie.style.display = 'none';
					});
					// Muestra la sección de Aplicaciones correspondiente
					if (link.textContent === 'Producion') {
						document.querySelector('.trendingMovies').style.display = 'block';
					} else if (link.textContent === 'Testing') {
						document.querySelector('.test').style.display = 'block';
					} else if (link.textContent === 'Desarrollo') {
						document.querySelector('.webSeries').style.display = 'block';
					} else {
						// Si se selecciona el enlace "Todas", muestra todas las secciones de Aplicaciones
						movies.forEach((movie) => {
							movie.style.display = 'block';
						});
					}
				});
			});
		</script>
                      <hr class="my-4">          
                      <p class="lead text-center">PorFavor Seleciona de la lista en el menu izquierdo la aplicacion que este disponible
                         para ti presiona el siguiente boton para 
                      <a  class="btn btn-danger text-center btn-lg" href="../bd/logout.php" role="button"> Cerrar Sesión</a><hr class="my-4"> 
                    </div>
                </div>
            </div>
        </div>        
     <script src="../jquery/jquery-3.3.1.min.js"></script>    
     <script src="../bootstrap/js/bootstrap.min.js"></script>    
     <script src="../popper/popper.min.js"></script>       
     <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="../codigo.js"></script>    
    </body>
</html>  
