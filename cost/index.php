<?php 
	require '../temp/connection.php';
	$cost = mysqli_query($connection, 'SELECT * FROM `cost`');
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="/temp/header.css">
  <link rel="stylesheet" href="/temp/general.css">
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
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
          ?????????? ????????????????????????
          ?????????????????????? ??
          ???????????? ???????????? ????
          ???????????? ????????
          <div class="triangle"></div>
        </div>
      </div>
      <div id="phone" class="button__icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.84027 9.85635C7.62759 13.7482 10.8081 16.8424 14.7618 18.519L14.7743 18.5243L15.5381 18.8647C16.5108 19.2981 17.654 18.9903 18.2776 18.1272L19.552 16.3635C19.6298 16.2558 19.6097 16.106 19.5063 16.0225L17.2816 14.2277C17.171 14.1385 17.0083 14.1593 16.9237 14.2734L16.0579 15.4418C15.8476 15.7256 15.4678 15.8242 15.1461 15.6786C12.1897 14.3406 9.81396 11.9649 8.47603 9.00851C8.33041 8.68674 8.42901 8.30699 8.71276 8.09671L9.88114 7.23085C9.99531 7.14624 10.0161 6.98362 9.92686 6.87302L8.13182 4.64798C8.04839 4.54456 7.89865 4.52448 7.79092 4.60225L6.01762 5.88241C5.14883 6.5096 4.84288 7.66244 5.28634 8.63789L5.83968 9.85505C5.83988 9.85549 5.84008 9.85592 5.84027 9.85635ZM14.1699 19.8973C9.87391 18.0737 6.41854 14.7107 4.4765 10.4809L4.47533 10.4784L3.92083 9.25868C3.18173 7.63293 3.69165 5.71152 5.13964 4.66621L6.91293 3.38605C7.66705 2.84164 8.71528 2.98225 9.29927 3.70614L11.0943 5.93119C11.7189 6.70536 11.5734 7.84375 10.7742 8.43599L10.1047 8.93215C11.2357 11.1265 13.028 12.9189 15.2224 14.0498L15.7186 13.3803C16.3108 12.5812 17.4492 12.4357 18.2234 13.0603L20.4481 14.855C21.1722 15.4392 21.3127 16.4879 20.7678 17.242L19.4934 19.0057C18.4541 20.4442 16.5487 20.9572 14.9277 20.2349L14.1699 19.8973Z" fill="black"/>
</svg>
        <div class="button__icon__more">
          ???????????????? ????????????????????
          ???????????? ???? 
          ???????????????????????? ??
          ???????????????? ???????????????? -
          ???????????? ??????????????????????
          <div class="triangle"></div>
        </div>
      </div>
      <div class="button__menu button__menu_active"><span class="button__menu_regular">??????????</span> <a href="/courses" class="button__menu_bold">??????????</a>
        <div class="button__menu__more">
          <a href="#">????????????????</a>
          <a href="/eng">????????????????????</a>
          <a href="#">??????????????????</a>
          <a href="#">??????...</a>
        </div>
      </div>
      <div class="button__menu"><span class="button__menu_regular">??????????????</span> <a href="#" class="button__menu_bold">??????????????</a>
        <div class="button__menu__more">
          <a href="#">????????????????</a>
          <a href="#">????????????</a>
          <a href="#">?????????????????? ??????????????????</a>
          <a href="#">??????????????????...</a>
        </div>
      </div>
      <div class="button__menu"><span class="button__menu_regular">????????????????????</span> <a href="/achiev" class="button__menu_bold">????????????????????</a>
        <div class="button__menu__more">
          <a href="#">NSK</a>
          <a href="#">CBAO</a>
          <a href="#">?????????????????? ?????????? ??????</a>
          <a href="#">?????? ????????????????????...</a>
        </div>
      </div> 
      <div class="button__menu"><span class="button__menu_regular">????????????</span> <a href="#" class="button__menu_bold">????????????</a>
        <div class="button__menu__more">
          <a href="#">???????????????? 1</a>
          <a href="#">???????????????? 2</a>
          <a href="#">???????????????? ????????????</a>
          <a href="#">?????? ????????????????...</a>
        </div>
      </div>
      <div class="button__menu"><span class="button__menu_regular">????????????????</span> <a href="#" class="button__menu_bold">????????????????</a>
        <div class="button__menu__more">
          <a href="#">??????????????????????</a>
          <a href="#">??????????????</a>
          <a href="#">???????????????????????? software</a>
          <a href="#">?????? ????????????????...</a>
        </div>
      </div>
      <div class="button__menu"><span class="button__menu_regular">??????????????????</span> <a href="#" class="button__menu_bold">??????????????????</a>
        <div class="button__menu__more">
          <a href="#">????????????????????
?????????????????? ??????????
????????????????????????
???????????????????? ??????
?????? ?? ??????????
????????????????????????
????????????????????????</a>
        </div>
      </div>
    </header> 
  </div>



 
 
 
  <div class="main">
    <div class="main__bg">
      <svg width="1440" height="592" viewBox="0 0 1440 592" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_687_7912)">
