$(document).ready(function() {

	$(".modal-link").on("click", function() {

		$('.modal-overlay[data-modal="'+$(this).data('modal')+'"]').addClass("modal-overlay_visible");

	});

	$(".modal__close").on("click", function() {

		$(".modal-overlay").removeClass("modal-overlay_visible");

	});

	$(document).on("click", function(e) {
	
		if($(".modal-overlay_visible").length) {

			if(!$(e.target).closest(".modal").length && !$(e.target).closest(".modal-link").length) {

				$(".modal-overlay").removeClass("modal-overlay_visible");

			}
			
		}

	});

});

$('form input[type="submit"').click(function (e) {
	e.preventDefault();

	let form = $(e.currentTarget).closest('form').data('form');
	let path = window.location;

	if (form == 'request') {

		let name = $(e.currentTarget).closest('form').find('input[name="name"]').val();
		let phone = $(e.currentTarget).closest('form').find('input[name="phone"]').val();
		let email = $(e.currentTarget).closest('form').find('input[name="email"]').val();
		let comment = $(e.currentTarget).closest('form').find('textarea[name="comment"]').val();
		let check = $(e.currentTarget).closest('form').find('input[name="checkbox"]').is(':checked');

		$.ajax({
			url: path + '/request',
			data: {
				name: name,
				phone: phone, 
				email: email,
				comment: comment,
				check: check
			},
			type: 'POST',
			success: function(result) {
				let data = JSON.parse(result);

				if (data.success == true) {
					$(e.currentTarget).closest('form').find('span.success').html('Успешно');
					$(e.currentTarget).closest('form').find('span.error').html('');
				} else {
					$(e.currentTarget).closest('form').find('span.success').html('');
					$(e.currentTarget).closest('form').find('span.error').html(data.message);
				}
			},
			error: function() {
				console.log('Server error');
			}
		});
	}

	if (form == 'subscribe') {

		let email = $('#email_modal').val();

		$.ajax({
			url: path + '/subscribe',
			data: { email : email },
			type: 'POST',
			success: function(result) {
				let data = JSON.parse(result);

				if (data.success == true) {
					$(e.currentTarget).closest('.modal__content').find('span.success').html('Успешно');
					$(e.currentTarget).closest('.modal__content').find('span.error').html('');
				} else {
					$(e.currentTarget).closest('.modal__content').find('span.error').html(data.message);
					$(e.currentTarget).closest('.modal__content').find('span.success').html('');
				}
			},
			error: function() {
				console.log('Server error');
			}
		});
	}

})