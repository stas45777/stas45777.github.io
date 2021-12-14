$(document).ready(function() {
	$('.quest__el').on('click',function () {
		if ($(this).hasClass('quest__el_active')) {
			$('.quest__el').removeClass('quest__el_active')
		}
		else{
			$('.quest__el').removeClass('quest__el_active')
			$(this).addClass('quest__el_active')
		}
	})
	$(document).on('click',function (e){
		if (($(e.target).hasClass('quest__el')) || ($(e.target).hasClass('quest__text_med'))) {
			return false
		} else {
			$('.quest__el').removeClass('quest__el_active')
		}
	})
	
	// Слайдер инстаграмма
	function instaMove() {
		let event_insta
		let insta_transform = 0
		let insta_transform_help = 0
		$('.insta__items').on('touchstart',function (e) {
			event_insta = e
		})
		$('.insta__items').on('touchend',function (e) {
			insta_transform = insta_transform_help
		})
		$('.insta__items').on('touchmove',function (e) {
			$('.insta__items').css('transform','translateX('+ (insta_transform + ((event_insta.touches[0].pageX - e.touches[0].pageX) * -1)) + 'px)')
			insta_transform_help = (insta_transform + ((event_insta.touches[0].pageX - e.touches[0].pageX) * -1))
			if (insta_transform_help > 0){
				$('.insta__items').css('transform','translateX(0px)')
			}
			if (((insta_transform_help * -1) + $(window).width()) > $('.insta__items').width()){
				$('.insta__items').css('transform','translateX(' + (($('.insta__items').width() - $(window).width()) * -1) + 'px)')
			}
		})
	}
	instaMove()
	// Калькулятор на мобилках
	function openCalc() {
		$('.open__more').on('click',function () {
			$(this).children('.main__calc__more').addClass('main__calc__more_active')
			setTimeout(function () {
				$('.open__more').off()
				$('body').on('click',function () {
					$('.main__calc__more').removeClass('main__calc__more_active')
					$('body').off()
	
					setTimeout(openCalc,500)
				})
			},500)
		})
	}
	openCalc()
	// Появление кнопок управления справа
	$(document).on('scroll',function (e) {
		if ($(document).scrollTop() >= $(window).height()) {
			$('.desktop__static__arrow').css('opacity','1')
		} else {
			$('.desktop__static__arrow').css('opacity','0')
		}
	})
	$('.desktop__static__arrow').on('click',function () {
		$(document).scrollTop(0)
	})
})