 


$(document).ready(function(){
	//$(document).scrollTop('0')
	let admin_action = 'redact'
	
	// Переключение задач: Редактировать, Добавить, Удалить
	function switchAction() {
		$('.admin__action__el').removeClass('admin__action__el_active')
		$(this).addClass('admin__action__el_active')
		$('.admin__action__block[data-action="' + admin_action + '"]').removeClass('admin__action__block_active')
		admin_action = $(this).data('name')
		$('.admin__action__block[data-action="' + admin_action + '"]').addClass('admin__action__block_active')
	}

	$('.admin__action__el').on('click',switchAction)







	// Функция предпоказа изображений перед отправкой на сервер
	function preview(file,method) {
         var reader = new FileReader();
         reader.addEventListener('load', function(event) {
            method.find('.method__img img').attr('src', event.target.result);
         });
         reader.readAsDataURL(file);
     }
    // Функция редактирования метода
	function redactMethod () {
		let redacting_el = $(this).parents('.admin__redact__el')
		let method_id = redacting_el.data('id')
		if (redacting_el.hasClass('admin__redact__el_redacting')) {
			data = new FormData()
			data.append('action','redact')
			data.append('id',method_id)
			data.append('title',redacting_el.find('[name="title"]').val())
			data.append('theme',redacting_el.find('[name="theme"]').val())
			data.append('text',redacting_el.find('[name="text"]').val())
			data.append('file[]',redacting_el.find('input[type="file"]')[0].files[0])
			$.ajax({
				url: '/api/addMethod.php',
				method: 'post',
				data: data,
				processData: false,
				contentType: false,
				success: function(data){
					alert (data)
				}
			});
			redacting_el.removeClass('admin__redact__el_redacting')
			$(this).text('Редактировать')
			return false
		}
		redacting_el.addClass('admin__redact__el_redacting')
		$(this).text('Сохранить')

	}


	$('.method__redact__btn').on('click',redactMethod)

	$('.method__file').on('change',function () {
		let file = this.files[0];
		let method = $(this).parents('.admin__redact__el')
        preview(file,method);
	})

	// Добавление методов

	function addMethod () {
		let redacting_el = $(this).parents('.admin__redact__el')
		data = new FormData()
		data.append('action','add')
		data.append('title',redacting_el.find('[name="title"]').val())
		data.append('theme',redacting_el.find('[name="theme"]').val())
		data.append('text',redacting_el.find('[name="text"]').val())
		data.append('file[]',redacting_el.find('input[type="file"]')[0].files[0])
		$.ajax({
			url: '/api/addMethod.php',
			method: 'post',
			data: data,
			processData: false,
			contentType: false,
			success: function(data){
				alert (data)
			}
		});

	}
	$('.method__add__btn').on('click',addMethod)

	// Удаление методой

	function removeMethod () {
		let redacting_el = $(this).parents('.admin__redact__el')
		let method_id = redacting_el.data('id')
		redacting_el.css('display','none','important')
		data = new FormData()
		data.append('action','remove')
		data.append('id',method_id)
		$.ajax({
			url: '/api/addMethod.php',
			method: 'post',
			data: data,
			processData: false,
			contentType: false,
			success: function(data){
				alert (data)
			}
		});


	}
	$('.method__remove__btn').on('click',removeMethod)



})


