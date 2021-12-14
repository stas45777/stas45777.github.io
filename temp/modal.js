$(document).ready(function () {
	function openModal() {
		$('.modal__grey__window').addClass('modal_active')
	}
	function closeModal() {
		$('.modal__grey__window').removeClass('modal_active')
	}
	$('.open__modal').on('click',openModal)
	$('.modal__close').on('click',closeModal)
	$('.modal__close__btn').on('click',closeModal)
	$('form').on('submit',function (e) {
		e.preventDefault()
	})
})