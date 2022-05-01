$(document).ready(function () {
	function closeForm () {
		$('.form').addClass('form_noactive')
	}
	function openForm () {
		$('.form').removeClass('form_noactive')
	}
	$('.form .log__close').on('click',closeForm)
	$('.open__form').on('click',openForm)
})