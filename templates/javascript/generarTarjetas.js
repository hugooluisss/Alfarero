$(document).ready(function(){
	$("img.winTarjeta").click(function(){
		console.log($("#selTipo").val());
		$(".imprimir").hide();
		$(".ecard").hide();
		if ($("#selTipo").val() == "imprimir"){
			$("#imgEncabezado").css({'transform' : 'rotate(180deg)'});
			$(".imprimir").show();
			
			$("#txtNombreDe").removeAttr("required");
			$("#txtEmailDe").removeAttr("required");
			$("#txtNombrePara").removeAttr("required");
			$("#txtEmailPara").removeAttr("required");
			
			$("#txtNombreParaImp").attr("required", true);
			$("#txtEmailParaImp").attr("required", true);
		}else{
			$("#imgEncabezado").css({'transform' : ''});
			$(".ecard").show();
			$("#txtNombrePara").attr("required", true);
			$("#txtEmailPara").attr("required", true);
			$("#txtNombreDe").attr("required", true);
			$("#txtEmailDe").attr("required", true);
			
			$("#txtNombreParaImp").removeAttr("required");
			$("#txtEmailParaImp").removeAttr("required");
			
		}

		$("#imgEncabezado").attr("src", $(this).attr("src"));
	});
	
	$("#frmSendTarjeta").submit(function(event){
		$.post("ctarjetas", {
			"action": "enviarCorreo",
			"correoOrigen": $("#txtEmailDe").val(),
			"nombreOrigen": $("#txtNombreDe").val(),
			"correoDestino": ($("#selTipo").val() == "imprimir")?$("#txtEmailParaImp").val():$("#txtEmailPara").val(),
			"nombreDestino": ($("#selTipo").val() == "imprimir")?$("#txtNombreParaImp").val():$("#txtNombrePara").val(),
			"encabezado": $("#imgEncabezado").attr("src"),
			"pie": $("#imgPie").attr("src"),
			"tipo": $("#selTipo").val()
		}, function(resp){
			alert("Muchas gracias por su donación");
			location.href = "home";
		}, "json");
		
		event.stopPropagation();
		return false;
	});
});