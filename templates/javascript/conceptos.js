$(document).ready(function(){
	var winLista = $('#winListaConceptos');
	var winAdd = $('#winConceptos');
	
	winLista.on('show.bs.modal', function(e){
		getLista();
	});
	
	
	function getLista(){
		$.post("listaConceptos", {
			"producto": $("#producto").val()
		}, function(data) {
			winLista.find(".modal-body").html(data);
			
			winLista.find("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TConcepto;
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
			
			winLista.find("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				winAdd.find("#id").val(el.idConcepto);
				winAdd.find("#txtDescripcion").val(el.descripcion);
				winAdd.find("#txtPrecio").val(el.precio);
				winAdd.find("#producto").val(el.idProducto);
				
				$("#winConceptos").modal();
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			winLista.find("#tblDatos").DataTable({
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
	
	
	winAdd.on('show.bs.modal', function(e){
		winLista.modal("hide");
	});
	
	winAdd.on('hide.bs.modal', function(e){
		winLista.modal();
	});
	
	$("#btnAddNewConcepto").click(function(){
		$("#frmConceptos").get(0).reset();
		$("#frmConceptos").find("#id").val("");
		winAdd.modal();
	});
	
	$("#btnResetConcepto").click(function(){
		winAdd.modal("hide");
	});
	
	$("#frmConceptos").validate({
		debug: true,
		rules: {
			txtDescripcion: "required",
			txtPrecio: "required",
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TConcepto;
			obj.add({
				id: winAdd.find("#id").val(), 
				producto: winAdd.find("#producto").val(), 
				descripcion: winAdd.find("#txtDescripcion").val(),
				precio: winAdd.find("#txtPrecio").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							
							winAdd.modal("hide");
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			});
        }

    });
});