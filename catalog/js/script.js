$(document).ready(function () {
	$('.catalog ').css('padding-bottom',($('.footer__sticker').height() + 70) + 'px')
	$('#open__catalog__menu').on('click',function () {
		$('.catalog__menu').addClass('catalog__menu_active')
	})
	$('.catalog__menu__close').on('click',function () {
		$('.catalog__menu').removeClass('catalog__menu_active')
	})
})