<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TECHNO & FUM</title>
	<link rel="shortcut icon" href="images/iconos/fav2.png">

<!--Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->

	<!--animaciones  para la página-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- owlCarousel-->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.min.css">
	<!--Font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.4.1/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>
	<!--bootstrap-flex-->
	<link rel="stylesheet" href="css/bootstrap-flex.min.css">
	<!--Simple text rotator-->
	<link rel="stylesheet" href="css/simpletextrotator.css">
	<!--menú hamburguesa estilos-->
	<link rel="stylesheet" href="css/hamburgers.css">

	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800,900" rel="stylesheet">
	<!--Personalizados-->
	<link rel="stylesheet" href="css/style.css">
	<?php require_once('includes/scriptsJS.php') ?>
	<script>
	$(document).ready(function(){
		$('#cambioLogo').modal('show')
	});
	</script>
</head>
<body>


	<?php require_once('includes/cabecera.php') ?>


<!-- Modal -->


<div class="modal fade" id="cambioLogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenterTitle"><strong>Nueva imagen mismo servicio</strong></h4>
        <i class="far fa-times-circle" data-dismiss="modal"></i>  
          
      </div>
      <div class="modal-body text-center">
	  <img src="images/nuevologo.gif" alt="" width="100%">
	  
      </div>
     
    </div>
  </div>
</div>





		   
<span class="ir-arriba"><i class="fas fa-arrow-up"></i></span>	   
	
<!--Sección Intro-->
	<section id="intro" class="section">
	<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-2"	></div>
				<div class=" Titulo col-xs-12 col-md-8 col-lg-8">
					<div class="texto-alinear">
						<h1 class="blanco text-center  title" data-aos="flip-down"><strong>Duerme tranquilo!</strong> </h1> <br>
						<h2 class="blanco title">Nosotros nos encargamos de las plagas</h2>
						<h2 class="blanco title">  <strong>	MÁS DE 70 AÑOS DE EXPERIENCIA A SU SERVICIO.</strong></h2> 
						<br>
						
					<div class="row justify-content-center">
						<a href="contacto.php#Contacto" class="btnContactoAlinear" data-aos="zoom-out-up"><button class="btn-contacto3">CONTÁCTANOS</button></a>
						<a href="contacto.php" class="btnContactoAlinear" data-aos="zoom-out-up"><button class="btn-contacto4">PROGRAMA TU SERVICIO</button></a>
					</div>
				  </div>
				</div>
				<div class="col-xs-12 col-md-2"	></div>
			</div>
			
			
		</div>
   
	</section>
	
<!--/Sección Intro-->

<!---->
	<section id="seccion-imagen" class="imagen4" style="margin:60px 0; ">
		<div class="container">
				<div class="row espacioNosotros">
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
							<h1 class="subtituloh1"> <strong>TECHNO & FUM</strong></h1>
					
							<p class="justifyText"> <span >	Somos una empresa con <strong>más de 70 años</strong> de experiencia
								dedicada a <strong>Diagnósticos, Asesoría y Servicios de Control y
								Prevención de Plagas</strong> con servicios dirigidos a:</span>
					
								<ul class="listado-Nosotros">
									<li>Sector Público (Gobierno)</li>
									<li>Plantas de Procesamiento y Alimenticias</li>
									<li>Hospitales</li>
									<li>Laboratorios</li>
									<li>Escuelas</li>
									<li>Bodegas de almacenamiento</li>
									<li>Transporte público y privado</li>
									<li>Privado</li>
									<li>Áreas Verdes</li>
									<li>Casas Habitación</li>
								</ul>
							</p>
		
							<a href="nosotros.php" class="btnVermas" data-aos="zoom-in"><button>Ver más</button></a>
							<img src="images/cuadrada1.jpg" class="imagen-cilindro ocultasModWeb" alt="imagen-fumigar" style="margin-top:15px;">

						</div>
						<!--<div class="col-xs-12 col-sm-12 col-md-6"><img src="images/tech1.png" class="imagen-cilindro" alt="imagen-fumigar" align="right"></div>-->
					</div>
		</div>
	</section>
