
<!DOCTYPE HTML>
<html lang="es">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contacto</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/imgyurua.png">
	
	  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="css/contacto.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.php">Bienvenido</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="yurua.php">Yurua</a></li>
							<li><a href="servicios.php">Servicios</a></li>
							<li><a href="servicios.php">Municipalidad</a></li>
							<li><a href="servicios.php">Documentos</a></li>
							<li class="active"><a href="contacto.php">Contacto</a></li>
								
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Contacto rápido</h3>
    <h4>¡Contáctanos hoy, y recibe respuesta en 24 horas!</h4>
    <fieldset>
      <input placeholder="Su Nombre" type="text" name="nombre" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Correo" type="email" name="correo" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Telefono" type="tel" name="telefono" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Asunto" type="text" name="asunto" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Escribe tu mensaje aquí...." name="mensaje" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando">Enviar</button>
    </fieldset>
  </form>
 
  
</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small>&copy; 2023 <b>Gobierno del Peru - Todos los Derechos Reservados.</b></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<!--<li><a href="#"><i class="icon-twitter"></i></a></li>-->
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<!--<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>-->
						</ul>
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

<?php

// mostrar si el codigo php nos muestre los errores
error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión
    include("conexion.php");

    // Recuperar datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Preparar la consulta SQL para insertar datos
    $sql = "INSERT INTO contactos (nombre, correo, telefono, asunto, mensaje) 
            VALUES ('$nombre', '$correo', '$telefono', '$asunto', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos almacenados correctamente.";
    } else {
        echo "Error al almacenar datos: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>



	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

