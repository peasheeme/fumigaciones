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
	<!--Personalizados-->
	<link rel="stylesheet" href="css/style.css">
	<!-- owlCarousel-->
	<!--animaciones  para la página-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" href="css/owl.theme.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
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
	<section id="intro2" class="section" >
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-2"	></div>
				<div class=" Titulo col-xs-12 col-md-8 col-lg-8">
					<div class="texto-alinear">
						<h1 class="blanco text-center title" data-aos="zoom-in"><strong>Conoce nuestros productos y servicios.</strong> </h1> <br>
						<h5 class="blanco text-center">Te ofrecemos un servicio profesional y altamente capacitado en control de plagas y jardinería general, así como un extenso surtido de productos exclusivos para la prevención de plagas en el hogar, la industria o comercios.</h5> <br>

						<a href="contacto.php" data-aos="zoom-in-up"><button class="btn-contacto2">CONTÁCTANOS</button></a>
					</div>
				</div>
				<div class="col-xs-12 col-md-2"	></div>
			</div>
		</div>
	</section>
	<!--/Sección Intro-->



	<!--Sección 1-->
	<section id="seccionInformacion"  class="imagen padding-seccion-informacion">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 ">
					<h1 class="subtituloh1"><strong>Control de Plagas</strong></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<p>Los sistemas y métodos de trabajo se dividen en:</p>
		

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
						<div class="acomodo">
						<ul class="listado-Informacion">
							<li>Sistema biológico.</li>
							<li>Sistema químico</li>
							<li>Sistema mecánico</li>
						
					</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6  movil-padding">
						<div class="acomodo">
						<ul class="listado-Informacion  ">
						<li>Sistema climatológico</li>
							<li>Sistema privativo</li>
							
							</li>
						</ul>
					</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-10 ">
					<p>Las plagas que controlamos son en términos generales las siguientes:</p> 
				</div>
		
		
		<div class="acomodo">
		<div class="row ">
	<div class=" col-xs-6 col-md-6 col-lg-6 col-xl-4" >
			<ul class="listado-Informacion">
					<li>Cucarachas.</li>
					<li>Caracoles.</li>
					<li>Cien pies.</li>
					<li>Chapulines.</li>
					<li>Comejen.</li>
					<li>Cara de niño.</li>
						
				</ul>
			</div>
			<div class=" col-xs-6 col-md-6 col-xl-4" >
			<ul class="listado-Informacion">
					<li>Gallina ciega.</li>
					<li>Hormigas.</li>
					<li>Garrapatas.</li>
					<li>Gorgojos.</li>
					<li>Palomas.</li>
					<li>Pulgas.</li>
					
					
					
				
				</ul>
			</div>
	</div>

			<div id="uno" style=" display:none; transition: all .5s;">
	<div class="row margen-row">
	<div class=" col-xs-6 col-md-6 col-xl-4" >
			<ul class="listado-Informacion">
			<li>Moscas y mosquitos.</li>
			<li>Microorganismos.</li>
			<li>Ratas.</li>
					
					
					
					
				</ul>
			</div>
			<div class=" col-xs-6 col-md-6" >
			<ul class="listado-Informacion">
			<li>Ratones.</li>
					<li>Termitas.</li>
					
				
					
				</ul>
			</div>
	</div>
			
					
			</div>
		</div> <br>
		<a class="btnVermas1"  id="btnVer1" style="padding:0;" onclick="vermas('uno', 'btnVer1')" data-aos="fade-right"><button>Ver más</button></a>

					<img src="images/cuadrada2.jpg" class="imagen-cilindro ocultasModWeb2" alt="imagen-fumigar">
				</div>
		
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<!--<img src="images/cp1.png" class="imagen-cilindro" alt="imagen-fumigar" align="right">-->
				</div>
			</div>
		</div>
	</section>
	<!--Sección 1-->



	<!--Sección 2-->
	<section id="seccionInformacion" class="imagen2 padding-seccion-informacion">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<!--<img src="images/i2.png" class="imagen-cilindro visibleMEDGDE" alt="imagen-fumigar">-->
				</div>
		
				<div class="col-xs-12 col-sm-12 col-md-6 text-right text-sm-left text-xs-left ">
					<h1 class="subtituloh1"><strong>Jardinería</strong></h1>
					<div class="jardineria-texto"><!-- <div style="padding-top: 50px; padding-bottom: 50px;"> -->
					<p class="justifyText">Contamos  con Servicios de Jardinería y fumigación de áreas verdes  ya sea  por evento  o con  personal de planta. </p>
					<p class="justifyText">Los servicios  van desde poda de pasto,  poda de árboles,  recorte de setos, plantas, diseño de jardines, implementación de  sistemas
						  de riego, mantenimiento de macetones en  oficinas  y edificios. Deshierbe de terrenos  y mucho más.</p>
						
					</div>
					<img src="images/cuadrada3.png" class="imagen-cilindro ocultasModWeb" alt="imagen-fumigar">
					<a href="contacto.php#Contacto" class="btnVermas" data-aos="fade-up-left"><button>¡Solicita más información!</button></a>
					<!--<img src="images/i2.png" class="imagen-cilindro visibleXS-M" alt="imagen-fumigar">-->
				</div>	
			</div>
		</div>
	</section>
	<!--Sección 2-->


	<!--Sección 3-->
	<section id="seccionInformacion" class="imagen3 padding-seccion-informacion">
		<div class="container">
			
				<div class="col-xs-12  col-lg-6" style="padding: 0 0 30px 0;">
				<h1 class="subtituloh1"><strong>Productos y Equipos</strong></h1>
				<p class="justifyText">Nuestros productos son biodegradables o de uso urbano, no afectando a personas o mascotas.
					   Contamos con una amplia gama de productos para el control y prevención de plagas entre las cuales podemos mencionar:<p>
				<div class="padding-seccion3 col-xs-12 col-sm-12 col-md-7 col-lg-12 ">
				
					<ul>
						<li>Cebos envenenados para roedores de dosis única y dosis múltiple.</li>
						<li>Gomas pegamento para ratas y ratones.</li>
						<li>Trampas, bebederos, estaciones, etc.</li>
						<li>Insecticidas en polvos, emisores, gránulos base de agua o aceite, etc.</li>
						<li>Para el control de insectos de jardín, huertos, arboles, frutales, plantas de ornato.</li>
						<li>Insecticidas para el control de fauna nociva urbana y mucho más.</li>
					</ul>
					
				</div>
				<img src="images/cuadrada4.jpg" class="imagen-cilindro ocultasModWeb" alt="imagen-fumigar">
					<a href="contacto.php#Contacto" class="btnVermas" data-aos="fade-up-right"><button>¡Solicita más información!</button></a>
				</div>
					
				<div class="col-xs-12 col-sm-12 col-md-6">
					<!--<img src="images/cp3.png" class="imagen-cilindro" alt="imagen-fumigar" align="right">-->
				</div>
			</div>
		</div>
	</section>
	<!--Sección 3-->



	<!--Sliders-->
	<section id="Slider2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<div id="owl-services" class="owl-carousel ">
							<div class="owl-item">
								<img class="img-rounded " style="width: 100%;  height: auto; " src="images/productos/productos1.png" alt="Productos technofum">
							</div>
							<div class="owl-item">
								<img class="img-rounded  " style="width: 100%;  height: auto; " src="images/productos/productos2.png" alt="Productos technofum">
							</div>
							<div class="owl-item">
								<img class="img-rounded  " style="width: 100%;  height: auto; " src="images/productos/productos3.png" alt="Productos technofum">
							</div>
							<div class="owl-item">
								<img class="img-rounded  "style="width: 100%;  height: auto; "  src="images/productos/productos4.png" alt="Productos technofum">
							</div>
							<div class="owl-item">
								<img class="img-rounded  " style="width: 100%;  height: auto; " src="images/productos/productos5.png" alt="Productos technofum">
							</div>
							<div class="owl-item">
								<img class="img-rounded  " style="width: 100%;  height: auto; " src="images/productos/productos6.png" alt="Productos technofum">
							</div>
							<div class="owl-item">
								<img class="img-rounded  " style="width: 100%;  height: auto; " src="images/productos/productos7.jpg" alt="Productos technofum">
							</div>
							<div class="owl-item">
								<img class="img-rounded  "style="width: 100%;  height: auto; "  src="images/productos/productos8.png" alt="Productos technofum">
							</div>
							<div class="owl-item">
								<img class="img-rounded  " style="width: 100%;  height: auto; " src="images/productos/productos9.png" alt="Productos technofum">
							</div>
						</div>					
					
				</div>
			</div>
		</div>
	</section>
	<!--/Sliders-->

	<!--Sliders-->
	<section id="Slider3">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 justify-content-start " style="padding: 0 0 50px 0">
					<h1 class="txt-nuestros-clientes"><strong>Clientes satisfechos</strong></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">


 <div id="owl-clients" class="owl-carousel ">
                        
						<div class="owl-item"  style="padding-left: 5px ; ">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes1.png" alt="Comercial Mexicana">
							</div>
							<div class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes2.png"  alt="Auto Zone">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes4.png"  alt="OfficeMax">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes5.png"  alt="Walmart">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes6.png"  alt="Grupo GALERIA">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes7.png"  alt="FEMSA">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes8.png"  alt="estafeta">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes9.png"  alt="Farmacias del DR.Simi">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes10.png"  alt="DHL">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes11.png"  alt="Oxxo">
							</div>
							
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes13.png"  alt="Mobil">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes14.png"  alt="alpura">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes15.png"  alt="Office DEPOT">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; "src="images/clientes/clientes16.png"  alt="GNC">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes17.png"  alt="Kellog´s">
							</div>
							<div  class="owl-item"  style="padding-left: 5px ;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes12.png"  alt="Seven Eleven">
							</div>
							<!--<div  class="owl-item" style="padding: 5px 10px;">
								<img style="width: 100%;  height: auto; " src="images/clientes/clientes18.png"   alt="AutoZone">
							</div>-->
</div>
                       
					
				</div>
			</div>
		</div>
	</section>
	
	<!--Incluir footer-->
	<?php require_once('includes/footer.php'); ?>
	<!--/Incluir footer-->

	<!--<script>
	$('#intro').backstretch([
	'images/blade-blur-dew-212324.jpg',
	
	], {duration: 3000, fade: 750});
	</script>-->
</body>
</html>