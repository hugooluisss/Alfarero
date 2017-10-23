$(document).ready(function(){
	$("#frmTarjeta").submit(function(){
		
		$(".confirmar").find("[campo]").each(function(){
			$(this).html($("#frmTarjeta").find("[name=" + $(this).attr("campo") + "]").val());
		});
		
		var cadena = $("#frmTarjeta").find("[name=numerotarjeta]").val();
		$("[campo=numerotarjeta]").html("XXXX XXXX XXXX " + cadena.substring(cadena.length - 4, cadena.length));
		$("[campo=fechaexpiracion]").html($("#frmTarjeta").find("[name=exmes]").val() + "/" + $("#frmTarjeta").find("[name=exano]").val());
		
		$(".form").hide("slow", function(){
			$(".confirmar").show("", function(){
				$("html, body").animate({
					scrollTop: 390
				}, 500);
			});
		});
		
		return false;
	});
});