


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
})

