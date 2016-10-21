$(document).ready(function() {
	$('.dataTime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'DD/MM/YYYY h:mm A'
        }
    });
});
