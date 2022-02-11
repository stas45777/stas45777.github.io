


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
	
})

