$(document).ready(function(){
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			selCategoria: "required",
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TProducto;
			obj.add({
				id: $("#id").val(), 
				nombre: $("#txtNombre").val(), 
				descripcion: $("#txtDescripcion").val(),
				categoria: $("#selCategoria").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			});
        }

    });
    
	function getLista(){
		$.get("listaProductos", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TProducto;
					obj.del({
						id: $(this).attr("identificador"), 
						fn: {
							after: function(data){
								getLista();
							}
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idProducto);
				$("#txtNombre").val(el.nombre);
				$("#txtDescripcion").val(el.descripcion);
				$("#selCategoria").val(el.idCategoria);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=upload]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				$("#winImagenes").attr("producto", el.idProducto);
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
	
	
	$('#winImagenes').on('show.bs.modal', function(e){
		$("#frmImagen").prop("action", "?mod=cproductos&action=uploadImagen&id=" + $('#winImagenes').attr("producto"));
		
		getListaImagenes($('#winImagenes').attr("producto"));
	});
	
	$("#winImagenes").find("form").fileupload({
		// This function is called when a file is added to the queue
		add: function (e, data) {
	    	
		
			// Automatically upload the file once it is added to the queue
			var jqXHR = data.submit();
		},
		progress: function(e, data){
			var progress = parseInt(data.loaded / data.total * 100, 10);
			
			if(progress == 100){
				//data.context.removeClass('working');
				//getImagenes($("#winUploadImagen").find("form").find("#dispositivo").val());
			}
		},
		fail: function(){
			alert("Ocurrió un problema en el servidor, contacta al administrador del sistema");
			
			console.log("Error en el servidor al subir el archivo, checa permisos de la carpeta repositorio");
		}, done: function(e, data){
			var result = jQuery.parseJSON(data.result);
			
			if (result.band){
				getListaImagenes($('#winImagenes').attr("producto"));
			}else
				alert("No se pudo subir");
		}
	});
	
	function getListaImagenes(producto){
		$.post("listaImagenes", {
			"producto": producto
		}, function(resp){
			$(".lstImagenes").html(resp);
			
			$(".lstImagenes").find("img").click(function(){
				var img = $(this);
				if (confirm("¿Seguro de querer eliminar?"))
					$.post("cproductos", {
						"imagen": img.attr("ruta"),
						"action": "eliminarImagen"
					}, function(resp){
						if (resp.band)
							getListaImagenes($('#winImagenes').attr("producto"));
						else
							alert("No se pudo eliminar la imagen");
					}, "json");
			});
		});
	}
});