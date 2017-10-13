$(document).ready(function(){
	$(".add-to-cart").click(function(){
		var btn = $(this);
		$("#winProducto").attr("datos", btn.attr("datos"));
	});
	
	$("#winProducto").on('shown.bs.modal', function(e){
		var producto = jQuery.parseJSON($("#winProducto").attr("datos"));
		$.each(producto, function(campo, valor){
			$("#winProducto").find("[campo=" + campo + "]").text(valor);
		});
	});
});