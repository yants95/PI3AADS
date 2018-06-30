$(document).ready(function(){
	var url_base = "http://10.0.0.2/01/";

	$("#btEnviar").on("click", function() {
		let parametros = prepararParametros(
			$.trim($("#tomada1").val()),
			$.trim($("#tomada2").val()),
			$.trim($("#tomada3").val()),
			$.trim($("#tomada4").val()),
			$.trim($("#tomada5").val())
		);

		if (parametros !== false) {
			enviarRequisicao(url_base, parametros);
		} else {
			alert('Preenchar todos os campos!');
		}
	});

});

function prepararParametros(tm1, tm2, tm3, tm4, tm5) {
	if (tm1 && tm2 && tm3 && tm4 && tm5) {
		return `${tm1+tm2+tm3+tm4+tm5}`;
	} else {
		return false;
	}
}

function enviarRequisicao(url, paramentros) {
	// monstar url final para requisição
	let url_final = url+paramentros;
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
