$(document).ready(function(){
	
	var url = "http://10.0.0.2/04/";
	var valor = "";
	
	$("#btEnviar").on("click", function() {
		
		$("#canalAzul").on("blur", function() {
			valor = $("#canalAzul").val().replace(/[^a-zA-Z]+/g,'');
			$("#canalAzul").val(valor);
		});
		
		/*if($("#canalAzul").val() < 0 || $("#canalAzul").val() > 100
			|| $("#canalBranco").val() < 0 || $("#canalBranco").val() > 100	) {
			alert("Valor da potência não pode negativo nem maior que zero");
			return false;
		}*/
		
		
		
		url_final = url + $("#canalAzul").val() + "&" + $("#canalBranco").val();
		
		console.log(url_final);
		
		url = "http://10.0.0.2/04/";
		
		/*$.ajax({
			  type: 'GET'
			  ,url: url_final = url + $("#tempMinima").val() + "&" + $("#tempMaxima").val(),
			  
			  success: function(response){
			    preventDefault();
			  },
			  error: function(error, er){
			    console.log(error);
			  }
		});*/
		
	});
	
	$("#btSimulacao").on("click", function() {
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