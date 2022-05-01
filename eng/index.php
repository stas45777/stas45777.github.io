<?php 
require '../temp/connection.php';
$course = mysqli_query($connection,'SELECT * FROM `courses` WHERE `id` = 1');
$course = mysqli_fetch_assoc($course);
$cat = json_decode($course['cat']);
$level = json_decode($course['level']);
$type = json_decode($course['type']);
$text = $course['text'];
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="/temp/general.css">
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/script.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"></head>  
<body>
<script src="/temp/header.js"></script>
<link rel="stylesheet" href="../temp/header.css">
<div class="container header__container">
    <header class="header">
      <a href="/" class="logo">
        <img src="../img/logosmall.png" alt=""> 
      </a>
      <div id="user" class="button__icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 7.5C7.75 5.15279 9.65279 3.25 12 3.25C14.3472 3.25 16.25 5.15279 16.25 7.5C16.25 9.84721 14.3472 11.75 12 11.75C9.65279 11.75 7.75 9.84721 7.75 7.5ZM12 4.75C10.4812 4.75 9.25 5.98122 9.25 7.5C9.25 9.01878 10.4812 10.25 12 10.25C13.5188 10.25 14.75 9.01878 14.75 7.5C14.75 5.98122 13.5188 4.75 12 4.75Z" fill="black"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8 14.75C6.75736 14.75 5.75 15.7574 5.75 17V18.1883C5.75 18.2064 5.76311 18.2218 5.78097 18.2247C9.89972 18.8972 14.1003 18.8972 18.219 18.2247C18.2369 18.2218 18.25 18.2064 18.25 18.1883V17C18.25 15.7574 17.2426 14.75 16 14.75H15.6591C15.6328 14.75 15.6066 14.7542 15.5815 14.7623L14.716 15.045C12.9512 15.6212 11.0488 15.6212 9.28398 15.045L8.41847 14.7623C8.39342 14.7542 8.36722 14.75 8.34087 14.75H8ZM4.25 17C4.25 14.9289 5.92893 13.25 8 13.25H8.34087C8.52536 13.25 8.70869 13.2792 8.88407 13.3364L9.74959 13.6191C11.2119 14.0965 12.7881 14.0965 14.2504 13.6191L15.1159 13.3364C15.2913 13.2792 15.4746 13.25 15.6591 13.25H16C18.0711 13.25 19.75 14.9289 19.75 17V18.1883C19.75 18.9415 19.2041 19.5837 18.4607 19.7051C14.1819 20.4037 9.8181 20.4037 5.53927 19.7051C4.79588 19.5837 4.25 18.9415 4.25 18.1883V17Z" fill="black"/>
</svg>
        <div class="button__icon__more">
          Узнай преимущества
          регестрации и
          получи скидку на
          первый курс
          <div class="triangle"></div>
        </div>
      </div>
      <div id="phone" class="button__icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.84027 9.85635C7.62759 13.7482 10.8081 16.8424 14.7618 18.519L14.7743 18.5243L15.5381 18.8647C16.5108 19.2981 17.654 18.9903 18.2776 18.1272L19.552 16.3635C19.6298 16.2558 19.6097 16.106 19.5063 16.0225L17.2816 14.2277C17.171 14.1385 17.0083 14.1593 16.9237 14.2734L16.0579 15.4418C15.8476 15.7256 15.4678 15.8242 15.1461 15.6786C12.1897 14.3406 9.81396 11.9649 8.47603 9.00851C8.33041 8.68674 8.42901 8.30699 8.71276 8.09671L9.88114 7.23085C9.99531 7.14624 10.0161 6.98362 9.92686 6.87302L8.13182 4.64798C8.04839 4.54456 7.89865 4.52448 7.79092 4.60225L6.01762 5.88241C5.14883 6.5096 4.84288 7.66244 5.28634 8.63789L5.83968 9.85505C5.83988 9.85549 5.84008 9.85592 5.84027 9.85635ZM14.1699 19.8973C9.87391 18.0737 6.41854 14.7107 4.4765 10.4809L4.47533 10.4784L3.92083 9.25868C3.18173 7.63293 3.69165 5.71152 5.13964 4.66621L6.91293 3.38605C7.66705 2.84164 8.71528 2.98225 9.29927 3.70614L11.0943 5.93119C11.7189 6.70536 11.5734 7.84375 10.7742 8.43599L10.1047 8.93215C11.2357 11.1265 13.028 12.9189 15.2224 14.0498L15.7186 13.3803C16.3108 12.5812 17.4492 12.4357 18.2234 13.0603L20.4481 14.855C21.1722 15.4392 21.3127 16.4879 20.7678 17.242L19.4934 19.0057C18.4541 20.4442 16.5487 20.9572 14.9277 20.2349L14.1699 19.8973Z" fill="black"/>
</svg>
        <div class="button__icon__more">
          Закажите бесплатный
          звонок со 
          специалистом и
          получите индивиду -
          альное предложение
          <div class="triangle"></div>
        </div>
      </div>
      <div class="button__menu button__menu_active"><span class="button__menu_regular">Курсы</span> <a href="/courses" class="button__menu_bold">Курсы</a>
        <div class="button__menu__more">
          <a href="#">Немецкий</a>
          <a href="/eng">Английский</a>
          <a href="#">Китайский</a>
          <a href="#">Еще...</a>
        </div>
      </div>
      <div class="button__menu"><span class="button__menu_regular">Ресурсы</span> <a href="#" class="button__menu_bold">Ресурсы</a>
        <div class="button__menu__more">
          <a href="#">Вебинары</a>
          <a href="#">Скидки</a>
          <a href="#">Авторские материалы</a>
          <a href="#">Остальные...</a>
        </div>
      </div>
      <div class="button__menu"><span class="button__menu_regular">Достижения</span> <a href="/achiev" class="button__menu_bold">Достижения</a>
        <div class="button__menu__more">
          <a href="#">NSK</a>
          <a href="#">CBAO</a>
          <a href="#">Китайский новый год</a>
          <a href="#">Все достижения...</a>
        </div>
      </div> 
      <div class="button__menu"><span class="button__menu_regular">Методы</span> <a href="#" class="button__menu_bold">Методы</a>
        <div class="button__menu__more">
          <a href="#">Название 1</a>
          <a href="#">Название 2</a>
          <a href="#">Название третье</a>
          <a href="#">Все методики...</a>
        </div>
      </div>
      <div class="button__menu"><span class="button__menu_regular">Партнеры</span> <a href="#" class="button__menu_bold">Партнеры</a>
        <div class="button__menu__more">
          <a href="#">Организации</a>
          <a href="#">Учителя</a>
          <a href="#">Используемый software</a>
          <a href="#">Все партнеры...</a>
        </div>
      </div>
      <div class="button__menu"><span class="button__menu_regular">Стоимость</span> <a href="#" class="button__menu_bold">Стоимость</a>
        <div class="button__menu__more">
          <a href="#">Расчитайте
стоимость курса
подобранного
специально для
Вас в нашем
персональном
калькуляторе</a>
        </div>
      </div>
    </header> 
  </div>



 

  <section class="main">
    <div class="main__bg">
      <svg width="1280" height="1012" viewBox="0 0 1280 1012" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_288_6584)">
