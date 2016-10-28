$(document).ready(function()
{
	$('.table').on('click', '.btn-message-deletar', function(event)
	{
		event.preventDefault();

		var linkUrl = $(this).attr("href");

		swal({
			title: "Você tem certeza?",
			text: "Você não será capaz de recuperar esse registro!",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Sim, excluí-lo!",
			cancelButtonText: "Não, cancelar!",
			closeOnConfirm: false,
		   	closeOnCancel: true
		},
		function()
		{
			window.location.assign(linkUrl);
		});
	});
});

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
$(document).ready(function() {
	$('.dataTime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'DD/MM/YYYY h:mm A'
        }
    });
});

$(document).ready(function() {
	$('.dateTimePicker').datetimepicker({
  		format:'Y-m-d H:i:s'		
	});
	$.datetimepicker.setLocale('pt-BR');
});

$(document).ready(function() {
    $('#calendar').fullCalendar({
        googleCalendarApiKey: 'AIzaSyAG8GBa_YbY7CyFw_PO8aCaOj-FMy9xCRw',
      	weekends: true,
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: false,
		eventLimit: true, 
		locale: 'pt-br',
		events: {
            googleCalendarId: '91bjq7tn46vcic7o5ptubqn4ok@group.calendar.google.com'
        }
    });
});
$(document).ready(function(){
	$('input').iCheck({
		checkboxClass: 'icheckbox_polaris',
		radioClass: 'iradio_polaris',
		increaseArea: '-10%'
	});
});
$(document).ready(function(){
	$('.maxLength').maxlength({
		alwaysShow: true
	});
});
$(document).ready(function(){
	$('select').select2();
});
//# sourceMappingURL=app.js.map
