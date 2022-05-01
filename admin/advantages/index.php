<?php 
require '../../temp/connection.php';
$advantages = mysqli_query($connection, 'SELECT * FROM `advantages`');
 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title> 
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="/temp/header.css">
  <link rel="stylesheet" href="/temp/footer.css">
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

  <section class="admin">
    <div class="admin__panel">
      <div class="admin__logo">
        <img src="/img/logo.png" alt="">
      </div>
      <div class="admin__panel__items">
        <a href="../" class="admin__panel__el">Курсы</a>
        <div class="admin__panel__el">Ресурсы</div>
        <a href="/admin/advantages" class="admin__panel__el admin__panel__el_active">Достижения</a>
        <a href="/admin/methods" class="admin__panel__el">Методблок</a>
        <div class="admin__panel__el">Партнеры</div>
      </div>
    </div>
    <div class="admin__main">
      <div class="admin__action">
        <div class="admin__back">
          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.59272 0.946575L6.53033 0.87592C6.25997 0.605557 5.83454 0.58476 5.54033 0.813528L5.46967 0.87592L0.21967 6.12592L0.188622 6.15889L0.147251 6.20977L0.0935034 6.2932L0.0534191 6.37775L0.0268839 6.45676L0.00518037 6.56768L0 6.65625L0.0020909 6.71268L0.0151801 6.80679L0.0373036 6.89036L0.070255 6.97367L0.109497 7.04678L0.164767 7.12534L0.21967 7.18658L5.46967 12.4366C5.76256 12.7295 6.23744 12.7295 6.53033 12.4366C6.80069 12.1662 6.82149 11.7408 6.59272 11.4466L6.53033 11.3759L2.562 7.40625H14.25C14.6642 7.40625 15 7.07046 15 6.65625C15 6.24204 14.6642 5.90625 14.25 5.90625H2.5605L6.53033 1.93658C6.80069 1.66622 6.82149 1.24079 6.59272 0.946575Z" fill="#585858"/>
</svg>
Назад
        </div>
        <div data-menu="main" class="admin__action__hide admin__action__hide_active">
          <div data-name="redact" class="admin__action__main admin__action__el admin__action__el_active">Редактировать</div>
        <div data-name="add" class="admin__action__main admin__action__el">Добавить</div>
        <div data-name="remove" class="admin__action__main admin__action__el">Удалить</div>
        </div>
        <div data-actionHide="add" class="admin__action__hide">
          <div data-name="main" class="admin__action__main admin__action__el">Основное</div>
          <div data-name="more" class="admin__action__main admin__action__el">Доп текст</div>
          <div data-name="img" class="admin__action__main admin__action__el">Изображение</div>
        </div>
      </div>
      <div data-action="redact" class="admin__action__block admin__action__block_active">
        
          <div class="advantages__block">

            <?php foreach($advantages as $card) {
              ?>

                <div class="advantages__item advantages__redact__el">
                 <?php echo $card['title']; ?>
                 <input value="<?php echo $card['id']; ?>" name="id" data-metaInput="" type="hidden">
                 <input value="<?php echo $card['title']; ?>" name="title" data-metaInput="" type="hidden">
                 <input value="<?php echo $card['description']; ?>" name="description" data-metaInput="" type="hidden">
                 <input value="<?php echo $card['title_more']; ?>" name="title_more" data-metaInput="" type="hidden">
                 <input value="<?php echo $card['description_more']; ?>" name="description_more" data-metaInput="" type="hidden">
                 <input value="<?php echo $card['tag']; ?>" name="tag" data-metaInput="" type="hidden">
                </div>

              <?php
            } ?>
          </div>
          
        </div>
        <div data-action="add" class="admin__action__block">
          <div data-show="add" class="admin__action__moreMenu"></div>
          <form name="form_add" method="POST" action="/api/addAchiev.php">
            <input id="id_input" name="id" value="" type="hidden">
            <input name="tag" value="Школа" type="hidden">
            <div class="admin__action__step">
              <div class="admin__action__step__block">
                <div class="admin__action__step__input">
                  <div class="admin__action__step__input__name">Название достижения</div>
                  <textarea name="title" id="" cols="30" rows="10">Название достижения</textarea>
                  <div class="admin__action__step__input__more">Максимум 20 символов</div>
                </div>
                <div class="admin__action__step__input">
                  <div class="admin__action__step__input__name">Информация о достижении</div>
                  <textarea name="description" id="" cols="30" rows="10">Текст инофрмации о достижении (название учебного
заведения например)</textarea>
                  <div class="admin__action__step__input__more">Максимум 100 символов</div>
                </div>
              </div>
              <div class="step__next">
                Продолжить
              </div>
            </div>

            <div class="admin__action__step">
              <div class="admin__action__step__block">
                <div class="admin__action__step__input">
                  <div class="admin__action__step__input__name">Заголовок</div>
                  <textarea name="title_more" id="" cols="30" rows="10">Заголовок доп текста </textarea>
                  <div class="admin__action__step__input__more">Максимум 20 символов</div>
                </div>
                <div class="admin__action__step__input">
                  <div class="admin__action__step__input__name">Текст</div>
                  <textarea name="description_more" id="" cols="30" rows="10">Текст информации о квалификации например</textarea>
                  <div class="admin__action__step__input__more">Максимум 100 символов</div>
                </div>
              </div>
              <div class="admin__action__step__input">
                  <div class="admin__action__step__input__name">Тэг</div>
                  <div class="row radio__block">
                    <div data-name="Школа" class="radio__btn radio__btn_active">Школа</div>
                    <div data-name="Мария" class="radio__btn">Мария</div>
                  </div>  
                </div>
              <div class="step__next">
                Продолжить
              </div>
            </div>
            <div class="admin__action__step">
              <span class="img__preview__label">Изображение</span>
              <div class="img__preview">

              </div>
              <div class="row">
                <input id="file" name="file_img" type="file" multiple>
                <label id="file__label" for="file">Загрузить файл</label>
                <div id="save">Сохранить</div>
              </div>
              <div class="admin__action__step__block">
                <input class="admin__add__submit" value="Добавить достижение" type="submit">
            </div>
          </form>
        </div>
       
    </div>  
     <div data-action="remove" class="admin__action__block">
           <?php foreach ($advantages as $card) {
          ?>


      <div data-id="<?php echo $card['id']; ?>" data-action="remove" class="admin__redact__el">
            <div class="method__block">
              <div class="method__main">
                <div class="method__head">
                  <?php echo $card['title']; ?>
                </div>
                <div class="method__row">
                  <div class="method__remove__btn">Удалить запись</div>
                </div>
              </div>
            </div>
          </div>

          <?php


        } ?>
        </div>
        
  </section>

</body>
</html>




