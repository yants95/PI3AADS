$(document).ready(function() {
	$.getJSON("https://my-json-server.typicode.com/typicode/demo/db", function(dados) {
        if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            $("#tempAtual").text(dados.posts[0].id);
            $("#tempMinima").text(dados.posts[1].id);
            $("#tempMaxima").text(dados.posts[2].id);
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
