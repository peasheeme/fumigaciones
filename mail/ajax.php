<?php
$msjStatus = null;
//expresión letras y números: /^[a-zA-Z\s0-9]*$/
if(isset($_POST['ajax'])){
	$nombre=htmlspecialchars($_POST['nombre']);
	$email=htmlspecialchars($_POST['email']);
	(int)$telefono=htmlspecialchars($_POST['telefono']);
	$estado=htmlspecialchars($_POST['estado']);
	$ciudad=htmlspecialchars($_POST['ciudad']);
	$direccion=htmlspecialchars($_POST['direccion']);
	$opciones=htmlspecialchars($_POST['opciones']);
	$fecha=htmlspecialchars($_POST['fecha']);
	$mensaje=htmlspecialchars($_POST['mensaje']);

	//validar campo nombre
	if($nombre == ""){
		$msjStatus = "<script>document.getElementById('nombre-status').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
	}

	elseif(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i', $nombre)){
		$msjStatus = "<script>document.getElementById('nombre-status').innerHTML = 'No se admiten n&uacute;meros en este campo';</script>";
	}

	elseif(!is_string($nombre)){
		$msjStatus = "<script>document.getElementById('nombre-status').innerHTML = 'Ingrese solo texto';</script>";
	}

	elseif(strlen($nombre)<2){
		$msjStatus = "<script>document.getElementById('nombre-status').innerHTML = 'M&iacute;nimo permitido 2 caracteres';</script>";
	}

	elseif(strlen($nombre)>60){
		$msjStatus = "<script>document.getElementById('nombre-status').innerHTML = 'M&aacute;ximo permitido 60 caracteres';</script>";
	}

	//validar campo email
	elseif($email == ""){
		$msjStatus = "<script>document.getElementById('email-status').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
	}

	/*elseif(!preg_match('/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/', $email)){
		$msjStatus = "<script>document.getElementById('email-status').innerHTML = 'Introduce un correo v&aacute;lido';</script>";
	}*/

	//validar campo teléfono
	elseif($telefono == ""){
		$msjStatus = "<script>document.getElementById('telefono-status').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
	}

	elseif(!preg_match("/^[0-9]+$/", $telefono)){
		$msjStatus = "<script>document.getElementById('telefono-status').innerHTML = 'No se admiten letras en este campo';</script>";
	}

	//validar campo estado
	elseif($estado == ""){
		$msjStatus = "<script>document.getElementById('estado-status').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
	}
	elseif(!is_string($estado)){
		$msjStatus = "<script>document.getElementById('estado-status').innerHTML = 'Solo se admiten letras';</script>";
	}
	//validar campo ciudad
	elseif($ciudad == ""){
		$msjStatus = "<script>document.getElementById('ciudad-status').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
	}
	elseif(!is_string($ciudad)){
		$msjStatus = "<script>document.getElementById('ciudad-status').innerHTML = 'Solo se admiten letras';</script>";
	}
	
	//validar campo direccion
	elseif($direccion == ""){
		$msjStatus = "<script>document.getElementById('direccion-status').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
	}

	//validar las opciones del select
	elseif($opciones==""){
		$msjStatus = "<script>document.getElementById('opciones-status').innerHTML = 'Debe seleccionar una opci&oacute;n';</script>";
	}

	//validar fecha
	elseif($fecha == ""){
		$msjStatus = "<script>document.getElementById('fecha-status').innerHTML = 'Ingrese una fecha';</script>";
	}

	//validar mensaje
	elseif($mensaje == ""){
		$msjStatus = "<script>document.getElementById('mensaje-status').innerHTML = 'El campo est&aacute; vac&iacute;o';</script>";
	}

	
	

	/*elseif(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ\s]*$/", $mensaje)){
		$msjStatus = "<script>document.getElementById('mensaje-status').innerHTML = 'No se admiten caracteres especiales';</script>";
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
		<h3>'.$nombre.' ha solicitado el siguiente servicio  a través de la página</h3>

		<hr style="border:2px solid #A6060E;"/>
		
		
		<p>'.$mensaje.' </p>
		
		<h3>Datos del cliente.</h3>
		<ul>
			<li><strong>Nombre: </strong> '.$nombre.'</li>
			<li><strong>Telefono: </strong> '.$telefono.'</li>
			<li><strong>E-mail: </strong> '.$email.'</li>
			<li><strong>Estado: </strong> '.$estado.'</li>
			<li><strong>Ciudad: </strong> '.$ciudad.'</li>
			<li><strong>Dirección: </strong> '.$direccion.'</li>
			
		</ul>
		<h3>Datos del servicio.</h3>
		<ul>
			
			<li><strong>Tipo de servicio: </strong> '.$opciones.'</li>
			<li><strong>Fecha: </strong> '.$fecha.'</li>
		</ul>

		
		<br/>
		<br/>
		

		<hr style="border:2px solid #A6060E;"/>
		</body>
		</html>
		';

		//enviar correo
		$envio = mail($destino, $asunto, $contenido, $headers);

		if($envio){
			echo "<script>alert('Su correo ha sido enviado exitosamente, gracias');</script>";
			echo "<script>window.location.href='index.php';</script>";
		}else{
			echo "<script>alert('Intentelo de nuevo en unos momentos');</script>";
			echo "<script>window.location.href='index.php';</script>";
		}
	}
}

echo $msjStatus;

?>