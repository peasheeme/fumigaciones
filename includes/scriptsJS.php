	<!---->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#btn-ajax").click(function(){
				var url = "mail/ajax.php";

				$.ajax({
					type:"POST",
					url: url,
					data:$("#formulario-ajax").serialize(),
					success: function(data){
						
						$("#nombre-status").html('');
						$("#email-status").html('');
						$("#telefono-status").html('');
						$("#estado-status").html('');
						$("#ciudad-status").html('');
						$("#direccion-status").html('');
						$("#opciones-status").html('');
						$("#fecha-status").html('');
						$("#mensaje-status").html('');
						$("#mensajeErr-status").html(data);//muestra los datos del script PHP
					}
				});
				return false;//evita la recarga de botón
			});
		});
	</script>

	<script>
		/**validación de formulario 2*/
		$(function(){
			$("#btn-ajax2").click(function(){
				var url = "mail/ajax2.php";

				$.ajax({
					type:"POST",
					url: url,
					data:$("#formulario-ajax2").serialize(),
					success: function(data){
						
						$("#nombre-contacto").html('');
						$("#telefono-contacto").html('');
						$("#correo-contacto").html('');
						$("#mensaje-contacto").html('');
						$("#mensaje-error").html(data);//muestra los datos del script PHP
					}
				});
				return false;//evita la recarga de botón
			});
		});
	</script>
	

	<script>
		jQuery(document).ready(function($){
			var path = window.location.pathname.split("/").pop();

			if(path == ''){
				path = 'index.php';
			}

			var target = $('nav a[href="'+path+'"]');
			target.addClass('activo');
		});
	</script>