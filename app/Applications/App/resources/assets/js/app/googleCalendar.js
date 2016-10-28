$(document).ready(function() {
    $('#calendar').fullCalendar({
        googleCalendarApiKey: 'google-api-calendar@vccon-145612.iam.gserviceaccount.com',
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
            googleCalendarId: '91bjq7tn46vcic7o5ptubqn4ok@group.calendar.google.com',
            className: 'gcal-event'
        }
    });
});