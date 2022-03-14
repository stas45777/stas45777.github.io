


$(document).ready(function(){
	// Настройка высоты главного блока
	let opacity_perc = 0.4
	let translateY = 0
	setTimeout(function () {
		for (let i = 0; i < $('.main__catalog__item').length;i++) {
			let img_width = $('.main__catalog__item img').eq(i).width()
			let img_proc = $('.main__catalog__item').width() / 10
			if (($('.main__catalog__item').eq(i).width() - img_width) < img_proc) {
				$('.main__catalog__item img').eq(i).css('width','100%')
				$('.main__catalog__item img').eq(i).css('height','100%')
			}
		}
	},100)
	function checkOpacity () {
		for (let i = 0; i < $('.product__galery__item').length;i++) {
			if ($('.product__galery__item').eq(i).hasClass('product__galery__item_active')) {
				translateY = 0
				$('.product__galery').css('transform','translateY(-' + translateY + 'px)')
				if (i != 0) {
					translateY = (($('.product__galery__item').height() * (i) - $('.product__galery__item').height() * 0.2))
					$('.product__galery').css('transform','translateY(-' + translateY + 'px)')
				}
				$('.product__galery__item').css('opacity','0')
				$('.product__galery__item').eq(i+1).css('opacity','0.4')
				$('.product__galery__item').eq(i+2).css('opacity','0.2')
				$('.product__view img').attr('src',$('.product__galery__item_active img').attr('src'))
				if (i != 0) {
					$('.product__galery__item').eq(i-1).css('opacity','0.4')
				}
			}
		}
	}
	$('.product__galery__item').on('click',function() {
		$('.product__galery__item').removeClass('product__galery__item_active')
		$(this).addClass('product__galery__item_active')
		checkOpacity ()
	})
	$('.product__galery__item').eq(0).addClass('product__galery__item_active')
	checkOpacity ()

	function checkSize() {
		$('.product__cost__btn').removeClass('product__cost_active')
		$(this).addClass('product__cost_active')
	}
	$('.product__cost__btn').on('click',checkSize)
	if ($(window).width() > 435) {
		$('.product__block').height($('.product__info').outerHeight())

	} else {
		$(window).on('scroll',function () {
			if ($(window).scrollTop() >= 50) {
				$('.mob__eff').addClass('mob__eff_active')
				$('.product__mob').addClass('product__mob_noactive')
			} else {
				$('.mob__eff').removeClass('mob__eff_active')
				$('.product__mob').removeClass('product__mob_noactive')
			}
		})
	}
	if ($(window).scrollTop() >= 50) {
		$('.mob__eff').addClass('mob__eff_active')
		$('.product__mob').addClass('product__mob_noactive')
	}
	$('.product__mob').on('click',function () {
		$(window).scrollTop(75)
	})
})

