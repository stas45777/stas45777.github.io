


$(document).ready(function(){
	$('.header .button__menu').removeClass('button__menu_active')
	$('.header .button__menu').eq(5).addClass('button__menu_active')
	let opacity_step = (1 / $('.main__options__point_noactive').length) - 0.05
	function optionOpacity(){
		for (let i=0;i<$('.main__options__point').length;i++) {
			if ($('.main__options__point').eq(i).hasClass('main__options__point_active')) {
				continue
			}
			$('.main__options__point').eq(i).css('opacity',
				$('.main__options__point').eq(i-1).css('opacity') - opacity_step
				)
		}
	}
	optionOpacity()
	$(document).on('click',function (e) {
		var div = $( ".main__options__select" ); // тут указываем ID элемента
		if ( !div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
			$('.main__options__select__more_active').removeClass('main__options__select__more_active')
			$('.main__options__select__img').removeClass('main__options__select__img_active')
		}
		
	})
	$('.main__options__select').on('click',function () {
		if (!$(this).parents('.main__options__point').hasClass('main__options__point_active')) {
			return false
		}
		if ($(this).find('.main__options__select__more').hasClass('main__options__select__more_active')) {
			$(this).find('.main__options__select__more').removeClass('main__options__select__more_active')
		} else {
			$('.main__options__select__more_active').removeClass('main__options__select__more_active')
			 $('.main__options__select__img').removeClass('main__options__select__img_active')
			$(this).find('.main__options__select__more').addClass('main__options__select__more_active')	
			$(this).find('.main__options__select__img').addClass('main__options__select__img_active')
		}
	})
	let total = {}
	let total_cost = 0
	function calculateAmount(el) {
		total_cost = 0
		total[el.data('option')] = {'action':el.data('action'),'cost':el.data('cost')}
		for (let key in total) {
			if (total[key]['action'] == 'plus') {
				total_cost = total_cost + total[key]['cost']
			}
			if (total[key]['action'] == 'minus') {
				total_cost = total_cost - total[key]['cost']
			}
		}
		for (let key in total) {
			if (total[key]['action'] == 'multiplication') {
				total_cost = total_cost * total[key]['cost']
			}
		}
		console.log(total_cost)
		$('.total__cost').text('≈' + total_cost + ' Р')
	}
	$('.main__options__select .select__option').on('click',function () {
		$(this).parent('.main__options__select__more').prevAll('.main__options__select__title').text($(this).text())
		$('.main__options__point_noactive').eq(0).addClass('main__options__point_active')
		$('.main__options__point_noactive').eq(0).removeClass('main__options__point_noactive')
		optionOpacity()
		calculateAmount($(this))
	})
})