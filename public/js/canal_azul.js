$(document).ready(function(){
	
	var url = "http://10.0.0.2/05/";
		
	$("#btEnviar").on("click", function() {
		url += $("#inputPrimeiro").val() + $("#primeiraPotencia").val() +
				$("#inputSegundo").val() + $("#segundaPotencia").val() +
				$("#inputTerceiro").val() + $("#terceiraPotencia").val() +
				$("#inputQuarto").val() + $("#quartaPotencia").val() +
				$("#inputQuinto").val() + $("#quintaPotencia").val();
		console.log(url);
		
		url = "http://10.0.0.2/05/";
	});
	
});