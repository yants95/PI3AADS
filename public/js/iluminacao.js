$(document).ready(function(){
	
	var url = "http://10.0.0.2/04/";
	var valor = "";
	
	$.getJSON("http://10.0.0.2/00", function(dados) {
		if (!("erro" in dados)) {
		    //Atualiza os campos com os valores da consulta.
		    $("#canalAzul").val(dados.aquario[0].potenciaManual[0].azul);
		    $("#canalBranco").val(dados.aquario[0].potenciaManual[0].branco);
		}
	});
	
	$("#canalAzul").on("keyup", function(){
	  var regexp = /[^0-9]/g;
	  if(this.value.match(regexp)){
	    $(this).val(this.value.replace(regexp,''));
	  }
	});
	
	$("#canalBranco").on("keyup", function(){
	  var regexp = /[^0-9]/g;
	  if(this.value.match(regexp)){
	    $(this).val(this.value.replace(regexp,''));
	  }
	});
	
	$("#btEnviar").on("click", function() {
		
		if($("#canalAzul").val() == "" || $("#canalBranco").val() == "") {
			alert("Todos os campos devem ser preenchidos");
			return false;
		}

		if($("#canalAzul").val() < 0 || $("#canalAzul").val() > 100) {
			alert("Potência não pode ser negativa nem maior que 100");
			return false;
		}
		
		if($("#canalBranco").val() < 0 || $("#canalBranco").val() > 100) {
			alert("Potência não pode ser negativa nem maior que 100");
			return false;
		}
		
		
		
		url_final = url + $("#canalAzul").val() + "&" + $("#canalBranco").val();
		
		console.log(url_final);
		
		
		$.ajax({
			type: 'GET',
			url: url_final,
			success: function(data) {
				console.log(data);
			},
			error: function(error) {
				console.log(error);
			}
		});
	});
	
	$("#btDesativarIluminacao").on("click", function() {
		$.ajax({
			url: "http://10.0.0.2/09/0&0",
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