<!---->


<!--Sección Nosotros-->
	<section id="Nosotros">
		<div class="container" >
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4" data-aos="zoom-out-up">
					<img class="img-iconos" src="images/iconos/Recurso14.png" alt="Servicios">
					<h3 class="titulos-descriptivos"> <strong>Control de Plagas</strong></h3>
					<div class="texto-Descriptivo">
						<p class="text-center">
						Para el control y prevención de plagas utilizamos productos de la mas alta calidad biodegradables 
						y autorizados por las leyes estatales y federales, Organización Mundial de la Salud  y EPA.
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
					<img class="img-iconos" src="images/iconos/Recurso15.png" alt="Servicios">
					<h3 class="titulos-descriptivos"> <strong>Jardinería</strong></h3>
					<div class="texto-Descriptivo">
						<p class="text-center">
						Fumigación de áreas verdes, poda de pasto,  poda de árboles,  recorte de setos,	 plantas, diseño de
						 jardines, implementación de  sistemas  de riego, mantenimiento de macetones en  oficinas  y edificios. Deshierbe de terrenos  y mucho más.
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
					<img class="img-iconos" src="images/iconos/Recurso16.png" alt="Productos y Equipos">
					<h3 class="titulos-descriptivos"> <strong>Productos y equipos</strong></h3>
					<div class="texto-Descriptivo">
						<p class="text-center">Los productos que utilizamos son de las mejores marcas del mercado, de uso urbano y biodegradables.<br>
						Somos fabricantes de estaciones, cebaderos para rata, ratón, picos y jaulas plegables de captura de palomas, jaulas de captura para vertebrados.
							<!-- además que contamos con una distribuidora de 
							equipos e insecticidas.-->
	
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container" style="margin-top:50px;">
					<div class="row justify-content-center">
						<a href="servicios.php" data-aos="zoom-in-right"><button style="border-radius:30px;padding: 10px 0;width: 200px;height: 50px;border: 2px solid #A6060E;
   						 background: #A6060E;color: white; ;">Ver más</button></a>
					</div>
		</div>
	</section>
<!--Sección Nosotros-->
<section class=" cotizar-movil">
<div class="col-xs-12 mostrar-cotizar container ">
					<h2 class="blanco title text-center">PROGRAMA TU SERVICIO!</h2> <br>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formulario-ajax" method="post" role="form">
						<div id="mensajeErr-status"></div>
						<div class="ajax-hidden">
							<div class="form-group">
								<label class="sr-only" for="c_name">Nombre</label>
								<input type="text" id="c_name" class="form-control" name="nombre" placeholder="Nombre">
								<div id="nombre-status" style="color:white;"></div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="c_email">E-mail </label>
								<input type="email" id="c_email" class="form-control" name="email" placeholder="E-mail" required>
								<div id="email-status"></div>
							</div>
							
							<div class="form-group">
								<label class="sr-only" for="c_phone">Teléfono </label>
								<input type="tel" id="c_phone" class="form-control" name="telefono" placeholder="Teléfono" required>
								<div id="telefono-status"></div>
							</div>
							
							<div class="row">
								<div class="form-group col-xs-6 col-md-6">
									<label class="sr-only" for="c_location">Estado </label>
									<input type="text" id="c_estado" class="form-control" name="estado" placeholder="Estado" required>
									<div id="estado-status"></div>
								</div>
							
								<div class="form-group col-xs-6 col-md-6">
									<label class="sr-only" for="c_location">Ciudad </label>
									<input type="text" id="c_ciudad" class="form-control" name="ciudad" placeholder="Ciudad" required>
									<div id="ciudad-status"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="sr-only" for="c_location">Dirección </label>
								<input type="text" id="c_location" class="form-control" name="direccion" placeholder="Dirección" required>
								<div id="direccion-status"></div>
							</div>
							<div class="row">
								<div class="col-6 form-group">
									<select class="technofum-form" name="opciones" placeholder="Tipo de servicio">
										<option value="">Tipo de servicio</option>
										<option value="Control de plagas">Control de plagas</option>
										<option value="Jardinería">Jardinería</option>
										
									</select>
									<div id="opciones-status"></div>
								</div>
								<div class="col-6 form-group">
									<div class="form-group">
										<div class='input-group date' id='datetimepicker1'>
											<input type='text' class="form-control" />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div>
									<input type="date" name="fecha" class="technofum-form" >
									<div id="fecha-status"></div>
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control" id="c_message" name="mensaje" rows="7" placeholder="Mensaje"></textarea>
								<div id="mensaje-status"></div>
							</div>
							<input type="hidden" name="ajax">
							<input type="button" value="Enviar" id="btn-ajax" class="btn-enviar-cotizar"> <br> <br>
							<div class="row justify-content-center">
							<h5 class="tc" style="color:#fff;"><strong>ACEPTAMOS TARJETAS DE   <br>	CRÉDITO Y DÉBITO</strong></h5>
							</div>
							<div class=" justify-content-center text-center"> <br>
							<img src="images/iconos/tc.png" width="150" alt="Tarjetas de pago"/>
							</div>
							
						</div>
					</form>
				</div>

