


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

	// Всплывающее окошко для мобильного футера
	let window_offset_y = 0
	let window_offset_x = 0
	function openWindow() {
		window_offset_y = $(this).eq(0).offset()['top'] + 1
		window_offset_x = $(this).eq(0).offset()['left'] + 1
		console.log(window_offset_x)
		console.log(window_offset_y)
		//console.log('translate(-' + window_offset_x + 'px;' + window_offset_y + 'px)')
		$(this).children('.footer__window').css('transform','translate(-' + window_offset_x + 'px,-' + window_offset_y + 'px)')
		$(this).children('.footer__window').css('width','calc(100vw + 1px)')
		$(this).children('.footer__window').css('height','calc(100vh + 1px)')
		$(this).children('.footer__window').css('left','0')
		$(this).children('.footer__window').css('top','0')
		$(this).children('.footer__window').css('opacity','1')
		$(this).children('.footer__window').css('visibility','visible')
		$('.footer__mob__item').off()
	} 
	function closeWindow() {
		$('.footer__window').css('transform','none')
		$('.footer__window').css('width','0')
		$('.footer__window').css('height','0')
		$('.footer__window').css('left','50%')
		$('.footer__window').css('top','50%')
		$('.footer__window').css('opacity','0')
		$('.footer__window').css('visibility','hidden')
		setTimeout(function () {
			$('.footer__mob__item').on('click',openWindow)
		},1000)
	}
	$('.footer__mob__item').on('click',openWindow)
	$('.footer__window__close').on('click',closeWindow)
	// Отключение скролла
	$(document).on('scroll',function (e) {
		e.preventDefault()
	})
})