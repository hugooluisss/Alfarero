TOrden = function(){
	var self = this;
	
	this.addMov = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cordenes', {
				"concepto": datos.concepto,
				"cantidad": datos.cantidad,
				"action": "addMovimiento"
			}, function(data){
				if (data.band == false)
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
	
	this.addMovs = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		$.post('cordenes', {
				"datos": datos.conceptos,
				"action": "addMovimientos"
			}, function(data){
				if (data.band == false)
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
	
	this.delMov = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cordenes', {
			"concepto": datos.concepto,
			"action": "del"
		}, function(data){
			if (datos.fn.after != undefined)
				datos.fn.after(data);
				
			if (data.band == false){
				alert("Ocurrió un error al eliminar");
			}
		}, "json");
	};
};