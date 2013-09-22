$(document).ready(function() {

	$('.faq1, .faq2, .faq3, .faq4').hide();
	$('.faq-1').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq1').show().addClass('active');
	});
	$('.faq-2').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq2').show().addClass('active');
	});
	$('.faq-3').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq3').show().addClass('active');
	});
	$('.faq-4').click(function(){
		$('.faq1, .faq2, .faq3, .faq4').hide();
		$('.faq4').show().addClass('active');
	});
});