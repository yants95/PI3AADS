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

            $("#controle_nivel").text(dados.aquario[0].controles[0].nivel);
            $("#controle_repos").text(dados.aquario[0].controles[0].qtdReposicoes);	
            $("#controle_temp").text(dados.aquario[0].controles[0].temperatura);
            $("#controle_iluminacao").text(dados.aquario[0].controles[0].iluminacao);            
            
      	    $("#tomada1").text(dados.aquario[0].tomadas[0].t1 == 1 ? "Ligada" : "Desligada");
      	    $("#tomada2").text(dados.aquario[0].tomadas[0].t2 == 1 ? "Ligada" : "Desligada");
      	    $("#tomada3").text(dados.aquario[0].tomadas[0].t3 == 1 ? "Ligada" : "Desligada");
      	    $("#tomada4").text(dados.aquario[0].tomadas[0].t4 == 1 ? "Ligada" : "Desligada");
      	    $("#tomada5").text(dados.aquario[0].tomadas[0].t5 == 1 ? "Ligada" : "Desligada");
            
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
