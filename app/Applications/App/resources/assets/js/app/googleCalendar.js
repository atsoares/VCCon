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