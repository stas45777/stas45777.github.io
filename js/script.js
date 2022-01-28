


$(document).ready(function(){
	// Настройка высоты главного блока
	let window_height = $(window).height()
	$('.main').height(window_height - $('.header').outerHeight())
})

