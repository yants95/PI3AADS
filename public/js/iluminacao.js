$(document).ready(function(){
	
	var url = "http://10.0.0.2/04/";
	
	$("#btEnviar").on("click", function() {
		if($("#canalAzul").val() > 100 || $("#canalBranco").val() > 100) {
			alert("Potência não pode ser maior que 100");
			return false;
		}
		
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
	
});