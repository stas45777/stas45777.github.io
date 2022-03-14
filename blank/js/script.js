


$(document).ready(function(){
	// Настройка высоты главного блока
	let size_count_num = 0
	let eq_cart = 0
	$('.cart__minus').on('click', function () {
		eq_cart = $(this).parents('.cart__main').index()
		size_count_num = $('.cart__size__count__text').eq(eq_cart).text()
		if (size_count_num == 1) {
			return false
		}
		$('.cart__size__count__text').eq(eq_cart).text(size_count_num - 1)
	})
	$('.cart__plus').on('click', function () {
		eq_cart = $(this).parents('.cart__main').index()
		size_count_num = Number($('.cart__size__count__text').eq(eq_cart).text())
		$('.cart__size__count__text').eq(eq_cart).text(size_count_num + 1)
	})
	$('.order__input__select').on('click',function () {
		if ($(this).children('.order__input__select__options').hasClass('order__input__select__options_active')) {
			$(this).children('.order__input__select__options').removeClass('order__input__select__options_active')
			$(this).children('.order__input__select__status').removeClass('order__input__select__status_active')
			return false
		}
		$(this).children('.order__input__select__options').addClass('order__input__select__options_active')
		$(this).children('.order__input__select__status').addClass('order__input__select__status_active')
	})
	$('.order__input__option').on('click',function () {
		let option_name = $(this).text()
		$(this).parents('.order__input__wrap').find('.order__input__select__name').text(option_name)
		$(this).parents('.order__input__wrap').find('.order__input__select__hidden').attr('value',option_name)
	})
	$('.order__buy__radio').on('click',function () {
		$(this).parent('.order__buy__radios').find('.order__buy__input__status').removeClass('order__buy__input__status_active')
		$(this).find('.order__buy__input__status').addClass('order__buy__input__status_active')
	})

	function checkRequired (add_red = true) {
		let check = true
		for (let i = 0; i < $('.order__check__input').length;i++) {
			if ($('.order__check__input').eq(i).val() == '') {
				check = false
				if (add_red) {
					$('.order__check__input').eq(i).addClass('order__input__failed')
				}
			}
		}
		return check
	}
	$('.order__buy__confirm').on('click',function (e) {
		
		if (checkRequired () == false) {
			e.preventDefault()
		}
	})
	let inputs_checked = checkRequired(add_red = false)
	if (inputs_checked) {
		$('.order__buy__confirm').addClass('order__buy__confirm_active')
	} else {
		$('.order__buy__confirm').removeClass('order__buy__confirm_active')
	}
	$('.order__check__input').on('keypress',function () {
		$(this).removeClass('order__input__failed')
		inputs_checked = checkRequired(add_red = false)
		if (inputs_checked) {
			$('.order__buy__confirm').addClass('order__buy__confirm_active')
		} else {
			$('.order__buy__confirm').removeClass('order__buy__confirm_active')
		}
	})
	$(window).on('click',function () {
		for (let i = 0; i < $('input.order__input').length; i++) {
			if ($('input.order__input').eq(i).val() != '') {
				$('input.order__input').eq(i).addClass('order__input__select')
			} else {
				$('.order__check__input').eq(i).removeClass('order__input__select')
			}
		}
	})
	if ($(window).width() <= 435) {
		$('.order__buy__confirm').on('click',function (e) {
			e.preventDefault()
			if ($(this).hasClass('order__buy__confirm_active')) {
				$('.order__buy__mob').addClass('order__buy__mob_active')
				$(this).attr('value','Оформить заказ')
			}

		})
	}





})

