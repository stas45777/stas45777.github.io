<?php 
require '../temp/connection.php';
$temp = mysqli_fetch_assoc(mysqli_query($connection,'SELECT * FROM `temp` LIMIT 1'));
$temp_cat = json_decode($temp['cat']);
$temp_level = json_decode($temp['level']);
$temp_type = json_decode($temp['type']);
$courses = mysqli_query($connection,'SELECT * FROM `courses`');
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
        <div class="admin__panel__el admin__panel__el_active">Курсы</div>
        <div class="admin__panel__el">Ресурсы</div>
        <div class="admin__panel__el">Достижения</div>
        <div class="admin__panel__el">Методблок</div>
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
        <div data-name="redact" class="admin__action__main admin__action__el admin__action__el_active">Редактировать</div>
        <div data-name="add" class="admin__action__main admin__action__el">Добавить</div>
        <div data-name="remove" class="admin__action__main admin__action__el">Удалить</div>

        <div data-name="name" class="admin__action__add admin__action__el">Название языка</div>
        <div data-name="cat" class="admin__action__add admin__action__el">Категории</div>
        <div data-name="type" class="admin__action__add admin__action__el">Тип обучения</div>
        <div data-name="text" class="admin__action__add admin__action__el">Наполнение</div>
      </div>
      <div class="admin__select admin__main_active admin__redact">
        <?php 

          foreach ($courses as $course) {
            ?>

            <div class="admin__select__el__wrap">
          <div data-id="<?php echo $course['id']; ?>" class="admin__select__el"><?php echo $course['title']; ?></div>
        </div>

            <form data-redact="<?php echo $course['id']; ?>" data-name="redact" class="redact__form" action="#">
          <div data-temp="cat" class="admin__input__temp">
            <?php 
              foreach ($temp_cat as $cat) {
                if (strpos($course['cat'],$cat) == false) {
                  echo "<div class='admin__input__temp__el'>$cat</div>";
                } else {
                  echo "<div class='admin__input__temp__el admin__input__temp__el_noactive'>$cat</div>";
                }
              }
             ?>
          </div>
          <div data-temp="level" class="admin__input__temp">
            <?php 
              foreach ($temp_level as $level) {
                if (strpos($course['level'],$level) == false) {
                  echo "<div class='admin__input__temp__el'>$level</div>";
                } else {
                  echo "<div class='admin__input__temp__el admin__input__temp__el_noactive'>$level</div>";
                }
              }
             ?>
          </div>
          <div data-temp="type" class="admin__input__temp">
            <?php 
              foreach ($temp_type as $type) {
                if (strpos($course['type'],$type) == false) {
                  echo "<div class='admin__input__temp__el'>$type</div>";
                } else {
                  echo "<div class='admin__input__temp__el admin__input__temp__el_noactive'>$type</div>";
                }
              }
             ?>
          </div>
          <?php 

          $course_cat = $course['cat'];
          $course_level = $course['level'];
          $course_type = $course['type'];
           ?>
          <input value="<?php echo $course['title']; ?>" placeholder="Название языка" name="title" type="text" class="admin__input admin__add__input admin__input_active">
          <input value="<?php foreach (json_decode($course_cat) as $cat) {
            echo $cat . ', ';
          } ?>" placeholder="Категории" name="cat" type="text" class="input_noation admin__input admin__input__large admin__add__input">
          <input value="<?php foreach (json_decode($course_level) as $cat) {
            echo $cat . ', ';
          } ?>" placeholder="Уровень" name="level" type="text" class="input_noation admin__input admin__input__large admin__add__input">
          <input value="<?php foreach (json_decode($course_type) as $cat) {
            echo $cat . ', ';
          } ?>" placeholder="Тип обучения" name="type" type="text" class="input_noation admin__input admin__add__input">
          <input value="<?php echo $course['text']; ?>" placeholder="Информация о языке" name="text" type="text" class="admin__input admin__add__input admin__input__large">
          <div class="admin__add__btn admin__btn__next admin__input__next">Продолжить</div>
          <input type="hidden" name="cat_arr" value='<?php echo $course_cat; ?>'>
          <input type="hidden" name="level_arr" value='<?php echo $course_level; ?>'>
          <input type="hidden" name="type_arr" value='<?php echo $course_type; ?>'>
        </form>


            <?php
          }

         ?>

      
      </div>
      <div class="admin__add admin__select">
        <div>Название нового языка</div>
        <form data-name="add" action="#">
          <div data-temp="cat" class="admin__input__temp">
            <?php 
              foreach ($temp_cat as $cat) {
                echo "<div class='admin__input__temp__el'>$cat</div>";
              }
             ?>
          </div>
          <div data-temp="level" class="admin__input__temp">
            <?php 
              foreach ($temp_level as $level) {
                echo "<div class='admin__input__temp__el'>$level</div>";
              }
             ?>
          </div>
          <div data-temp="type" class="admin__input__temp">
            <?php 
              foreach ($temp_type as $type) {
                echo "<div class='admin__input__temp__el'>$type</div>";
              }
             ?>
          </div>
          <input placeholder="Название языка" name="title" type="text" class="admin__input admin__add__input admin__input_active">
          <input placeholder="Категории" name="cat" type="text" class="input_noation admin__input admin__input__large admin__add__input">
          <input placeholder="Уровень" name="level" type="text" class="input_noation admin__input admin__input__large admin__add__input">
          <input placeholder="Тип обучения" name="type" type="text" class="input_noation admin__input admin__add__input">
          <input placeholder="Информация о языке" name="text" type="text" class="admin__input admin__add__input admin__input__large">
          <div class="admin__add__btn admin__btn__next admin__input__next">Продолжить</div>
          <input type="hidden" name="cat_arr" value="[]">
          <input type="hidden" name="level_arr" value="[]">
          <input type="hidden" name="type_arr" value="[]">
        </form>
      </div>
      <div class="admin__remove admin__select">
        <?php 
          foreach ($courses as $course) {
            $title = $course['title'];
            $id = $course['id'];
            echo "<div class='admin__select__el__wrap'><div data-id='$id' class='admin__remove__el'> $title </div></div>";
          }
         ?>
        
      </div>
    </div>
  </section>

</body>
</html>




