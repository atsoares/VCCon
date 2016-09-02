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
