
$(document).ready(function(){
	let container_width = $('.container').width()
	let window_width = $(window).width()
	$('.back').width((window_width - container_width) / 2.2)
	$('.back').css('transform','translateX(0)')
	$('.back').on('click',function () {
		$('body').css('opacity','0')
		setTimeout(function () {
			window.location.assign('../')
		},500)
	})

	
})

