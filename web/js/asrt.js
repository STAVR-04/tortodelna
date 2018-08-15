$(function () {
	 $('#sales-infoBtn--one').click(function () {
		$('.asrt_sales__info.one').toggleClass('active');
	});
});


$(function () {
	$('#sales-infoBtn--two').click(function () {
		$('.asrt_sales__info.one').removeClass('active');
	});
});


$(function () {
	$('#sales-infoBtn--two').click(function () {
		$('.asrt_sales__info.two').toggleClass('active');
	});
});


$(function () {
	$('#sales-infoBtn--one').click(function () {
		$('.asrt_sales__info.two').removeClass('active');
	});
});
