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
		eventSources: [
		{
            googleCalendarId: '91bjq7tn46vcic7o5ptubqn4ok@group.calendar.google.com',
            color: '#f39c12'
        },
        {
        	googleCalendarId: 'd19jdmatroouruokaobt98nbjg@group.calendar.google.com',
            color: '#27ae60'
        }
        ]
    });
});