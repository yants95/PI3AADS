$(document).ready(function(){
	var base_url = "http://10.0.0.2/05/";
	
	$.getJSON("http://10.0.0.2/00", function(dados) {
		if (!("erro" in dados)) {
		    //Atualiza os campos com os valores da consulta.
			$("#pHorario1").val(dados.aquario[0].horaAzul[0].h0);
		    $("#pPotencia1").val(dados.aquario[0].potenciaAzul[0].p0);
		    $("#pHorario2").val(dados.aquario[0].horaAzul[0].h1);
		    $("#pPotencia2").val(dados.aquario[0].potenciaAzul[0].p1);
		    $("#pHorario3").val(dados.aquario[0].horaAzul[0].h2);
		    $("#pPotencia3").val(dados.aquario[0].potenciaAzul[0].p2);
		    $("#pHorario4").val(dados.aquario[0].horaAzul[0].h3);
		    $("#pPotencia4").val(dados.aquario[0].potenciaAzul[0].p3);
		    $("#pHorario5").val(dados.aquario[0].horaAzul[0].h4);
		    $("#pPotencia5").val(dados.aquario[0].potenciaAzul[0].p4);
		    
		    $("#uHorario1").val(dados.aquario[0].horaAzul[0].h5);
		    $("#uPotencia1").val(dados.aquario[0].potenciaAzul[0].p5);
		    $("#uHorario2").val(dados.aquario[0].horaAzul[0].h6);
		    $("#uPotencia2").val(dados.aquario[0].potenciaAzul[0].p6);
		    $("#uHorario3").val(dados.aquario[0].horaAzul[0].h7);
		    $("#uPotencia3").val(dados.aquario[0].potenciaAzul[0].p7);
		    $("#uHorario4").val(dados.aquario[0].horaAzul[0].h8);
		    $("#uPotencia4").val(dados.aquario[0].potenciaAzul[0].p8);
		    $("#uHorario5").val(dados.aquario[0].horaAzul[0].h9);
		    $("#uPotencia5").val(dados.aquario[0].potenciaAzul[0].p9);
		}
	});

	$("#EnviarCincoPrimeiros").on("click", function() {
		let params = validarParametro1(
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

		if(params !== 0) {
			enviarRequisicao(base_url, params);
		} else {
			alert("Preencher todos os campos para primeiro horario.");
		}
	});
	
	for (var i = 1; i < 6; i++) {
		$("#pPotencia"+i).on("keyup", function(){
			var regexp = /[^0-9:]/g;
			if(this.value.match(regexp)){
				$(this).val(this.value.replace(regexp,''));
			}
		});
	}
	
	for (var i = 1; i < 6; i++) {
		$("#pHorario"+i).on("keyup", function(){
			var regexp = /[^0-9:]/g;
			if(this.value.match(regexp)){
				$(this).val(this.value.replace(regexp,''));
			}
		});
	}
	
	for (var i = 1; i < 6; i++) {
		$("#uHorario"+i).on("keyup", function(){
			var regexp = /[^0-9:]/g;
			if(this.value.match(regexp)){
				$(this).val(this.value.replace(regexp,''));
			}
		});
	}
	
	for (var i = 1; i < 6; i++) {
		$("#uPotencia"+i).on("keyup", function(){
			var regexp = /[^0-9:]/g;
			if(this.value.match(regexp)){
				$(this).val(this.value.replace(regexp,''));
			}
		});
	}

	$("#EnviarCincoUltimos").on("click", function() {
		let params = validarParametro2(
										$.trim($("#uHorario1").val()),
										$.trim($("#uPotencia1").val()),
										$.trim($("#uHorario2").val()),
										$.trim($("#uPotencia2").val()),
										$.trim($("#uHorario3").val()),
										$.trim($("#uPotencia3").val()),
										$.trim($("#uHorario4").val()),
										$.trim($("#uPotencia4").val()),
										$.trim($("#uHorario5").val()),
										$.trim($("#uPotencia5").val())
									);
		if(params !== 0) {
			enviarRequisicao(base_url, params);
		} else {
			alert("Preencher todos os campos para ultimos horario.");
		}		
	});

});

/*
Funcão para validar valores passado nos inputs

@method validarParamentro(params...)
@return retorna string de paramentros validados
*/

//Recebe os cinco primeiros horários e as cinco primeiras potências para validação
function validarParametro1(h1, p1, h2, p2, h3, p3, h4, p4, h5, p5) {
	if (h1 && p1 && h2 && p2 && h3 && p3 && h4 && p4 && h5 && p5) {
		let  aux = `${replaceDoisPontos(h1) + incluirZeros(p1) +
			replaceDoisPontos(h2) + incluirZeros(p2) +
			replaceDoisPontos(h3) + incluirZeros(p3) + 
			replaceDoisPontos(h4) + incluirZeros(p4) +
			replaceDoisPontos(h5) + incluirZeros(p5) }`;
		return aux;
	} else {
		return 0;
	}
}

//Recebe os cinco últimos horários e as cinco últimas potências para validação
function validarParametro2(h1, p1, h2, p2, h3, p3, h4, p4, h5, p5) {
	if (h1 && p1 && h2 && p2 && h3 && p3 && h4 && p4 && h5 && p5) {
		let  aux = `${replaceDoisPontos(h1) + incluirZeros(p1) +
			replaceDoisPontos(h2) + incluirZeros(p2) +
			replaceDoisPontos(h3) + incluirZeros(p3) + 
			replaceDoisPontos(h4) + incluirZeros(p4) +
			replaceDoisPontos(h5) + incluirZeros(p5) }`;
		return aux;
	} else {
		return 0;
	}
}
/*
Funcão para remover : pontos do horario
*/

function replaceDoisPontos(horario) {
	return horario.replace(':','');
}

/*
Funcão para validar se o valor é igual 0

@method incluirZeros(number)
@return retorna um valor de três casas decimais
*/
function incluirZeros(number) {
	let numberString = String(number);
	//var response = numberString.split("");
	if(number > 0 && number <= 100) {
		if (number == 100) {
			return number;
		} else if (numberString.length == 2) {
			return `0${number}`;
		} else if (numberString.length == 1) {
			return `00${number}`;
		}
	} else {
		return 100; // Se o valor informado for maior que 100, então setar a maior potencia possivel;
	}
}

/*
Funcão para realizar requisição

@method validarParamentro(url, paramentros)
*/
function enviarRequisicao(url, params) {
	// monstar url final para requisição
	let url_final = url+params;
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

/*
Funcão para realizar validação dos campos numericos no onInput
*/

