TUsuario = function(){
	var self = this;
	
	this.login = function(datos){
		if (datos.fn.before !== undefined)
			datos.fn.before();
			
		$.post('clogin', {
			"usuario": datos.usuario,
			"pass": datos.pass,
			"action": "login"
		}, function(data){
			if (datos.fn.after != undefined)
				datos.fn.after(data);
				
			if (data.band == false)
				console.log("Los datos del usuario no son válidos");
		}, "json");
	}
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cusuarios', {
				"id": datos.id,
				"tipo": datos.tipo,
				"nombre": datos.nombre,
				"correo": datos.correo, 
				"pass": datos.pass,
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
		
		$.post('cusuarios', {
			"usuario": datos.id,
			"action": "del"
		}, function(data){
			if (datos.fn.after != undefined)
				datos.fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar al usuario");
			}
		}, "json");
	};
};