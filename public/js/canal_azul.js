$(document).ready(function(){
	var base_url = "http://10.0.0.2/05/";

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
			alert("Preenchar todos os campos para primeiro horario.");
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
		let params = validarParametro1(
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
			alert("Preenchar todos os campos para ultimos horario.");
		}		
	});

});

/*
Funcão para validar valores passado nos inputs

@method validarParamentro(params...)
@return retorna string de paramentros validados
*/
function validarParametro1(h1, p1, h2, p2, h3, p3, h4, p4, h5, p5) {
	if (h1 && p1 && h2 && p2 && h3 && p3 && h4 && p4 && h5 && p5) {
		let  aux = `${replaceDoisPontos(h1)}${incluirZeros(p1)}
					${replaceDoisPontos(h2)}${incluirZeros(p2)}
					${replaceDoisPontos(h3)}${incluirZeros(p3)}
					${replaceDoisPontos(h4)}${incluirZeros(p4)}
					${replaceDoisPontos(h5)}${incluirZeros(p5)}`;
		return aux;
	} else {
		return 0;
	}
}

function validarParametro2(h1, p1, h2, p2, h3, p3, h4, p4, h5, p5) {
	if (h1 && p1 && h2 && p2 && h3 && p3 && h4 && p4 && h5 && p5) {
		let  aux = `${replaceDoisPontos(h1)}${incluirZeros(p1)}
					${replaceDoisPontos(h2)}${incluirZeros(p2)}
					${replaceDoisPontos(h3)}${incluirZeros(p3)}
					${replaceDoisPontos(h4)}${incluirZeros(p4)}
					${replaceDoisPontos(h5)}${incluirZeros(p5)}`;
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
function enviarRequisicao(url, paramentros) {
	// monstar url final para requisição
	let url_final = url+paramentros;
	alert(url_final);
	/*$.ajax({
		url: url_final,
		type: 'GET',
		success: function(data) {
			console.log(data);
		},
		error: function(error) {
			console.log(error);
		}
	});*/
}

/*
Funcão para realizar validação dos campos numericos no onInput
*/
function maxLengthCheck(object) {
	if (object.value.length > object.max.length)
		object.value = object.value.slice(0, object.max.length)
}

function isNumeric (evt) {
	var theEvent = evt || window.event;
	var key = theEvent.keyCode || theEvent.which;
	key = String.fromCharCode (key);
	var regex = /[0-9]|\./;
	if ( !regex.test(key) ) {
		theEvent.returnValue = false;
		if(theEvent.preventDefault) theEvent.preventDefault();
	}
}
