/*tabs */
var linksParent = $('.tabs-link');
var links=linksParent.find('a');
var items=$('.tabs-content-item');
links.eq(0).add(items.eq(0)).addClass('activo');
linksParent.on('click', 'a', function(){
	var t = $(this);
	var i = t.index();
	t.add(items.eq(i)).addClass('activo').siblings().removeClass('activo'); 
});


/*menu hamburguesa */
var hamburger=document.querySelector('.hamburger');
//on click
hamburger.addEventListener('click', function(){
	hamburger.classList.toggle('is-active');
});

/*botones de ver más */
function vermas(parrafo, boton){
	var botonVerMas =document.getElementById(boton);
	botonVerMas.style.color='#fff';
	botonVerMas.style.borderRadius='40px';
	botonVerMas.style.backgroundColor='#A6060E';
	botonVerMas.style.width='200px';
	botonVerMas.style.margin='70px 0 30px 0';
	botonVerMas.style.textAlign='center';
	botonVerMas.style.padding='18px 76px';
	botonVerMas.style.textDecoration='none';
	botonVerMas.style.cursor='pointer';

	if(document.getElementById(parrafo).style.display=='block'){
		document.getElementById(parrafo).style.display='none';
		document.getElementById(boton).innerHTML='Ver más';
		botonVerMas.style.margin='50px 0 50px 0';
		
	}else{
		document.getElementById(parrafo).style.display='block';
		document.getElementById(boton).innerHTML='Ocultar';
	}
}

/**validación de formulario */
$(function(){
	$("#btn-ajax").click(function(){
		var url = "../mail/ajax.php";

		$.ajax({
			type:"POST",
			url: url,
			data:$("#formulario-ajax").serialize(),
			success: function(data){
				
				$("#nombre-status").html('');
				$("#email-status").html('');
				$("#telefono-status").html('');
				$("#opciones-status").html('');
				$("#fecha-status").html('');
				$("#mensaje-status").html('');
				$("#mensajeErr-status").html(data);//muestra los datos del script PHP
			}
		});
		return false;//evita la recarga de botón
	});
});

/**botón para ir hacia arriba */
$(document).ready(function(){
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0'
		}, 300)
	});

	$(window).scroll(function(){
		if($(this).scrollTop()>0){
			$('.ir-arriba').slideDown(100);
		}else{
			$('.ir-arriba').slideUp(100);
		}
	});
});

/*owl carousel*/	
$("#owl-clients").owlCarousel({
	items :10,
	pagination: false,
	slideSpeed : 300,
	paginationSpeed : 400,
	autoPlay: 2000,
	
});


$("#owl-services").owlCarousel({
	items :5,
	pagination: false,
	slideSpeed : 500,
	paginationSpeed : 500,
	autoPlay: 2000,
	
});

$("#owl-services2").owlCarousel({
	items :5,
	pagination: false,
	slideSpeed : 500,
	paginationSpeed : 500,
	autoPlay: 2000,
	
});

$("#owl-services3").owlCarousel({
	items :5,
	pagination: false,
	slideSpeed : 500,
	paginationSpeed : 500,
	autoPlay: 2000,
	
});

//validar solo letras
function validarLetras(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toString();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	especiales = [8, 37, 39, 46, 6];

	tecla_especial = false;

	for(var i in especiales){
		if(key == especiales[i]){
			tecla_especial = true;
			break;
		}
	}

	if(letras.indexOf(tecla) == -1 && !tecla_especial){
		alert('Tecla no aceptada');
		return false;
	}
}

//validar solo números
function soloNumeros(evt){
	if(window.event){
		keynum = evt.keyCode;
	}else{
		keynum = evt.which;
	}

	if((keynum >47 && keynum<58) || keynum == 8 || keynum == 13 || keynum == 6){
		return true;
	}else{
		alert('Sólo números');
		return false;
	}
}