$(document).ready(function () {
	$('.button__menu').on('mouseenter',function (e) {
		if ($(this).hasClass('button__menu_active') == true) {
			return false
		}
		$('.button__menu_active').css('background','#fff')
		$('.button__menu_active').css('color','#585858')
		$('.button__menu_active').addClass('button__menu_noactive')
	})
	$('.button__menu').on('mouseleave',function () {
		$('.button__menu_active').css('background','#ff5d54')
		$('.button__menu_active').css('color','#fff')
	})
	$('.header .button__menu_regular').css('top',$('.header .button__menu').height() / 2)
	$('.header .button__menu_bold').css('top',$('.header .button__menu').height() / 2)
})