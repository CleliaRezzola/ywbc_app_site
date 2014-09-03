$(document).ready(function() {

	$('.select_type').on('click', function(e){
		e.preventDefault();
		$('.option_type').show();
	});

	$('.select_price').on('click', function(e){
		e.preventDefault();
		$('.option_price').show();
	});

	$('.select_country').on('click', function(e){
		e.preventDefault();
		$('.option_country').show();
	});

	$('.select_pairings').on('click', function(e){
		e.preventDefault();
		$('.option_pairings').show();
	});


});