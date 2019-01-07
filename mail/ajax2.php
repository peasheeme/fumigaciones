<?php 
	$msgErr=null;

	if(isset($_POST['ajax2'])){
		$nombre = trim($_POST['nombre']);
		$telefono = trim($_POST['telefono']);
		$correo = trim($_POST['correo']);
		$mensaje = trim($_POST['mensaje']);

		//validar campo nombre
		if($nombre == ""){
			$msgErr = "<script>document.getElementById('nombre-contacto').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
		}

		elseif(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i', $nombre)){
			$msgErr = "<script>document.getElementById('nombre-contacto').innerHTML = 'No se admiten n&uacute;meros en este campo';</script>";
		}

		elseif(!is_string($nombre)){
			$msgErr = "<script>document.getElementById('nombre-contacto').innerHTML = 'Ingrese solo texto';</script>";
		}

		elseif(strlen($nombre)<2){
			$msgErr = "<script>document.getElementById('nombre-contacto').innerHTML = 'M&iacute;nimo permitido 2 caracteres';</script>";
		}

		elseif(strlen($nombre)>60){
			$msgErr = "<script>document.getElementById('nombre-contacto').innerHTML = 'M&aacute;ximo permitido 60 caracteres';</script>";
		}

		//validar campo teléfono
		elseif($telefono == ""){
			$msgErr = "<script>document.getElementById('telefono-contacto').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
		}

		elseif(!preg_match("/^[0-9]+$/", $telefono)){
			$msgErr = "<script>document.getElementById('telefono-contacto').innerHTML = 'No se admiten letras en este campo';</script>";
		}

		//validar campo email
		elseif($correo == ""){
			$msgErr = "<script>document.getElementById('correo-contacto').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
		}

		elseif(!preg_match('/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/', $correo)){
			$msgErr = "<script>document.getElementById('correo-contacto').innerHTML = 'Introduce un correo v&aacute;lido';</script>";
		}

		//validar mensaje
		elseif($mensaje == ""){
			$msgErr = "<script>document.getElementById('mensaje-contacto').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
		}
		
		/*elseif(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ\s]*$/", $mensaje)){
			$msgErr = "<script>document.getElementById('mensaje-contacto').innerHTML = 'No se admiten caracteres especiales';</script>";
		}*/

		else{
			//asunto
		$asunto="Mensaje de la página web";

		//destinatario
		$destino="ventas@technofum.com.mx";

		//cabeceras para validar el formato HTML
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8\r\n";

		//contenido del mensaje
		$contenido='
		<html>
		<head></head>
		<body>
				<h3>'.$nombre.' ha enviado el siguiente mensaje a través de la página</h3>
		
				<hr style="border:2px solid #A6060E;"/>
				
				
				<p>'.$mensaje.' </p>
				<br>
				<h3>Te puedes poner en contacto con '.$nombre.' al correo  <span style="color:#0645AD;">'.$correo.'.</span> o al teléfono: '.$telefono.' </h3>
				
		
				<p>TECHNO & FUM</p>
				<br/>
				<br/>
				
		
				<hr style="border:2px solid #A6060E;"/>
		</body>
		</html>
		';

		//enviar correo
		$envio = mail($destino, $asunto, $contenido, $headers);

		if($envio){
			printf("<script>alert('Su correo ha sido enviado, gracias');</script>");
			printf("<script>window.location.href='index.php';</script>");
		}else{
			printf("<script>alert('Intentelo de nuevo en unos momentos');</script>");
			printf("<script>window.location.href='index.php';</script>");
		}
		}
	}

	echo $msgErr;

?>