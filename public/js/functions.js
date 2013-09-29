$(document).ready(function() {

	$('.faq2, .faq3, .faq4').hide();
	$('.faq-1').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq1').show();
		$('.faq-1').addClass('active');
	});
	$('.faq-2').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq2').show().addClass('active');
		$('.faq-2').addClass('active');
	});
	$('.faq-3').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq3').show().addClass('active');
		$('.faq-3').addClass('active');
	});
	$('.faq-4').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq4').show().addClass('active');
		$('.faq-4').addClass('active');
	});




	$('a#contact-us').click(function(){
		$('html, body').animate({
			scrollTop: $("#contact h2").offset().top
		}, 500);
	});
});