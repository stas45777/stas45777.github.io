


$(document).ready(function(){
	// Настройка высоты главного блока
	for (let i = 0; i < $('.main__catalog__item').length;i++) {
		let img_width = $('.main__catalog__item img').eq(i).width()
		let img_proc = $('.main__catalog__item').width() / 10
		if (($('.main__catalog__item').eq(i).width() - img_width) < img_proc) {
			$('.main__catalog__item img').eq(i).css('width','100%')
			$('.main__catalog__item img').eq(i).css('height','100%')
		}
	}
	$('.main__catalog__item__wrap').on('click',function () {
		if ($(this).hasClass('main__catalog__item_active')) {
			$(this).removeClass('main__catalog__item_active')
		} else {
			$('.main__catalog__item__wrap').removeClass('main__catalog__item_active')
			$(this).addClass('main__catalog__item_active')	
		}
	})
	
})

