$(document).ready(function () {
	$('#menu__main').on('click',function () {
		if ($('.mob__menu__main').hasClass('mob__menu__main_active')) {
			$('.mob__menu__main').removeClass('mob__menu__main_active')
		} else {
			$('.mob__menu__main').addClass('mob__menu__main_active')
			$('.mob__menu__search__block').removeClass('mob__menu__search__block_active')
		}
	})
	$('#search_btn').on('click',function () {
		if ($('.mob__menu__search__block').hasClass('mob__menu__search__block_active')) {
			$('.mob__menu__search__block').removeClass('mob__menu__search__block_active')
		} else{
			$('.mob__menu__search__block').addClass('mob__menu__search__block_active')
			$('.mob__menu__main').removeClass('mob__menu__main_active')
		}
	})
	if ($(window).width() <= 430) {
		$('.footer__last').css('padding-bottom',($('.mob__menu').height() + 20) + 'px')
	}
})