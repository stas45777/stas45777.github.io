


$(document).ready(function(){
	let video = document.getElementById("video")
	let play = $('#play')
	let video_duration = video.duration
	let time_lapse_width = Math.ceil($('#time').width())
	let current_time = 0
	let progress_per = 0
	let move_time_lapse = 0
	let start_video = false
	video.volume = 0.1
	function playPause() {
		if (video.paused) {
			video.play()
		}
		else{
			video.pause()
		}
	}
	play.on('click',playPause)
	function muteSwitcher () {
		if (video.volume == 0) {
			video.volume = 0.4
		} else {
			video.volume = 0
		}
	}
	$("#mute").on('click',muteSwitcher)



	function checkTimeLapse () {
			current_time = video.currentTime
			progress_per = (current_time / video_duration).toFixed(4)
			$('#time_button').css('left',progress_per * time_lapse_width + 'px')
	}
	let check_interval = setInterval(checkTimeLapse,500)



	// Функция перемещения таймлапса
 $('#time_button').on('mousedown',function () {
 	clearInterval(check_interval)
 	video.pause()
 	start_video = true
 	$('#time').on('mousemove',function (e) {
 		$('#time_button').css('left',e.pageX - $('#time').offset()['left'] - $('#time_button').width())
 		if ($('#time_button').position()['left'] < 0) {
 			$('#time_button').css('left','0px')
 		}
 		if ($('#time_button').position()['left'] > $('#time').width()-30) {
 			$('#time_button').css('left',$('#time').width() - 25 + 'px')
 		}
 		move_time_lapse = ($('#time_button').position()['left'] / time_lapse_width)
 		video.currentTime = (video_duration * move_time_lapse).toFixed(1)

 	})
 })
 $(document).on('mouseup',function () {
 	$('#time').off()
 	if (start_video) {
 		video.play()
 	}
 	start_video = false
 	check_interval = setInterval(checkTimeLapse,500)
 })


})