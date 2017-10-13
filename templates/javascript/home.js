$(document).ready(function(){
	$(".add-to-cart").click(function(){
		var btn = $(this);
		$("#winProducto").attr("datos", btn.attr("datos"));
	});
	
	$("#winProducto").on('show.bs.modal', function(e){
		var producto = jQuery.parseJSON($("#winProducto").attr("datos"));
		console.log(producto);
		var win = $("#winProducto");
		$.each(producto, function(campo, valor){
			win.find("[campo=" + campo + "]").text(valor);
		});
		
		win.find(".conceptos").html("");
		$.each(producto.conceptos, function(i, el){
			win.find(".conceptos").append('<div class="wrap-modal-price row"><div class="quantity-product col-md-3"><input type="text" placeholder="Cantidad" concepto="' + el.idConcepto + '"></div><div class="price-product">' + el.descripcion + ' Q' + el.precio + '</div></div>');
		});
		
	});
});