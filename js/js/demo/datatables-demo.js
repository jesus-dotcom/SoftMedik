// Call the dataTables jQuery plugin
//$(document).ready(function() {
  //$('#dataTable').DataTable();
//});


$(document).ready(function () {
	$('#dataCitas').DataTable({
		"order": [[0,"desc"]],
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No hay datos registrados",
			"info": "",
			"infoEmpty": "No hay datos",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar: ",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Ultimo",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"sProcessing": "Procesando...",	
		}
	});
});

$(document).ready(function () {
	$('#dataTable').DataTable({
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No hay datos registrados",
			"info": "",
			"infoEmpty": "No hay datos",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar: ",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Ultimo",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"sProcessing": "Procesando...",	
		}
	});
});

//datatable de Gastro
$(document).ready(function () {
	$('#dataGastro').DataTable({
		"order": [[0,"desc"]],
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No hay datos registrados",
			"info": "",
			"infoEmpty": "No hay datos",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar: ",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Ultimo",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"sProcessing": "Procesando...",	
		}
	});
});

$(document).ready(function () {
	$('#dataAgenda').DataTable({
		"order": [[2,"desc"]],
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No hay datos registrados",
			"info": "",
			"infoEmpty": "No hay datos",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar: ",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Ultimo",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"sProcessing": "Procesando...",	
		}
	});
});
//datatable de Pre-Anestesica

$(document).ready(function () {
	$('#dataAnes').DataTable({
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No hay datos registrados",
			"info": "",
			"infoEmpty": "No hay datos",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar: ",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Ultimo",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"sProcessing": "Procesando...",	
		}
	});
});

//datatable de Nutrición
$(document).ready(function () {
	$('#dataNutri').DataTable({
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No hay datos registrados",
			"info": "",
			"infoEmpty": "No hay datos",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar: ",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Ultimo",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"sProcessing": "Procesando...",	
		}
	});
});

//datatable de Estudio Endoscopia Digestiva Superior
$(document).ready(function () {
	$('#dataEndo').DataTable({
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No hay datos registrados",
			"info": "",
			"infoEmpty": "No hay datos",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar: ",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Ultimo",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"sProcessing": "Procesando...",	
		}
	});
});

//datatable de Estudio Colonoscopia
$(document).ready(function () {
	$('#dataColo').DataTable({
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No hay datos registrados",
			"info": "",
			"infoEmpty": "No hay datos",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar: ",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Ultimo",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"sProcessing": "Procesando...",	
		}
	});
});

//datatable de Estudio Ecografía
$(document).ready(function () {
	$('#dataEco').DataTable({
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No hay datos registrados",
			"info": "",
			"infoEmpty": "No hay datos",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar: ",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Ultimo",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"sProcessing": "Procesando...",	
		}
	});
});



//datatable de Estudio Ecografía
$(document).ready(function () {
	$('#descargar').DataTable({
		"order": [[1,"desc"]],
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No hay datos registrados",
			"info": "",
			"infoEmpty": "No hay datos",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar: ",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Ultimo",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"sProcessing": "Procesando...",	
		}
	});
});