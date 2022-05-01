


$(document).ready(function(){
	$('.main__cards__links__item').on('click',function () {
		$('.main__cards__links__item').addClass('main__cards__links__item_noactive')
		$(this).removeClass('main__cards__links__item_noactive')
		$(this).addClass('main__cards__links__item_active')
		$('.main__cards__select').addClass('main__cards__select_active')
		$('.main__level').addClass('main__level_active')
	})
	$('.main__level__item').on('click',function () {
		$('.main__level .main__level__item').removeClass('main__level__item_active')
		$(this).addClass('main__level__item_active')
		$('#current__level').text($(this).text())
	})
	let slider_len = $('.slider__change').length
	let slider_active = 0
	let star_count = 0
	$('.materials__slider__left').on('click',function () {
		slider_active = slider_active - 1
		if (slider_active == -1) {
			slider_active = slider_len - 1
		}
		$('.slider__change').removeClass('slider_active')
		$('.slider__change').addClass('slider_noactive')
		$('.slider__change').eq(slider_active).addClass('slider_active')
		star_count = $('.slider__change').eq(slider_active).attr('data-star-count')
		$('.materials__slider__stars').attr('data-star',star_count)
	})
	$('.materials__slider__right').on('click',function () {
		slider_active = slider_active + 1
		if (slider_active == slider_len) {
			slider_active = 0
		}
		$('.slider__change').removeClass('slider_active')
		$('.slider__change').addClass('slider_noactive')
		$('.slider__change').eq(slider_active).addClass('slider_active')
		star_count = $('.slider__change').eq(slider_active).attr('data-star-count')
		$('.materials__slider__stars').attr('data-star',star_count)
	})
})

