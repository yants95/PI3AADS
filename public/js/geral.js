$(document).ready(function() {
	
	
	$.getJSON("http://10.0.0.2/00", function(dados) {
        if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            $("#dataArduino").text(dados.aquario[0].dateTime[0].data);
	    $("#horaArduino").text(dados.aquario[0].dateTime[0].hora);
            
	    $("#tempAtual").text(dados.aquario[0].temperatura[0].atual);
            $("#tempIdeal").text(dados.aquario[0].temperatura[0].ideal);
	    $("#tempMinima").text(dados.aquario[0].temperatura[0].minima);
            $("#tempMaxima").text(dados.aquario[0].temperatura[0].maxima);
	    $("#tomadaAquecimento").text(dados.aquario[0].temperatura[0].aquecimento);
            $("#tomadaResfriamento").text(dados.aquario[0].temperatura[0].resfriamento);
            
	    $("#potAzul").text(dados.aquario[0].potenciaAtual[0].azul);	
            $("#potBranco").text(dados.aquario[0].potenciaAtual[0].branco);	
            
            
        for (var i = 1; i < 6; i++) {
        	if(dados.aquario[0].tomadas[0].t[i] == 1) {
            	$("#tomada"+i).text("Ligado");
            } else {
            	$("#tomada"+i).text("Desligado");
            }
        }
            
            
            $("#controle_nivel").text(dados.aquario[0].controles[0].nivel);
            $("#controle_repos").text(dados.aquario[0].controles[0].qtdReposicoes);	
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

	$("#desativarControleTemp").on("click", function() {
		$.ajax({
			url: "http://10.0.0.2/02/0&0&0",
			type: 'GET',
			success: function(data) {
				console.log(data);
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
	
	$("#ativarControleTemp").on("click", function() {
		$.ajax({
			url: "http://10.0.0.2/02/200&200&200",
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

	$("#simularIluminacao").on("click", function() {
		$.ajax({
			url: "http://10.0.0.2/09",
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