<path d="M766.23 435.794H763.16V498.444H766.23V435.794Z" fill="url(#paint0_linear_687_7912)"/>
<path d="M740.396 430.682H737.327V498.445H740.396V430.682Z" fill="url(#paint1_linear_687_7912)"/>
<path d="M714.136 421.963H711.067V498.444H714.136V421.963Z" fill="url(#paint2_linear_687_7912)"/>
<path d="M685.887 407.139H682.818V498.445H685.887V407.139Z" fill="url(#paint3_linear_687_7912)"/>
<path d="M659.627 386.264H656.558V498.444H659.627V386.264Z" fill="url(#paint4_linear_687_7912)"/>
<path d="M633.538 367.549H630.469V498.444H633.538V367.549Z" fill="url(#paint5_linear_687_7912)"/>
<path d="M777.768 440.452C762.507 440.452 688.587 434.772 598.099 332.532L605.005 326.426C701.234 435.34 779.104 431.506 779.871 431.335L780.553 440.537C780.241 440.395 779.303 440.452 777.768 440.452Z" fill="url(#paint6_linear_687_7912)"/>
<path d="M2.87567 435.453H-0.193665V498.104H2.87567V435.453Z" fill="url(#paint7_linear_687_7912)"/>
<path d="M28.6807 435.453H25.6113V498.104H28.6807V435.453Z" fill="url(#paint8_linear_687_7912)"/>
<path d="M54.9689 421.622H51.8995V498.104H54.9689V421.622Z" fill="url(#paint9_linear_687_7912)"/>
<path d="M83.1898 406.798H80.1205V498.104H83.1898V406.798Z" fill="url(#paint10_linear_687_7912)"/>
<path d="M109.478 385.924H106.409V498.104H109.478V385.924Z" fill="url(#paint11_linear_687_7912)"/>
<path d="M135.567 367.208H132.498V498.104H135.567V367.208Z" fill="url(#paint12_linear_687_7912)"/>
<g filter="url(#filter0_di_687_7912)">
<path d="M0 486V592H261.68C269.417 568.509 285.055 547.947 306.293 533.338C327.531 518.73 353.248 510.846 379.663 510.846C406.077 510.846 431.795 518.73 453.033 533.338C474.271 547.947 489.908 568.509 497.646 592H1441V486L0 486Z" fill="url(#paint13_linear_687_7912)"/>
</g>
<path opacity="0.44" d="M782.941 485.551H-0.364258V498.104H782.941V485.551Z" fill="white"/>
<path d="M540.605 320.575H226.624V337.416H540.605V320.575Z" fill="url(#paint14_linear_687_7912)"/>
<path d="M257.147 323.188L241.488 301.689L243.96 299.872L257.147 317.962L270.305 299.872L272.778 301.689L257.147 323.188Z" fill="url(#paint15_linear_687_7912)"/>
<path d="M284.97 323.188L269.311 301.689L271.783 299.872L284.97 317.962L298.128 299.872L300.629 301.689L284.97 323.188Z" fill="url(#paint16_linear_687_7912)"/>
<path d="M-1.67159 440.083C-3.03574 440.083 -3.88833 440.083 -4.1441 440.083L-3.37677 430.909L-3.77464 435.538L-3.37677 430.938C-2.72312 430.938 64.8306 434.857 161.031 326.085L167.937 332.191C77.5627 434.317 11.8846 440.083 -1.67159 440.083Z" fill="url(#paint17_linear_687_7912)"/>
<path d="M312.537 323.188L296.878 301.689L299.35 299.872L312.537 317.962L325.695 299.872L328.168 301.689L312.537 323.188Z" fill="url(#paint18_linear_687_7912)"/>
<path d="M340.36 323.188L324.701 301.689L327.173 299.872L340.36 317.962L353.518 299.872L356.019 301.689L340.36 323.188Z" fill="url(#paint19_linear_687_7912)"/>
<path d="M368.837 323.188L353.177 301.689L355.65 299.872L368.837 317.962L381.995 299.872L384.467 301.689L368.837 323.188Z" fill="url(#paint20_linear_687_7912)"/>
<path d="M416.099 323.188L400.439 301.689L402.912 299.872L416.099 317.962L429.257 299.872L431.758 301.689L416.099 323.188Z" fill="url(#paint21_linear_687_7912)"/>
<path d="M444.746 323.188L429.086 301.689L431.587 299.872L444.746 317.962L457.932 299.872L460.405 301.689L444.746 323.188Z" fill="url(#paint22_linear_687_7912)"/>
<path d="M472.597 323.188L456.938 301.689L459.439 299.872L472.597 317.962L485.755 299.872L488.256 301.689L472.597 323.188Z" fill="url(#paint23_linear_687_7912)"/>
<path d="M501.244 323.188L485.585 301.689L488.086 299.872L501.244 317.962L514.431 299.872L516.903 301.689L501.244 323.188Z" fill="url(#paint24_linear_687_7912)"/>
<g filter="url(#filter1_i_687_7912)">
<path d="M255.072 483.222H131.93V592.165H255.072V483.222Z" fill="url(#paint25_linear_687_7912)"/>
</g>
<g filter="url(#filter2_i_687_7912)">
<path d="M231.171 277.066H155.859V483.222H231.171V277.066Z" fill="url(#paint26_linear_687_7912)"/>
</g>
<path d="M249.587 469.107H138.21V483.222H249.587V469.107Z" fill="#FF5D54"/>
<path opacity="0.44" d="M249.587 469.107H138.21V483.222H249.587V469.107Z" fill="white"/>
<path d="M157.252 277.066L194.879 118.481L226.624 277.066H157.252Z" fill="url(#paint27_linear_687_7912)"/>
<g filter="url(#filter3_d_687_7912)">
<path d="M166.431 227.679H143.298V310.38H166.431V227.679Z" fill="url(#paint28_linear_687_7912)"/>
</g>
<path d="M143.298 227.679L155.859 174.77L166.431 227.679H143.298Z" fill="url(#paint29_linear_687_7912)"/>
<path opacity="0.15" d="M170.751 318.417H216.223C217.881 318.417 219.471 319.075 220.644 320.247C221.816 321.419 222.475 323.008 222.475 324.665V469.107H164.499V324.778C164.483 323.948 164.634 323.124 164.941 322.353C165.249 321.581 165.707 320.879 166.289 320.287C166.871 319.695 167.566 319.224 168.332 318.903C169.098 318.582 169.92 318.417 170.751 318.417Z" fill="url(#paint30_linear_687_7912)"/>
<path d="M533.103 299.247H226.624V302.314H533.103V299.247Z" fill="url(#paint31_linear_687_7912)"/>
<g filter="url(#filter4_d_687_7912)">
<path d="M242.71 227.679H219.576V310.38H242.71V227.679Z" fill="url(#paint32_linear_687_7912)"/>
</g>
<path d="M219.576 227.679L232.138 174.77L242.738 227.679H219.576Z" fill="url(#paint33_linear_687_7912)"/>
<g filter="url(#filter5_d_687_7912)">
<path d="M204.258 282.179H181.238V243.924C181.244 239.267 182.395 234.683 184.591 230.576L189.451 221.488C189.771 220.888 190.248 220.386 190.831 220.036C191.414 219.686 192.082 219.501 192.762 219.501C193.442 219.501 194.11 219.686 194.693 220.036C195.276 220.386 195.753 220.888 196.073 221.488L200.933 230.576C203.119 234.686 204.261 239.269 204.258 243.924V282.179Z" fill="url(#paint34_linear_687_7912)"/>
</g>
<path d="M192.322 246.508H192.918C193.913 246.508 194.868 246.903 195.571 247.606C196.275 248.309 196.67 249.263 196.67 250.257V273.147H188.57V250.257C188.57 249.263 188.965 248.309 189.669 247.606C190.372 246.903 191.327 246.508 192.322 246.508Z" fill="url(#paint35_linear_687_7912)"/>
<path d="M177.932 334.094H178.529C179.524 334.094 180.478 334.489 181.181 335.192C181.885 335.895 182.28 336.848 182.28 337.843V358.006H174.124V337.843C174.124 337.345 174.222 336.853 174.415 336.395C174.607 335.936 174.888 335.52 175.242 335.171C175.597 334.823 176.017 334.548 176.479 334.363C176.941 334.178 177.434 334.086 177.932 334.094Z" fill="url(#paint36_linear_687_7912)"/>
<path d="M194.04 334.094H194.637C195.632 334.094 196.586 334.489 197.289 335.192C197.993 335.895 198.388 336.848 198.388 337.843V358.007H190.288V337.843C190.288 336.848 190.684 335.895 191.387 335.192C192.091 334.489 193.045 334.094 194.04 334.094Z" fill="url(#paint37_linear_687_7912)"/>
<path d="M210.148 334.094H210.745C211.739 334.094 212.694 334.489 213.397 335.192C214.101 335.895 214.496 336.848 214.496 337.843V358.007H206.396V337.843C206.396 336.848 206.792 335.895 207.495 335.192C208.199 334.489 209.153 334.094 210.148 334.094Z" fill="url(#paint38_linear_687_7912)"/>
<path d="M177.932 376.007H178.529C179.524 376.007 180.478 376.402 181.181 377.105C181.885 377.808 182.28 378.761 182.28 379.756V399.92H174.124V379.756C174.124 379.258 174.222 378.766 174.415 378.308C174.607 377.849 174.888 377.433 175.242 377.084C175.597 376.736 176.017 376.461 176.479 376.276C176.941 376.091 177.434 375.999 177.932 376.007Z" fill="url(#paint39_linear_687_7912)"/>
<path d="M194.04 376.006H194.637C195.632 376.006 196.586 376.401 197.289 377.104C197.993 377.807 198.388 378.761 198.388 379.755V399.919H190.288V379.755C190.288 378.761 190.684 377.807 191.387 377.104C192.091 376.401 193.045 376.006 194.04 376.006Z" fill="url(#paint40_linear_687_7912)"/>
<path d="M210.148 376.006H210.745C211.739 376.006 212.694 376.401 213.397 377.104C214.101 377.807 214.496 378.761 214.496 379.755V399.919H206.396V379.755C206.396 378.761 206.792 377.807 207.495 377.104C208.199 376.401 209.153 376.006 210.148 376.006Z" fill="url(#paint41_linear_687_7912)"/>
<path d="M177.932 417.92H178.529C179.524 417.92 180.478 418.315 181.181 419.018C181.885 419.721 182.28 420.675 182.28 421.669V441.975H174.124V421.811C174.104 421.302 174.189 420.794 174.372 420.319C174.556 419.844 174.834 419.411 175.19 419.047C175.547 418.683 175.974 418.395 176.445 418.202C176.916 418.008 177.422 417.912 177.932 417.92Z" fill="url(#paint42_linear_687_7912)"/>
<path d="M194.04 417.919H194.637C195.631 417.919 196.586 418.314 197.289 419.017C197.993 419.72 198.388 420.674 198.388 421.668V441.974H190.288V421.81C190.269 421.306 190.352 420.803 190.532 420.332C190.712 419.86 190.985 419.43 191.336 419.067C191.686 418.704 192.106 418.415 192.571 418.218C193.035 418.02 193.535 417.919 194.04 417.919Z" fill="url(#paint43_linear_687_7912)"/>
<path d="M210.148 417.919H210.745C211.739 417.919 212.694 418.314 213.397 419.017C214.101 419.72 214.496 420.674 214.496 421.668V441.974H206.396V421.81C206.377 421.306 206.46 420.803 206.64 420.332C206.82 419.86 207.093 419.43 207.444 419.067C207.794 418.704 208.214 418.415 208.679 418.218C209.143 418.02 209.643 417.919 210.148 417.919Z" fill="url(#paint44_linear_687_7912)"/>
<path opacity="0.09" d="M242.71 291.181H143.298V310.38H242.71V291.181Z" fill="url(#paint45_linear_687_7912)"/>
<g filter="url(#filter6_di_687_7912)">
<path d="M633.282 483.222H510.139V592.165H633.282V483.222Z" fill="url(#paint46_linear_687_7912)"/>
</g>
<g filter="url(#filter7_i_687_7912)">
<path d="M609.381 277.066H534.069V483.222H609.381V277.066Z" fill="url(#paint47_linear_687_7912)"/>
</g>
<path d="M627.797 469.107H516.42V483.222H627.797V469.107Z" fill="#FF5D54"/>
<path opacity="0.44" d="M627.797 469.107H516.42V483.222H627.797V469.107Z" fill="white"/>
<path d="M535.461 277.066L573.089 118.481L604.834 277.066H535.461Z" fill="url(#paint48_linear_687_7912)"/>
<g filter="url(#filter8_d_687_7912)">
<path d="M544.641 227.679H521.507V310.38H544.641V227.679Z" fill="url(#paint49_linear_687_7912)"/>
</g>
<path d="M521.507 227.679L534.069 174.77L544.669 227.679H521.507Z" fill="url(#paint50_linear_687_7912)"/>
<path opacity="0.09" d="M548.961 318.417H594.433C596.091 318.417 597.681 319.075 598.854 320.247C600.026 321.419 600.685 323.008 600.685 324.665V469.107H542.737V324.778C542.722 323.951 542.872 323.129 543.177 322.359C543.483 321.59 543.939 320.889 544.518 320.297C545.097 319.705 545.788 319.234 546.55 318.911C547.313 318.589 548.133 318.421 548.961 318.417Z" fill="url(#paint51_linear_687_7912)"/>
<g filter="url(#filter9_d_687_7912)">
<path d="M620.92 227.679H597.786V310.38H620.92V227.679Z" fill="url(#paint52_linear_687_7912)"/>
</g>
<path d="M597.814 227.679L610.347 174.77L620.948 227.679H597.814Z" fill="url(#paint53_linear_687_7912)"/>
<g filter="url(#filter10_d_687_7912)">
<path d="M582.524 282.179H559.533V243.924C559.53 239.269 560.672 234.686 562.858 230.576L567.718 221.488C568.038 220.888 568.515 220.386 569.098 220.036C569.681 219.686 570.348 219.501 571.029 219.501C571.709 219.501 572.376 219.686 572.96 220.036C573.543 220.386 574.02 220.888 574.34 221.488L579.199 230.576C581.385 234.686 582.527 239.269 582.524 243.924V282.179Z" fill="url(#paint54_linear_687_7912)"/>
</g>
<path d="M570.531 246.508H571.157C572.152 246.508 573.106 246.903 573.809 247.606C574.513 248.309 574.908 249.263 574.908 250.257V273.147H566.809V250.257C566.809 249.268 567.2 248.318 567.897 247.616C568.595 246.914 569.541 246.516 570.531 246.508Z" fill="url(#paint55_linear_687_7912)"/>
<path d="M556.135 334.094H556.732C557.236 334.075 557.739 334.157 558.211 334.337C558.683 334.517 559.113 334.79 559.477 335.14C559.84 335.49 560.129 335.91 560.327 336.374C560.524 336.839 560.626 337.338 560.625 337.843V358.007H552.384V337.843C552.384 337.35 552.481 336.863 552.669 336.408C552.858 335.953 553.134 335.54 553.482 335.192C553.831 334.844 554.244 334.567 554.699 334.379C555.155 334.191 555.642 334.094 556.135 334.094Z" fill="url(#paint56_linear_687_7912)"/>
<path d="M572.325 334.094H572.979C573.974 334.094 574.928 334.489 575.632 335.192C576.335 335.895 576.73 336.848 576.73 337.843V358.007H568.631V337.843C568.631 336.858 569.018 335.913 569.709 335.212C570.401 334.51 571.34 334.109 572.325 334.094Z" fill="url(#paint57_linear_687_7912)"/>
<path d="M588.487 334.094H589.084C590.079 334.094 591.033 334.489 591.737 335.192C592.44 335.895 592.836 336.848 592.836 337.843V358.007H584.736V337.843C584.736 336.848 585.131 335.895 585.835 335.192C586.538 334.489 587.493 334.094 588.487 334.094Z" fill="url(#paint58_linear_687_7912)"/>
<path d="M556.135 375.643H556.732C557.727 375.643 558.681 376.038 559.384 376.741C560.088 377.444 560.483 378.398 560.483 379.392V399.556H552.384V379.392C552.384 378.9 552.481 378.412 552.669 377.957C552.858 377.502 553.134 377.089 553.482 376.741C553.831 376.393 554.244 376.117 554.699 375.928C555.155 375.74 555.642 375.643 556.135 375.643Z" fill="url(#paint59_linear_687_7912)"/>
<path d="M572.183 375.643H572.837C573.832 375.643 574.786 376.038 575.49 376.741C576.193 377.444 576.588 378.398 576.588 379.392V399.556H568.489V379.392C568.489 378.407 568.876 377.462 569.567 376.761C570.259 376.06 571.198 375.658 572.183 375.643Z" fill="url(#paint60_linear_687_7912)"/>
<path d="M588.345 375.643H588.942C589.937 375.643 590.891 376.038 591.595 376.741C592.298 377.444 592.694 378.398 592.694 379.392V399.556H584.594V379.392C584.594 378.398 584.989 377.444 585.693 376.741C586.396 376.038 587.35 375.643 588.345 375.643Z" fill="url(#paint61_linear_687_7912)"/>
<path d="M556.135 417.164H556.732C557.727 417.164 558.681 417.559 559.384 418.262C560.088 418.965 560.483 419.918 560.483 420.913V441.219H552.384V421.055C552.384 420.562 552.481 420.075 552.669 419.62C552.858 419.165 553.134 418.752 553.482 418.404C553.831 418.056 554.244 417.779 554.699 417.591C555.155 417.403 555.642 417.306 556.135 417.306V417.164Z" fill="url(#paint62_linear_687_7912)"/>
<path d="M572.183 417.164H572.837C573.832 417.164 574.786 417.559 575.49 418.262C576.193 418.965 576.588 419.918 576.588 420.913V441.219H568.489V421.055C568.489 420.06 568.884 419.107 569.588 418.404C570.291 417.701 571.245 417.306 572.24 417.306L572.183 417.164Z" fill="url(#paint63_linear_687_7912)"/>
<path d="M588.345 417.164H588.942C589.937 417.164 590.891 417.559 591.595 418.262C592.298 418.965 592.694 419.918 592.694 420.913V441.219H584.594V421.055C584.594 420.06 584.989 419.107 585.693 418.404C586.396 417.701 587.35 417.306 588.345 417.306V417.164Z" fill="url(#paint64_linear_687_7912)"/>
<path opacity="0.09" d="M620.92 291.181H521.507V310.38H620.92V291.181Z" fill="url(#paint65_linear_687_7912)"/>
<g filter="url(#filter11_d_687_7912)">
<path d="M391.43 286.467H393.306C396.381 286.467 399.33 287.688 401.505 289.861C403.68 292.034 404.901 294.981 404.901 298.054V321.484C404.901 323.48 404.108 325.394 402.695 326.806C401.283 328.217 399.367 329.01 397.37 329.01H387.395C385.397 329.01 383.482 328.217 382.069 326.806C380.657 325.394 379.863 323.48 379.863 321.484V298.054C379.863 296.532 380.163 295.026 380.746 293.62C381.329 292.214 382.183 290.937 383.26 289.861C384.336 288.785 385.615 287.931 387.021 287.349C388.428 286.767 389.936 286.467 391.459 286.467H391.43Z" fill="url(#paint66_linear_687_7912)"/>
</g>
</g>
<defs>
<filter id="filter0_di_687_7912" x="-36" y="448" width="1521" height="188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="4" dy="4"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_687_7912"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_687_7912" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="-38"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="shape" result="effect2_innerShadow_687_7912"/>
</filter>
<filter id="filter1_i_687_7912" x="131.93" y="445.222" width="123.143" height="146.942" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feMorphology radius="30" operator="erode" in="SourceAlpha" result="effect1_innerShadow_687_7912"/>
<feOffset dy="-38"/>
<feGaussianBlur stdDeviation="32"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="shape" result="effect1_innerShadow_687_7912"/>
</filter>
<filter id="filter2_i_687_7912" x="155.859" y="239.066" width="75.3123" height="244.156" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feMorphology radius="30" operator="erode" in="SourceAlpha" result="effect1_innerShadow_687_7912"/>
<feOffset dy="-38"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="shape" result="effect1_innerShadow_687_7912"/>
</filter>
<filter id="filter3_d_687_7912" x="138.298" y="222.679" width="43.1337" height="102.701" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_687_7912"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_687_7912" result="shape"/>
</filter>
<filter id="filter4_d_687_7912" x="214.576" y="222.679" width="43.1337" height="102.701" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_687_7912"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_687_7912" result="shape"/>
</filter>
<filter id="filter5_d_687_7912" x="176.238" y="214.501" width="43.02" height="82.677" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_687_7912"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_687_7912" result="shape"/>
</filter>
<filter id="filter6_di_687_7912" x="474.139" y="445.222" width="203.143" height="190.942" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="4" dy="4"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_687_7912"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_687_7912" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="-38"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="shape" result="effect2_innerShadow_687_7912"/>
</filter>
<filter id="filter7_i_687_7912" x="534.069" y="239.066" width="75.3123" height="244.156" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feMorphology radius="30" operator="erode" in="SourceAlpha" result="effect1_innerShadow_687_7912"/>
<feOffset dy="-38"/>
<feGaussianBlur stdDeviation="20"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="shape" result="effect1_innerShadow_687_7912"/>
</filter>
<filter id="filter8_d_687_7912" x="516.507" y="222.679" width="43.1336" height="102.701" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_687_7912"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_687_7912" result="shape"/>
</filter>
<filter id="filter9_d_687_7912" x="592.786" y="222.679" width="43.1337" height="102.701" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_687_7912"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_687_7912" result="shape"/>
</filter>
<filter id="filter10_d_687_7912" x="554.533" y="214.501" width="42.9916" height="82.677" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_687_7912"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_687_7912" result="shape"/>
</filter>
<filter id="filter11_d_687_7912" x="374.863" y="281.467" width="45.0378" height="62.5432" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="5" dy="5"/>
<feGaussianBlur stdDeviation="5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_687_7912"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_687_7912" result="shape"/>
</filter>
<linearGradient id="paint0_linear_687_7912" x1="763.799" y1="443.278" x2="768.278" y2="443.524" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint1_linear_687_7912" x1="737.966" y1="438.777" x2="742.446" y2="439.004" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint2_linear_687_7912" x1="711.706" y1="431.099" x2="716.189" y2="431.301" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint3_linear_687_7912" x1="683.457" y1="418.045" x2="687.942" y2="418.214" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint4_linear_687_7912" x1="657.197" y1="399.665" x2="661.684" y2="399.802" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint5_linear_687_7912" x1="631.108" y1="383.185" x2="635.597" y2="383.303" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint6_linear_687_7912" x1="636.084" y1="340.057" x2="699.462" y2="453.66" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint7_linear_687_7912" x1="0.445344" y1="442.937" x2="4.92359" y2="443.183" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint8_linear_687_7912" x1="26.2503" y1="442.937" x2="30.7286" y2="443.183" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint9_linear_687_7912" x1="52.5385" y1="430.758" x2="57.0212" y2="430.96" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint10_linear_687_7912" x1="80.7595" y1="417.705" x2="85.2449" y2="417.874" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint11_linear_687_7912" x1="107.048" y1="399.324" x2="111.535" y2="399.462" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint12_linear_687_7912" x1="133.137" y1="382.844" x2="137.626" y2="382.962" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint13_linear_687_7912" x1="8.72325e-06" y1="539" x2="1314.25" y2="539" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint14_linear_687_7912" x1="291.992" y1="322.587" x2="293.042" y2="344.521" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint15_linear_687_7912" x1="248.002" y1="302.657" x2="262.034" y2="323.767" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint16_linear_687_7912" x1="275.831" y1="302.657" x2="289.858" y2="323.779" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint17_linear_687_7912" x1="31.6817" y1="339.702" x2="96.8597" y2="450" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint18_linear_687_7912" x1="303.392" y1="302.657" x2="317.424" y2="323.767" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint19_linear_687_7912" x1="331.221" y1="302.657" x2="345.248" y2="323.779" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint20_linear_687_7912" x1="359.692" y1="302.657" x2="373.724" y2="323.767" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint21_linear_687_7912" x1="406.96" y1="302.657" x2="420.987" y2="323.779" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint22_linear_687_7912" x1="435.607" y1="302.657" x2="449.634" y2="323.779" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint23_linear_687_7912" x1="463.458" y1="302.657" x2="477.485" y2="323.779" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint24_linear_687_7912" x1="492.105" y1="302.657" x2="506.132" y2="323.779" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint25_linear_687_7912" x1="131.93" y1="537.693" x2="244.24" y2="537.693" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint26_linear_687_7912" x1="155.859" y1="380.144" x2="224.547" y2="380.144" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint27_linear_687_7912" x1="171.694" y1="137.425" x2="253.534" y2="177.559" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint28_linear_687_7912" x1="143.298" y1="269.029" x2="164.396" y2="269.029" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint29_linear_687_7912" x1="148.114" y1="181.09" x2="175.41" y2="194.47" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint30_linear_687_7912" x1="176.568" y1="336.417" x2="248.105" y2="367.273" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint31_linear_687_7912" x1="290.43" y1="299.613" x2="290.466" y2="303.617" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint32_linear_687_7912" x1="219.576" y1="269.029" x2="240.675" y2="269.029" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint33_linear_687_7912" x1="224.398" y1="181.09" x2="251.715" y2="194.496" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint34_linear_687_7912" x1="181.238" y1="250.84" x2="202.233" y2="250.84" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint35_linear_687_7912" x1="190.256" y1="249.69" x2="200.876" y2="253.31" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint36_linear_687_7912" x1="175.822" y1="336.95" x2="186.236" y2="340.932" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint37_linear_687_7912" x1="191.975" y1="336.95" x2="202.334" y2="340.884" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint38_linear_687_7912" x1="208.083" y1="336.95" x2="218.442" y2="340.884" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint39_linear_687_7912" x1="175.822" y1="378.863" x2="186.236" y2="382.845" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint40_linear_687_7912" x1="191.975" y1="378.863" x2="202.334" y2="382.797" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint41_linear_687_7912" x1="208.083" y1="378.863" x2="218.442" y2="382.797" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint42_linear_687_7912" x1="175.82" y1="420.793" x2="186.252" y2="424.76" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint43_linear_687_7912" x1="191.972" y1="420.793" x2="202.35" y2="424.711" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint44_linear_687_7912" x1="208.08" y1="420.793" x2="218.458" y2="424.711" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint45_linear_687_7912" x1="163.994" y1="293.475" x2="168.187" y2="317.814" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint46_linear_687_7912" x1="510.139" y1="537.693" x2="622.45" y2="537.693" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint47_linear_687_7912" x1="534.069" y1="380.144" x2="602.757" y2="380.144" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint48_linear_687_7912" x1="549.904" y1="137.425" x2="631.744" y2="177.559" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint49_linear_687_7912" x1="521.507" y1="269.029" x2="542.606" y2="269.029" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint50_linear_687_7912" x1="526.329" y1="181.09" x2="553.646" y2="194.496" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint51_linear_687_7912" x1="554.8" y1="336.417" x2="626.314" y2="367.247" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint52_linear_687_7912" x1="597.786" y1="269.029" x2="618.885" y2="269.029" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint53_linear_687_7912" x1="602.631" y1="181.09" x2="629.927" y2="194.469" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint54_linear_687_7912" x1="559.533" y1="250.84" x2="580.502" y2="250.84" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<linearGradient id="paint55_linear_687_7912" x1="568.495" y1="249.69" x2="579.114" y2="253.31" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint56_linear_687_7912" x1="554.099" y1="336.948" x2="564.594" y2="341.002" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint57_linear_687_7912" x1="570.317" y1="336.95" x2="580.677" y2="340.884" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint58_linear_687_7912" x1="586.422" y1="336.95" x2="596.782" y2="340.884" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint59_linear_687_7912" x1="554.07" y1="378.5" x2="564.429" y2="382.433" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint60_linear_687_7912" x1="570.175" y1="378.5" x2="580.535" y2="382.433" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint61_linear_687_7912" x1="586.28" y1="378.5" x2="596.64" y2="382.433" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint62_linear_687_7912" x1="554.07" y1="420.037" x2="564.445" y2="423.953" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint63_linear_687_7912" x1="570.175" y1="420.037" x2="580.55" y2="423.953" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint64_linear_687_7912" x1="586.28" y1="420.037" x2="596.655" y2="423.953" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint65_linear_687_7912" x1="542.204" y1="293.475" x2="546.397" y2="317.814" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="1" stop-color="#EEEEEE"/>
</linearGradient>
<linearGradient id="paint66_linear_687_7912" x1="379.863" y1="307.738" x2="402.699" y2="307.738" gradientUnits="userSpaceOnUse">
<stop stop-color="#D5645E"/>
<stop offset="1" stop-color="#FF5D54"/>
</linearGradient>
<clipPath id="clip0_687_7912">
<rect width="1440" height="592" fill="white"/>
</clipPath>
</defs>
</svg>

    </div>
    <div class="container">
      <div class="title">?????????? ???????? ???????????? ??????????</div>
      <div class="main__block">
        <div class="main__options">
          <?php 
          $i = 0;
          foreach ($cost as $value) {
          	$cost_value = json_decode($value['value']);
          	$action = $value['action'];
          	$option = $value['name'];
          	if ($i == 0) {
          		echo "<div class='main__options__point main__options__point_active'>";
          	} else {
          		echo "<div class='main__options__point main__options__point_noactive'>";
          	}
          	$i = $i + 1;
          	?>

            <div class="main__options__name text_med text_400">???????????????? <?php echo $value['name']; ?></div>
            <div class="main__options__block">
              <div class="main__options__select">
                <div class="main__options__select__title text">????????...</div>
                <div class="main__options__select__img">
                  <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M14 0.80016C14 1.00495 13.9238 1.20974 13.7721 1.36573L7.54998 7.76541C7.24587 8.0782 6.75432 8.0782 6.45022 7.76541L0.22808 1.36573C-0.0760267 1.05295 -0.0760267 0.547373 0.22808 0.234588C0.532187 -0.0781961 1.02374 -0.0781961 1.32784 0.234588L7.0001 6.0687L12.6724 0.234588C12.9765 -0.0781961 13.468 -0.0781961 13.7721 0.234588C13.9238 0.39058 14 0.59537 14 0.80016Z" fill="#979797"/>
</svg>

                </div>
                <div class="main__options__select__more">
                	<?php 
                		foreach ($cost_value as $key => $value) {
                			$cost_value = $value;
                			echo "<div data-option='$option' data-action='$action' data-cost='$value' class='text select__option'>$key</div>";
                		}
                	 ?>
                </div>
              </div>
              <div class="main__options__confirm">
                <div class="btn_main btn_main_noactive text">??????????????????????</div>
              </div>
            </div>
          </div>


          	<?php
          }

           ?>
          
        </div>
        <div class="main__cost">
          <div class="main__cost__block">
            <div class="main__cost__title text_med">???????????????????? ??????????????????</div>
            <div class="main__cost__info">
              <div class="total__cost btn_main">???0 ??</div>
              <div class="text">?????????????????? ???????????????????????????? ????????????????.??????????????????? ???????? ?????????????? ?????? ????????????????.</div>
            </div>
          </div>
          <div class="main__cost__buy btn_main btn_main_grey">???????????????? ????????</div>
        </div>
      </div>
    </div>
  </div>  





