$(document).ready(function(){
	
	$("#tempMinima").on("keyup", function(){
		var regexp = /[^0-9]/g;
		if(this.value.match(regexp)){
			$(this).val(this.value.replace(regexp,''));
		}
	});
	
	$("#tempMaxima").on("keyup", function(){
		var regexp = /[^0-9]/g;
		if(this.value.match(regexp)){
			$(this).val(this.value.replace(regexp,''));
		}
	});
	
	$("#tempIdeal").on("keyup", function(){
		var regexp = /[^0-9]/g;
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
			  type: 'GET'
			  ,url: url_final,
			  
			  success: function(response){
			    preventDefault();
			  },
			  error: function(error, er){
			    console.log(error);
			  }
		});
		
	});
	
});