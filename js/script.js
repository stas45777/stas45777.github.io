


$(document).ready(function(){
	// Настройка высоты главного блока
	if ($(window).width()>435) {
		let window_height = $(window).height()
		$('.main').height(window_height - $('.header').outerHeight())
	}
})

