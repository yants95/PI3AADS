$(document).ready(function(){

	var base_url = "http://10.0.0.2/05/";

	$("#EnviarCincoPrimeiros").on("click", function() {
		enviarDadosParaAPI(
			base_url,
			"Primeiro Horario.",
			$.trim($("#pHorario1").val()),
			$.trim($("#pPotencia1").val()),
			$.trim($("#pHorario2").val()),
			$.trim($("#pPotencia2").val()),
			$.trim($("#pHorario3").val()),
			$.trim($("#pPotencia3").val()),
			$.trim($("#pHorario4").val()),
			$.trim($("#pPotencia4").val()),
			$.trim($("#pHorario5").val()),
			$.trim($("#pPotencia5").val())
		);

	});

});


/*
Funcão para validar valores passado nos inputs
enviarDadosParaAPI(params..., mensagem)
*/
function enviarDadosParaAPI(base_url, mensagem, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10) {
	if (p1 && p2 && p3 && p4 && p5 && p6 && p7 && p8 && p9 && p10) {
		console.log("ok");
	} else {
		alert(`Preenchar todos os campos para o ${mensagem}`);
	}
}
