


$(document).ready(function(){
	// Наведение на пункт меню
	setTimeout(() => {
		$('*').css('pointer-events','auto')
	},2500)
	$('.nav__button').hover(function () {
		$('#logo').addClass('logo_animGray')
		$('#name').addClass('logo_animGray')
	},function () {
		$('#logo').removeClass('logo_animGray')
		$('#name').removeClass('logo_animGray')
	})
	$('#user').mouseenter(function () {
		$('#authorization__window').addClass('authorization__window_active')
		$('#user').css('border-bottom-left-radius','0px')
		$('#user').css('border-bottom-right-radius','0px')
	})
	$('#authorization__window').mouseleave(function () {
		$('#authorization__window').removeClass('authorization__window_active')
		$('#user').css('border-bottom-left-radius','10px')
		$('#user').css('border-bottom-right-radius','10px')
	})
	$('#phone').mouseenter(function () {
		$('#authorization__window').removeClass('authorization__window_active')
		$('#user').css('border-bottom-left-radius','10px')
		$('#user').css('border-bottom-right-radius','10px')
	})
	$('.icons').mouseleave(function () {
		$('#authorization__window').removeClass('authorization__window_active')
		$('#user').css('border-bottom-left-radius','10px')
		$('#user').css('border-bottom-right-radius','10px')
	})

	// Затемнение цветка при наведение на нижние пункты меню
	$('.nav__button').hover(function () {
		$('#bg_img').css('fill','#e7e7e7')
	},function () {
		$('#bg_img').css('fill','#f65e56')
	})


	// Паралакс для цветка
	let paralaxMultiple = 5;
	let window_width = $(document).width()
	let rotate = 0
	setTimeout(() => {
		$('html').on('mousemove',function (e) {
			rotate = (e.clientX - window_width / 2) * 2 / window_width * paralaxMultiple
			$('#bg_img').css('transform', 'rotate(' + rotate + 'deg)')
		})
		$('#bg_img').css('animation','none')
		$('#bg_img').css('fill','#f65e56')
		$('#bg_img').css('transition','transform .1s ease, fill 1s')
	},3000)
})