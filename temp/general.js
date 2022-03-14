


$(document).ready(function(){
	// Функция обработки галочек
	function checkMark() {
		$('.mark').removeClass('mark_active')
		$(this).addClass('mark_active')
	}
	$('.mark').on('click',checkMark)

	function checkSize () {
		$('.size__choose').removeClass('btn_blue_active')
		$(this).addClass('btn_blue_active')
	}
	$('.size__choose').on('click',checkSize)
	let count_res = Number($('.count__res').text())
	$('.count__minus').on('click',function () {
		if (count_res == 1) {
			return false
		}
		count_res--
		$('.count__res').text(count_res)
	})
	$('.count__plus').on('click',function () {
		count_res++
		$('.count__res').text(count_res)
	})
	// Настройка хедэра

	$('.header__mob__burger').on('click',function () {
		$('.header__links').toggleClass('header__links_active')
		$('.header__mob__burger').toggleClass('header__mob__burger_active')
	})
	$('.search_btn').on('click',function () {

		$('.search').addClass('search_active')
		$('.search_btn').addClass('search_btn_active')
	})
	$(document).on('click',function (e) {
		if ($('.header__controls').has(e.target).length === 0) {
			$('.search').removeClass('search_active')
			$('.search_btn').removeClass('search_btn_active')
		}
	})
	$('.header__links *').on('mouseenter',function () {
		let link_attr = $(this).attr('id')
		if (link_attr == undefined) {
			return false
		}
		$('.header__submenu__block').removeClass('header__submenu__block_active')
		$('.header__submenu').removeClass('header__submenu_active')
		$('#' + link_attr + '__submenu').addClass('header__submenu__block_active')
		$('.header__submenu').addClass('header__submenu_active')
	})
	$('.header').on('mouseleave',function () {
		$('.header__submenu__block').removeClass('header__submenu__block_active')
		$('.header__submenu').removeClass('header__submenu_active')
	})


	// Настройка футера
	if (($('.footer__wrap').offset()['top']) < ($(window).height() - $('.footer__wrap').height())) {
		$('.footer__wrap').addClass('footer__absolute')
	}
})