<link rel="stylesheet" href="/temp/footer.css">
<footer class="footer">
      <div class="container footer__container">
        <div class="wrapper footer__wrapper">
           <div class="footer__about">
            <div class="footer__social">
              <div>???????? ?????? ????????</div>
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
               ??Why???U studio
            </div>
           </div>
           <div class="footer__links">
             <div class="footer__links__nav">
               <a href="#">??????????</a>
               <a href="#">??????????????</a>
               <a href="#">????????????????????</a>
               <a href="#">????????????</a>
               <a href="#">??????????????????</a>
               <a href="#">??????????????????</a>

             </div>
             <div class="footer__links__more">
               <a href="#">???????????????????????????????? ????????????????????</a>
               <a href="#">?????????????????????? ????????</a>
               <a href="#">???????????????????????????????? ????????????????????</a>
               <a href="#">?????????????????????? ????????</a>
               <a href="#">?????????????????? ????????????????????????????????</a>
               <a href="#">?????????????????????? ?????????? ????????????</a>
               <a href="#">?????????????????? ????????????????????????????????</a>
               <a href="#">?????????????????????? ?????????? ????????????</a>
               <a href="#">???????????????? ??????????</a>
               <a href="#">?????????? ????????????????????</a>
               <a href="#">???????????????? ??????????</a>
               <a href="#">?????????? ????????????????????</a>
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
          <span>????????</span>
          </div>
          <div class="footer__mob__button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.84027 9.85635C7.62759 13.7482 10.8081 16.8424 14.7618 18.519L14.7743 18.5243L15.5381 18.8647C16.5108 19.2981 17.654 18.9903 18.2776 18.1272L19.552 16.3635C19.6298 16.2558 19.6097 16.106 19.5063 16.0225L17.2816 14.2277C17.171 14.1385 17.0083 14.1593 16.9237 14.2734L16.0579 15.4418C15.8476 15.7256 15.4678 15.8242 15.1461 15.6786C12.1897 14.3406 9.81396 11.9649 8.47603 9.00851C8.33041 8.68674 8.42901 8.30699 8.71276 8.09671L9.88114 7.23085C9.99531 7.14624 10.0161 6.98362 9.92686 6.87302L8.13182 4.64798C8.04839 4.54456 7.89865 4.52448 7.79092 4.60225L6.01762 5.88241C5.14883 6.5096 4.84288 7.66244 5.28634 8.63789L5.83968 9.85505C5.83988 9.85549 5.84008 9.85592 5.84027 9.85635ZM14.1699 19.8973C9.87391 18.0737 6.41854 14.7107 4.4765 10.4809L4.47533 10.4784L3.92083 9.25868C3.18173 7.63293 3.69165 5.71152 5.13964 4.66621L6.91293 3.38605C7.66705 2.84164 8.71528 2.98225 9.29927 3.70614L11.0943 5.93119C11.7189 6.70536 11.5734 7.84375 10.7742 8.43599L10.1047 8.93215C11.2357 11.1265 13.028 12.9189 15.2224 14.0498L15.7186 13.3803C16.3108 12.5812 17.4492 12.4357 18.2234 13.0603L20.4481 14.855C21.1722 15.4392 21.3127 16.4879 20.7678 17.242L19.4934 19.0057C18.4541 20.4442 16.5487 20.9572 14.9277 20.2349L14.1699 19.8973Z" fill="#8f8f8f"/>
