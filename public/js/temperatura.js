$(document).ready(function(){
	
	$.getJSON("http://10.0.0.2/00", function(dados) {
		if (!("erro" in dados)) {
		    //Atualiza os campos com os valores da consulta.
		    $("#tempIdeal").val(dados.aquario[0].temperatura[0].ideal);
		    $("#tempMinima").val(dados.aquario[0].temperatura[0].minima);
		    $("#tempMaxima").val(dados.aquario[0].temperatura[0].maxima);
		}
	});
	
	
	$("#tempMinima").on("keyup", function(){
		var regexp = /[^0-9.]/g;
		if(this.value.match(regexp)){
			$(this).val(this.value.replace(regexp,''));
		}
	});
	
	$("#tempMaxima").on("keyup", function(){
		var regexp = /[^0-9.]/g;
		if(this.value.match(regexp)){
			$(this).val(this.value.replace(regexp,''));
		}
	});
	
	$("#tempIdeal").on("keyup", function(){
		var regexp = /[^0-9.]/g;
		if(this.value.match(regexp)){
			$(this).val(this.value.replace(regexp,''));
		}
	});
	
	var url = "http://10.0.0.2/02/";
	
	$("#btEnviar").on("click", function() {
		
		if($("#tempMinima").val() == "") {
			alert("Preencha a temperatura mínima");
			return false;
		}
		
		if($("#tempMaxima").val() == "") {
			alert("Preencha a temperatura máxima");
			return false;
		}
		
		if($("#tempIdeal").val() == "") {
			alert("Preencha a temperatura ideal");
			return false;
		}
		
		url_final = url + $("#tempMinima").val() + "&" + $("#tempMaxima").val() + "&" + $("#tempIdeal").val();
		
		console.log(url_final);
		
		url = "http://10.0.0.2/02/";
		
		$.ajax({
			type: 'GET',
			url: url_final,
			success: function(data) {
				console.log(data);
			},
			error: function(data) {
				console.log(data);
			}
		});
		
	});
});
