TConcepto = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cconceptos', {
				"id": datos.id,
				"descripcion": datos.descripcion,
				"producto": datos.producto,
				"precio": datos.precio, 
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
	
	this.del = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cconceptos', {
			"id": datos.id,
			"action": "del"
		}, function(data){
			if (datos.fn.after != undefined)
				datos.fn.after(data);
				
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar");
			}
		}, "json");
	};
};