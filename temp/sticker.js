$(document).ready(function () {
	// Слайдер наклеек
	let active_slider = 0
	let slider_step = 0
	let one_step_slider = $('.sticker__slider').width() / ($('.sticker__wrap').length - 1)
	let current_transform_sticker = 0
	let slider_block_width =  $('.sticker__wrap').width() * ($('.sticker__card').length - 2)
	function sliderNext() {
		if (current_transform_sticker >= slider_block_width) {
			return false
		}
		current_transform_sticker = current_transform_sticker + $('.sticker__wrap').width()
		$('.sticker__block').css('transform','translateX(-' + current_transform_sticker + 'px)')
		slider_step = slider_step + one_step_slider
		$('.sticker__slider__step').css('transform','translateX(' + slider_step + 'px)')
	}
	function sliderPrev() {
		if (current_transform_sticker == 0) {
			return false
		}
		current_transform_sticker = current_transform_sticker - $('.sticker__wrap').width()
		$('.sticker__block').css('transform','translateX(-' + current_transform_sticker + 'px)')
		slider_step = slider_step - one_step_slider
		$('.sticker__slider__step').css('transform','translateX(' + slider_step + 'px)')
	}
	function listenMove (){
		$('.sticker__block').on('touchstart',function (e) {
			event = e
		})
		$('.sticker__block').on('touchmove',function (e) {
		if (event.touches[0].pageX - e.touches[0].pageX > 30) {
			sliderNext()
			$('.sticker__block').off()
			setTimeout(listenMove,500)
		}
		if (event.touches[0].pageX - e.touches[0].pageX < -30) {
			sliderPrev()
			$('.sticker__block').off()
			setTimeout(listenMove,500)
		}
		})
	}
	listenMove ()
})