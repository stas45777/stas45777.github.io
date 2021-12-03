$(document).ready(function() {
	$('.quest__el').on('click',function () {
		if ($(this).hasClass('quest__el_active')) {
			$('.quest__el').removeClass('quest__el_active')
		}
		else{
			$('.quest__el').removeClass('quest__el_active')
			$(this).addClass('quest__el_active')
		}
	})
	$(document).on('click',function (e){
		if (($(e.target).hasClass('quest__el')) || ($(e.target).hasClass('quest__text_med'))) {
			return false
		} else {
			$('.quest__el').removeClass('quest__el_active')
		}
	})
})