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
			txtCodigo: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TSeccion;
			obj.add({
				id: $("#id").val(), 
				nombre: $("#txtNombre").val(), 
				codigo: $("#txtCodigo").val(), 
				estado: $("#selEstado").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			});
        }

    });
    
    $('#txtCodigo').jqte();
		
	function getLista(){
		$.get("listaSecciones", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TSeccion;
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
				console.log(el);
				$("#id").val(el.idSeccion);
				$("#txtNombre").val(el.nombre);
				$("#txtCodigo").jqteVal(el.codigo);
				$("#selEstado").val(el.estado);
				$('#panelTabs a[href="#add"]').tab('show');
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
});