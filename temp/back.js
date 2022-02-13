
$(document).ready(function(){
	let container_width = $('.container').width()
	let window_width = $(window).width()
	if (((window_width - container_width) / 2.2) < 150) {
		$('.back').width(150)
	} else{
		$('.back').width((window_width - container_width) / 2.2)
	}
	$('.back').css('transform','translateX(0)')
	$('.back').on('click',function () {
		$('body').css('opacity','0')
		setTimeout(function () {
			window.location.assign('../')
		},500)
	})

	
})