</section>


<!--Sliders-->
	<section id="Slider">
		<div class="container">
			<div class="row">
				<div class="tabs-link"> 
					<a href="#seccion1">Control de plagas</a>
					<a href="#seccion2">Jardinería</a>
					<a href="#seccion3">Productos y equipos</a>
				</div>

				<div class="tabs-content">
					<div id="section1" class="tabs-content-item">
						<div id="owl-services" class="owl-carousel">
							<div class="owl-item">
								<img class="img-rounded" style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas1.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded" style="width: 100%;  height: auto; "  src="images/controlDePlagas/controlDePlagas2.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas3.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas4.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas5.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas6.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas7.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas8.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas9.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas10.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas11.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas12.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas13.png" alt="ControlDePlagas">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/controlDePlagas/controlDePlagas14.png" alt="ControlDePlagas">
							</div>
						</div>
					</div>

					<div id="section2" class="tabs-content-item">
						<div id="owl-services2" class="owl-carousel">
							<div class="owl-item">
								<img class="img-rounded" style="width: 100%;  height: auto; " src="images/jardineria/jardineria1.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded" style="width: 100%;  height: auto; " src="images/jardineria/jardineria2.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/jardineria/jardineria3.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/jardineria/jardineria4.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/jardineria/jardineria5.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/jardineria/jardineria6.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/jardineria/jardineria7.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/jardineria/jardineria8.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/jardineria/jardineria9.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/jardineria/jardineria10.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/jardineria/jardineria11.png" alt="Jardinería">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/jardineria/jardineria12.png" alt="Jardinería">
							</div>
						</div>
					</div>
					
					<div id="section3" class="tabs-content-item">
						<div id="owl-services3" class="owl-carousel ">
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/productos/productos1.png" alt="Productos y equipos">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/productos/productos2.png" alt="Productos y equipos">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/productos/productos3.png" alt="Productos y equipos">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/productos/productos4.png" alt="Productos y equipos">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/productos/productos5.png" alt="Productos y equipos">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/productos/productos6.png" alt="Productos y equipos">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; "src="images/productos/productos7.jpg" alt="Productos y equipos">
							</div>
							<div class="owl-item">
								<img class="img-rounded   "  style="width: 100%;  height: auto; " src="images/productos/productos8.png" alt="Productos y equipos">
							</div>
							<div class="owl-item">
								<img class="img-rounded   " style="width: 100%;  height: auto; " src="images/productos/productos9.png" alt="Productos y equipos">
							</div>
						</div>	
					</div>
					</div>
				</div>

				<div class="row" style="margin-top:50px;">
					<div class="col-xs-12">
						<a href="servicios.php" class="btnVermas" data-aos="zoom-in-left"><button>Ver más</button></a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--Sliders-->






<!--Incluir footer-->
<?php require_once('includes/footer.php'); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--/Incluir footer-->






</body>
</html>