<path d="M765.698 435.794H762.63V498.444H765.698V435.794Z" fill="url(#paint0_linear_288_6584)"/>
<path d="M739.882 430.682H736.815V498.445H739.882V430.682Z" fill="url(#paint1_linear_288_6584)"/>
<path d="M713.64 421.963H710.573V498.444H713.64V421.963Z" fill="url(#paint2_linear_288_6584)"/>
<path d="M685.411 407.139H682.344V498.445H685.411V407.139Z" fill="url(#paint3_linear_288_6584)"/>
<path d="M659.169 386.264H656.102V498.444H659.169V386.264Z" fill="url(#paint4_linear_288_6584)"/>
<path d="M633.098 367.549H630.031V498.444H633.098V367.549Z" fill="url(#paint5_linear_288_6584)"/>
<path d="M777.228 440.452C761.978 440.452 688.109 434.772 597.684 332.532L604.585 326.426C700.747 435.34 778.563 431.506 779.33 431.335L780.012 440.537C779.699 440.395 778.762 440.452 777.228 440.452Z" fill="url(#paint6_linear_288_6584)"/>
<path d="M2.87385 435.453H-0.193359V498.104H2.87385V435.453Z" fill="url(#paint7_linear_288_6584)"/>
<path d="M28.661 435.453H25.5938V498.104H28.661V435.453Z" fill="url(#paint8_linear_288_6584)"/>
<path d="M54.9305 421.622H51.8633V498.104H54.9305V421.622Z" fill="url(#paint9_linear_288_6584)"/>
<path d="M83.1321 406.798H80.0649V498.104H83.1321V406.798Z" fill="url(#paint10_linear_288_6584)"/>
<path d="M109.402 385.924H106.335V498.104H109.402V385.924Z" fill="url(#paint11_linear_288_6584)"/>
<path d="M135.473 367.208H132.406V498.104H135.473V367.208Z" fill="url(#paint12_linear_288_6584)"/>
<g filter="url(#filter0_di_288_6584)">
<path d="M-0.364258 485.551V599.463H261.2C268.934 574.219 284.564 552.122 305.793 536.423C327.022 520.724 352.728 512.251 379.131 512.251C405.534 512.251 431.24 520.724 452.468 536.423C473.697 552.122 489.328 574.219 497.062 599.463H782.397V485.551H-0.364258Z" fill="url(#paint13_linear_288_6584)"/>
</g>
<path opacity="0.44" d="M782.397 485.551H-0.364258V498.104H782.397V485.551Z" fill="white"/>
<path d="M540.23 320.575H226.467V337.417H540.23V320.575Z" fill="url(#paint14_linear_288_6584)"/>
<path d="M256.968 323.188L241.32 301.689L243.791 299.872L256.968 317.962L270.117 299.872L272.588 301.689L256.968 323.188Z" fill="url(#paint15_linear_288_6584)"/>
<path d="M284.772 323.188L269.124 301.689L271.594 299.872L284.772 317.962L297.921 299.872L300.42 301.689L284.772 323.188Z" fill="url(#paint16_linear_288_6584)"/>
<path d="M-1.67032 440.083C-3.03352 440.083 -3.88551 440.083 -4.14111 440.083L-3.37431 430.909L-3.77191 435.539L-3.37431 430.938C-2.72111 430.938 64.7857 434.857 160.92 326.085L167.821 332.191C77.5089 434.317 11.8765 440.083 -1.67032 440.083Z" fill="url(#paint17_linear_288_6584)"/>
<path d="M312.32 323.188L296.671 301.689L299.142 299.872L312.32 317.962L325.469 299.872L327.94 301.689L312.32 323.188Z" fill="url(#paint18_linear_288_6584)"/>
<path d="M340.123 323.188L324.475 301.689L326.946 299.872L340.123 317.962L353.273 299.872L355.772 301.689L340.123 323.188Z" fill="url(#paint19_linear_288_6584)"/>
<path d="M368.581 323.188L352.932 301.689L355.403 299.872L368.581 317.962L381.73 299.872L384.201 301.689L368.581 323.188Z" fill="url(#paint20_linear_288_6584)"/>
<path d="M415.81 323.188L400.161 301.689L402.632 299.872L415.81 317.962L428.959 299.872L431.458 301.689L415.81 323.188Z" fill="url(#paint21_linear_288_6584)"/>
<path d="M444.437 323.188L428.789 301.689L431.288 299.872L444.437 317.962L457.615 299.872L460.085 301.689L444.437 323.188Z" fill="url(#paint22_linear_288_6584)"/>
<path d="M472.269 323.188L456.62 301.689L459.119 299.872L472.269 317.962L485.418 299.872L487.917 301.689L472.269 323.188Z" fill="url(#paint23_linear_288_6584)"/>
<path d="M500.896 323.188L485.248 301.689L487.747 299.872L500.896 317.962L514.074 299.872L516.544 301.689L500.896 323.188Z" fill="url(#paint24_linear_288_6584)"/>
<g filter="url(#filter1_i_288_6584)">
<path d="M254.895 483.222H131.838V592.164H254.895V483.222Z" fill="url(#paint25_linear_288_6584)"/>
</g>
<g filter="url(#filter2_i_288_6584)">
<path d="M231.011 277.066H155.751V483.222H231.011V277.066Z" fill="url(#paint26_linear_288_6584)"/>
</g>
<path d="M249.414 469.107H138.114V483.222H249.414V469.107Z" fill="#FF5D54"/>
<path opacity="0.44" d="M249.414 469.107H138.114V483.222H249.414V469.107Z" fill="white"/>
<path d="M157.143 277.066L194.744 118.481L226.467 277.066H157.143Z" fill="url(#paint27_linear_288_6584)"/>
<g filter="url(#filter3_d_288_6584)">
<path d="M166.316 227.679H143.198V310.38H166.316V227.679Z" fill="url(#paint28_linear_288_6584)"/>
</g>
<path d="M143.198 227.679L155.751 174.77L166.316 227.679H143.198Z" fill="url(#paint29_linear_288_6584)"/>
<path opacity="0.15" d="M170.632 318.417H216.072C217.729 318.417 219.319 319.075 220.49 320.247C221.662 321.419 222.32 323.008 222.32 324.665V469.107H164.384V324.778C164.369 323.948 164.52 323.124 164.827 322.353C165.134 321.581 165.592 320.879 166.174 320.287C166.755 319.695 167.449 319.224 168.215 318.903C168.98 318.582 169.802 318.417 170.632 318.417Z" fill="url(#paint30_linear_288_6584)"/>
<path d="M532.732 299.247H226.467V302.314H532.732V299.247Z" fill="url(#paint31_linear_288_6584)"/>
<g filter="url(#filter4_d_288_6584)">
<path d="M242.541 227.679H219.424V310.38H242.541V227.679Z" fill="url(#paint32_linear_288_6584)"/>
</g>
<path d="M219.424 227.679L231.977 174.77L242.57 227.679H219.424Z" fill="url(#paint33_linear_288_6584)"/>
<g filter="url(#filter5_d_288_6584)">
<path d="M204.116 282.178H181.112V243.924C181.118 239.267 182.268 234.683 184.463 230.576L189.319 221.488C189.639 220.888 190.116 220.386 190.699 220.036C191.281 219.686 191.948 219.501 192.628 219.501C193.308 219.501 193.975 219.686 194.558 220.036C195.14 220.386 195.617 220.888 195.937 221.488L200.793 230.576C202.978 234.686 204.119 239.269 204.116 243.924V282.178Z" fill="url(#paint34_linear_288_6584)"/>
</g>
<path d="M192.188 246.508H192.785C193.779 246.508 194.732 246.903 195.435 247.606C196.138 248.309 196.533 249.263 196.533 250.257V273.147H188.439V250.257C188.439 249.263 188.834 248.309 189.537 247.606C190.24 246.903 191.194 246.508 192.188 246.508Z" fill="url(#paint35_linear_288_6584)"/>
<path d="M177.809 334.094H178.405C179.399 334.094 180.353 334.489 181.056 335.192C181.759 335.895 182.154 336.848 182.154 337.843V358.006H174.003V337.843C174.003 337.345 174.102 336.853 174.294 336.395C174.486 335.936 174.767 335.52 175.121 335.171C175.475 334.823 175.895 334.548 176.356 334.363C176.818 334.178 177.311 334.086 177.809 334.094Z" fill="url(#paint36_linear_288_6584)"/>
<path d="M193.905 334.094H194.501C195.496 334.094 196.449 334.489 197.152 335.192C197.855 335.895 198.25 336.848 198.25 337.842V358.006H190.156V337.842C190.156 336.848 190.551 335.895 191.254 335.192C191.957 334.489 192.911 334.094 193.905 334.094Z" fill="url(#paint37_linear_288_6584)"/>
<path d="M210.002 334.094H210.598C211.592 334.094 212.546 334.489 213.249 335.192C213.952 335.895 214.347 336.848 214.347 337.842V358.006H206.253V337.842C206.253 336.848 206.648 335.895 207.351 335.192C208.054 334.489 209.008 334.094 210.002 334.094Z" fill="url(#paint38_linear_288_6584)"/>
<path d="M177.809 376.007H178.405C179.399 376.007 180.353 376.402 181.056 377.105C181.759 377.808 182.154 378.761 182.154 379.756V399.92H174.003V379.756C174.003 379.259 174.102 378.766 174.294 378.308C174.486 377.849 174.767 377.433 175.121 377.085C175.475 376.736 175.895 376.461 176.356 376.276C176.818 376.091 177.311 375.999 177.809 376.007Z" fill="url(#paint39_linear_288_6584)"/>
<path d="M193.905 376.006H194.501C195.496 376.006 196.449 376.401 197.152 377.104C197.855 377.807 198.25 378.761 198.25 379.755V399.919H190.156V379.755C190.156 378.761 190.551 377.807 191.254 377.104C191.957 376.401 192.911 376.006 193.905 376.006Z" fill="url(#paint40_linear_288_6584)"/>
<path d="M210.002 376.006H210.598C211.592 376.006 212.546 376.401 213.249 377.104C213.952 377.807 214.347 378.761 214.347 379.755V399.919H206.253V379.755C206.253 378.761 206.648 377.807 207.351 377.104C208.054 376.401 209.008 376.006 210.002 376.006Z" fill="url(#paint41_linear_288_6584)"/>
<path d="M177.808 417.92H178.405C179.399 417.92 180.352 418.315 181.056 419.018C181.759 419.721 182.154 420.675 182.154 421.669V441.975H174.003V421.811C173.983 421.302 174.068 420.794 174.251 420.319C174.434 419.844 174.713 419.411 175.069 419.047C175.425 418.683 175.852 418.395 176.323 418.202C176.794 418.008 177.299 417.912 177.808 417.92Z" fill="url(#paint42_linear_288_6584)"/>
<path d="M193.905 417.919H194.501C195.495 417.919 196.449 418.314 197.152 419.017C197.855 419.72 198.25 420.674 198.25 421.668V441.974H190.156V421.81C190.137 421.306 190.22 420.803 190.4 420.332C190.579 419.86 190.852 419.43 191.203 419.067C191.553 418.704 191.972 418.415 192.437 418.218C192.901 418.02 193.4 417.919 193.905 417.919Z" fill="url(#paint43_linear_288_6584)"/>
<path d="M210.002 417.919H210.598C211.593 417.919 212.546 418.314 213.249 419.017C213.952 419.72 214.347 420.674 214.347 421.668V441.974H206.253V421.81C206.234 421.306 206.317 420.803 206.497 420.332C206.677 419.86 206.95 419.43 207.3 419.067C207.65 418.704 208.069 418.415 208.534 418.218C208.998 418.02 209.498 417.919 210.002 417.919Z" fill="url(#paint44_linear_288_6584)"/>
<path opacity="0.09" d="M242.541 291.181H143.198V310.38H242.541V291.181Z" fill="url(#paint45_linear_288_6584)"/>
<g filter="url(#filter6_di_288_6584)">
<path d="M632.842 483.222H509.785V592.164H632.842V483.222Z" fill="url(#paint46_linear_288_6584)"/>
</g>
<g filter="url(#filter7_i_288_6584)">
<path d="M608.958 277.066H533.698V483.222H608.958V277.066Z" fill="url(#paint47_linear_288_6584)"/>
</g>
<path d="M627.361 469.107H516.062V483.222H627.361V469.107Z" fill="#FF5D54"/>
<path opacity="0.44" d="M627.361 469.107H516.062V483.222H627.361V469.107Z" fill="white"/>
<path d="M535.09 277.066L572.691 118.481L604.414 277.066H535.09Z" fill="url(#paint48_linear_288_6584)"/>
<g filter="url(#filter8_d_288_6584)">
<path d="M544.263 227.679H521.145V310.38H544.263V227.679Z" fill="url(#paint49_linear_288_6584)"/>
</g>
<path d="M521.145 227.679L533.698 174.77L544.291 227.679H521.145Z" fill="url(#paint50_linear_288_6584)"/>
<path opacity="0.09" d="M548.58 318.417H594.02C595.677 318.417 597.266 319.075 598.438 320.247C599.609 321.419 600.268 323.008 600.268 324.665V469.107H542.36V324.778C542.345 323.951 542.494 323.129 542.8 322.359C543.105 321.59 543.561 320.889 544.139 320.297C544.718 319.705 545.409 319.234 546.171 318.911C546.933 318.589 547.752 318.421 548.58 318.417Z" fill="url(#paint51_linear_288_6584)"/>
<g filter="url(#filter9_d_288_6584)">
<path d="M620.488 227.679H597.371V310.38H620.488V227.679Z" fill="url(#paint52_linear_288_6584)"/>
</g>
<path d="M597.399 227.679L609.924 174.77L620.517 227.679H597.399Z" fill="url(#paint53_linear_288_6584)"/>
<g filter="url(#filter10_d_288_6584)">
<path d="M582.12 282.178H559.145V243.924C559.142 239.269 560.283 234.686 562.467 230.576L567.324 221.488C567.643 220.888 568.12 220.386 568.703 220.036C569.286 219.686 569.953 219.501 570.632 219.501C571.312 219.501 571.979 219.686 572.562 220.036C573.145 220.386 573.621 220.888 573.941 221.488L578.797 230.576C580.982 234.686 582.123 239.269 582.12 243.924V282.178Z" fill="url(#paint54_linear_288_6584)"/>
</g>
<path d="M570.135 246.508H570.76C571.754 246.508 572.708 246.903 573.411 247.606C574.114 248.309 574.509 249.263 574.509 250.257V273.147H566.415V250.257C566.415 249.268 566.806 248.318 567.503 247.616C568.2 246.914 569.146 246.516 570.135 246.508Z" fill="url(#paint55_linear_288_6584)"/>
<path d="M555.749 334.094H556.345C556.849 334.075 557.352 334.157 557.823 334.337C558.295 334.517 558.725 334.79 559.088 335.14C559.452 335.49 559.74 335.91 559.938 336.374C560.135 336.839 560.236 337.338 560.236 337.843V358.006H552V337.843C552 337.35 552.097 336.863 552.285 336.408C552.474 335.953 552.75 335.54 553.098 335.192C553.446 334.844 553.859 334.567 554.314 334.379C554.769 334.191 555.257 334.094 555.749 334.094Z" fill="url(#paint56_linear_288_6584)"/>
<path d="M571.928 334.094H572.581C573.575 334.094 574.529 334.489 575.232 335.192C575.935 335.895 576.33 336.848 576.33 337.842V358.006H568.236V337.842C568.236 336.858 568.623 335.913 569.314 335.211C570.004 334.51 570.943 334.109 571.928 334.094Z" fill="url(#paint57_linear_288_6584)"/>
<path d="M588.079 334.094H588.675C589.67 334.094 590.623 334.489 591.326 335.192C592.029 335.895 592.424 336.848 592.424 337.842V358.006H584.33V337.842C584.33 336.848 584.725 335.895 585.428 335.192C586.131 334.489 587.085 334.094 588.079 334.094Z" fill="url(#paint58_linear_288_6584)"/>
<path d="M555.749 375.643H556.345C557.339 375.643 558.293 376.038 558.996 376.741C559.699 377.444 560.094 378.397 560.094 379.392V399.556H552V379.392C552 378.899 552.097 378.412 552.285 377.957C552.474 377.502 552.75 377.089 553.098 376.741C553.446 376.393 553.859 376.117 554.314 375.928C554.769 375.74 555.257 375.643 555.749 375.643Z" fill="url(#paint59_linear_288_6584)"/>
<path d="M571.786 375.643H572.439C573.433 375.643 574.387 376.038 575.09 376.741C575.793 377.444 576.188 378.397 576.188 379.392V399.556H568.094V379.392C568.094 378.407 568.481 377.462 569.172 376.761C569.862 376.059 570.801 375.658 571.786 375.643Z" fill="url(#paint60_linear_288_6584)"/>
<path d="M587.937 375.643H588.533C589.527 375.643 590.481 376.038 591.184 376.741C591.887 377.444 592.282 378.397 592.282 379.392V399.556H584.188V379.392C584.188 378.397 584.583 377.444 585.286 376.741C585.989 376.038 586.943 375.643 587.937 375.643Z" fill="url(#paint61_linear_288_6584)"/>
<path d="M555.749 417.164H556.345C557.339 417.164 558.293 417.559 558.996 418.262C559.699 418.965 560.094 419.918 560.094 420.913V441.219H552V421.055C552 420.562 552.097 420.075 552.285 419.62C552.474 419.165 552.75 418.752 553.098 418.404C553.446 418.056 553.859 417.779 554.314 417.591C554.769 417.403 555.257 417.306 555.749 417.306V417.164Z" fill="url(#paint62_linear_288_6584)"/>
<path d="M571.786 417.164H572.439C573.433 417.164 574.387 417.559 575.09 418.262C575.793 418.965 576.188 419.918 576.188 420.913V441.219H568.094V421.055C568.094 420.06 568.489 419.107 569.192 418.404C569.895 417.701 570.848 417.306 571.843 417.306L571.786 417.164Z" fill="url(#paint63_linear_288_6584)"/>
<path d="M587.937 417.164H588.533C589.527 417.164 590.481 417.559 591.184 418.262C591.887 418.965 592.282 419.918 592.282 420.913V441.219H584.188V421.055C584.188 420.06 584.583 419.107 585.286 418.404C585.989 417.701 586.943 417.306 587.937 417.306V417.164Z" fill="url(#paint64_linear_288_6584)"/>
<path opacity="0.09" d="M620.488 291.181H521.145V310.38H620.488V291.181Z" fill="url(#paint65_linear_288_6584)"/>
<g filter="url(#filter11_d_288_6584)">
<path d="M391.158 286.467H393.033C396.106 286.467 399.053 287.688 401.226 289.861C403.399 292.034 404.62 294.981 404.62 298.054V321.484C404.62 323.48 403.827 325.394 402.416 326.806C401.004 328.217 399.09 329.01 397.094 329.01H387.126C385.13 329.01 383.215 328.217 381.804 326.806C380.393 325.394 379.6 323.48 379.6 321.484V298.054C379.6 296.532 379.899 295.026 380.482 293.62C381.064 292.214 381.917 290.937 382.993 289.861C384.069 288.785 385.347 287.931 386.753 287.349C388.158 286.767 389.665 286.467 391.187 286.467H391.158Z" fill="url(#paint66_linear_288_6584)"/>
</g>
</g>
<defs>
<filter id="filter0_di_288_6584" x="-36.3643" y="447.551" width="862.761" height="195.912" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="4" dy="4"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_288_6584"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_288_6584" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="-38"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="shape" result="effect2_innerShadow_288_6584"/>
</filter>
<filter id="filter1_i_288_6584" x="131.838" y="445.222" width="123.057" height="146.942" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feMorphology radius="30" operator="erode" in="SourceAlpha" result="effect1_innerShadow_288_6584"/>
<feOffset dy="-38"/>
<feGaussianBlur stdDeviation="32"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="shape" result="effect1_innerShadow_288_6584"/>
</filter>
<filter id="filter2_i_288_6584" x="155.751" y="239.066" width="75.2598" height="244.156" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feMorphology radius="30" operator="erode" in="SourceAlpha" result="effect1_innerShadow_288_6584"/>
<feOffset dy="-38"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="shape" result="effect1_innerShadow_288_6584"/>
</filter>
<filter id="filter3_d_288_6584" x="138.198" y="222.679" width="43.1177" height="102.701" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_288_6584"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_288_6584" result="shape"/>
</filter>
<filter id="filter4_d_288_6584" x="214.424" y="222.679" width="43.1177" height="102.701" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_288_6584"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_288_6584" result="shape"/>
</filter>
<filter id="filter5_d_288_6584" x="176.112" y="214.501" width="43.0039" height="82.677" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_288_6584"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_288_6584" result="shape"/>
</filter>
<filter id="filter6_di_288_6584" x="473.785" y="445.222" width="203.057" height="190.942" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="4" dy="4"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_288_6584"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_288_6584" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="-38"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="shape" result="effect2_innerShadow_288_6584"/>
</filter>
<filter id="filter7_i_288_6584" x="533.698" y="239.066" width="75.2603" height="244.156" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feMorphology radius="30" operator="erode" in="SourceAlpha" result="effect1_innerShadow_288_6584"/>
<feOffset dy="-38"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="shape" result="effect1_innerShadow_288_6584"/>
</filter>
<filter id="filter8_d_288_6584" x="516.145" y="222.679" width="43.1177" height="102.701" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_288_6584"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_288_6584" result="shape"/>
</filter>
<filter id="filter9_d_288_6584" x="592.371" y="222.679" width="43.1177" height="102.701" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_288_6584"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_288_6584" result="shape"/>
</filter>
<filter id="filter10_d_288_6584" x="554.145" y="214.501" width="42.9756" height="82.677" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_288_6584"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_288_6584" result="shape"/>
</filter>
<filter id="filter11_d_288_6584" x="374.6" y="281.467" width="45.0205" height="62.5432" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_288_6584"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_288_6584" result="shape"/>
</filter>
<linearGradient id="paint0_linear_288_6584" x1="763.269" y1="443.278" x2="767.744" y2="443.524" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint1_linear_288_6584" x1="737.453" y1="438.777" x2="741.931" y2="439.004" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint2_linear_288_6584" x1="711.212" y1="431.099" x2="715.691" y2="431.301" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint3_linear_288_6584" x1="682.982" y1="418.045" x2="687.465" y2="418.214" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint4_linear_288_6584" x1="656.741" y1="399.665" x2="661.225" y2="399.802" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint5_linear_288_6584" x1="630.669" y1="383.185" x2="635.155" y2="383.303" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint6_linear_288_6584" x1="635.643" y1="340.057" x2="699.044" y2="453.623" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint7_linear_288_6584" x1="0.445206" y1="442.937" x2="4.92036" y2="443.183" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint8_linear_288_6584" x1="26.2323" y1="442.937" x2="30.7075" y2="443.183" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint9_linear_288_6584" x1="52.5018" y1="430.758" x2="56.9814" y2="430.96" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint10_linear_288_6584" x1="80.7035" y1="417.705" x2="85.1858" y2="417.873" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint11_linear_288_6584" x1="106.974" y1="399.324" x2="111.458" y2="399.461" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint12_linear_288_6584" x1="133.045" y1="382.844" x2="137.53" y2="382.962" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint13_linear_288_6584" x1="-0.364253" y1="542.507" x2="713.543" y2="542.507" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint14_linear_288_6584" x1="291.79" y1="322.587" x2="292.84" y2="344.521" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint15_linear_288_6584" x1="247.83" y1="302.657" x2="261.865" y2="323.758" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint16_linear_288_6584" x1="275.639" y1="302.657" x2="289.67" y2="323.77" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint17_linear_288_6584" x1="31.6599" y1="339.702" x2="96.8597" y2="449.96" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint18_linear_288_6584" x1="303.181" y1="302.657" x2="317.217" y2="323.758" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint19_linear_288_6584" x1="330.991" y1="302.657" x2="345.022" y2="323.77" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint20_linear_288_6584" x1="359.442" y1="302.657" x2="373.478" y2="323.758" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint21_linear_288_6584" x1="406.677" y1="302.657" x2="420.708" y2="323.77" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint22_linear_288_6584" x1="435.304" y1="302.657" x2="449.335" y2="323.77" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint23_linear_288_6584" x1="463.136" y1="302.657" x2="477.167" y2="323.77" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint24_linear_288_6584" x1="491.763" y1="302.657" x2="505.794" y2="323.77" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint25_linear_288_6584" x1="131.838" y1="537.693" x2="244.071" y2="537.693" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint26_linear_288_6584" x1="155.751" y1="380.144" x2="224.391" y2="380.144" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint27_linear_288_6584" x1="171.575" y1="137.425" x2="253.38" y2="177.514" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint28_linear_288_6584" x1="143.198" y1="269.029" x2="164.282" y2="269.029" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint29_linear_288_6584" x1="148.011" y1="181.09" x2="175.296" y2="194.455" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint30_linear_288_6584" x1="176.445" y1="336.417" x2="247.948" y2="367.237" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint31_linear_288_6584" x1="290.229" y1="299.613" x2="290.264" y2="303.617" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint32_linear_288_6584" x1="219.424" y1="269.029" x2="240.508" y2="269.029" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint33_linear_288_6584" x1="224.243" y1="181.09" x2="251.548" y2="194.481" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint34_linear_288_6584" x1="181.112" y1="250.84" x2="202.092" y2="250.84" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint35_linear_288_6584" x1="190.125" y1="249.69" x2="200.738" y2="253.305" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint36_linear_288_6584" x1="175.7" y1="336.95" x2="186.108" y2="340.927" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint37_linear_288_6584" x1="191.841" y1="336.95" x2="202.196" y2="340.879" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint38_linear_288_6584" x1="207.938" y1="336.95" x2="218.292" y2="340.879" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint39_linear_288_6584" x1="175.7" y1="378.863" x2="186.108" y2="382.84" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint40_linear_288_6584" x1="191.841" y1="378.863" x2="202.196" y2="382.792" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint41_linear_288_6584" x1="207.938" y1="378.863" x2="218.292" y2="382.792" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint42_linear_288_6584" x1="175.697" y1="420.793" x2="186.124" y2="424.755" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint43_linear_288_6584" x1="191.839" y1="420.793" x2="202.211" y2="424.706" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint44_linear_288_6584" x1="207.936" y1="420.793" x2="218.308" y2="424.706" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint45_linear_288_6584" x1="163.881" y1="293.475" x2="168.076" y2="317.813" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint46_linear_288_6584" x1="509.785" y1="537.693" x2="622.018" y2="537.693" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint47_linear_288_6584" x1="533.698" y1="380.144" x2="602.338" y2="380.144" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint48_linear_288_6584" x1="549.523" y1="137.425" x2="631.328" y2="177.514" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint49_linear_288_6584" x1="521.145" y1="269.029" x2="542.229" y2="269.029" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint50_linear_288_6584" x1="525.964" y1="181.09" x2="553.269" y2="194.481" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint51_linear_288_6584" x1="554.415" y1="336.417" x2="625.894" y2="367.211" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint52_linear_288_6584" x1="597.371" y1="269.029" x2="618.455" y2="269.029" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint53_linear_288_6584" x1="602.212" y1="181.09" x2="629.497" y2="194.454" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint54_linear_288_6584" x1="559.145" y1="250.84" x2="580.099" y2="250.84" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint55_linear_288_6584" x1="568.1" y1="249.69" x2="578.714" y2="253.305" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint56_linear_288_6584" x1="553.715" y1="336.948" x2="564.204" y2="340.997" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint57_linear_288_6584" x1="569.921" y1="336.95" x2="580.275" y2="340.879" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint58_linear_288_6584" x1="586.015" y1="336.95" x2="596.369" y2="340.879" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint59_linear_288_6584" x1="553.685" y1="378.499" x2="564.039" y2="382.428" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint60_linear_288_6584" x1="569.779" y1="378.499" x2="580.133" y2="382.428" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint61_linear_288_6584" x1="585.873" y1="378.499" x2="596.227" y2="382.428" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint62_linear_288_6584" x1="553.685" y1="420.037" x2="564.055" y2="423.949" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint63_linear_288_6584" x1="569.779" y1="420.037" x2="580.148" y2="423.949" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint64_linear_288_6584" x1="585.873" y1="420.037" x2="596.243" y2="423.949" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint65_linear_288_6584" x1="541.827" y1="293.475" x2="546.023" y2="317.813" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint66_linear_288_6584" x1="379.6" y1="307.738" x2="402.419" y2="307.738" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<clipPath id="clip0_288_6584">
<rect width="1280" height="1012" fill="white"/>
</clipPath>
</defs>
</svg>

    </div>
    <div class="container">
      <div class="main__block">
        <div class="main__lang">
          <div class="main__cards__card__wrap">
            <div class="main__cards__card">
              <div class="main__cards__card__head">
                <?php echo $course['title']; ?>
              </div>
              <div class="main__cards__card__body">
                <div class="main__cards__links">
                  <div class="text main__cards__card__for">Курсы для:</div>
                  <?php foreach ($cat as $value) {
                		echo "<div class='main__cards__links__item'>$value</div>";
                	} ?>
                </div>
              </div>
              <div class="main__cards__row main__cards__select">
                <div class="main__cards__chose__wrap">
                  <div class="main__cards__chose main__card">
                    <div class="text main__cards__card__for">Курсы для:</div>
                  </div>
                </div>
                <div class="main__cards__chose__wrap">
                  <div class="main__cards__sign main__card">
                    Записаться
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main__about">
          <div class="main__about__row">
            <div class="text_med text_bold">О курсе</div>
            <div class="wrap_df">
              <div class="btn">Уровень обучения</div>
              <div id="current__level" class="btn main__level__item_active"><?php echo $level[0]; ?></div>
            </div>
          </div>
          <div class="main__about__text">
            <?php echo $text; ?>
          </div>
        </div>
        <div class="main__level">
          <?php 
          $i = 0;
          foreach ($level as $value) {
          	if ($i == 0) {
          		echo "<div class='main__level__item main__level__item_active'>$value</div>";
          	} else {
          		echo "<div class='main__level__item'>$value</div>";
          	}
          	$i = $i + 1;
          } ?>
          <div class="main__level__info">
            <div class="main__level__more">
              <div class="triangle"></div>
              Уровень обучение обозначает