</svg>
          <span>????????????</span>
          </div>
          <div class="footer__mob__button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 7.5C7.75 5.15279 9.65279 3.25 12 3.25C14.3472 3.25 16.25 5.15279 16.25 7.5C16.25 9.84721 14.3472 11.75 12 11.75C9.65279 11.75 7.75 9.84721 7.75 7.5ZM12 4.75C10.4812 4.75 9.25 5.98122 9.25 7.5C9.25 9.01878 10.4812 10.25 12 10.25C13.5188 10.25 14.75 9.01878 14.75 7.5C14.75 5.98122 13.5188 4.75 12 4.75Z" fill="#8f8f8f"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8 14.75C6.75736 14.75 5.75 15.7574 5.75 17V18.1883C5.75 18.2064 5.76311 18.2218 5.78097 18.2247C9.89972 18.8972 14.1003 18.8972 18.219 18.2247C18.2369 18.2218 18.25 18.2064 18.25 18.1883V17C18.25 15.7574 17.2426 14.75 16 14.75H15.6591C15.6328 14.75 15.6066 14.7542 15.5815 14.7623L14.716 15.045C12.9512 15.6212 11.0488 15.6212 9.28398 15.045L8.41847 14.7623C8.39342 14.7542 8.36722 14.75 8.34087 14.75H8ZM4.25 17C4.25 14.9289 5.92893 13.25 8 13.25H8.34087C8.52536 13.25 8.70869 13.2792 8.88407 13.3364L9.74959 13.6191C11.2119 14.0965 12.7881 14.0965 14.2504 13.6191L15.1159 13.3364C15.2913 13.2792 15.4746 13.25 15.6591 13.25H16C18.0711 13.25 19.75 14.9289 19.75 17V18.1883C19.75 18.9415 19.2041 19.5837 18.4607 19.7051C14.1819 20.4037 9.8181 20.4037 5.53927 19.7051C4.79588 19.5837 4.25 18.9415 4.25 18.1883V17Z" fill="#8f8f8f"/>
</svg>
        <span>??????????????</span>
        </div>
      </div>
    </div>
  </div></body>
</html>
