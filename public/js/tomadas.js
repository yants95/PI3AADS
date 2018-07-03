$(document).ready(function(){
	var url_base = "http://10.0.0.2/01/";
	
	$.getJSON("http://10.0.0.2/00", function(dados) {
        if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
        	$("#tomada1").val(dados.aquario[0].tomadas[0].t1);
			$("#tomada2").val(dados.aquario[0].tomadas[0].t2);
			$("#tomada3").val(dados.aquario[0].tomadas[0].t3);
			$("#tomada4").val(dados.aquario[0].tomadas[0].t4);
			$("#tomada5").val(dados.aquario[0].tomadas[0].t5);
	    }
    });

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

function enviarRequisicao(url, parametros) {
	// monstar url final para requisição
	let url_final = url+parametros;
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
