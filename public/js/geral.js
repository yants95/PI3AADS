$(document).ready(function() {
	
	
	$.getJSON("http://my-json-server.typicode.com/yants95/PI3AADS/aquario", function(dados) {
		headers: { "Access-Control-Allow-Origin","*"}
        if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
        	console.log(dados);
        	$("#dataArduino").text(dados[0].dateTime[0].data);
        	$("#horaArduino").text(dados[0].dateTime[0].hora);
            $("#tempAtual").text(dados[0].temperatura[0].atual);
            $("#tempMinima").text(dados[0].temperatura[0].minima);
            $("#tempMaxima").text(dados[0].temperatura[0].maxima);
            
            $("#tomada1").text(dados[0].tomadas[0].t1);
            $("#tomada2").text(dados[0].tomadas[0].t2);
            $("#tomada3").text(dados[0].tomadas[0].t3);
            $("#tomada4").text(dados[0].tomadas[0].t4);
            $("#tomada5").text(dados[0].tomadas[0].t5);
            
            $("#controle_nivel").text(dados[0].controles[0].nivel);
            $("#controle_temp").text(dados[0].controles[0].temperatura);
            $("#controle_iluminacao").text(dados[0].controles[0].iluminacao);
        }
        
        
    });
	
	$("#desativarControle").on("click", function() {
		$.ajax({
			url: "http://10.0.0.2/03/0",
			type: 'GET',
			success: function(data) {
				console.log(data);
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
	
	$("#ativarControle").on("click", function() {
		$.ajax({
			url: "http://10.0.0.2/03/1",
			type: 'GET',
			success: function(data) {
				console.log(data);
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
});
