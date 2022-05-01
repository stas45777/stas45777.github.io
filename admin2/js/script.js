 


$(document).ready(function(){
	//$(document).scrollTop('0')
	let admin_action = 'redact'
	$('.admin__action__el').on('click',function () {
		admin_action = $(this).data('name')
		$('.admin__action__el_active').removeClass('admin__action__el_active')
		$(this).addClass('admin__action__el_active')
		$('.admin__main_active').removeClass('admin__main_active')
		$('.admin__' + admin_action).addClass('admin__main_active')
	})
	$('.admin__action__main').addClass('visible')
	$('.admin__select .admin__btn__next').on('click',function () {
		if (!$(this).hasClass('admin__btn__next_active')) {
			return false
		}
		let active_input = $('.admin__input_active')
		if (admin_action == 'add') {
			let form = $('form[data-name="add"]')
			active_input = form.children('.admin__input_active')
		}
		if (admin_action == 'redact') {
			let current_redact = active_input.next('input').attr('name')
			
		}
		if (active_input.index() == $('.admin__add input').length - 1) {
			let btn_form = $(this).parents('form')
			let title = btn_form.children('.admin__add__input[name="title"]').val()
			let cat = btn_form.children('[name="cat_arr"]').val()
			let level = btn_form.children('[name="level_arr"]').val()
			let type = btn_form.children('[name="type_arr"]').val()
			let text = btn_form.children('.admin__add__input[name="text"]').val()
			if (admin_action == 'redact') {
				let id = btn_form.data('redact')
				$.post('/api/addCourse.php', {'action':'redact','id': id,'title': title,'cat': cat, 'level': level, 'type': type,'text': text}, function(data){
 					alert(data);
				});
				return false
			}
			$.post('/api/addCourse.php', {'action':'add','title': title,'cat': cat, 'level': level, 'type': type,'text': text}, function(data){
 				alert('Добавлено');
			});
			return false
		}
		$('.admin__back').on('click',function () {
			if (admin_action == 'redact') {
				$('.admin__redact .admin__select__el__wrap').removeClass('noactive')
				$('form').removeClass('redact__form_active')
				let form = $('form[data-name="redact"]')
				form.children('.admin__input').removeClass('admin__input_active')
				form.children('.admin__input').eq(0).addClass('admin__input_active')
				form.children('.admin__input__temp').removeClass('admin__input__temp_active')
				active_input = form.children('.admin__input_active')
				return false
			}
			$('.admin__add .admin__input__temp__el').removeClass('admin__input__temp__el_noactive')
			if (admin_action == 'add') {
				let form = $('form[data-name="add"]')
				form.children('.admin__input').removeClass('admin__input_active')
				form.children('.admin__input').eq(0).addClass('admin__input_active')
				form.children(this).removeClass('admin__btn__next_active')
				form.children('.admin__input__temp').removeClass('admin__input__temp_active')
				form.children('.admin__back').off()
				form.children('.admin__add__input').val('')
				form.children('input[type="hidden"]').val('[]')
				form.children('.admin__input__temp__el').removeClass('admin__input__temp__el_noactive')
				form.children('.admin__btn__next').removeClass('admin__btn__next_active')
				active_input = form.children('.admin__input_active')
				$('.admin__input__temp').removeClass('admin__input__temp_active')

			}
			
			return false
		})
		$('.admin__input').removeClass('admin__input_active')
		active_input.next('input').addClass('admin__input_active')
		$(this).removeClass('admin__btn__next_active')
		$('.admin__input__temp').removeClass('admin__input__temp_active')
		$('[data-temp="' + active_input.next('input').attr('name') + '"]').addClass('admin__input__temp_active')
	})
	$('.admin__input').on('input keyup',function () {
		if ($(this).val() != '') {
			$('.admin__btn__next').addClass('admin__btn__next_active')
		} else {
			$('.admin__btn__next').removeClass('admin__btn__next_active')
		}
	})
	$('.admin__input__temp__el').on('click',function () {
		$('.admin__btn__next').addClass('admin__btn__next_active')
		let input_arr = $(this).parent('.admin__input__temp')
		let this_form = $(this).parents('form')
		let arr = JSON.parse( this_form.children('[name="' + input_arr.attr('data-temp') + '_arr"]').val())
		if ($(this).hasClass('admin__input__temp__el_noactive')) {
			let index = arr.indexOf($(this).text())
			arr.splice(index,1)
			$('[name="' + input_arr.attr('data-temp') + '_arr"]').val(JSON.stringify(arr))
			$('[name="' + input_arr.attr('data-temp') + '"]').val(arr)
			$(this).removeClass('admin__input__temp__el_noactive')
			if (arr == false) {
				$('.admin__btn__next').removeClass('admin__btn__next_active')
			}
			return false
		}
		arr.push($(this).text())
		$('[name="' + input_arr.attr('data-temp') + '_arr"]').val(JSON.stringify(arr))
		$('[name="' + input_arr.attr('data-temp') + '"]').val(arr)
		$(this).addClass('admin__input__temp__el_noactive')
	})
	$('.admin__remove__el').on('click',function () {
		let result = confirm('Вы действительно хотите удалить курс?')
		if (result == true) {
			$.post('/api/addCourse.php', {'action':'remove', 'id': $(this).data('id')}, function(data){
 				alert('Курс удалён');
			});
			$(this).css('display','none')
		}
	})
	$('.admin__redact .admin__select__el').on('click',function () {
		$('form[data-redact="' + $(this).data('id') + '"]').children('.admin__input').eq(0).addClass('admin__input_active')
		
		$('form[data-redact="' + $(this).data('id') + '"]').addClass('redact__form_active')
		$('.admin__redact .admin__select__el__wrap').addClass('noactive')
		$('.admin__btn__next').addClass('admin__btn__next_active')
		$('.admin__btn__next').on('click',function () {
			$('.admin__btn__next').addClass('admin__btn__next_active')
		})
	})
})


