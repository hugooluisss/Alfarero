$(document).ready(function(){
	$(".mi-carrito").find("[action=eliminar]").click(function(){
		if (confirm("¿Seguro?")){
			var orden = new TOrden;
			orden.delMov({
				concepto: $(this).attr("concepto"),
				fn: {
					before: function(){
						$(this).prop("disabled", true);
					},
					after: function(resp){
						$(this).prop("disabled", false);
						if (resp.band)
							location.reload(true);
					}
				}
			});
		}
	});
});