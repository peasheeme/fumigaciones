

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
	<!--animaciones  para la página-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!--Personalizados-->
	<link rel="stylesheet" href="css/style.css">
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
	
	<?php require_once('includes/scriptsJS.php') ?>
</head>
<body>
	<?php require_once('includes/cabecera.php') ?>
		   
	<span class="ir-arriba"><i class="fas fa-arrow-up"></i></span>	   
	
<!--Sección Intro-->
	<section id="intro-contacto" class="section">
      	<div class="container">
        	<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-8">
				<div class="Titulo text-left"	>
						<h1 class="blanco title" data-aos="flip-left"><strong>Contáctanos</strong> </h1> <br>
                        <h2 class="blanco title">Nosotros nos encargamos de todo</h2> <br>
                        <h2 class="blanco title">  <strong>	MÁS DE 70 AÑOS DE EXPERIENCIA A SU SERVICIO.</strong></h2>
						<a href="tel:018008379360" class="btnContactoAlinear" data-aos="fade-down-right"><button class="btn-contacto">LLÁMANOS</button></a>
						</div>
					
				</div>

				<div class="col-xs-12 cotizar col-md-6 col-lg-4 ml-auto" data-aos="flip-right"> <br>
					<h2 class="blanco   cotizar-subt">PROGRAMA TU SERVICIO!</h2>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formulario-ajax" method="post" role="form">
						<div id="mensajeErr-status"></div>
						<div class="ajax-hidden">
							<div class="form-group">
								<label class="sr-only" for="c_name">Nombre</label>
								<input type="text" id="c_name" class="form-control" name="nombre" placeholder="Nombre" onkeypress="return validarLetras(event);">
								<div id="nombre-status" style="color:white;"></div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="c_email">E-mail </label>
								<input type="email" id="c_email" class="form-control" name="email" placeholder="E-mail" required>
								<div id="email-status"></div>
							</div>
							
							<div class="form-group">
								<label class="sr-only" for="c_phone">Teléfono </label>
								<input type="tel" id="c_phone" class="form-control" name="telefono" placeholder="Teléfono" onkeypress="return soloNumeros(event);" required>
								<div id="telefono-status"></div>
							</div>
							
							<div class="row">
								<div class="form-group col-xs-6 col-md-6">
									<label class="sr-only" for="c_location">Estado </label>
									<input type="text" id="c_estado" class="form-control" name="estado" placeholder="Estado" required  onkeypress="return validarLetras(event);">
									<div id="estado-status"></div>
								</div>
							
								<div class="form-group col-xs-6 col-md-6">
									<label class="sr-only" for="c_location">Ciudad </label>
									<input type="text" id="c_ciudad" class="form-control" name="ciudad" placeholder="Ciudad" required  onkeypress="return validarLetras(event);">
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
			
				   
         	</div>
        </div>
    </section>
<!--/Sección Intro-->

<!---->
<section id="Contacto">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
				
				<h4 class=" text-center  "> <strong>Ponte en contacto con nosotros</strong></h4> <br><br>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 oculto">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formulario-ajax2" method="post" enctype="multipart/form-data">
						
						<div id="mensaje-error"></div>

						<div>
							<input type="text" name="nombre" class="formulario-input" required="" onkeypress="return validarLetras(event);">
							<label for="" class="formulario-label">Nombre</label>
						</div>
						<div id="nombre-contacto"></div>

						<div>
							<input type="tel" name="telefono" class="formulario-input" required="" onkeypress="return soloNumeros(event);">
							<label for="" class="formulario-label">Teléfono</label>
						</div>
						<div id="telefono-contacto"></div>
	
						<div>
							<input type="email" name="correo" class="formulario-input" required="">
							<label for="" class="formulario-label">E-mail</label>
						</div>
						<div id="correo-contacto" style="color:white;"></div>

						<div>
							<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="formulario-textarea" required=""></textarea>
							<label for="" class="formulario-label label-mensaje">Mensaje</label>
						</div>
						<div id="mensaje-contacto"></div>

						<input type="hidden" name="ajax2">
						<input type="button" value="Enviar" id="btn-ajax2" data-aos="zoom-in-left">
					</form>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<ul class="information-list">
						<li class="li-Contacto">
							<h6>Teléfono(s)</h6>
							<div class="informationColumns">
								<span><i class="fas fa-phone" style="font-size:20px;"></i></span>
								<a class="links-Contacto" href="tel:018008379360">01 800 837 9360</a>
								
							</div>
							<div class="informationColumns" style="margin-top:10px;">
								<span><i class="fas fa-mobile-alt" style="font-size:30px;"></i></span>
								<a class="links-Contacto" href="tel:8112573946">811 257 3946</a>
							</div>
							<div class="informationColumns" style="margin-top:10px;">
								<span><i class="fas fa-mobile-alt" style="font-size:30px;"></i></span>
								<a class="links-Contacto" href="tel:8112573947">811 257 3947</a>
							</div>
							<!--Whatsapp-->
							<div class="informationColumns" style="margin-top:10px;">
								<span><i class="fab fa-whatsapp" style="font-size:25px;"></i></span>
								<a class="links-Contacto" target="_blank" href="https://api.whatsapp.com/send?phone=528128957827">812 895 7827</a>
							</div>
						</li>
						<li class="li-Contacto">
							<h6>Mail</h6>
							<div class="informationColumns">
								<span><i class="fas fa-envelope-open" style="font-size:25px;"></i></span>
								<a class="links-Contacto" href="mailto:ventas@technofum.com.mx"> ventas@technofum.com.mx</a>
							</div>
						</li>
						<li class="li-Contacto">
							<h4 class="siguenos-Contacto">SÍGUENOS</h4>
							<h6>Facebook</h6>
							<div class="informationColumns">
								<span><i class="fab fa-facebook-f" style="font-size:30px;"></i></span>
								<a class="links-Contacto" href="https://www.facebook.com/monterrey.technofum" target="_blank" class="redes-sociales">@monterrey.technofum</a>
							</div>
						</li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 mostrar-contacto">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formulario-ajax2" method="post">
						
						<div id="mensaje-error"></div>

						<div>
							<input type="text" name="nombre" class="formulario-input" required="">
							<label for="" class="formulario-label">Nombre</label>
						</div>
						<div id="nombre-contacto"></div>

						<div>
							<input type="tel" name="telefono" class="formulario-input" required="">
							<label for="" class="formulario-label">Teléfono</label>
						</div>
						<div id="telefono-contacto"></div>
	
						<div>
							<input type="email" name="correo" class="formulario-input" required="">
							<label for="" class="formulario-label">E-mail</label>
						</div>
						<div id="correo-contacto"></div>

						<div>
							<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="formulario-textarea" required=""></textarea>
							<label for="" class="formulario-label label-mensaje">Mensaje</label>
						</div>
						<div id="mensaje-contacto"></div>

						<input type="hidden" name="ajax2">
						<input type="button" value="Enviar" id="btn-ajax2">
					</form>
				</div>
			</div>
		</div>
	</section>
<!--/Contacto-->

<!--Incluir footer-->
<?php require_once('includes/footer.php'); ?>
<!--/Incluir footer-->

</body>
</html>