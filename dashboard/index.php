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
                            <div class="card">
                              <img src="jeans3.jpg" alt="Denim Jeans" style="width:100%">
                              <h1>Tailored Jeans</h1>
                              <p class="price">$19.99</p>
                              <p>Some text about the jeans..</p>
                              <p><button>Add to Cart</button></p>
                            </div>
                            <div class="card">
                              <img src="jeans3.jpg" alt="Denim Jeans" style="width:100%">
                              <h1>Tailored Jeans</h1>
                              <p class="price">$19.99</p>
                              <p>Some text about the jeans..</p>
                              <p><button>Add to Cart</button></p>
                            </div>
                            <div class="card">
                              <img src="jeans3.jpg" alt="Denim Jeans" style="width:100%">
                              <h1>Tailored Jeans</h1>
                              <p class="price">$19.99</p>
                              <p>Some text about the jeans..</p>
                              <p><button>Add to Cart</button></p>
                            </div>
                            <div class="card">
                              <img src="jeans3.jpg" alt="Denim Jeans" style="width:100%">
                              <h1>Tailored Jeans</h1>
                              <p class="price">$19.99</p>
                              <p>Some text about the jeans..</p>
                              <p><button>Add to Cart</button></p>
                            </div>
                            <div class="card">
                              <img src="jeans3.jpg" alt="Denim Jeans" style="width:100%">
                              <h1>Tailored Jeans</h1>
                              <p class="price">$19.99</p>
                              <p>Some text about the jeans..</p>
                              <p><button>Add to Cart</button></p>
                            </div>
                            <div class="card">
                              <img src="jeans3.jpg" alt="Denim Jeans" style="width:100%">
                              <h1>Tailored Jeans</h1>
                              <p class="price">$19.99</p>
                              <p>Some text about the jeans..</p>
                              <p><button>Add to Cart</button></p>
                            </div>
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
