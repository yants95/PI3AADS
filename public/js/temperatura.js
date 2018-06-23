$(document).ready(function(){
	
	var url = "http://10.0.0.2/02/";
	
	$("#btEnviar").on("click", function() {
		
		url_final = url + $("#tempMinima").val() + "&" + $("#tempMaxima").val();
		
		console.log(url_final);
		
		url = "http://10.0.0.2/02/";
		
		$.ajax({
			  type: 'GET'
			  ,url: url_final = url + $("#tempMinima").val() + "&" + $("#tempMaxima").val(),
			  
			  success: function(response){
				  console.log(response);
			    preventDefault();
			  },
			  error: function(error, er){
			    console.log(error);
			  }
		});
		
	});
	
});