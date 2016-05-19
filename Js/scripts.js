$(document).ready(function(){
	$("#btnSubmit").click(function(){
		$(".error").remove();
		var cedula = $('.ced').val();
		var primerNombre = $('.pn').val();
		var segundoNombre = $('.sn').val();
		var primerApellido = $('.pa').val();
		var segundoApellido = $('.sa').val();
		var edad = $('.ed').val();
		var genero = $('.gen').val();
		var altura = $('.al').val();
		var peso = $('.pe').val();
		var objetivo = $('.obj').val();
		var horas = $('.horas').val();
		var comentario = $('.ob').val();

		if(cedula == ''){
			$(".ced").focus().after("<span class='error'>ingresa su cedula</span>");
			return false;
		}else if(primerNombre == ''){
			$(".pn").focus().after("<span class='error'>ingresa tu primer nombre</span>");
			return false;
		}else if(segundoNombre == ''){
			$(".sn").focus().after("<span class='error'>ingresa tu segundo nombre</span>");
			return false;
		}else if(primerApellido == ''){
			$(".pa").focus().after("<span class='error'>ingresa tu primer apellido</span>");
			return false;
		}else if(segundoApellido == ''){
			$(".sa").focus().after("<span class='error'>ingresa tu segundo Apellido</span>");
			return false;
		}else if(edad == ''){
			$(".ed").focus().after("<span class='error'>ingresa tu edad</span>");
			return false;
		}else if(genero == '----Genero----'){
			$(".gen").focus().after("<span class='error'>seleccione un genero valido</span>");
			return false;
		}else if(altura == ''){
			$(".al").focus().after("<span class='error'>ingresa tu estatura</span>");
			return false;
		}else if(peso == ''){
			$(".pe").focus().after("<span class='error'>ingresa tu peso</span>");
			return false;
		}else if(objetivo == '--Actividad--'){
			$(".obj").focus().after("<span class='error'>seleccione un objetivo valido</span>");
			return false;
		}else if(horas == ''){
			$(".horas").focus().after("<span class='error'>ingresa tus horas disponibles</span>");
			return false;
		}else if(comentario == ''){
			$(".ob").focus().after("<span class='error'>ingrese un comentario</span>");
			return false;
		}else if(edad != /[^0-9]/g,''){
			$(".ed").focus().after("<span class='error'>solo debe ingresar numeros</span>");
		}else{
			return true;
		}
	});

	

	$("#btnBuscar").click(function(){
		$(".error").remove();
		var identidad = $('.ide').val();
		if(identidad == ''){
			$(".ide").focus().after("<span class='error'>ingrese una identificación</span>");
			return false;
		}else{
			return true;
		}
	});

	$("#btnEjercicios").click(function(){
		$(".error").remove();
		var tipoEjercicio = $('.tipo').val();
		var nomEjercicio = $('.nej').val();
		if(tipoEjercicio == '--Seleccione--'){
			$(".tipo").focus().after("<span class='error'>ingrese el tipo</span>");
			return false;
		}else if(nomEjercicio == ''){
			$(".nej").focus().after("<span class='error'>ingrese el nombre</span>");
			return false;
		}else{
			return true;
		}
	});

	$("#btnRelacion").click(function(){
		$(".error").remove();
		var fk_usuario = $('.fkus').val();
		var fk_ejercicio = $('.fkej').val();
		var tipo_ejercicio = $('.te').val();
		var repeticion = $('.rep').val();
		var serie = $('.ser').val();
		if(fk_usuario == ''){
			$(".fkus").focus().after("<span class='error'>ingrese el usuario</span>");
			return false;
		}else if(fk_ejercicio == '--Seleccione--'){
			$(".fkej").focus().after("<span class='error'>ingrese el ejercicio</span>");
			return false;
		}else if(tipo_ejercicio == ''){
			$(".te").focus().after("<span class='error'>ingrese el tipo ejercicio</span>");
			return false;
		}else if(repeticion == ''){
			$(".rep").focus().after("<span class='error'>ingrese las repeticiones</span>");
			return false;
		}else if(serie == ''){
			$(".ser").focus().after("<span class='error'>ingrese las series</span>");
			return false;
		}else{
			return true;
		}
	});

	$(".ced, .pn, .sn, .pa, .sa, .ed, .gen, .al, .pe, .obj, .horas, .ob, .ide").keyup(function(){
		if($(this).val() != ""){
			$(".error").fadeOut();
			return false;
		}
	});

	$('.ced').numeric();
	$('.ed').numeric();
	$('.al').numeric(".");
	$('.pe').numeric();
	$('.horas').numeric();
	$('.ide').numeric();
	$('.fkus').numeric();
	$('.rep').numeric();
	$('.ser').numeric();

});
