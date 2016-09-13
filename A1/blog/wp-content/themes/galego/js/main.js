$(document).ready(function () {
	linkInterno = $('.navbar-nav a[href^="#"]');
	linkInterno.on('click', function (e) {
		e.preventDefault();
		var href = $(this).attr('href');
		$('html, body').animate({scrollTop: $(href).offset().top - 50}, 'slow');
	});

	var fixmeTop = $('#menu').offset().top;
	$(window).scroll(function () {
		var currentScroll = $(window).scrollTop();
		if (currentScroll >= fixmeTop) {
			$('#menu').attr('class', 'navbar navbar-default navbar-fixed-top');
		} else {
			$('#menu').attr('class', 'navbar navbar-default');
		}
	});

	$("#form-contactanos").on("submit", function (event) {
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function (data) {
				alert('ok');
			}, error: function (request, error) {
				
			},
        });
	});
	/*comentarios*/
	$('.form-comment').hide();
	$('#view-comment').click(function(){
		$('.form-comment').show();
	});
	/*comentarios*/

});