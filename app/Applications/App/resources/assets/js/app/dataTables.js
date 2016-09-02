$(document).ready(function() {
	$('.table').DataTable({
		"responsive": true,
		"paging": false,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": false,
		"autoWidth": false,
		"language": {
			"decimal": ",",
			"thousands": ".",
			"search": "Procurar nesta página:",
		}
	});
});