$(document).ready(function(){
	getLista();
	
	function getLista(){
		$.get("listaOrdenes", function( data ) {
			$(".ordenes").find(".panel-body").html(data);
						
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"order": [[ 1, "desc" ]]
			});
		});
	}
});