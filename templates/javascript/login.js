$(document).ready(function(){
	$("form:not(.filter) :input:visible:enabled:first").focus();
	
	$("#frmLogin").validate({
		debug: true,
		rules: {
			txtUsuario: "required",
			txtPass: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TUsuario;
			
			$("[type=submit]").prop("disabled", true);
			
			obj.login({
				usuario: $("#txtUsuario").val(), 
				pass: $("#txtPass").val(), 
				fn: {
					after: function(datos){
						$("#frmLogin").find("[type=submit]").prop("disabled", false);
						if (datos.band)
							location.href = "panelPrincipal";
						else{
							alert("Los datos son incorrectos, corrigelos y vuelve a intentarlo");
						}
					}
				}
			});
        }

    });
	
});