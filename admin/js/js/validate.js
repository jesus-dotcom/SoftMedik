var nombre = document.getElementById('nombre');
var password = document.getElementById('password');
var error = document.getElementById('error');
error.style.color = 'red';
function enviarFormulario(){
	var mensajesError = [];

	if (nombre.value === null || nombre.value === ''){
		mensajesError.push('ingrese su usuario');
	}

	if (password.value === null || password.value === ''){
		mensajesError.push('ingrese su clave');
	}
	
	error.innerHTML = mensajesError.join(', ');
}