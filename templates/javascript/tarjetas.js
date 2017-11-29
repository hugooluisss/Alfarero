$(document).ready(function(){
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("form").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
		
	function getLista(){
		$.get("listaTarjetas", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					$.post("ctarjetas", {
						"imagen": $(this).attr("src"),
						"action": "del"
					}, function(resp){
						if (resp.band)
							getLista();
						else
							alert("No se pudo eliminar");
					}, "json");
				}
			});
		});
	}
	
	
	$("form").fileupload({
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
				getLista();
				$('#panelTabs a[href="#listas"]').tab('show');
			}else
				alert("No se pudo subir");
		}
	});
});