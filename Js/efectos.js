
function ventanas(valor){
	if(valor == 1){
		$('#crear').fadeIn(500);
	}else if (valor == 2){
		$('#crear').fadeOut(500);
	}else if(valor == 3){
		$('#consultar').fadeIn(500);
	}else if(valor == 4){
		$('#consultar').fadeOut(500);
	}else if(valor == 5){
		$('#crearEjercicios').fadeIn(500);
	}else if(valor == 6){
		$('#crearEjercicios').fadeOut(500);
	}else if(valor == 7){
		$('#relacionarEjercicios').fadeIn(500);
	}else if(valor == 8){
		$('#relacionarEjercicios').fadeOut(500);
	}
}

function crear_datos(ced,pn,sn,pa,sa,ed,gen,al,pe,obj,horas,imc,ob){
	$.ajax({
		type: 'POST',
		url: 'Instancias.php',
		//data: 'ced=' + ced + '&pn=' + pn + '&sn=' + sn + '&pa='+ pa + '&sa=' + sa + '&ed=' + ed + '&gen=' + gen + '&al=' + al + '&pe=' + pe + '&ob=' + ob,
		data: 'ced=' + ced + '&pn=' + pn + '&sn=' + sn + '&pa='+ pa + '&sa=' + sa + '&ed=' + ed + '&gen=' + gen + '&al=' + al + '&pe=' + pe + '&obj=' + obj + '&horas=' + horas +'&imc=' + imc + '&ob=' + ob,
		success: function(html){
		}
	});
	location.reload();
}

function consultar_cedula(cedula){
	$.ajax({
		type: 'POST',
		url: 'mostrar.php',
		data: 'cedula=' + cedula,
		success: function(a){
			$('#tabla_mostrar').html(a);
		}
	});
	//location.reload();
}

/*function login_ajax(user,pass){
		$.ajax({
			type: 'POST',
			url: urlWeb + 'Inc/login.php',
			data: 'user=' + user + '&pass=' + pass,
			success: function(html){
			}
		});	
		location.reload();
	}*/