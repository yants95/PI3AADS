$(document).ready(function() {
	
	
	$.getJSON("http://10.0.0.2/00", function(dados) {
        if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            $("#dataArduino").text(dados.aquario[0].dateTime[0].data);
	    $("#horaArduino").text(dados.aquario[0].dateTime[0].hora);
            $("#tempAtual").text(dados.aquario[0].temperatura[0].atual);
            //falta criar $("#tempIdeal").text(dados.aquario[0].temperatura[0].ideal);
	    $("#tempMinima").text(dados.aquario[0].temperatura[0].minima);
            $("#tempMaxima").text(dados.aquario[0].temperatura[0].maxima);
            //falta criar $("#potAzul").text(dados.aquario[0].potenciaAtual[0].azul);	
            //falta criar $("#potBranco").text(dados.aquario[0].potenciaAtual[0].branco);	
            $("#tomada1").text(dados.aquario[0].tomadas[0].t1);
            $("#tomada2").text(dados.aquario[0].tomadas[0].t2);
            $("#tomada3").text(dados.aquario[0].tomadas[0].t3);
            $("#tomada4").text(dados.aquario[0].tomadas[0].t4);
            $("#tomada5").text(dados.aquario[0].tomadas[0].t5);
            
            $("#controle_nivel").text(dados.aquario[0].controles[0].nivel);
            //falta criar $("#controle_repos").text(dados.aquario[0].controles[0].qtdReposicoes);	
            $("#controle_temp").text(dados.aquario[0].controles[0].temperatura);
            $("#controle_iluminacao").text(dados.aquario[0].controles[0].iluminacao);
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

	$("#ativarIluminacaoAutomatica").on("click", function() {
		$.ajax({
			url: "http://10.0.0.2/04/200&200",
			type: 'GET',
			success: function(data) {
				console.log(data);
			},
			error: function(data) {
				console.log(data);
			}
		});
	});

	$("#ativarIluminacaoManual").on("click", function() {
		$.ajax({
			url: "http://10.0.0.2/04/300&300",
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
