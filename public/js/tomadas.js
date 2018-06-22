$(document).ready(function(){
	console.log("teste");
	
	var url_final = "http://10.0.0.2/01/";
	
	$("#tomada1").on("change", function() {
		if($("#tomada1").val() != "") {
			url_final += $("#tomada1").val();
			url(url_final);
		}
	});
	
	$("#tomada2").on("change", function() {
		if($("#tomada2").val() != "") {
			url_final += $("#tomada2").val();
			url(url_final);
		}
	});
	
	$("#tomada3").on("change", function() {
		if($("#tomada3").val() != "") {
			url_final += $("#tomada3").val();
			url(url_final);
		}
	});
	
	$("#tomada4").on("change", function() {
		if($("#tomada4").val() != "") {
			url_final += $("#tomada4").val();
			url(url_final);
		}
	});
	
	$("#tomada5").on("change", function() {
		if($("#tomada5").val() != "") {
			url_final += $("#tomada5").val();
			url(url_final);
		}
	});
	
	function url(a) {
		console.log(a);
	}
	
	$("#btEnviar").on("click", function() {
		$.ajax({
			  type: 'GET'
			  ,url: url_final,
			  //,dataType : 'html',
			  beforeSend: function(){
				if(typeof(url_final) !== undefined && url_final.length == 24){
					
				} else {
					console.log(url_final);
					console.log("TESTE");
					return false;
				}
		      },
			  success: function(response){
				  console.log(response);
			    preventDefault();
			  },
			  error: function(error, er){
			   // console.log(error);
			  }
			});
	});
	
	

	
});