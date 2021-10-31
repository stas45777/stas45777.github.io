


$(document).ready(function(){
	$('.button__menu').on('mouseenter',function (e) {
		if ($(this).hasClass('button__menu_active') == true) {
			return false
		}
		$('.button__menu_active').css('background','#fff')
		$('.button__menu_active').css('color','#585858')
	})
	$('.button__menu').on('mouseleave',function () {
		$('.button__menu_active').css('background','#ff5d54')
		$('.button__menu_active').css('color','#fff')
	})
	// Анимация появления карточек
	
	
	for (let i=0; i < $('.main__cards__card').length ;i++) {
		$('.main__cards__card').eq(i).css('animation-delay',i * 0.5 + 's')
	}

})