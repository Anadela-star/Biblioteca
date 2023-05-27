<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Google Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600,300,700' rel='stylesheet' type='text/css'>
   <!-- ionicons Fonts for icons -->
   <link href="css/ionicons.min.css" rel="stylesheet">
   <!-- bootstrap -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- Styles CSS-->
   <link href="css/style.css" rel="stylesheet">
   <!-- Animate CSS-->
   <link href="css/animate.css" rel="stylesheet">
    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css/estilo.css" rel="stylesheet">
</head>
<body class="box-layout">
   <!-- Page Loader -->
   <div class="page-loader">
      <div class="loader">
         <span class="cssload-loading"></span>
      </div>
   </div>
   <!-- End Page Loader -->
   <div class="inner-conterner">
      <!-- inner-conterner -->
      <header class="site-header">
         <div class="header-inner">
            <!-- navigation panel -->
            <div class="container">
               <div class="row">
                  <div class="header-table col-md-12">
                     <div class="brand">
                        <a href="index.html">
                           <img src="images/LOGO1.png" alt="Anzu">
                        </a>
                     </div>
                     <nav id="nav-wrap" class="main-nav">
                        <div id="mobnav-btn"> </div>
                        <ul class="sf-menu">
                  <li class="current">
                              <a href="inicioadmin.html">Inicio</a>
                           </li>
                              <li>
                              <a href="#">Mostrar</a>
                              <ul class="dropdown-menu dropdowncostume">
						<li><a href="mostrarlibros.php">Mostrar todos los prestamos</a></li>
						<li><a href="mostrarsocios.php">Mostrar todos los socios</a></li>
						<li><a href="mostrarclientes.php">Mostrar socios reportados</a></li>
						<li><a href="mostrarlibrosactuales.php">Mostrar todos los libros</a></li>
					</ul>
                           </li>
                            <li>
                              <a href="#">libros</a>
                              <ul class="dropdown-menu dropdowncostume">
						<li><a href="registrar_libros.html">Agregar libro</a></li>
						<li><a href="borrarlibro.php">Borrar libro</a></li>
			            <li><a href="devolverlibro.php">Recepcion del libro</a></li>
					</ul>
                           </li>
                           <li>
                            <a href="logout.php">Cerrar sesión</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <!-- End navigation panel -->
            </div>
            <!-- End navigation panel -->
         </div>
      </header>
        <section id="content">
            <form id="form1" name="form1" method="post" action="devolverlibroconfirmacion.php">
                <h1>Devolución de libros</h1>
                <div>
                    <input name="c_socio" type="text" placeholder="Codigo del socio" required="" id="username"  />
                </div>
                <div>
                    <input name="codigo" type="text" placeholder="Código del libro" required="" id="username"/>
                    <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
                </div>
                <div>
                    <input type="submit" value="Entrar" />
                </div>
            </form><!-- form -->
        </section><!-- content -->
    <!-- container -->
    
      <div class="footer-holder">
         <div class="container">
            <footer class="site-footer">
               <div class="row">
                  <div class="col-md-6">
                     <p>© Copyright 2022 | <a href="http://templatestock.co" target="_blank">Biblioteca Anzu</a></p>
                  </div>
                  <div class="col-md-6">
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <!-- End Footer -->
   </div>
   <!-- End inner-conterner -->
   <!-- ================================================== -->
   <!-- Placed js files at the end of the document so the pages load faster -->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/superfish.js"></script>
   <script src="js/jquery.easing.js"></script>
   <script src="js/wow.js"></script>
   <script src="js/jquery.isotope.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.magnific-popup.js"></script>
   <script src="js/jflickrfeed.min.js"></script>
   <script src="js/jquery.fitvids.js"></script>
   <script src="js/jquery.fractionslider.min.js"></script>
   <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
   <script type="text/javascript" src="js/SmoothScroll.js"></script>
   <script src="js/main.js"></script>
   <script src="js.js"></script>
</body>
</html>