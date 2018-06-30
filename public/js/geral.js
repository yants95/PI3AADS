$(document).ready(function() {
	$("#dataArduino").text("23/06/2018");
	$("#horaArduino").text("15:12");
	
	$.getJSON("https://github.com/typicode/json-server/blob/master/db.json", function(dados) {
        if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
        	console.log(dados);
            $("#tempAtual").text(dados.aquario.temperatura[0].atual);
            $("#tempMinima").text(dados.posts[1].id);
            $("#tempMaxima").text(dados.posts[2].id);
            
            $("#tomada1").text(dados.tomadas[0].t1);
            $("#tomada2").text(dados.tomadas[1].t2);
            $("#tomada3").text(dados.tomadas[2].t3);
            $("#tomada4").text(dados.tomadas[3].t4);
            $("#tomada5").text(dados.tomadas[4].t5);
            
            $("#controle_nivel").text(dados.tomadas[0].nivel);
            $("#controle_temp").text(dados.tomadas[1].temperatura);
            $("#controle_iluminacao").text(dados.tomadas[2].iluminacao);
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
