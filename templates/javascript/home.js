$(document).ready(function(){
	$("#btnCarrito").click(function(){
		$("#panelCarrito").toggle("slow");
	});

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
		
		$(".imgPrincipal").prop("src", producto.imagen[0]);
		
		win.find('.listaImagenes').html("");
		$.each(producto.imagen, function(i, el){
			var img = $("<img />", {
				src: el
			});
			
			img.click(function(){
				$(".imgPrincipal").prop("src", $(this).attr("src"));
			});
			
			win.find('.listaImagenes').append(img);
		});
	});
	
	$("#winProducto").on('shown.bs.modal', function(e){
		$("input:first-child").focus();
	});
	
	$("#winProducto").find(".add-to-cart").click(function(){
		var conceptos = new Array();
		$("input[concepto]").each(function(){
			var el = $(this);
			if (el.val() != ''){
				var obj = {};
				obj.idConcepto = el.attr("concepto");
				obj.cantidad = el.val();
				
				conceptos.push(obj);
			}
		});
		
		if (conceptos.length == 0){
			alert("Indica una cantidad");
			$("input:first-child").focus();
		}else{
			var obj = new TOrden;
			obj.addMovs({
				"conceptos": conceptos,
				fn: {
					before: function(){
						$("#winProducto").find(".add-to-cart").prop("disabled", true);
						$("#winProducto").find("input[concepto]").prop("disabled", true);
					},
					after: function(resp){
						$("#winProducto").find(".add-to-cart").prop("disabled", false);
						$("#winProducto").find("input[concepto]").prop("disabled", false);
						
						if (resp.band == true){
							alert("Todo fue agregado a su carrito");
							$("#winProducto").modal("hide");
							$(".totalCarrito").html("(" + resp.totalProductos + ")");
							updateCarrito();
						}else
							alert("Ocurrió un error, no se pudo agregar");
					}
				}
			});
		}
	});
	
	updateCarrito();
	function updateCarrito(){
		$("#panelCarrito").html('<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizando información...</span>');
		$.get("contenidoCarrito", function(resp){
			$("#panelCarrito").html(resp);
			
			$("#panelCarrito").find("#btnDonar").click(function(){
				
			});
		});
	}
});