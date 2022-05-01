 


$(document).ready(function(){
	//$(document).scrollTop('0')
	let admin_action = 'redact'
	let active_step = 0
	let active_menu = 'main'
	let request_path = $('form[name="form_add"]').attr('action')
	// Переключение задач: Редактировать, Добавить, Удалить
	function switchAction() {
		// Если идёт переключение доп меню
		if ($(this).parents('[data-actionhide]').length != 0) {
			$('.admin__action__step').removeClass('admin__action__step_active')
			active_step = $(this).index()
			$('.admin__action__step').eq($(this).index()).addClass('admin__action__step_active')
			$('.admin__action__el').removeClass('admin__action__el_active')
			$(this).addClass('admin__action__el_active')
			return false

		}
		// Если переключается основное меню
		$('.admin__action__el').removeClass('admin__action__el_active')
		$(this).addClass('admin__action__el_active')
		$('.admin__action__block[data-action="' + admin_action + '"]').removeClass('admin__action__block_active')
		admin_action = $(this).data('name')
		$('.admin__action__block[data-action="' + admin_action + '"]').addClass('admin__action__block_active')
		if ($('.admin__action__block[data-action="' + admin_action + '"]').find('.admin__action__moreMenu').length != 0) {
			showMoreMenu ($('.admin__action__block[data-action="' + admin_action + '"]').find('[data-show]').data('show'))
		}
	}

	$('.admin__action__el').on('click',switchAction)

	$('.admin__action__step textarea').on('keypress',function () {
		$(this).parents('.admin__action__step').find('.step__next').addClass('step__next_active')
	})
	$('.admin__action__step').eq(0).addClass('admin__action__step_active')
	
	function showMoreMenu (name) {
		active_menu = name
		$('.admin__action__hide_active').removeClass('admin__action__hide_active')
		$(`[data-actionHide="${name}"]`).addClass('admin__action__hide_active')
		$(`[data-actionHide="${name}"]`).find('.admin__action__el').removeClass('admin__action__el_active')
		$(`[data-actionHide="${name}"]`).find('.admin__action__el').eq(active_step).addClass('admin__action__el_active')
	}

	function nextStep() {
		if (!$(this).hasClass('step__next_active')) {
			return false
		}
		active_step++
		$(this).parents('.admin__action__step').removeClass('admin__action__step_active')
		$(this).parents('.admin__action__step').next('.admin__action__step').addClass('admin__action__step_active')
		if ($(this).parents('.admin__action__block').find('[data-show]').length != 0) {
			showMoreMenu ($(this).parents('.admin__action__block').find('[data-show]').data('show'))
		}
	}

	function adminBack() {
		$('[data-menu="main"]').find('.admin__action__el').removeClass('admin__action__el_active')
		$('.admin__action__el[data-name="redact"]').addClass('admin__action__el_active')
		$('[data-menu="main"]').addClass('admin__action__hide_active')
		$(`[data-actionHide="${active_menu}"]`).removeClass('admin__action__hide_active')
		$(`[data-actionHide="${active_menu}"]`).find('.admin__action__el').removeClass('admin__action__el_active')

		$('.admin__action__block[data-action="' + admin_action + '"]').removeClass('admin__action__block_active')
		admin_action = 'redact'
		$('.admin__action__block[data-action="' + admin_action + '"]').addClass('admin__action__block_active')
	}

	$('.admin__back').on('click',adminBack)
	$('.step__next').on('click',nextStep)

	$('form[name="form_add"]').on("submit", function(e){
		e.preventDefault()
		data = new FormData()
		for (var i = 0; i < $('#file')[0].files.length; i++) {
    		data.append('file_img[]',$('#file')[0].files[i])
    	}
    	data.append('title',$('input[name="title"]').val())
    	data.append('description',$('input[name="description"]').val())
    	data.append('title_more',$('input[name="title_more"]').val())
    	data.append('description_more',$('input[name="description_more"]').val())
    	data.append('id',$('#id_input').val())
    	data.append('tag',$('input[name="tag"]').val())

		$.ajax({
			url: $(this).attr('action'),
			method: 'post',
			dataType: 'html',
			data: data,
			processData: false,
    		contentType: false,
			success: function(data){
				alert (data)
			}
		})
	})
	$('.radio__block .radio__btn').on('click',function () {
		if ($(this).hasClass('radio__btn_active')) {
			return false
		}
		$(this).parents('.radio__block').find('.radio__btn').removeClass('radio__btn_active')
		$(this).addClass('radio__btn_active')
		$('input[name="tag"]').val($(this).text())
	})



	function redactCard (id,title,description,title_more,description_more,tag) {
		$('form[name="form_add"] [name="id"]').val(id)
		$('form[name="form_add"] [name="title"]').val(title)
		$('form[name="form_add"] [name="description"]').val(description)
		$('form[name="form_add"] [name="title_more"]').val(title_more)
		$('form[name="form_add"] [name="description_more"]').val(description_more)
		$('form[name="form_add"] [name="tag"]').val(tag)
	}

	$('.advantages__redact__el').on('click',function () {
		let id = $(this).find('[name="id"]').val()
		let title = $(this).find('[name="title"]').val()
		let description = $(this).find('[name="description"]').val()
		let title_more = $(this).find('[name="title_more"]').val()
		let description_more = $(this).find('[name="description_more"]').val()
		let tag = $(this).find('[name="tag"]').val()
		redactCard (id,title,description,title_more,description_more,tag)
		$('.admin__action__el[data-name="add"]').click()
		$('.step__next').addClass('step__next_active')
		$('.radio__btn').removeClass('radio__btn_active')
		$(`.radio__btn[data-name="${tag}"]`).addClass('radio__btn_active')
		$('.admin__action__step').removeClass('admin__action__step_active')
		$('.admin__action__step').eq(0).addClass('admin__action__step_active')
		active_step = 0
		$('[data-actionHide="add"]').find('.admin__action__el').removeClass('data__action__el_active')
		$('[data-actionHide="add"]').find('.admin__action__el').eq(0).addClass('data__action__el_active')

	})


	function preview(file) {
         var reader = new FileReader();
         reader.addEventListener('load', function(event) {
 			$('.img__preview').append(`<div data-imgname="${file.name}" class="img__preview__img">
            <div class="img__preview__down"></div>
            <img src="" alt="">
             <div class="img__preview__up"></div>
           </div>`)
            $('.img__preview img[src=""]').attr('src', event.target.result);
         });
         reader.readAsDataURL(file);
     }

     $('#file').on('change',function () {

     	var files = this.files;
 
         for (var i = 0; i < files.length; i++) {
             var file = files[i];
             preview($('#file')[0].files[i])
         }
 
         

     })
     function removeCard (id) {
     	let data = {'id':id,'remove':true}
		$.ajax({
		url: request_path,
		method: 'post',
		data: data,
		success: function(data){
			alert (data)
		}
		});
     }
     $('.method__remove__btn').on('click',function () {
		removeCard ($(this).parents('.admin__redact__el').data('id'))
		$(this).parents('.admin__redact__el').css('display','none')
	})



	// Функция предпоказа изображений перед отправкой на сервер
	





})


