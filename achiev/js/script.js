


$(document).ready(function(){
	//$(document).scrollTop('0')
	let video = document.getElementById("video")
	let play = $('#play')
	let time_lapse_width = Math.ceil($('#time').width()) - $('#time_button').outerWidth()
	let current_time = 0
	let progress_per = 0
	let move_time_lapse = 0
	let start_video = false
	let video_duration = false
	video.volume = 0.1
	video.addEventListener('canplaythrough',function () {
		video_duration = video.duration
	})
	function playPause() {
		if (video.paused) {
			video.play()
		}
		else{
			video.pause()
		}
	}
	play.on('click',playPause)
	function muteSwitcher () {
		if (video.volume == 0) {
			video.volume = 0.1
		} else {
			video.volume = 0
		}
	}
	$("#mute").on('click',muteSwitcher)



	function checkTimeLapse () {
		current_time = video.currentTime
		progress_per = (current_time / video_duration).toFixed(4)
		$('#time_button').css('left',progress_per * time_lapse_width + 'px')
	}
	let check_interval = setInterval(checkTimeLapse,500)


	function moveToTime (e) {
		$('#time_button').css('left',e.pageX - $('#time').offset()['left'] - $('#time_button').width())
 		if ($('#time_button').position()['left'] < 0) {
 			$('#time_button').css('left','0px')
 		}
 		if ($('#time_button').position()['left'] > $('#time').width()-30) {
 			$('#time_button').css('left',$('#time').width() - 25 + 'px')
 		}
 		move_time_lapse = ($('#time_button').position()['left'] / time_lapse_width)
 		video.currentTime = Math.round((video_duration * move_time_lapse))
	}
	// Функция перемещения таймлапса
	$('#time').on('click',moveToTime)
 $('#time_button').on('mousedown',function () {
 	clearInterval(check_interval)
 	video.pause()
 	start_video = true
 	$('#time').on('mousemove',moveToTime)
 })
 $(document).on('mouseup',function () {
 	$('#time').off()
 	$('#time').on('click',moveToTime)
 	if (start_video) {
 		video.play()
 	}
 	start_video = false
 	check_interval = setInterval(checkTimeLapse,500)
 })

 // Работа со скроллом

 let scroll_disabled = false
 let scroll_top = 0


 function listenScroll() {
 	if (scroll_top < $(document).scrollTop()) {
 		scroll_top = scroll_top + $(window).height()
 		conole.log(scroll_top)
 	}
 }
// $(document).on('wheel',function (e) {
// 	if (e.originalEvent.wheelDelta >= 0) {
//		console.log('Вверх');
//		scrollDocumentTop()
//	} else {
//		console.log('Вниз');
//		scrollDocumentBottom()
//
//	}
//	e.originalEvent.wheelDelta = false
// })
 function scrollDocumentBottom() {
 	console.log(scroll_top)
 	$('body').css('bottom',scroll_top + $(window).height())
 	scroll_top = scroll_top + $(window).height()
 }
 function scrollDocumentTop() {
 	console.log(scroll_top)
 	if (scroll_top == 0) {
 		return false
 	}
 	$('body').css('bottom',scroll_top - $(window).height())
 	scroll_top = scroll_top - $(window).height()
 }



 // Установка одинакового отступа для achiev__card
 $('.achiev__card').height($('.achiev__card').width())
 if ($(window).width() > 650) {
 	let pos_1 = $('.achiev__card__wrap').eq(0).offset()['left']
 	let pos_2 = $('.achiev__card__wrap').eq(1).offset()['left']
 	let card_width = $('.achiev__card__wrap').eq(0).width()
 	let result_margin = pos_2 - pos_1 - card_width
 	$('.achiev__card__wrap').css('margin-bottom',Math.ceil(result_margin) + 'px')
 }

 // Показ всплывающего окна
 function showWindow() {
 	$('.window').addClass('window_active')
 	$('body').css('overflow-y','hidden')
 } 
 function hideWindow() {
 	$('.window').removeClass('window_active')
 	$('body').css('overflow-y','scroll')
 } 
 $('.window__back').on('click',hideWindow)
 $('.window__bg').on('click',hideWindow)
 $('.show_window').on('click',showWindow)
 // Настройка хедера
 $('.button__menu_active').removeClass('button__menu_active')
 $('.button__menu').eq(2).addClass('button__menu_active')

 $('.button__menu').on('mouseenter',function (e) {
		if ($(this).hasClass('button__menu_active') == true) {
			return false
		}
		$('.button__menu_active').addClass('button__menu_active_grad')
		$('.button__menu_active').css('color','#585858')
		$('.button__menu_active .button__menu_regular').css('opacity','1')
		$('.button__menu_active .button__menu_bold').css('opacity','0')
	})
	$('.button__menu').on('mouseleave',function () {
		$('.button__menu_active').removeClass('button__menu_active_grad')
		$('.button__menu_active').css('color','#fff')
		$('.button__menu_active .button__menu_regular').css('opacity','0')
		$('.button__menu_active .button__menu_bold').css('opacity','1')
	})
	// Настройка высоты карточки
	


	// Слайдер на мобилках
	let active_card = 0
	let cards_left = 0
	let cards_len = $('.user__card').length - 1
	let slider_stop = false
	let slider_stage_width = $('.user__slider__stage').width()
	let stage_step = ($('.user__slider').width() / cards_len) - (slider_stage_width/cards_len)
	let slider_stage_left = 0
	let slider_delay = 500
	function sliderNext () {
		if (active_card == cards_len) {
			return false
		}
		$('.user__cards').css('left',cards_left - ($('.user__card').outerWidth() + 15) + 'px')
		cards_left = cards_left - ($('.user__card').outerWidth() + 15)
		$('.user__card').eq(active_card).removeClass('user__card_active')
		active_card = active_card + 1
		$('.user__card').eq(active_card).addClass('user__card_active')
		// Переключение ползунка
		$('.user__slider__stage').css('width',stage_step + slider_stage_width + 'px')
		setTimeout(function () {
			$('.user__slider__stage').css('left',slider_stage_left + stage_step + 'px')
			slider_stage_left = slider_stage_left + stage_step
		},slider_delay)
		setTimeout(function () {
			$('.user__slider__stage').css('width',slider_stage_width + 'px')
		},slider_delay)
	}
	function sliderPrev () {
		if (active_card == 0) {
			return false
		}
		$('.user__cards').css('left',cards_left + ($('.user__card').outerWidth() + 15) + 'px')
		cards_left = cards_left + ($('.user__card').outerWidth() + 15)
		$('.user__card').eq(active_card).removeClass('user__card_active')
		active_card = active_card - 1
		$('.user__card').eq(active_card).addClass('user__card_active')
		// Переключение ползунка
		$('.user__slider__stage').css('left',slider_stage_left - stage_step + 'px')
		$('.user__slider__stage').css('width',stage_step + slider_stage_width + 'px')
		setTimeout(function () {
			$('.user__slider__stage').css('width',slider_stage_width + 'px')
			slider_stage_left = slider_stage_left - stage_step
		},slider_delay)

	}
	let touch_start = false
	$('.user__card').on('touchstart',function (e) {
		touch_start = e
	})
	$('.user__card').on('touchend',function () {
		setTimeout(function () {
			slider_stop = false
		},500)
	})
	$('.user__card').on('touchmove',function (e) {
		if (slider_stop) {
			return false
		}
		if ( (touch_start.touches[0].pageX - e.touches[0].pageX) >= 15 ) {
			slider_stop = true
			console.log('Влево')
			sliderNext ()
		}
		if ( (e.touches[0].pageX - touch_start.touches[0].pageX ) >= 15 ) {
			slider_stop = true
			console.log('Вправо')
			sliderPrev ()
		}
	})
	
})
