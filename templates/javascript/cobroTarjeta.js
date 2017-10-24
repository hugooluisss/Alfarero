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
		
		var form = $("#frmTarjeta");
		$("#payment-form").find("[name=ccnumber]").val(form.find("[name=numerotarjeta]").val());
		var anio = form.find("[name=exano]").val();
		anio = anio[2] + anio[3];
		$("#payment-form").find("[name=ccexp]").val(form.find("[name=exmes]").val() + anio);
		$("#payment-form").find("[name=cvv]").val(form.find("[name=cvv]").val());
		$("#payment-form").find("[name=checkname]").val(form.find("[name=nombreapellido]").val());
		return false;
	});
});