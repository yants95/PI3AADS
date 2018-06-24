$(document).ready(function(){
	var base_url = "http://10.0.0.2/05/";

	$("#EnviarCincoPrimeiros").on("click", function() {
		let paramentros = validarParamentro(
										$.trim($("#pHorario1").val()),
										$.trim($("#pPotencia1").val()),
										$.trim($("#pHorario2").val()),
										$.trim($("#pPotencia2").val()),
										$.trim($("#pHorario3").val()),
										$.trim($("#pPotencia3").val()),
										$.trim($("#pHorario4").val()),
										$.trim($("#pPotencia4").val()),
										$.trim($("#pHorario5").val()),
										$.trim($("#pPotencia5").val())
									);

		if(paramentros !== 0) {
			enviarRequisicao(base_url, paramentros);
		} else {
			alert("Preenchar todos os campos para primeiro horario.");
		}

	});

	$("#EnviarCincoUltimos").on("click", function() {
		// ...
	});

});

/*
Funcão para validar valores passado nos inputs

@method validarParamentro(params...)
@return retorna string de paramentros validados
*/
function validarParamentro(p1, p2, p3, p4, p5, p6, p7, p8, p9, p10) {
	if (p1 && p2 && p3 && p4 && p5 && p6 && p7 && p8 && p9 && p10) {
		return `0${p1}0${p2}0${p3}0${p4}0${p5}0${p6}0${p7}0${p8}0${p9}0${p10}`;
	} else {
		return 0;
	}
}

/*
Funcão para realizar requisição

@method validarParamentro(url, paramentros)
*/
function enviarRequisicao(url, paramentros) {
	// monstar url final para requisição
	let url_final = url+paramentros;
	console.log(url_final);
	$.ajax({
		url: url_final,
		type: 'GET',
		success: function(data) {
			console.log(data);
		},
		error: function(error) {
			console.log(error);
		}
	});
}
