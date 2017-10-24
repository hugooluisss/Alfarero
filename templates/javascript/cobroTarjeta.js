$(document).ready(function(){
	$("#frmTarjeta").submit(function(){
		if (bandCaptcha == false)
			return false;
		else{
			var form = $("#frmTarjeta");
			
			var orden = new TOrden;
			orden.setCliente({
				"nombre": form.find("[name=nombreapellido]").val(),
				"telefono": form.find("[name=telefono]").val(),
				"correo": form.find("[name=email]").val(),
				fn: {
					before: function(){
						$("#frmTarjeta").find("[type=submit]").prop("disabled", true);
					},
					after: function(resp){
						if (resp.band){
							$("#frmTarjeta").find("[type=submit]").prop("disabled", false);
							$(".confirmar").find("[campo]").each(function(){
								$(this).html($("#frmTarjeta").find("[name=" + $(this).attr("campo") + "]").val());
							});
							
							var cadena = $("#frmTarjeta").find("[name=numerotarjeta]").val();
							$("[campo=numerotarjeta]").html("XXXX XXXX XXXX " + cadena.substring(cadena.length - 4, cadena.length));
							mes = (form.find("[name=exmes]").val() < 10?"0":"") + form.find("[name=exmes]").val();
							$("[campo=caducidad]").html(mes + "/" + $("#frmTarjeta").find("[name=exano]").val());
							
							$(".form").hide("slow", function(){
								$(".confirmar").show("", function(){
									$("html, body").animate({
										scrollTop: 390
									}, 500);
								});
							});
							
							$("#payment-form").find("[name=ccnumber]").val(form.find("[name=numerotarjeta]").val());
							var anio = form.find("[name=exano]").val();
							anio = anio[2] + anio[3];
							mes = (form.find("[name=exmes]").val() < 10?"0":"") + form.find("[name=exmes]").val();
							
							
							$("#payment-form").find("[name=ccexp]").val(mes + "-" + anio);
							$("#payment-form").find("[name=cvv]").val(form.find("[name=cvv]").val());
							$("#payment-form").find("[name=checkname]").val(form.find("[name=nombreapellido]").val());
						}else
							alert("No se pudieron registrar tus datos... intentalo de nuevo");
					}
				}
			});
		
			return false;
		}
	});
});

var bandCaptcha = false;

var onloadCallback = function() {
	grecaptcha.render('g-recaptcha', {
		'sitekey' : '6LfGrzUUAAAAAEwsM1bfcJmUtK5OjTe7xGMo6Q5_',
		'callback' : verifyCallback
	});
	
	function verifyCallback(){
		bandCaptcha = true;
	}
};