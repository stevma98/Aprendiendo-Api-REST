$(function(){

	console.log("funcionando");

		$('#prueba').submit(function(e){
				e.preventDefault();
		const data = {
			nombre: $('#nombre').val(),
			apellido: $('#apellido').val(),
			cedula: $('#cedula').val(),
		};
		console.log(data);
	/*
		$.post('insertar.php',data,function(response){
			console.log(response);
		});
*/
		$.get('llamar.php',function(response){
			const data = JSON.parse(response);

console.log(data);
			$.post('insertar.php',data,function(response){
					console.log(response);
			});

			

		});

});

});