степень углубленности обучения
и уровень знаний который будет
дан. Нажмите, чтобы узнать подробнее...
            </div>
            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.847826" y="0.347826" width="15.3043" height="15.3043" rx="7.65217" stroke="#979797" stroke-width="0.695652"/>
<path d="M9.19216 11.0869H8.09097V6.1837H9.19216V11.0869ZM8.023 4.91031C8.023 4.74112 8.07587 4.60064 8.18161 4.48886C8.29037 4.37708 8.44444 4.32119 8.64384 4.32119C8.84323 4.32119 8.9973 4.37708 9.10606 4.48886C9.21482 4.60064 9.2692 4.74112 9.2692 4.91031C9.2692 5.07647 9.21482 5.21544 9.10606 5.32722C8.9973 5.43598 8.84323 5.49036 8.64384 5.49036C8.44444 5.49036 8.29037 5.43598 8.18161 5.32722C8.07587 5.21544 8.023 5.07647 8.023 4.91031Z" fill="#979797"/>
</svg>

          </div>
        </div>
      </div>
    </div>
  </section>    
  <section class="materials">
    <div class="materials__bg">
      <svg width="1280" height="1009" viewBox="0 0 1280 1009" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M113.037 16.1266C64.4447 31.8034 62.8543 11.4122 11.1379 5.1358C7.43727 4.65181 3.72232 4.29891 0 4.07742V1008.5H1280V3.91455C1213.5 1.09174 1219 35.9146 1151.5 35.9146C1119 35.9146 1086.5 5.59174 1048.5 7.91455C1010.5 10.2374 1002.5 35.9146 965 35.9146C927.5 35.9146 914 -14.4588 859.5 12.9146C805 40.2879 769.5 5.99994 735 5.99994C700.5 5.99994 684.786 22.6803 657.011 28.4806C620.914 36.1202 616.228 -2.56065 575.474 14.2805C534.72 31.1217 514.358 27.2309 476.728 14.2805C439.098 1.33015 429.697 9.96379 392.067 23.4822C354.437 37.0006 345.065 20.9546 308.997 3.91461C272.929 -13.1254 263.5 31.5762 221.184 21.8066C178.868 12.037 161.63 0.449769 113.037 16.1266Z" fill="url(#paint0_linear_288_6657)"/>
<defs>
<linearGradient id="paint0_linear_288_6657" x1="1218" y1="996.692" x2="1088.95" y2="77.6244" gradientUnits="userSpaceOnUse">
<stop stop-color="#E7E7E7"/>
<stop offset="1" stop-color="#F3F3F3"/>
</linearGradient>
</defs>
</svg>

    </div>
    <div class="container">
      <div class="materials__block">
         <div class="materials__main">
           <div class="text_med text_bold">Материалы курса</div>
           <div class="text">
             Здесь описываются материалы которые будут изучаться в ходе прохождения курса  
              <br><br>
             Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в.
           </div>
         </div>
         <div class="materials__slider">
          <div class="materials__slider__action  materials__slider__left">
            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16.5" cy="16.5" r="16" stroke="#979797"/>
<path d="M15.4679 13.2129C15.7158 12.9355 15.7158 12.4856 15.4679 12.2081C15.2201 11.9306 14.8184 11.9306 14.5705 12.2081L11.1859 15.9976C11.062 16.1363 11 16.3182 11 16.5C11 16.5964 11.0171 16.6883 11.0482 16.772C11.0791 16.8557 11.125 16.9343 11.1859 17.0024L14.5705 20.7919C14.8184 21.0694 15.2201 21.0694 15.4679 20.7919C15.7158 20.5144 15.7158 20.0646 15.4679 19.7871L13.1667 17.2105H21.3654C21.7159 17.2105 22 16.8924 22 16.5C22 16.1076 21.7159 15.7895 21.3654 15.7895H13.1667L15.4679 13.2129Z" fill="#979797"/>
</svg>

          </div>
          <div class="materials__slider__action  materials__slider__right">
            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16.5" cy="16.5" r="16" transform="rotate(-180 16.5 16.5)" stroke="#979797"/>
<path d="M17.5321 19.7871C17.2842 20.0645 17.2842 20.5144 17.5321 20.7919C17.7799 21.0694 18.1816 21.0694 18.4295 20.7919L21.8141 17.0024C21.938 16.8637 22 16.6818 22 16.5C22 16.4036 21.9829 16.3117 21.9518 16.228C21.9209 16.1443 21.875 16.0657 21.8141 15.9976L18.4295 12.2081C18.1816 11.9306 17.7799 11.9306 17.5321 12.2081C17.2842 12.4856 17.2842 12.9354 17.5321 13.2129L19.8333 15.7895H11.6346C11.2841 15.7895 11 16.1076 11 16.5C11 16.8924 11.2841 17.2105 11.6346 17.2105H19.8333L17.5321 19.7871Z" fill="#979797"/>
</svg>


          </div>
           <div class="materials__slider__block">
             <div class="text_med text_bold">Отзывы курса</div>
             <div data-star-count="4" class="slider_active slider__change">
               <div class="text text_bold text_red materials__slider__name">Натали Сафронова</div>
             <div class="text_small">Спасибо большое за вебинар.
Узнала как работать с изображениями
и о календаре. Было полезно
и очень доступно, также приятно
получить сертификат за участие.</div>
             </div>
             <div data-star-count="5" class="slider_noactive slider__change">
               <div class="text text_bold text_red materials__slider__name">Николай Матюшко</div>
             <div class="text_small">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro architecto qui corrupti nobis tenetur cumque sapiente, alias provident sequi, placeat repellat, maiores, esse rem. Ut asperiores velit tenetur quis officia.</div>
             </div>
             <div data-star-count="3" class="slider_noactive slider__change">
               <div class="text text_bold text_red materials__slider__name">Павел Безличенко</div>
             <div class="text_small">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro architecto qui corrupti nobis tenetur cumque sapiente, alias provident sequi,</div>
             </div>
            <div class="materials__slider__row">
              <div data-star="4" class="materials__slider__stars">
                <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.04894 0.927049C8.3483 0.00573802 9.6517 0.00574017 9.95106 0.927051L11.2451 4.90983C11.379 5.32185 11.763 5.60081 12.1962 5.60081H16.3839C17.3527 5.60081 17.7554 6.84043 16.9717 7.40983L13.5838 9.87132C13.2333 10.126 13.0866 10.5773 13.2205 10.9894L14.5146 14.9721C14.8139 15.8934 13.7595 16.6596 12.9757 16.0902L9.58778 13.6287C9.2373 13.374 8.7627 13.374 8.41221 13.6287L5.02426 16.0902C4.24054 16.6596 3.18607 15.8934 3.48542 14.9721L4.7795 10.9894C4.91338 10.5773 4.76672 10.126 4.41623 9.87132L1.02827 7.40983C0.244561 6.84043 0.647338 5.60081 1.61606 5.60081H5.8038C6.23703 5.60081 6.62099 5.32185 6.75486 4.90983L8.04894 0.927049Z" fill="white"/>
</svg>
<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.04894 0.927049C8.3483 0.00573802 9.6517 0.00574017 9.95106 0.927051L11.2451 4.90983C11.379 5.32185 11.763 5.60081 12.1962 5.60081H16.3839C17.3527 5.60081 17.7554 6.84043 16.9717 7.40983L13.5838 9.87132C13.2333 10.126 13.0866 10.5773 13.2205 10.9894L14.5146 14.9721C14.8139 15.8934 13.7595 16.6596 12.9757 16.0902L9.58778 13.6287C9.2373 13.374 8.7627 13.374 8.41221 13.6287L5.02426 16.0902C4.24054 16.6596 3.18607 15.8934 3.48542 14.9721L4.7795 10.9894C4.91338 10.5773 4.76672 10.126 4.41623 9.87132L1.02827 7.40983C0.244561 6.84043 0.647338 5.60081 1.61606 5.60081H5.8038C6.23703 5.60081 6.62099 5.32185 6.75486 4.90983L8.04894 0.927049Z" fill="white"/>
</svg>
<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.04894 0.927049C8.3483 0.00573802 9.6517 0.00574017 9.95106 0.927051L11.2451 4.90983C11.379 5.32185 11.763 5.60081 12.1962 5.60081H16.3839C17.3527 5.60081 17.7554 6.84043 16.9717 7.40983L13.5838 9.87132C13.2333 10.126 13.0866 10.5773 13.2205 10.9894L14.5146 14.9721C14.8139 15.8934 13.7595 16.6596 12.9757 16.0902L9.58778 13.6287C9.2373 13.374 8.7627 13.374 8.41221 13.6287L5.02426 16.0902C4.24054 16.6596 3.18607 15.8934 3.48542 14.9721L4.7795 10.9894C4.91338 10.5773 4.76672 10.126 4.41623 9.87132L1.02827 7.40983C0.244561 6.84043 0.647338 5.60081 1.61606 5.60081H5.8038C6.23703 5.60081 6.62099 5.32185 6.75486 4.90983L8.04894 0.927049Z" fill="white"/>
</svg>
<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.04894 0.927049C8.3483 0.00573802 9.6517 0.00574017 9.95106 0.927051L11.2451 4.90983C11.379 5.32185 11.763 5.60081 12.1962 5.60081H16.3839C17.3527 5.60081 17.7554 6.84043 16.9717 7.40983L13.5838 9.87132C13.2333 10.126 13.0866 10.5773 13.2205 10.9894L14.5146 14.9721C14.8139 15.8934 13.7595 16.6596 12.9757 16.0902L9.58778 13.6287C9.2373 13.374 8.7627 13.374 8.41221 13.6287L5.02426 16.0902C4.24054 16.6596 3.18607 15.8934 3.48542 14.9721L4.7795 10.9894C4.91338 10.5773 4.76672 10.126 4.41623 9.87132L1.02827 7.40983C0.244561 6.84043 0.647338 5.60081 1.61606 5.60081H5.8038C6.23703 5.60081 6.62099 5.32185 6.75486 4.90983L8.04894 0.927049Z" fill="white"/>
</svg>
<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.04894 0.927049C8.3483 0.00573802 9.6517 0.00574017 9.95106 0.927051L11.2451 4.90983C11.379 5.32185 11.763 5.60081 12.1962 5.60081H16.3839C17.3527 5.60081 17.7554 6.84043 16.9717 7.40983L13.5838 9.87132C13.2333 10.126 13.0866 10.5773 13.2205 10.9894L14.5146 14.9721C14.8139 15.8934 13.7595 16.6596 12.9757 16.0902L9.58778 13.6287C9.2373 13.374 8.7627 13.374 8.41221 13.6287L5.02426 16.0902C4.24054 16.6596 3.18607 15.8934 3.48542 14.9721L4.7795 10.9894C4.91338 10.5773 4.76672 10.126 4.41623 9.87132L1.02827 7.40983C0.244561 6.84043 0.647338 5.60081 1.61606 5.60081H5.8038C6.23703 5.60081 6.62099 5.32185 6.75486 4.90983L8.04894 0.927049Z" fill="white"/>
</svg>

              </div>
              <a href="#" class="materials__slider__more text">Подробнее</a>
            </div>
           </div>
         </div>
      </div>
    </div>
  </section>
<link rel="stylesheet" href="/temp/advantages.css">
<section class="advantages">
      <div class="container">
        <div class="title">Почему курсы Why’U?</div>
        <div class="advantages__block">
          <div class="advantages__card__wrap">
            <div class="advantages__card">
              <div class="advantages__card__img">
                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8375 4.53262C6.97772 5.15492 2.40703 10.2713 2.40703 16.4909C2.40703 23.1304 7.61576 28.5127 14.041 28.5127C20.0599 28.5127 25.0113 23.7897 25.6136 17.7345H14.041C13.3764 17.7345 12.8375 17.1777 12.8375 16.4909V4.53262ZM0 16.4909C0 8.47774 6.28639 1.98178 14.041 1.98178C14.7057 1.98178 15.2446 2.53858 15.2446 3.22542V15.2472H26.8786C27.5432 15.2472 28.0821 15.8041 28.0821 16.4909C28.0821 24.5041 21.7957 31 14.041 31C6.28639 31 0 24.5041 0 16.4909Z" fill="#585858"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M19.6575 2.68427V10.6873H27.4023C26.4987 6.73348 23.4837 3.61788 19.6575 2.68427ZM18.8519 0.0112753C24.6614 0.758337 29.266 5.51648 29.9891 11.5196C30.0985 12.4285 29.3695 13.1745 28.4833 13.1745H18.0528C17.6097 13.1745 17.2504 12.8034 17.2504 12.3454V1.56723C17.2504 0.651451 17.9725 -0.101813 18.8519 0.0112753Z" fill="#585858"/>
</svg>
              </div>
<div class="advantages__card__text">
  Лучшая статистика
обучающихся
</div>
            </div>
          </div>
          <div class="advantages__card__wrap">
            <div class="advantages__card">
              <div class="advantages__card__img">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.0759 21.3876C10.2079 21.4939 9.59035 22.2835 9.6965 23.1515C9.80265 24.0194 10.5924 24.6371 11.4603 24.5309C12.3283 24.4248 12.9459 23.635 12.8398 22.767C12.7336 21.899 11.9439 21.2815 11.0759 21.3876Z" fill="#585858"/>
<path d="M5.78449 17.2494C5.67832 16.3814 6.29592 15.5917 7.1639 15.4856C8.03189 15.3793 8.82157 15.997 8.92774 16.865C9.03388 17.733 8.41629 18.5226 7.5483 18.6288C6.68032 18.7349 5.89063 18.1174 5.78449 17.2494Z" fill="#585858"/>
<path d="M9.53832 8.81465C8.67034 8.9208 8.05276 9.7105 8.1589 10.5785C8.26505 11.4465 9.05474 12.064 9.92274 11.9579C10.7907 11.8518 11.4083 11.0621 11.3022 10.1941C11.196 9.32608 10.4063 8.7085 9.53832 8.81465Z" fill="#585858"/>
<path d="M21.8541 11.6951C21.748 10.8271 22.3655 10.0374 23.2335 9.93126C24.1015 9.82511 24.8912 10.4427 24.9973 11.3107C25.1034 12.1787 24.4859 12.9684 23.6179 13.0745C22.7499 13.1807 21.9602 12.5631 21.8541 11.6951Z" fill="#585858"/>
<path d="M15.9883 14.2244C15.1203 14.3307 14.5028 15.1203 14.6089 15.9883C14.715 16.8563 15.5048 17.4739 16.3727 17.3677C17.2407 17.2616 17.8584 16.4718 17.7521 15.6038C17.6461 14.7359 16.8563 14.1184 15.9883 14.2244Z" fill="#585858"/>
<path d="M15.0391 8.14191C14.9328 7.27393 15.5505 6.48423 16.4185 6.37808C17.2865 6.27193 18.0761 6.88953 18.1823 7.75751C18.2884 8.6255 17.6709 9.41518 16.8029 9.52133C15.9349 9.62748 15.1452 9.0099 15.0391 8.14191Z" fill="#585858"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0.567064 15.6259C0.773689 7.10249 7.85076 0.360409 16.3741 0.567034C24.8975 0.773659 31.6397 7.85072 31.4331 16.3741C31.4199 16.9139 31.2385 17.4071 30.9042 17.8131C30.5845 18.2015 30.1705 18.4561 29.7622 18.6266C28.9672 18.9585 27.9709 19.0625 26.985 19.0691C22.7279 19.098 19.0303 22.7596 18.7887 27.0781C18.7322 28.0857 18.5604 29.1105 18.1269 29.9158C17.9024 30.3327 17.587 30.7293 17.1452 31.0165C16.693 31.3105 16.1745 31.4462 15.6258 31.4329C7.10253 31.2263 0.360439 24.1493 0.567064 15.6259ZM16.3167 2.94134C9.10449 2.76651 3.1162 8.47133 2.94137 15.6835C2.76654 22.8956 8.47137 28.8839 15.6835 29.0587C15.7913 29.0612 15.8312 29.0381 15.8507 29.0253C15.8808 29.0058 15.9506 28.948 16.0358 28.7897C16.2215 28.4447 16.3675 27.8365 16.4174 26.9454C16.7252 21.4435 21.3904 16.732 26.969 16.6943C27.8588 16.6883 28.4835 16.5868 28.8472 16.4349C28.9756 16.3813 29.0357 16.336 29.0587 16.3154C29.2329 9.10378 23.5283 3.11615 16.3167 2.94134Z" fill="#585858"/>
</svg>

              </div>
<div class="advantages__card__text">
  Лучшая статистика
обучающихся
</div>
            </div>
          </div>
          <div class="advantages__card__wrap">
            <div class="advantages__card">
              <div class="advantages__card__img">
               <svg width="28" height="32" viewBox="0 0 28 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.8541 6.89583C11.0122 6.89583 8.70831 9.19969 8.70831 12.0417C8.70831 14.8836 11.0122 17.1875 13.8541 17.1875C16.6961 17.1875 19 14.8836 19 12.0417C19 9.19969 16.6961 6.89583 13.8541 6.89583ZM11.0833 12.0417C11.0833 10.5114 12.3239 9.27083 13.8541 9.27083C15.3844 9.27083 16.625 10.5114 16.625 12.0417C16.625 13.572 15.3844 14.8125 13.8541 14.8125C12.3239 14.8125 11.0833 13.572 11.0833 12.0417Z" fill="#585858"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.8542 0.5625C7.5144 0.5625 2.375 5.70191 2.375 12.0417C2.375 14.3662 3.06595 16.5293 4.25366 18.337L0.159093 25.4289C-0.0737524 25.8323 -0.0493693 26.3344 0.221476 26.7133C0.492305 27.0922 0.959594 27.2778 1.41656 27.1878L5.55519 26.3743L6.91991 30.3653C7.0706 30.8059 7.46496 31.1178 7.92846 31.1629C8.39198 31.2081 8.83908 30.9782 9.07194 30.5747L13.1565 23.4999C13.3874 23.5139 13.62 23.5208 13.8542 23.5208C14.0883 23.5208 14.3209 23.5139 14.5518 23.4999L18.6365 30.5747C18.8695 30.9785 19.3173 31.2086 19.7812 31.1628C20.2451 31.1172 20.6394 30.8043 20.7893 30.3629L22.147 26.3637L26.2892 27.1874C26.7465 27.2784 27.2146 27.0933 27.4862 26.7144C27.7577 26.3354 27.7823 25.8327 27.5492 25.4289L23.4547 18.337C24.6424 16.5293 25.3333 14.3662 25.3333 12.0417C25.3333 5.70191 20.194 0.5625 13.8542 0.5625ZM4.75 12.0417C4.75 7.01357 8.82608 2.9375 13.8542 2.9375C18.8822 2.9375 22.9583 7.01357 22.9583 12.0417C22.9583 17.0697 18.8822 21.1458 13.8542 21.1458C8.82608 21.1458 4.75 17.0697 4.75 12.0417ZM10.6618 23.0712C8.83623 22.5436 7.19778 21.5752 5.86927 20.2886L3.52244 24.3535L6.11431 23.844C6.69706 23.7294 7.27483 24.063 7.46698 24.6249L8.32167 27.1243L10.6618 23.0712ZM19.3828 27.1177L17.0466 23.0712C18.8721 22.5436 20.5105 21.5752 21.8391 20.2886L24.1821 24.3469L21.5889 23.8313C21.0045 23.7151 20.4245 24.05 20.2329 24.6143L19.3828 27.1177Z" fill="#585858"/>
</svg>
 
              </div>
<div class="advantages__card__text">
  Лучшая статистика
обучающихся
</div>
            </div>
          </div>
          <div class="advantages__card__wrap">
            <div class="advantages__card">
              <div class="advantages__card__img">
                <svg width="33" height="30" viewBox="0 0 33 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.5285 24.954C15.7203 25.0692 15.9256 25.1202 16.125 25.1176C16.3244 25.1202 16.5297 25.0692 16.7215 24.954L18.4245 23.9324C21.7642 21.9285 25.8487 21.6012 29.4649 23.0477C30.7989 23.5812 32.25 22.5989 32.25 21.1622V3.67377C32.25 2.80685 31.7221 2.02726 30.9172 1.70529C26.2596 -0.157755 20.9988 0.263775 16.6973 2.84471L16.125 3.18809L15.5527 2.84471C11.2512 0.263775 5.99035 -0.157755 1.33272 1.70529C0.527805 2.02726 0 2.80685 0 3.67377V21.1622C0 22.5989 1.45108 23.5812 2.78508 23.0477C6.40128 21.6012 10.4858 21.9285 13.8255 23.9324L15.5285 24.954ZM2.25 3.76201V20.8422C6.44369 19.2702 11.1327 19.6928 14.9832 22.0029L15 22.0131V5.13701L14.3951 4.77407C10.7216 2.56998 6.23451 2.19747 2.25 3.76201ZM17.2668 22.0029L17.25 22.0131V5.13701L17.8549 4.77407C21.5285 2.56998 26.0156 2.19747 30 3.76201V20.8422C25.8063 19.2702 21.1173 19.6928 17.2668 22.0029Z" fill="#585858"/>
<path d="M12.0377 25.5635C9.00194 23.7926 5.24804 23.7926 2.21225 25.5635L2.05814 25.6533C1.52146 25.9664 1.34018 26.6552 1.65325 27.1919C1.96631 27.7286 2.65516 27.9099 3.19184 27.5969L3.34597 27.5069C5.68118 26.1447 8.5688 26.1447 10.904 27.5069L12.5349 28.4583C14.7534 29.7524 17.4966 29.7524 19.7151 28.4583L21.3459 27.5069C23.6812 26.1447 26.5687 26.1447 28.9041 27.5069L29.0581 27.5969C29.5948 27.9099 30.2836 27.7286 30.5967 27.1919C30.9097 26.6552 30.7285 25.9664 30.1918 25.6533L30.0378 25.5635C27.0019 23.7926 23.248 23.7926 20.2122 25.5635L18.5814 26.5148C17.0635 27.4002 15.1864 27.4002 13.6686 26.5148L12.0377 25.5635Z" fill="#585858"/>
</svg>

              </div>
<div class="advantages__card__text">
  Лучшая статистика
обучающихся
</div>
            </div>
          </div>
        </div>
      </div>
    </section>

<script>
  $('.advantages__card').height($('.advantages__card').outerWidth())
</script><link rel="stylesheet" href="/temp/footer.css">
<footer class="footer">
      <div class="container footer__container">
        <div class="wrapper footer__wrapper">
           <div class="footer__about">
            <div class="footer__social">
              <div>Наши соц сети</div>
              <div class="footer__links__wrap"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.4877 3.78769C11.4723 2.80312 12.8076 2.25 14.2 2.25H16.9C17.3142 2.25 17.65 2.58579 17.65 3V6.6C17.65 7.01421 17.3142 7.35 16.9 7.35H14.2C14.1602 7.35 14.1221 7.3658 14.0939 7.39393C14.0658 7.42206 14.05 7.46022 14.05 7.5V9.45H16.9C17.131 9.45 17.349 9.5564 17.4912 9.73844C17.6333 9.92048 17.6836 10.1578 17.6276 10.3819L16.7276 13.9819C16.6441 14.3158 16.3442 14.55 16 14.55H14.05V21C14.05 21.4142 13.7142 21.75 13.3 21.75H9.7C9.28579 21.75 8.95 21.4142 8.95 21V14.55H7C6.58579 14.55 6.25 14.2142 6.25 13.8V10.2C6.25 9.78579 6.58579 9.45 7 9.45H8.95V7.5C8.95 6.10761 9.50312 4.77226 10.4877 3.78769ZM14.2 3.75C13.2054 3.75 12.2516 4.14509 11.5483 4.84835C10.8451 5.55161 10.45 6.50544 10.45 7.5V10.2C10.45 10.6142 10.1142 10.95 9.7 10.95H7.75V13.05H9.7C10.1142 13.05 10.45 13.3858 10.45 13.8V20.25H12.55V13.8C12.55 13.3858 12.8858 13.05 13.3 13.05H15.4144L15.9394 10.95H13.3C12.8858 10.95 12.55 10.6142 12.55 10.2V7.5C12.55 7.06239 12.7238 6.64271 13.0333 6.33327C13.3427 6.02384 13.7624 5.85 14.2 5.85H16.15V3.75H14.2Z" fill="#585858"/>
</svg>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16 7C16 6.44772 16.4477 6 17 6C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8C16.4477 8 16 7.55228 16 7Z" fill="#585858"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 7.25C9.37665 7.25 7.25 9.37665 7.25 12C7.25 14.6234 9.37665 16.75 12 16.75C14.6234 16.75 16.75 14.6234 16.75 12C16.75 9.37665 14.6234 7.25 12 7.25ZM8.75 12C8.75 10.2051 10.2051 8.75 12 8.75C13.7949 8.75 15.25 10.2051 15.25 12C15.25 13.7949 13.7949 15.25 12 15.25C10.2051 15.25 8.75 13.7949 8.75 12Z" fill="#585858"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.2583 2.83302C13.7917 2.44557 10.2083 2.44557 6.74177 2.83302C4.72971 3.05789 3.10538 4.6429 2.86883 6.66543C2.45429 10.2097 2.45429 13.7903 2.86883 17.3346C3.10538 19.3571 4.72971 20.9421 6.74177 21.167C10.2083 21.5544 13.7917 21.5544 17.2583 21.167C19.2703 20.9421 20.8946 19.3571 21.1312 17.3346C21.5457 13.7903 21.5457 10.2097 21.1312 6.66543C20.8946 4.6429 19.2703 3.05789 17.2583 2.83302ZM6.90838 4.32373C10.2642 3.94867 13.7358 3.94867 17.0916 4.32373C18.4218 4.47239 19.4872 5.52201 19.6414 6.83968C20.0424 10.2682 20.0424 13.7318 19.6414 17.1603C19.4872 18.478 18.4218 19.5276 17.0916 19.6763C13.7358 20.0513 10.2642 20.0513 6.90838 19.6763C5.57827 19.5276 4.51278 18.478 4.35867 17.1603C3.95767 13.7318 3.95767 10.2682 4.35867 6.83968C4.51278 5.52201 5.57827 4.47239 6.90838 4.32373Z" fill="#585858"/>
</svg>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M23.405 16.865C22.8611 15.7695 22.1444 14.7688 21.2825 13.9013C20.9892 13.5603 20.6453 13.2238 20.3768 12.9612L20.3393 12.9245C20.2008 12.7889 20.0864 12.6764 19.9928 12.5795C21.1713 10.9407 22.18 9.18595 23.003 7.34222L23.0362 7.26783L23.0595 7.18976C23.1676 6.82687 23.2922 6.1368 22.8515 5.51317C22.396 4.86859 21.6666 4.75234 21.1782 4.75234H18.9311C18.4627 4.73087 17.9988 4.85751 17.6058 5.11498C17.2098 5.37439 16.9069 5.75278 16.7402 6.1951C16.2563 7.34779 15.6508 8.4442 14.9347 9.46598V6.83269C14.9347 6.4923 14.9027 5.92289 14.5382 5.44229C14.1018 4.86685 13.4707 4.75234 13.0326 4.75234H9.46708C9.00771 4.74172 8.56094 4.90597 8.2176 5.21259C7.866 5.52659 7.65052 5.96521 7.61687 6.43543L7.61369 6.47997V6.52463C7.61369 7.01011 7.80606 7.36822 7.95975 7.59344C8.02856 7.69427 8.10216 7.78606 8.14865 7.84403L8.15938 7.85741C8.20895 7.91923 8.24204 7.96049 8.27525 8.00566C8.3626 8.12448 8.48824 8.30768 8.52379 8.78174V10.2547C7.9091 9.24423 7.26066 7.89957 6.77276 6.46344L6.76527 6.4414L6.75697 6.41965C6.63532 6.10103 6.4402 5.63743 6.04941 5.28266C5.59288 4.86821 5.0529 4.75234 4.56182 4.75234H2.28187C1.78506 4.75234 1.18613 4.86857 0.739237 5.33999C0.299773 5.80358 0.25 6.35907 0.25 6.65442V6.78755L0.278039 6.91769C0.909544 9.84881 2.21076 12.5937 4.07946 14.9377C4.92668 16.2737 6.07468 17.3936 7.43213 18.2075C8.81124 19.0345 10.3671 19.5219 11.9715 19.6297L12.0133 19.6325H12.0553C12.7811 19.6325 13.5378 19.5699 14.1068 19.1907C14.8744 18.6792 14.9347 17.8936 14.9347 17.5021V16.3642C15.1317 16.5234 15.3761 16.7378 15.6753 17.0259C16.037 17.3879 16.325 17.7016 16.572 17.9754L16.7038 18.122L16.7046 18.1228C16.8964 18.3364 17.0852 18.5467 17.2571 18.7195C17.4732 18.9367 17.7396 19.1761 18.0745 19.3529C18.4371 19.5444 18.8177 19.631 19.222 19.631H21.5035C21.9841 19.631 22.6735 19.5173 23.1582 18.9554C23.6864 18.343 23.6461 17.5924 23.48 17.053L23.4501 16.956L23.405 16.865ZM17.6857 16.9706C17.4289 16.6859 17.1192 16.3484 16.7278 15.9571L16.7246 15.9539C15.3685 14.6464 14.7348 14.4186 14.2868 14.4186C14.0485 14.4186 13.7848 14.4454 13.6137 14.6585C13.5329 14.7591 13.4905 14.8805 13.4667 15.007C13.4429 15.1333 13.4347 15.2816 13.4347 15.4505V17.5021C13.4347 17.7569 13.3928 17.8639 13.275 17.9425C13.118 18.0471 12.7825 18.1319 12.0637 18.1325C10.6993 18.0395 9.37641 17.6244 8.20349 16.9211C7.02817 16.2164 6.03709 15.2425 5.31187 14.0797L5.30398 14.0671L5.29464 14.0554C3.55337 11.8881 2.34003 9.34571 1.7503 6.6291C1.7535 6.49814 1.78187 6.42045 1.82784 6.37195C1.87521 6.32198 1.98999 6.25234 2.28187 6.25234H4.56182C4.81544 6.25234 4.9467 6.30751 5.04117 6.39327C5.14827 6.4905 5.24116 6.65561 5.35401 6.95042C5.91362 8.5964 6.67038 10.1357 7.387 11.2675C7.74518 11.8332 8.09769 12.3041 8.41529 12.6368C8.57383 12.803 8.72932 12.9406 8.8777 13.0385C9.02132 13.1332 9.18414 13.2079 9.35158 13.2079C9.43994 13.2079 9.54328 13.1988 9.64279 13.1547C9.74983 13.1074 9.83291 13.0284 9.89158 12.9225C9.99536 12.7353 10.0238 12.458 10.0238 12.0947V8.73099L10.0233 8.7231C9.97146 7.90476 9.72439 7.44443 9.48381 7.11718C9.43108 7.04546 9.37909 6.98068 9.33359 6.92399L9.32113 6.90846C9.27117 6.84616 9.23142 6.79582 9.19876 6.74795C9.13891 6.66024 9.11571 6.59909 9.11381 6.53356C9.12162 6.45578 9.15828 6.38361 9.21675 6.33139C9.27744 6.27719 9.35686 6.24897 9.43816 6.25234H13.0326C13.2387 6.25234 13.3081 6.30262 13.343 6.34868C13.3923 6.4137 13.4347 6.54893 13.4347 6.83269V11.3613C13.4347 11.8992 13.6827 12.2634 14.0428 12.2634C14.4572 12.2634 14.7559 12.012 15.2783 11.4896L15.287 11.4809L15.2948 11.4713C16.4656 10.0436 17.4225 8.45298 18.1347 6.74943L18.1392 6.73666C18.1928 6.58613 18.2941 6.45726 18.4278 6.3697C18.5614 6.28215 18.72 6.24072 18.8794 6.25175L18.8881 6.25234H21.1782C21.4905 6.25234 21.5933 6.33183 21.6265 6.37884C21.6618 6.42885 21.6864 6.53604 21.6264 6.74625C20.8053 8.58266 19.7899 10.3258 18.598 11.9464L18.5905 11.9578C18.4748 12.1348 18.3479 12.3306 18.3295 12.5554C18.3098 12.7968 18.4143 13.0163 18.597 13.2515C18.7302 13.4484 19.0049 13.7173 19.2836 13.9901L19.3099 14.0158C19.6021 14.3018 19.9186 14.6116 20.1727 14.9116L20.1795 14.9195L20.1869 14.9269C20.9444 15.6825 21.5743 16.556 22.052 17.5132C22.1283 17.7738 22.0816 17.907 22.0223 17.9757C21.953 18.0561 21.7976 18.131 21.5035 18.131H19.222C19.0438 18.131 18.9063 18.0959 18.7749 18.0265C18.638 17.9542 18.4972 17.8392 18.3206 17.6617C18.1784 17.5187 18.023 17.3457 17.8334 17.1348C17.7864 17.0825 17.7373 17.0277 17.6857 16.9706Z" fill="#585858"/>
</svg></div>

            </div>
            <div class="footer__company">
               ©Why’U studio
            </div>
           </div>
           <div class="footer__links">
             <div class="footer__links__nav">
               <a href="#">Курсы</a>
               <a href="#">Ресурсы</a>
               <a href="#">Достижения</a>
               <a href="#">Методы</a>
               <a href="#">Партрнёры</a>
               <a href="#">Стоимость</a>

             </div>
             <div class="footer__links__more">
               <a href="#">Пользовательское соглашение</a>
               <a href="#">Юридическое лицо</a>
               <a href="#">Пользовательское соглашение</a>
               <a href="#">Юридическое лицо</a>
               <a href="#">Политиика конфедциальности</a>
               <a href="#">Юридический адрес студии</a>
               <a href="#">Политиика конфедциальности</a>
               <a href="#">Юридический адрес студии</a>
               <a href="#">Лицензия школы</a>
               <a href="#">Полит информация</a>
               <a href="#">Лицензия школы</a>
               <a href="#">Полит информация</a>
             </div>
           </div>
        </div>
      </div>
    </footer>
    <div class="footer__mob">
      <div class="container footer__mob__container">
        <div class="footer__mob__nav">
          <div class="footer__mob__button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.95723 5.19239C4.54563 6.52648 4.54563 7.97352 4.95723 9.30761C9.64155 9.75907 14.3584 9.75907 19.0428 9.30761C19.4544 7.97352 19.4544 6.52648 19.0428 5.19239C14.3584 4.74092 9.64155 4.74092 4.95723 5.19239ZM4.70874 3.70946C9.55801 3.23523 14.442 3.23523 19.2912 3.70946C19.8258 3.76174 20.2751 4.12803 20.4392 4.6338C20.9889 6.32689 20.9889 8.1731 20.4392 9.8662C20.2751 10.372 19.8258 10.7383 19.2912 10.7905C14.442 11.2648 9.55801 11.2648 4.70874 10.7905C4.17419 10.7383 3.72492 10.372 3.56074 9.8662C3.01113 8.17311 3.01113 6.32689 3.56074 4.6338C3.72492 4.12803 4.17419 3.76174 4.70874 3.70946Z" fill="#8f8f8f"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.95723 14.6924C4.54563 16.0265 4.54563 17.4735 4.95723 18.8076C9.64155 19.2591 14.3584 19.2591 19.0428 18.8076C19.4544 17.4735 19.4544 16.0265 19.0428 14.6924C14.3584 14.2409 9.64155 14.2409 4.95723 14.6924ZM4.70874 13.2095C9.55801 12.7352 14.442 12.7352 19.2912 13.2095C19.8258 13.2617 20.2751 13.628 20.4392 14.1338C20.9889 15.8269 20.9889 17.6731 20.4392 19.3662C20.2751 19.872 19.8258 20.2383 19.2912 20.2905C14.442 20.7648 9.55801 20.7648 4.70874 20.2905C4.17419 20.2383 3.72492 19.872 3.56074 19.3662C3.01113 17.6731 3.01113 15.8269 3.56074 14.1338C3.72492 13.628 4.17419 13.2617 4.70874 13.2095Z" fill="#8f8f8f"/>
</svg>
          <span>Меню</span>
          </div>
          <div class="footer__mob__button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.84027 9.85635C7.62759 13.7482 10.8081 16.8424 14.7618 18.519L14.7743 18.5243L15.5381 18.8647C16.5108 19.2981 17.654 18.9903 18.2776 18.1272L19.552 16.3635C19.6298 16.2558 19.6097 16.106 19.5063 16.0225L17.2816 14.2277C17.171 14.1385 17.0083 14.1593 16.9237 14.2734L16.0579 15.4418C15.8476 15.7256 15.4678 15.8242 15.1461 15.6786C12.1897 14.3406 9.81396 11.9649 8.47603 9.00851C8.33041 8.68674 8.42901 8.30699 8.71276 8.09671L9.88114 7.23085C9.99531 7.14624 10.0161 6.98362 9.92686 6.87302L8.13182 4.64798C8.04839 4.54456 7.89865 4.52448 7.79092 4.60225L6.01762 5.88241C5.14883 6.5096 4.84288 7.66244 5.28634 8.63789L5.83968 9.85505C5.83988 9.85549 5.84008 9.85592 5.84027 9.85635ZM14.1699 19.8973C9.87391 18.0737 6.41854 14.7107 4.4765 10.4809L4.47533 10.4784L3.92083 9.25868C3.18173 7.63293 3.69165 5.71152 5.13964 4.66621L6.91293 3.38605C7.66705 2.84164 8.71528 2.98225 9.29927 3.70614L11.0943 5.93119C11.7189 6.70536 11.5734 7.84375 10.7742 8.43599L10.1047 8.93215C11.2357 11.1265 13.028 12.9189 15.2224 14.0498L15.7186 13.3803C16.3108 12.5812 17.4492 12.4357 18.2234 13.0603L20.4481 14.855C21.1722 15.4392 21.3127 16.4879 20.7678 17.242L19.4934 19.0057C18.4541 20.4442 16.5487 20.9572 14.9277 20.2349L14.1699 19.8973Z" fill="#8f8f8f"/>
</svg>
          <span>Звонок</span>
          </div>
          <div class="footer__mob__button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 7.5C7.75 5.15279 9.65279 3.25 12 3.25C14.3472 3.25 16.25 5.15279 16.25 7.5C16.25 9.84721 14.3472 11.75 12 11.75C9.65279 11.75 7.75 9.84721 7.75 7.5ZM12 4.75C10.4812 4.75 9.25 5.98122 9.25 7.5C9.25 9.01878 10.4812 10.25 12 10.25C13.5188 10.25 14.75 9.01878 14.75 7.5C14.75 5.98122 13.5188 4.75 12 4.75Z" fill="#8f8f8f"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8 14.75C6.75736 14.75 5.75 15.7574 5.75 17V18.1883C5.75 18.2064 5.76311 18.2218 5.78097 18.2247C9.89972 18.8972 14.1003 18.8972 18.219 18.2247C18.2369 18.2218 18.25 18.2064 18.25 18.1883V17C18.25 15.7574 17.2426 14.75 16 14.75H15.6591C15.6328 14.75 15.6066 14.7542 15.5815 14.7623L14.716 15.045C12.9512 15.6212 11.0488 15.6212 9.28398 15.045L8.41847 14.7623C8.39342 14.7542 8.36722 14.75 8.34087 14.75H8ZM4.25 17C4.25 14.9289 5.92893 13.25 8 13.25H8.34087C8.52536 13.25 8.70869 13.2792 8.88407 13.3364L9.74959 13.6191C11.2119 14.0965 12.7881 14.0965 14.2504 13.6191L15.1159 13.3364C15.2913 13.2792 15.4746 13.25 15.6591 13.25H16C18.0711 13.25 19.75 14.9289 19.75 17V18.1883C19.75 18.9415 19.2041 19.5837 18.4607 19.7051C14.1819 20.4037 9.8181 20.4037 5.53927 19.7051C4.79588 19.5837 4.25 18.9415 4.25 18.1883V17Z" fill="#8f8f8f"/>
</svg>
        <span>Аккаунт</span>
        </div>
      </div>
    </div>
  </div></body>
</html>
