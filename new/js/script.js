


$(document).ready(function(){
	// Настройка Анимаций каталога
	let items_on_row = Math.floor(100 / $('.main__catalog__item__wrap').css('flex-basis').replace('%',''))
	let item_absolute_pos = 0

	function getNumItem (index,items_on_row) {
		let index_wrap = index
		while (true) {
			if (index_wrap <= items_on_row) {
				return index_wrap
			}
			index_wrap = index_wrap - items_on_row
		}
	}


	setTimeout(function () {
		for (let i = 0; i < $('.main__catalog__item').length;i++) {
			let img_width = $('.main__catalog__item img').eq(i).width()
			let img_proc = $('.main__catalog__item').width() / 10
			if (($('.main__catalog__item').eq(i).width() - img_width) < img_proc) {
				$('.main__catalog__item img').eq(i).css('width','100%')
				$('.main__catalog__item img').eq(i).css('height','100%')
			}
		}
	},150)
	$('.main__catalog__item__wrap').on('click',function () {
		item_absolute_pos = Math.ceil(($(this).index() + 1) / items_on_row) * items_on_row
		if ($(this).hasClass('main__catalog__item_active')) {
			$(this).removeClass('main__catalog__item_active')
			let num_item = getNumItem($(this).index() + 1,items_on_row)
			let index = 0
			if (num_item == 1) {
				$('.main__catalog__item__wrap').eq($(this).index() + 3).css('transition-delay','0.11s')
				$('.main__catalog__item__wrap').css('margin-left','0')
			}
			if (num_item == 2) {
				$('.main__catalog__item__wrap').eq($(this).index() + 2).css('transition-delay','0.11s')
				$('.main__catalog__item__wrap').css('margin-left','0')
			}
			if (num_item == 3) {
				$('.main__catalog__item__wrap').css('margin-left','0')
			}
			if (num_item == 4) {
				index = $(this).index()
				$('.main__catalog__item__wrap').eq($(this).index() - 1).css('transition-delay','0.11s')
				$('.main__catalog__item__wrap').eq($(this).index() - 2).css('transition-delay','0.11s')
				$('.main__catalog__item__wrap').eq($(this).index() - 3).css('transition-delay','0.11s')
				$('.main__catalog__item__wrap').css('margin-left','0')
				setTimeout(function () {
					$('.main__catalog__item__wrap').eq(index - 1).css('transition-delay','0s')
					$('.main__catalog__item__wrap').eq(index - 2).css('transition-delay','0s')
					$('.main__catalog__item__wrap').eq(index - 3).css('transition-delay','0s')
				},10)
			}
		} else {
			$('.main__catalog__item__wrap').removeClass('main__catalog__item_active')
			$(this).addClass('main__catalog__item_active')	
			let num_item = getNumItem($(this).index() + 1,items_on_row)
			let index = 0
			if (num_item == 1) {
				index = $(this).index()
				$('.main__catalog__item__wrap').css('margin-left','0')
				$('.main__catalog__item__wrap').eq($(this).index() + 2).css('margin-left','-12.5%')
				$('.main__catalog__item__wrap').eq($(this).index() + 3).css('margin-left','-12.5%')
				$('.main__catalog__item__wrap').eq($(this).index() + 3).css('transition-delay','0.0999s')
				setTimeout (function () {
					$('.main__catalog__item__wrap').css('transition-delay','0s')
				},10)
			}
			if (num_item == 2) {
				index = $(this).index()
				$('.main__catalog__item__wrap').css('margin-left','0')
				$('.main__catalog__item__wrap').eq($(this).index()).css('margin-left','-12.5%')
				$('.main__catalog__item__wrap').eq($(this).index() + 2).css('margin-left','-12.5%')
				$('.main__catalog__item__wrap').eq($(this).index() + 2).css('transition-delay','0.0999s')
				setTimeout (function () {
					$('.main__catalog__item__wrap').css('transition-delay','0s')
				},10)
			}
			if (num_item == 3) {
				index = $(this).index()
				$('.main__catalog__item__wrap').css('margin-left','0')
				$('.main__catalog__item__wrap').eq($(this).index() - 1).css('margin-left','-12.5%')
				$('.main__catalog__item__wrap').eq($(this).index() + 1).css('margin-left','0')
				$('.main__catalog__item__wrap').eq($(this).index()).css('margin-left','12.5%')
			}
			if (num_item == 4) {
				index = $(this).index()
				$('.main__catalog__item__wrap').css('margin-left','0')
				$('.main__catalog__item__wrap').eq($(this).index() - 2).css('margin-left','-12.5%')
				$('.main__catalog__item__wrap').eq($(this).index() - 1).css('margin-left','-12.5%')
				setTimeout (function () {
					$('.main__catalog__item__wrap').eq(index).css('margin-left','25%')
				},1)		
			}


			if (($(this).index() + 1) == item_absolute_pos) {
				return false
			}
		}
	})
	$('.main__catalog__item__head').on('click',function (e) {
		if (!$(this).parents('.main__catalog__item__wrap').hasClass('main__catalog__item_active')) {
			e.preventDefault()
		}
	})
	
	



})

