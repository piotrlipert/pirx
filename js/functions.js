$(document).ready(function() {

	$('.faq2, .faq3, .faq4').hide();
	$('.faq-1').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq1').show();
		$('.faq-1, .faq-2, .faq-3, .faq-4').removeClass('active');
		$('.faq-1').addClass('active');
	});
	$('.faq-2').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq2').show().addClass('active');
		$('.faq-1, .faq-2, .faq-3, .faq-4').removeClass('active');
		$('.faq-2').addClass('active');
	});
	$('.faq-3').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq3').show().addClass('active');
		$('.faq-1, .faq-2, .faq-3, .faq-4').removeClass('active');
		$('.faq-3').addClass('active');
	});
	$('.faq-4').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq4').show().addClass('active');
		$('.faq-1, .faq-2, .faq-3, .faq-4').removeClass('active');
		$('.faq-4').addClass('active');
	});




	$('a#contact-us').click(function(){
		$('html, body').animate({
			scrollTop: $("#contact h2").offset().top
		}, 500);
	});



	$('.printer-1, .printer-2, .printer-3, .printer-4').hide();
	$(document).scroll(function () {	
    var y = $(this).scrollTop();
    if (y > 1150) {
        $('.printer-3').fadeIn();
    }
    if (y > 1200) {
        $('.printer-1').fadeIn();
    }
    if (y > 1250) {
        $('.printer-4').fadeIn();
    }
    if (y > 1300) {
        $('.printer-2').fadeIn();
    }
	});

});