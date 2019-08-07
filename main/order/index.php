<!DOCTYPE html>
<?php
  $rootPath = $_SERVER['DOCUMENT_ROOT'];
  include_once($rootPath."/config/currentCity.php");
?>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="http://images.trans-s.su/assets/images/logo1.png" />.
    <title>Оставить заявку</title>
    <meta name="description" content="Российская транспортная компания с высоким уровнем надёжности. Оказываем услуги международной перевозки грузов. Контактная информация.">
<?php include $rootPath.'/partials/google-analytics.html'; ?>

    <?php include $rootPath.'/partials/styles.html'; ?>

</head>
<body>
<div class="app">

    <header class="header">
        <div class="header__container header__container-home">
            <div class="header__list-wrapper">
                <ul class="header__list">
									<li class="header__item">
											<div class="header__content-wrapper">
													<div class="header__picture-wrapper header__picture-wrapper--active">
															<img src="http://images.trans-s.su/assets/images/Russia.gif" alt="Изображение" class="header__picture">
													</div>
													<div class="header__picture-wrapper">
															<a href="./en/"><img src="http://images.trans-s.su/assets/images/USA.gif" alt="Изображение" class="header__picture"></a>
													</div>
													<div class="header__picture-wrapper">
															<a href="./ch/"><img src="http://images.trans-s.su/assets/images/china.gif" alt="Изображение" class="header__picture"></a>
													</div>
											</div>
									</li>
									<div class="city-selector">
											<div class="city-selector__label"><svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 14L8.51937 9.36272C9.47999 8.09695 10 6.5516 10 4.96258C10 2.22183 7.74076 0 5 0C2.25924 0 0 2.22183 0 4.96258C0 6.5516 0.520008 8.09695 1.48063 9.36272L5 14Z" fill="#066271"/></svg><span>Челябинск</span><svg class="city-selector__arrow" width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.5 4.5L0 0H9L4.5 4.5Z" fill="#066271"/></svg></div>
											<ul class="city-selector__list"> 
												<li><a href="http://arhangelsk.trans-s.su/">Архангельск</a></li>
												<li><a href="http://vladivostok.trans-s.su/">Владивосток</a></li>
												<li><a href="http://ekaterinburg.trans-s.su/">Екатеринбург</a></li>
												<li><a href="http://irkutsk.trans-s.su/">Иркутск</a></li>
												<li><a href="http://kazan.trans-s.su/">Казань</a></li>
												<li><a href="http://krasnodar.trans-s.su/">Краснодар</a></li>
												<li><a href="http://krasnoyarsk.trans-s.su/">Красноярск</a></li>
												<li><a href="http://moscow.trans-s.su/">Москва</a></li>
												<li><a href="http://murmansk.trans-s.su/">Мурманск</a></li>
												<li><a href="http://nnovgorod.trans-s.su/">Нижний Новгород</a></li>
												<li><a href="http://novosibirsk.trans-s.su/">Новосибирск</a></li>
												<li><a href="http://perm.trans-s.su/">Пермь</a></li>
												<li><a href="http://rostov.trans-s.su/">Ростов-на-Дону</a></li>
												<li><a href="http://samara.trans-s.su/">Самара</a></li>
												<li><a href="http://spb.trans-s.su/">Санкт-Петербург</a></li>
												<li><a href="http://tyumen.trans-s.su/">Тюмень</a></li>
												<li><a href="http://ufa.trans-s.su/">Уфа</a></li>
												<li><a href="http://habarovsk.trans-s.su/">Хабаровск</a></li>
												<li><a href="http://khanty-mansiysk.trans-s.su/">Ханты-Мансийск</a></li>
												<li><a href="http://chita.trans-s.su/">Чита</a></li>
											</ul>
										</div>
                    <li class="header__item">
                        <a class="header__content-wrapper" href="tel:+7 351 700-02-04">
														<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M2.5 9L7 4.5L4.20711 1.70711C3.81658 1.31658 3.18342 1.31658 2.79289 1.70711L2.08601 2.41399C2.02986 2.47014 1.99108 2.54128 1.97429 2.61889L1.84937 3.19665C0.0272 11.6242 7.4161 19.1691 15.8799 17.5234V17.5234C15.9582 17.5081 16.0301 17.4699 16.0865 17.4135L16.7929 16.7071C17.1834 16.3166 17.1834 15.6834 16.7929 15.2929L14 12.5L9.5 17" stroke="#066271" stroke-width="2"/>
														</svg>
                            <p class="header__text">+7 351 700-02-04</p>
                        </a>
                    </li>

                    <li class="header__item">
                        <a class="header__content-wrapper"  href="mailto:info@trans-s.su" >
													<svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M10.5 14H9C7.34315 14 6 12.6569 6 11V8.75C6 7.50736 7.00736 6.5 8.25 6.5V6.5C9.49264 6.5 10.5 7.50736 10.5 8.75V14ZM10.5 14H12.5C14.1569 14 15.5 12.6569 15.5 11V8.75C15.5 4.74594 12.2541 1.5 8.25 1.5V1.5C4.24594 1.5 1 4.74594 1 8.75V11.25C1 15.5302 4.46979 19 8.75 19V19H16.5" stroke="#066271" stroke-width="2"/>
														</svg>
                            <p class="header__text">info@trans-s.su</p>
													</a>
                    </li>

                    <li class="header__item">
                        <div class="header__content-wrapper">
                            <a href="./contact-us.html#form" class="header__button header__button--contacts">Свяжитесь с нами</a>
                            <a href="./order/" class="header__button">Оставить заявку</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <nav class="nav">
        <div class="nav__container nav__container-home">
            <div class="nav__wrapper">
                <div class="nav__logo-wrapper m">
                    <a class="nav__link" href="./">
                        <!-- <img src="http://images.trans-s.su/assets/images/logo.png" alt="Изображение" class="nav__logo"> -->
                        <div class="top-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="330px" height="65px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            viewBox="0 0 16492.86 3385.03"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                             <defs>
                              <style type="text/css">
                               <![CDATA[
                                .fil2 {fill:#066271}
                                .fil0 {fill:#2B2A29;fill-rule:nonzero}
                                .fil1 {fill:#066271;fill-rule:nonzero}
                               ]]>
                              </style>
                             </defs>
                             <g id="Слой_x0020_1">
                              <metadata id="CorelCorpID_0Corel-Layer"/>
                              <path class="fil0" d="M749.25 1061.5l-749.25 0 0 204.46 261.18 0 0 666.14 226.88 0 0 -666.14 261.18 0 0 -204.46zm815.21 0l-341.64 0 0 870.6 226.88 0 0 -270.41 114.76 0c191.27,0 336.38,-120.04 336.38,-300.76 0,-184.67 -145.11,-299.43 -336.38,-299.43zm1.33 197.87c63.32,0 104.2,40.89 104.2,101.57 0,62 -40.88,102.89 -104.2,102.89l-116.09 0 0 -204.46 116.09 0zm1261.08 672.74l244.03 0 -395.73 -886.43 -72.55 0 -395.73 886.43 244.04 0 31.65 -72.55 312.62 0 31.66 72.55zm-112.13 -254.59l-151.69 0 76.5 -201.82 75.19 201.82zm1590.86 -616.02l-226.88 0 0 317.9 -317.9 0 0 -317.9 -226.88 0 0 870.6 226.88 0 0 -348.24 317.9 0 0 348.24 226.88 0 0 -870.6zm973.51 -15.83c-263.82,0 -470.91,195.23 -470.91,451.13 0,257.22 207.1,451.12 469.6,451.12 175.44,0 320.54,-85.74 399.69,-233.48l-172.81 -117.39c-52.76,89.69 -123.99,142.46 -226.88,142.46 -138.5,0 -237.43,-94.98 -237.43,-241.39 0,-146.42 98.93,-244.04 237.43,-244.04 102.89,0 174.13,52.77 226.88,142.46l172.81 -117.39c-79.15,-147.74 -224.25,-233.48 -398.38,-233.48zm4651.14 0c-263.82,0 -470.91,195.23 -470.91,451.13 0,257.22 207.1,451.12 469.6,451.12 175.44,0 320.54,-85.74 399.69,-233.48l-172.81 -117.39c-52.76,89.69 -123.99,142.46 -226.88,142.46 -138.5,0 -237.43,-94.98 -237.43,-241.39 0,-146.42 98.93,-244.04 237.43,-244.04 102.89,0 174.13,52.77 226.88,142.46l172.81 -117.39c-79.15,-147.74 -224.25,-233.48 -398.38,-233.48zm1505.11 15.83l-604.14 0 0 870.6 619.98 0 0 -204.46 -393.1 0 0 -151.69 269.1 0 0 -189.95 -269.1 0 0 -120.04 377.26 0 0 -204.46zm871.94 0l-341.64 0 0 870.6 226.88 0 0 -270.41 114.76 0c191.27,0 336.38,-120.04 336.38,-300.76 0,-184.67 -145.11,-299.43 -336.38,-299.43zm1.33 197.87c63.32,0 104.2,40.89 104.2,101.57 0,62 -40.88,102.89 -104.2,102.89l-116.09 0 0 -204.46 116.09 0zm1386.39 205.78c32.97,-36.93 52.76,-87.06 52.76,-146.41 0,-154.34 -127.95,-257.23 -294.15,-257.23l-96.3 0 -217.65 0 0 870.6 116.09 0 290.2 0c167.52,0 294.15,-105.53 294.15,-258.54 0,-102.89 -56.72,-172.81 -145.1,-208.42zm-255.91 -212.37c54.09,0 87.07,30.34 87.07,76.51 0,46.17 -32.98,76.51 -87.07,76.51l-81.78 0 0 -153.02 81.78 0zm92.35 488.07l-174.13 0 0 -153.02 174.13 0c52.76,0 87.06,25.07 87.06,76.51 0,51.44 -34.3,76.51 -87.06,76.51zm1516.98 -695.16l-485.43 464.32 0 -448.49 -226.88 0 0 886.43 72.56 0 485.42 -470.91 0 455.09 226.88 0 0 -886.43 -72.55 0zm1046.06 0c-263.82,0 -470.91,195.23 -470.91,451.13 0,257.22 207.1,451.12 469.6,451.12 175.44,0 320.54,-85.74 399.69,-233.48l-172.81 -117.39c-52.76,89.69 -123.99,142.46 -226.88,142.46 -138.5,0 -237.43,-94.98 -237.43,-241.39 0,-146.42 98.93,-244.04 237.43,-244.04 102.89,0 174.13,52.77 226.88,142.46l172.81 -117.39c-79.15,-147.74 -224.25,-233.48 -398.38,-233.48z"/>
                              <path class="fil1" d="M9582.21 2373.19l0 38.12c0,78.55 -13.09,105.12 -44.28,108.97l0 45.81c54.67,-3.08 95.88,-33.88 95.88,-131.68l0 -17.32 47.74 0 0 146.69 51.6 0 0 -190.59 -150.93 0zm295.7 -4.23c-56.98,0 -102.03,43.12 -102.03,99.33 0,56.6 45.05,99.72 101.65,99.72 56.6,0 102.8,-43.13 102.8,-99.72 0,-56.22 -46.2,-99.33 -102.42,-99.33zm0 47.36c28.11,0 49.29,22.33 49.29,52.36 0,29.65 -21.18,51.6 -49.29,51.6 -28.88,0 -49.28,-21.56 -49.28,-51.6 0,-30.03 20.41,-52.36 49.28,-52.36zm286.47 -43.13l-141.69 0 0 190.59 51.98 0 0 -146.69 89.71 0 0 -43.9zm195.59 -4.23l-110.12 105.88 0 -101.65 -51.98 0 0 195.21 17.33 0 110.12 -106.27 0 101.65 51.59 0 0 -194.82 -16.94 0zm161.7 0c-56.98,0 -102.03,43.12 -102.03,99.33 0,56.6 45.05,100.11 102.03,100.11 37.74,0 67,-18.86 82.79,-47.36l-36.19 -27.72c-11.17,15.79 -25.03,27.33 -45.82,27.33 -29.65,0 -50.05,-22.33 -50.05,-52.36 0,-29.65 20.41,-51.98 50.05,-51.98 21.18,0 35.04,11.55 45.82,27.72l36.19 -28.11c-15.79,-28.49 -44.66,-46.97 -82.79,-46.97zm271.84 3.85l-172.11 0 0 43.89 60.06 0 0 147.08 51.6 0 0 -147.08 60.46 0 0 -43.89zm194.05 -3.85l-110.12 105.88 0 -101.65 -51.98 0 0 195.21 17.33 0 110.12 -106.27 0 101.65 51.59 0 0 -194.82 -16.94 0zm182.88 4.23l0 77.78c-9.62,3.08 -20.01,5.01 -29.26,5.01 -25.8,0 -42.36,-14.63 -42.36,-45.44l0 -37.34 -51.6 0 0 40.81c0,57.37 39.28,89.71 89.71,89.71 12.71,0 23.87,-2.31 33.5,-5l0 65.07 51.99 0 0 -190.59 -51.99 0zm284.15 84.32c0,-49.28 -36.19,-88.55 -89.71,-88.55 -56.22,0 -99.72,43.51 -99.72,99.71 0,56.22 43.9,99.72 104.35,99.72 29.27,0 54.67,-10.39 76.23,-28.49l-21.56 -35.42c-15.4,11.94 -32.34,19.25 -53.13,19.25 -27.34,0 -47.37,-13.48 -53.91,-37.74l133.99 0c1.54,-6.54 3.47,-17.71 3.47,-28.49zm-91.64 -46.58c21.95,0 40.81,14.24 41.19,38.5l-87.02 0c6.16,-23.86 23.87,-38.5 45.82,-38.5zm223.31 -41.96c-56.98,0 -102.03,43.12 -102.03,99.33 0,56.6 45.05,100.11 102.03,100.11 37.74,0 67,-18.86 82.79,-47.36l-36.19 -27.72c-11.17,15.79 -25.03,27.33 -45.82,27.33 -29.65,0 -50.05,-22.33 -50.05,-52.36 0,-29.65 20.41,-51.98 50.05,-51.98 21.18,0 35.04,11.55 45.82,27.72l36.19 -28.11c-15.79,-28.49 -44.66,-46.97 -82.79,-46.97zm312.26 194.82l-78.55 -104.35 72.77 -86.24 -59.68 0 -71.61 86.64 0 -86.64 -51.98 0 0 190.59 51.98 0 0 -103.18 77.78 103.18 59.29 0zm192.91 -194.82l-110.12 105.88 0 -101.65 -51.98 0 0 195.21 17.33 0 110.12 -106.27 0 101.65 51.59 0 0 -194.82 -16.94 0zm249.11 88.55c0,-49.28 -36.19,-88.55 -89.71,-88.55 -56.22,0 -99.72,43.51 -99.72,99.71 0,56.22 43.9,99.72 104.35,99.72 29.27,0 54.67,-10.39 76.23,-28.49l-21.56 -35.42c-15.4,11.94 -32.34,19.25 -53.13,19.25 -27.34,0 -47.37,-13.48 -53.91,-37.74l133.99 0c1.54,-6.54 3.47,-17.71 3.47,-28.49zm-91.64 -46.58c21.95,0 40.81,14.24 41.19,38.5l-87.02 0c6.16,-23.86 23.87,-38.5 45.82,-38.5zm-2578.92 316.46c-26.19,0 -48.13,10 -61.22,27.71l0 -23.48 -47.75 0 0 259.9 51.98 0 0 -87.79c13.48,14.63 33.5,23.1 56.99,23.1 53.52,0 92.41,-42.74 92.41,-100.11 0,-57.37 -38.51,-99.33 -92.41,-99.33zm-9.63 152.08c-24.25,0 -48.51,-16.56 -48.51,-52.75 0,-36.58 24.64,-52.37 48.51,-52.37 26.95,0 48.9,20.41 48.9,52.75 0,32.34 -22.33,52.37 -48.9,52.37zm321.51 -63.53c0,-49.28 -36.19,-88.55 -89.71,-88.55 -56.22,0 -99.72,43.51 -99.72,99.71 0,56.22 43.9,99.72 104.35,99.72 29.27,0 54.67,-10.39 76.23,-28.49l-21.56 -35.42c-15.4,11.94 -32.34,19.25 -53.13,19.25 -27.34,0 -47.37,-13.48 -53.91,-37.74l133.99 0c1.54,-6.54 3.47,-17.71 3.47,-28.49zm-91.64 -46.58c21.95,0 40.81,14.24 41.19,38.5l-87.02 0c6.16,-23.86 23.87,-38.5 45.82,-38.5zm417.37 -37.74l-51.6 0 0 146.7 -64.29 0 0 -146.7 -51.6 0 0 146.7 -64.29 0 0 -146.7 -51.6 0 0 190.59 283.38 0 0 -190.59zm232.55 84.32c0,-49.28 -36.19,-88.55 -89.71,-88.55 -56.22,0 -99.72,43.51 -99.72,99.71 0,56.22 43.9,99.72 104.35,99.72 29.27,0 54.67,-10.39 76.23,-28.49l-21.56 -35.42c-15.4,11.94 -32.34,19.25 -53.13,19.25 -27.34,0 -47.37,-13.48 -53.91,-37.74l133.99 0c1.54,-6.54 3.47,-17.71 3.47,-28.49zm-91.64 -46.58c21.95,0 40.81,14.24 41.19,38.5l-87.02 0c6.16,-23.86 23.87,-38.5 45.82,-38.5zm309.57 -37.74l-51.6 0 0 69.69 -72 0 0 -69.69 -51.98 0 0 190.59 51.98 0 0 -76.62 72 0 0 76.62 51.6 0 0 -190.59zm217.54 -4.23l-110.12 105.88 0 -101.65 -51.98 0 0 195.21 17.33 0 110.12 -106.27 0 101.65 51.59 0 0 -194.82 -16.94 0zm149.78 4.23c-45.82,0 -80.09,26.18 -80.09,71.23 0,26.18 11.94,46.2 31.19,58.14l-49.67 61.22 57.75 0 41.58 -48.51 36.58 0 0 48.51 51.98 0 0 -190.59 -89.32 0zm37.34 98.18l-33.5 0c-18.1,0 -31.19,-10.39 -31.19,-27.72 0,-17.33 13.09,-26.56 31.19,-26.56l33.5 0 0 54.28z"/>
                              <path class="fil2" d="M8819.95 945.5l-103.77 0 -734.7 0c-82.06,0 -148.56,-66.5 -148.56,-148.55l0 -373.17c0,-81.96 -66.36,-148.44 -148.32,-148.63l-1.91 0c-60.5,0 -119.88,4.75 -177.84,13.9 -73.28,11.58 -128.14,73.18 -128.14,147.37l0 1940.2c0,74.17 54.86,135.77 128.14,147.37 57.96,9.13 117.34,13.9 177.84,13.9l4.95 -0.02c80.29,-0.16 145.28,-65.3 145.28,-145.57l0 -327.59c0,-82.05 66.51,-148.56 148.56,-148.56l758.07 1.34 129.94 -1.34c58.77,-1.17 98.94,60.55 72.71,113.14 -250.08,501.42 -801.05,930.16 -1189.52,1320.5 -59.48,61.8 -100.06,30.52 -133.69,-4.63 -540.8,-565.52 -1342.81,-1077.67 -1342.81,-1938.64 0,-388.38 157.45,-740.03 411.98,-994.55 254.51,-254.52 606.16,-411.97 994.53,-411.97 388.41,0 740.05,157.44 994.57,411.97 108.31,108.31 199.03,234.22 267.52,373.09 36.4,73.81 -17.38,160.44 -99.69,160.44l-25.14 0z"/>
                             </g>
                            </svg>
                        </div>
                        <div class="top-logo-stiky">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="180px" height="40px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            viewBox="0 0 10106.24 3747.28"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                             <defs>
                              <style type="text/css">
                               <![CDATA[
                                .fil2 {fill:#066271}
                                .fil0 {fill:#2B2A29;fill-rule:nonzero}
                                .fil1 {fill:#066271;fill-rule:nonzero}
                               ]]>
                              </style>
                             </defs>
                             <g id="Слой_x0020_1">
                              <metadata id="CorelCorpID_0Corel-Layer"/>
                              <g id="_2371632680192">
                               <path class="fil0" d="M4041.3 298.78l-719.77 0 0 196.42 250.91 0 0 639.94 217.95 0 0 -639.94 250.91 0 0 -196.42zm783.15 0l-328.2 0 0 836.36 217.96 0 0 -259.78 110.24 0c183.74,0 323.14,-115.32 323.14,-288.92 0,-177.41 -139.4,-287.66 -323.14,-287.66zm1.27 190.09c60.82,0 100.11,39.28 100.11,97.57 0,59.56 -39.29,98.85 -100.11,98.85l-111.51 0 0 -196.42 111.51 0zm1211.46 646.27l234.43 0 -380.16 -851.56 -69.69 0 -380.16 851.56 234.43 0 30.41 -69.7 300.33 0 30.41 69.7zm-107.7 -244.57l-145.73 0 73.5 -193.88 72.23 193.88zm1528.26 -591.78l-217.95 0 0 305.4 -305.4 0 0 -305.4 -217.96 0 0 836.36 217.96 0 0 -334.54 305.4 0 0 334.54 217.95 0 0 -836.36zm935.21 -15.2c-253.43,0 -452.39,187.54 -452.39,433.38 0,247.11 198.95,433.39 451.12,433.39 168.53,0 307.93,-82.37 383.96,-224.29l-166 -112.78c-50.69,86.17 -119.12,136.86 -217.96,136.86 -133.05,0 -228.09,-91.24 -228.09,-231.9 0,-140.66 95.04,-234.43 228.09,-234.43 98.85,0 167.27,50.69 217.96,136.86l166 -112.78c-76.03,-141.93 -215.43,-224.29 -382.7,-224.29zm-4591.15 1520.64c-253.43,0 -452.39,187.54 -452.39,433.38 0,247.11 198.95,433.39 451.12,433.39 168.53,0 307.93,-82.37 383.96,-224.29l-166 -112.78c-50.69,86.17 -119.12,136.86 -217.96,136.86 -133.05,0 -228.09,-91.24 -228.09,-231.9 0,-140.66 95.04,-234.43 228.09,-234.43 98.85,0 167.27,50.69 217.96,136.86l166 -112.78c-76.03,-141.93 -215.43,-224.29 -382.7,-224.29zm1445.9 15.2l-580.38 0 0 836.36 595.58 0 0 -196.42 -377.62 0 0 -145.73 258.5 0 0 -182.47 -258.5 0 0 -115.32 362.42 0 0 -196.42zm837.64 0l-328.2 0 0 836.36 217.96 0 0 -259.78 110.24 0c183.74,0 323.14,-115.32 323.14,-288.92 0,-177.41 -139.4,-287.66 -323.14,-287.66zm1.27 190.09c60.82,0 100.11,39.28 100.11,97.57 0,59.56 -39.29,98.85 -100.11,98.85l-111.51 0 0 -196.42 111.51 0zm1331.85 197.68c31.68,-35.48 50.69,-83.64 50.69,-140.66 0,-148.26 -122.91,-247.11 -282.58,-247.11l-92.51 0 -209.09 0 0 836.36 111.51 0 278.78 0c160.94,0 282.59,-101.38 282.59,-248.37 0,-98.85 -54.49,-166 -139.4,-200.22zm-245.84 -204.02c51.96,0 83.64,29.15 83.64,73.5 0,44.35 -31.67,73.5 -83.64,73.5l-78.57 0 0 -147 78.57 0zm88.71 468.87l-167.27 0 0 -146.99 167.27 0c50.69,0 83.64,24.08 83.64,73.5 0,49.42 -32.95,73.5 -83.64,73.5zm1457.31 -667.81l-466.33 446.05 0 -430.85 -217.96 0 0 851.57 69.7 0 466.33 -452.4 0 437.19 217.96 0 0 -851.56 -69.7 0zm1004.91 0c-253.43,0 -452.39,187.54 -452.39,433.38 0,247.11 198.95,433.39 451.12,433.39 168.53,0 307.93,-82.37 383.96,-224.29l-166 -112.78c-50.69,86.17 -119.12,136.86 -217.96,136.86 -133.05,0 -228.09,-91.24 -228.09,-231.9 0,-140.66 95.04,-234.43 228.09,-234.43 98.85,0 167.27,50.69 217.96,136.86l166 -112.78c-76.03,-141.93 -215.43,-224.29 -382.7,-224.29z"/>
                               <path class="fil1" d="M3383.11 3385.84l0 53.01c0,109.23 -18.2,146.18 -61.58,151.54l0 63.72c76.04,-4.28 133.33,-47.12 133.33,-183.13l0 -24.09 66.4 0 0 204.02 71.75 0 0 -265.06 -209.91 0zm411.25 -5.89c-79.25,0 -141.91,59.97 -141.91,138.15 0,78.72 62.65,138.69 141.36,138.69 78.72,0 142.97,-59.97 142.97,-138.69 0,-78.18 -64.25,-138.15 -142.43,-138.15zm0 65.87c39.08,0 68.54,31.06 68.54,72.82 0,41.24 -29.45,71.76 -68.54,71.76 -40.16,0 -68.54,-29.99 -68.54,-71.76 0,-41.76 28.38,-72.82 68.54,-72.82zm398.38 -59.97l-197.05 0 0 265.06 72.28 0 0 -204.02 124.76 0 0 -61.04zm272.03 -5.89l-153.15 147.25 0 -141.36 -72.28 0 0 271.48 24.09 0 153.14 -147.79 0 141.36 71.76 0 0 -270.95 -23.56 0zm224.9 0c-79.25,0 -141.91,59.97 -141.91,138.15 0,78.72 62.65,139.23 141.91,139.23 52.47,0 93.17,-26.24 115.12,-65.87l-50.33 -38.55c-15.53,21.95 -34.8,38.02 -63.72,38.02 -41.23,0 -69.61,-31.06 -69.61,-72.83 0,-41.23 28.38,-72.28 69.61,-72.28 29.45,0 48.73,16.07 63.72,38.55l50.33 -39.08c-21.96,-39.63 -62.12,-65.33 -115.12,-65.33zm378.04 5.36l-239.35 0 0 61.04 83.53 0 0 204.55 71.75 0 0 -204.55 84.07 0 0 -61.04zm269.88 -5.36l-153.15 147.25 0 -141.36 -72.28 0 0 271.48 24.09 0 153.14 -147.79 0 141.36 71.76 0 0 -270.95 -23.56 0zm254.34 5.89l0 108.16c-13.39,4.28 -27.84,6.96 -40.69,6.96 -35.87,0 -58.9,-20.35 -58.9,-63.19l0 -51.94 -71.76 0 0 56.76c0,79.79 54.62,124.76 124.77,124.76 17.67,0 33.19,-3.21 46.58,-6.96l0 90.49 72.29 0 0 -265.06 -72.29 0zm395.19 117.27c0,-68.54 -50.33,-123.16 -124.76,-123.16 -78.18,0 -138.69,60.51 -138.69,138.68 0,78.18 61.04,138.69 145.12,138.69 40.69,0 76.03,-14.46 106.02,-39.63l-29.99 -49.27c-21.42,16.6 -44.98,26.77 -73.89,26.77 -38.02,0 -65.86,-18.74 -74.96,-52.47l186.35 0c2.14,-9.11 4.82,-24.64 4.82,-39.63zm-127.44 -64.8c30.52,0 56.76,19.81 57.29,53.55l-121.02 0c8.56,-33.19 33.2,-53.55 63.72,-53.55zm310.58 -58.36c-79.25,0 -141.91,59.97 -141.91,138.15 0,78.72 62.65,139.23 141.91,139.23 52.47,0 93.17,-26.24 115.12,-65.87l-50.33 -38.55c-15.53,21.95 -34.8,38.02 -63.72,38.02 -41.23,0 -69.61,-31.06 -69.61,-72.83 0,-41.23 28.38,-72.28 69.61,-72.28 29.45,0 48.73,16.07 63.72,38.55l50.33 -39.08c-21.96,-39.63 -62.12,-65.33 -115.12,-65.33zm434.26 270.95l-109.24 -145.11 101.21 -119.95 -83 0 -99.6 120.48 0 -120.48 -72.28 0 0 265.06 72.28 0 0 -143.51 108.16 143.51 82.47 0zm268.27 -270.95l-153.15 147.25 0 -141.36 -72.28 0 0 271.48 24.09 0 153.14 -147.79 0 141.36 71.76 0 0 -270.95 -23.56 0zm346.45 123.16c0,-68.54 -50.33,-123.16 -124.76,-123.16 -78.18,0 -138.69,60.51 -138.69,138.68 0,78.18 61.04,138.69 145.12,138.69 40.69,0 76.03,-14.46 106.02,-39.63l-29.99 -49.27c-21.42,16.6 -44.98,26.77 -73.89,26.77 -38.02,0 -65.86,-18.74 -74.96,-52.47l186.35 0c2.14,-9.11 4.82,-24.64 4.82,-39.63zm-127.44 -64.8c30.52,0 56.76,19.81 57.29,53.55l-121.02 0c8.56,-33.19 33.2,-53.55 63.72,-53.55zm487.82 -58.36c-36.41,0 -66.93,13.92 -85.14,38.56l0 -32.67 -66.39 0 0 361.44 72.28 0 0 -122.09c18.74,20.35 46.59,32.13 79.25,32.13 74.43,0 128.51,-59.44 128.51,-139.23 0,-79.79 -53.55,-138.15 -128.51,-138.15zm-13.39 211.51c-33.73,0 -67.47,-23.03 -67.47,-73.36 0,-50.87 34.27,-72.82 67.47,-72.82 37.48,0 68,28.38 68,73.35 0,44.98 -31.06,72.83 -68,72.83zm447.11 -88.35c0,-68.54 -50.33,-123.16 -124.76,-123.16 -78.18,0 -138.69,60.51 -138.69,138.68 0,78.18 61.04,138.69 145.12,138.69 40.69,0 76.03,-14.46 106.02,-39.63l-29.99 -49.27c-21.42,16.6 -44.98,26.77 -73.89,26.77 -38.02,0 -65.86,-18.74 -74.96,-52.47l186.35 0c2.14,-9.11 4.82,-24.64 4.82,-39.63zm-127.44 -64.8c30.52,0 56.76,19.81 57.29,53.55l-121.02 0c8.56,-33.19 33.2,-53.55 63.72,-53.55zm580.45 -52.47l-71.75 0 0 204.02 -89.43 0 0 -204.02 -71.75 0 0 204.02 -89.43 0 0 -204.02 -71.75 0 0 265.06 394.1 0 0 -265.06zm323.43 117.27c0,-68.54 -50.33,-123.16 -124.76,-123.16 -78.18,0 -138.69,60.51 -138.69,138.68 0,78.18 61.04,138.69 145.12,138.69 40.69,0 76.03,-14.46 106.02,-39.63l-29.99 -49.27c-21.42,16.6 -44.98,26.77 -73.89,26.77 -38.02,0 -65.86,-18.74 -74.96,-52.47l186.35 0c2.14,-9.11 4.82,-24.64 4.82,-39.63zm-127.44 -64.8c30.52,0 56.76,19.81 57.29,53.55l-121.02 0c8.56,-33.19 33.2,-53.55 63.72,-53.55zm430.51 -52.47l-71.75 0 0 96.92 -100.13 0 0 -96.92 -72.28 0 0 265.06 72.28 0 0 -106.56 100.13 0 0 106.56 71.75 0 0 -265.06zm302.55 -5.89l-153.15 147.25 0 -141.36 -72.28 0 0 271.48 24.09 0 153.14 -147.79 0 141.36 71.76 0 0 -270.95 -23.56 0zm208.3 5.89c-63.72,0 -111.38,36.41 -111.38,99.06 0,36.41 16.6,64.26 43.37,80.86l-69.07 85.14 80.32 0 57.83 -67.47 50.87 0 0 67.47 72.29 0 0 -265.06 -124.23 0zm51.94 136.55l-46.59 0c-25.16,0 -43.37,-14.46 -43.37,-38.56 0,-24.09 18.21,-36.95 43.37,-36.95l46.59 0 0 75.51z"/>
                               <path class="fil2" d="M2560.15 951.59l-104.43 0 -739.44 0c-82.58,0 -149.52,-66.93 -149.52,-149.51l0 -375.58c0,-82.5 -66.79,-149.4 -149.27,-149.59l-1.92 0c-60.88,0 -120.66,4.78 -178.98,14 -73.75,11.65 -128.97,73.64 -128.97,148.31l0 1952.69c0,74.66 55.22,136.65 128.97,148.32 58.32,9.19 118.1,13.99 178.98,13.99l4.99 -0.02c80.8,-0.17 146.21,-65.72 146.21,-146.51l0 -329.69c0,-82.58 66.94,-149.52 149.52,-149.52l762.95 1.35 130.77 -1.35c59.15,-1.18 99.58,60.94 73.18,113.87 -251.7,504.65 -806.21,936.15 -1197.18,1329.01 -59.85,62.2 -100.7,30.72 -134.55,-4.65 -544.28,-569.16 -1351.47,-1084.61 -1351.47,-1951.13 0,-390.88 158.47,-744.79 414.64,-1000.96 256.15,-256.16 610.06,-414.62 1000.93,-414.62 390.91,0 744.81,158.45 1000.98,414.62 109.01,109.01 200.32,235.73 269.25,375.5 36.63,74.28 -17.5,161.47 -100.34,161.47l-25.31 0z"/>
                              </g>
                             </g>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="nav__burger-wrapper">
                    <div class="nav__burger-line nav__burger-first"></div>
                    <div class="nav__burger-line nav__burger-second"></div>
                    <div class="nav__burger-line nav__burger-third"></div>
                    <div class="nav__burger-line nav__burger-fourth"></div>
                </div>
            </div>
            <ul class="nav__list m">
                <li class="header__item language-list">
                  <div class="header__content-wrapper">
                      <div class="header__picture-wrapper">
                          <img src="http://images.trans-s.su/assets/images/Russia.gif" alt="Изображение" class="header__picture">
                      </div>
                      <div class="header__picture-wrapper">
                          <a href="./en/"><img src="http://images.trans-s.su/assets/images/USA.gif" alt="Изображение" class="header__picture"></a>
                      </div>
                      <div class="header__picture-wrapper">
                          <a href="./ch/"><img src="http://images.trans-s.su/assets/images/china.gif" alt="Изображение" class="header__picture"></a>
                      </div>
									</div>
	                </li>
                <li class="nav__item">
                    <a href="./about/" class="nav__link">
                        О компании
                    </a>
                </li>
                <li class="nav__item nav__item--parent">
                    <a href="#" class="nav__link ">
                        Услуги
                    </a>
                    <div class="nav__popup-wrapper">
                        <ul class="nav__popup-list">
                            <li class="nav__popup-item">
                                <a href="./services/auto/" class="nav__popup-link">
                                    Автомобильные грузоперевозки
                                </a>
                            </li>
                            <li class="nav__popup-item">
                                <a href="./services/train/" class="nav__popup-link">
                                    Железнодорожные  грузоперевозки
                                </a>
                            </li>
                            <li class="nav__popup-item">
                                <a href="./services/ship/" class="nav__popup-link">
                                    Морские  грузоперевозки
                                </a>
                            </li>
                            <li class="nav__popup-item">
                                <a href="./services/multimodal/" class="nav__popup-link">
                                    Мультимодальные  грузоперевозки
                                </a>
                            </li>
                            <li class="nav__popup-item">
                                <a href="./services/oversized/" class="nav__popup-link">
                                    Негабаритные  грузоперевозки
                                </a>
                            </li>
                            <li class="nav__popup-item">
                                <a href="./services/customs/" class="nav__popup-link">
                                    Таможенное оформление
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav__item">
									<a href="#" class="nav__link">
											Справочная информация
									</a>
									<div class="nav__popup-wrapper">
											<ul class="nav__popup-list">
													<li class="nav__popup-item">
															<a href="./inform/incotermes/" class="nav__popup-link">
																	Инкотермс
															</a>
													</li>
													<li class="nav__popup-item">
															<a href="./inform/type-trailers/" class="nav__popup-link">
																	Виды грузовых автомобильных прицепов и полуприцепов
															</a>
													</li>
													<li class="nav__popup-item">
															<a href="./inform/iron-mobile/" class="nav__popup-link">
																	Виды подвижного железнодорожного состава
															</a>
													</li>
													<li class="nav__popup-item">
															<a href="./inform/iron-cont/" class="nav__popup-link">
																	Виды железнодорожных контейнеров
															</a>
													</li>
													<li class="nav__popup-item">
															<a href="./inform/ship-cont/" class="nav__popup-link">
																	Виды морских контейнеров
															</a>
													</li>
											</ul>
									</div>
							</li>
                <li class="nav__item">
                    <a href="./in-dev/" class="nav__link">
                        Портфолио
                    </a>
                </li>
                <li class="nav__item">
                    <a href="./in-dev/" class="nav__link">
                        Отзывы
                    </a>
                </li>
                <li class="nav__item">
                    <a href="./in-dev/" class="nav__link">
                        Статьи
                    </a>
                </li>
                <li class="nav__item">
									<a href="./contacts/" class="nav__link">
											Контакты
									</a>
								</li>
                <li class="nav__item city-mobile-btn">
									<a class="nav__link">
										  <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											  <path d="M5 14L8.51937 9.36272C9.47999 8.09695 10 6.5516 10 4.96258C10 2.22183 7.74076 0 5 0C2.25924 0 0 2.22183 0 4.96258C0 6.5516 0.520008 8.09695 1.48063 9.36272L5 14Z" fill="white"/>
											</svg>
											Челябинск
									</a>
								</li>
            </ul>
        </div>
    </nav>

		<div class="what-is-city">
				<div class="what-is-city__content">
					<div class="what-is-city__current">Ваш город:     <span class="what-is-city__title">  Челябинск</span> ?</div>
					<div class="what-is-city__buttons">
						<button class="what-is-city__yes">Да, <span class="what-is-city__title">  Челябинск</span></button>
						<button class="what-is-city__no">Нет, выбрать другой</button>
					</div>
					<div class="what-is-city__list">
						<ul>
							<li><a href="http://arhangelsk.trans-s.su/">Архангельск</a></li>
							<li><a href="http://vladivostok.trans-s.su/">Владивосток</a></li>
							<li><a href="http://ekaterinburg.trans-s.su/">Екатеринбург</a></li>
							<li><a href="http://irkutsk.trans-s.su/">Иркутск</a></li>
							<li><a href="http://kazan.trans-s.su/">Казань</a></li>
							<li><a href="http://krasnodar.trans-s.su/">Краснодар</a></li>
							<li><a href="http://krasnoyarsk.trans-s.su/">Красноярск</a></li>
							<li><a href="http://moscow.trans-s.su/">Москва</a></li>
							<li><a href="http://murmansk.trans-s.su/">Мурманск</a></li>
							<li><a href="http://nnovgorod.trans-s.su/">Нижний Новгород</a></li>
							<li><a href="http://novosibirsk.trans-s.su/">Новосибирск</a></li>
							<li><a href="http://perm.trans-s.su/">Пермь</a></li>
							<li><a href="http://rostov.trans-s.su/">Ростов-на-Дону</a></li>
							<li><a href="http://samara.trans-s.su/">Самара</a></li>
							<li><a href="http://spb.trans-s.su/">Санкт-Петербург</a></li>
							<li><a href="http://tyumen.trans-s.su/">Тюмень</a></li>
							<li><a href="http://ufa.trans-s.su/">Уфа</a></li>
							<li><a href="http://habarovsk.trans-s.su/">Хабаровск</a></li>
							<li><a href="http://khanty-mansiysk.trans-s.su/">Ханты-Мансийск</a></li>
							<li><a href="http://chita.trans-s.su/">Чита</a></li>
						</ul>
					</div>
				</div>
		</div>


    <section class="title">
        <div class="title__container">
            <ul class="title__list">
                <li class="title__item">
                    <div class="title__content">
                        <h3 class="title__title-about">
                            Страница в разработке!
                        </h3>
                        <div class="title__strip">

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="form form__order">
        <div class="form__container">
            <form action="./response-order.php" class="form__content form__order" method="post">
                <h3 class="form__title">Оставить заявку</h3>
                <div class="form__input-fields-wrapper">

                    <div class="form__input-fields">
                        <input class="form__field form__name" type="text" name="dest-from" placeholder="Откуда: ">
                        <input class="form__field form__where" type="text" name="dest-to" placeholder="Куда: ">
                        <input class="form__field form__package-name" type="text" name="package-name" placeholder="Наименование груза: ">
                        <input class="form__field form__weight" type="text" name="weight" placeholder="Вес груза, тн: ">
                        <input class="form__field form__to" type="text" name="sizes" placeholder="Габариты груза (ДхШхВ), м: ">
                        <input class="form__field form__space" type="text" name="space" placeholder="Объем груза, м3: ">
                        <input class="form__field form__tel" type="phone"  placeholder="Ваш номер телефона: ">
                    </div>

                    <div class="form__input-fields">
                        <textarea class="form__field form__field--textarea" type="text" name="comment" placeholder="Комментарий: "></textarea>
                    </div>
                </div>

                <div class="form__privacy">
                    <input class="form__checkbox" type="checkbox">
                    <a href="./politic/" class="form__accept">Я согласен с условиями пользовательского соглашения </a>
                </div>

                <button class="form__button" type="submit" disabled>Отправить</button>
            </form>

            <div class="form__message">Ваше сообщение отправлено</div>
        </div>
    </section>


    <section class="services">
        <div class="services__container">
            <ul class="services__list">
                <li class="services__item">
                    <div class="services__content">
                        <h3 class="services__title">
                            Будем рады видеть Вас в числе наших клиентов!
                        </h3>
                        <div class="services__strip">

                        </div>
                        <p class="services__text">
                            Мы заинтересованы в долгосрочных партнерских отношениях, основанных на уважении, доверии и взаимопомощи, поэтому индивидуально подходим к решению задач каждого клиента.
                        </p>
                    </div>
                </li>

                <li class="services__item">
                    <div class="services__content">
                       <div class="services__picture-wrapper">
                           <img src="http://images.trans-s.su/assets/images/map.png" alt="Изображение" class="services__picture">
                       </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div id="form" class="form__line-watch"></div>
    <section class="form">
        <div class="form__container">
            <form action="./response.php" class="form__content" method="POST">
                <h3 class="form__title">Свяжитесь с нами</h3>
                <div class="form__input-fields-wrapper">
                    <div class="form__input-fields">
                        <input class="form__field form__name" type="text" name="name" placeholder="Ваше имя: ">
                        <input class="form__field form__mail" type="text" name="email" placeholder="Ваш e-mail: ">
                        <input class="form__field form__tel" type="text" name="phone" placeholder="Ваш номер телефона: ">
                    </div>

                    <div class="form__input-fields">
                    <textarea class="form__field form__field--textarea form__textarea" name="message" type="text"
                              placeholder="Чем мы можем Вам помочь?"></textarea>
                    </div>
                </div>

                <div class="form__privacy">
                    <input class="form__checkbox" type="checkbox">
                    <a href="./politic/" class="form__accept">Я согласен с условиями пользовательского соглашения </a>
                </div>

                <button class="form__button test" type="submit">Отправить</button>
            </form>

            <div class="form__message">Ваше сообщение отправлено</div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer__container">
            <ul class="footer__list">
                <li class="footer__item">
                    <h4 class="footer__title">О компании</h4>
                </li>
                <li class="footer__item">
                    <a href="./about/" class="footer__link">О компании</a>
                </li>

                <li class="footer__item">
                    <a href="./in-dev/" class="footer__link">Портфолио</a>
                </li>

                <li class="footer__item">
                    <a href="./in-dev/" class="footer__link">Отзывы</a>
                </li>
                
                <li class="footer__item">
                    <a href="./in-dev/" class="footer__link">Статьи</a>
                </li>

                <li class="footer__item">
                    <a href="./contacts/" class="footer__link">Контакты</a>
                </li>
            </ul>

            <ul class="footer__list">
                <li class="footer__item">
                    <h4 class="footer__title"  >Услуги</h4>
                </li>

                <li class="footer__item">
                    <a href="./services/auto/" class="footer__link">Автомобильные грузоперевозки</a>
                </li>
                <li class="footer__item">
                    <a href="./services/train/" class="footer__link">Железнодорожные  грузоперевозки</a>
                </li>
                <li class="footer__item">
                    <a href="./services/ship/" class="footer__link">Морские  грузоперевозки</a>
                </li>
                <li class="footer__item">
                    <a href="./services/multimodal/" class="footer__link">Мультимодальные  грузоперевозки</a>
                </li>
                <li class="footer__item">
                    <a href="./services/oversized/" class="footer__link">Негабаритные  грузоперевозки</a>
                </li>
                <li class="footer__item">
                    <a href="./services/customs/" class="footer__link">Таможенное оформление</a>
                </li>
            </ul>

            <ul class="footer__list">
                <li class="footer__item">
                    <h4 class="footer__title"  > Справочная информация</h4>
                </li>
                <li class="footer__item">
                    <a href="./inform/incotermes/" class="footer__link">Инкотермс</a>
                </li>
                <li class="footer__item">
                    <a href="./inform/type-trailers/" class="footer__link">Виды грузовых автомобильных прицепов и полуприцепов</a>
                </li>
                <li class="footer__item">
                    <a href="./inform/iron-mobile/" class="footer__link">Виды подвижного железнодорожного состава</a>
                </li>
                <li class="footer__item">
                    <a href="./inform/iron-cont/" class="footer__link">Виды железнодорожных контейнеров</a>
                </li>
                <li class="footer__item">
                    <a href="./inform/ship-cont/" class="footer__link">Виды морских контейнеров</a>
                </li>
            </ul>

            <ul class="footer__list footer__contacts">
              <div itemscope itemtype="http://schema.org/Organization">
                  <li class="footer__item">
                      <h4 href="#" class="footer__title">Контакты</h4>
                      <p class="footer__text "><span itemprop="name">ООО "ТРАНССЕРВИС"</span></p>
                  </li>

                  <li class="footer__item">
                      <p class="footer__text ">
                        <a href="tel:+7 351 700-02-04" class="footer__link"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M2.5 9L7 4.5L4.20711 1.70711C3.81658 1.31658 3.18342 1.31658 2.79289 1.70711L2.08601 2.41399C2.02986 2.47014 1.99108 2.54128 1.97429 2.61889L1.84937 3.19665C0.0272 11.6242 7.4161 19.1691 15.8799 17.5234V17.5234C15.9582 17.5081 16.0301 17.4699 16.0865 17.4135L16.7929 16.7071C17.1834 16.3166 17.1834 15.6834 16.7929 15.2929L14 12.5L9.5 17" stroke="#066271" stroke-width="2"></path>
												</svg><span itemprop="telephone"> +7 351 700-02-04</span></a>
                      </p>
                  </li>

                  <li class="footer__item">
                      <p class="footer__text ">
                        <a href="mailto:info@trans-s.su" class="footer__link"><svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M10.5 14H9C7.34315 14 6 12.6569 6 11V8.75C6 7.50736 7.00736 6.5 8.25 6.5V6.5C9.49264 6.5 10.5 7.50736 10.5 8.75V14ZM10.5 14H12.5C14.1569 14 15.5 12.6569 15.5 11V8.75C15.5 4.74594 12.2541 1.5 8.25 1.5V1.5C4.24594 1.5 1 4.74594 1 8.75V11.25C1 15.5302 4.46979 19 8.75 19V19H16.5" stroke="#066271" stroke-width="2"></path>
													</svg><span itemprop="email">info@trans-s.su</span></a>
                      </p>
                  </li>

                  <li class="footer__item footer__address">
										<svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 7V7.75C1 9.2105 1.4737 10.6316 2.35 11.8L7 18L11.65 11.8C12.5263 10.6316 13 9.2105 13 7.75V7C13 3.68629 10.3137 1 7 1C3.68629 1 1 3.68629 1 7Z" stroke="#066271" stroke-width="2"/>
										</svg>
										<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                      <p class="footer__text "><span itemprop="postalCode"> 454020 </span>, 
                      г. <span itemprop="addressLocality">Челябинск, ул. Энтузиастов</span>, 
                      <span itemprop="streetAddress"> д.30, оф.405, 406.</span></p>
                    </div>
                  </li>
              </div>
						</ul>
						<a class="dolinger" href="http://dolinger-web.ru" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176.83 36.06"><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path d="M0,35.92V19.59H6.28a9.12,9.12,0,0,1,3.56.64A7.15,7.15,0,0,1,14,24.57a9.16,9.16,0,0,1,.53,3.16,9.24,9.24,0,0,1-.58,3.37,7.42,7.42,0,0,1-1.67,2.58,7.5,7.5,0,0,1-2.6,1.65,9.33,9.33,0,0,1-3.38.59Zm10-8.19A5.92,5.92,0,0,0,9.71,26,3.8,3.8,0,0,0,9,24.67a3.23,3.23,0,0,0-1.16-.86,3.65,3.65,0,0,0-1.54-.31H4.49V32H6.28a3.72,3.72,0,0,0,1.56-.32A3.33,3.33,0,0,0,9,30.79a3.85,3.85,0,0,0,.72-1.36A5.77,5.77,0,0,0,10,27.73Z"></path><path d="M23.83,36.06a7.79,7.79,0,0,1-3.38-.72,8.36,8.36,0,0,1-2.6-1.87,8.58,8.58,0,0,1-1.68-2.66,8.16,8.16,0,0,1-.6-3.08,8.05,8.05,0,0,1,.62-3.1A8.25,8.25,0,0,1,17.93,22a8.52,8.52,0,0,1,2.64-1.82,8.22,8.22,0,0,1,3.35-.67,7.78,7.78,0,0,1,3.38.71,8.23,8.23,0,0,1,2.6,1.88,8.64,8.64,0,0,1,1.67,2.67,8.35,8.35,0,0,1,.58,3.06,7.84,7.84,0,0,1-.62,3.1,8.32,8.32,0,0,1-4.36,4.45A8,8,0,0,1,23.83,36.06Zm-3.7-8.28a5.6,5.6,0,0,0,.22,1.59A4.41,4.41,0,0,0,21,30.74a3.44,3.44,0,0,0,2.83,1.34,3.53,3.53,0,0,0,1.68-.38,3.41,3.41,0,0,0,1.16-1,4.17,4.17,0,0,0,.67-1.39,5.77,5.77,0,0,0,0-3.19,4.08,4.08,0,0,0-.7-1.36,3.71,3.71,0,0,0-1.17-.94,3.58,3.58,0,0,0-1.65-.35,3.64,3.64,0,0,0-1.67.36,3.55,3.55,0,0,0-1.16,1,4.24,4.24,0,0,0-.68,1.38A6,6,0,0,0,20.13,27.78Z"></path><path d="M34.06,35.92V19.59h4.49V32H46v3.91Z"></path><path d="M47.52,35.92V19.59H52V35.92Z"></path><path d="M59.29,27.89v8H54.81V19.59H58.3l6.56,8.3v-8.3h4.48V35.92H65.78Z"></path><path d="M83.24,34.56a6.09,6.09,0,0,1-4,1.47,8.15,8.15,0,0,1-3-.56,7.27,7.27,0,0,1-2.53-1.64,8,8,0,0,1-1.73-2.65,9.28,9.28,0,0,1-.64-3.57,7.92,7.92,0,0,1,.64-3.2,8,8,0,0,1,1.77-2.58,8.29,8.29,0,0,1,2.66-1.72,8.4,8.4,0,0,1,3.3-.64,9.1,9.1,0,0,1,2.11.24,7.71,7.71,0,0,1,1.88.72,7.57,7.57,0,0,1,1.55,1.12A5.81,5.81,0,0,1,86.32,23L83,25.59A3.72,3.72,0,0,0,81.53,24a3.86,3.86,0,0,0-2-.59,3.37,3.37,0,0,0-1.47.32,3.49,3.49,0,0,0-1.15.9A4,4,0,0,0,76.11,26a5.12,5.12,0,0,0-.28,1.74,5,5,0,0,0,.28,1.74,4,4,0,0,0,.77,1.35,3.27,3.27,0,0,0,1.18.87,3.65,3.65,0,0,0,1.54.31,4.54,4.54,0,0,0,3.45-1.61H80.22V27.22h6.72v8.7h-3.7Z"></path><path d="M100.79,32v3.91H89.15V19.59h11.43V23.5h-7v2.3h5.94v3.63H93.63V32Z"></path><path d="M102.88,35.92V19.59h7.5a4.93,4.93,0,0,1,2.2.49,5.64,5.64,0,0,1,1.74,1.29,6.22,6.22,0,0,1,1.14,1.82,5.56,5.56,0,0,1,.41,2.06,5.71,5.71,0,0,1-.62,2.65,5.52,5.52,0,0,1-1.72,2l3.45,6h-5.06l-2.88-5h-1.68v5ZM107.36,27h2.83a1,1,0,0,0,.77-.46,2,2,0,0,0,.36-1.28,1.83,1.83,0,0,0-.42-1.3,1.14,1.14,0,0,0-.82-.45h-2.72Z"></path><path d="M133,19.7h1.15l2.44,5.94L139,19.7h1.15l-2.88,6.88,3.43,8L147,19.59h1.28l-7,16.33h-1.08l-3.59-8.4L133,35.92h-1.08l-7-16.33h1.27l6.28,15,3.38-8Z"></path><path d="M161.6,34.86v1.06H150.73V19.59H161.4v1.06h-9.5v6.41h8.3v1h-8.3v6.78Z"></path><path d="M176.83,31.69a4,4,0,0,1-.34,1.66,4.34,4.34,0,0,1-1,1.35,4.43,4.43,0,0,1-1.4.9,4.63,4.63,0,0,1-1.7.32H164.8V19.59h7.61A3.2,3.2,0,0,1,174,20a3.74,3.74,0,0,1,1.17.95,4.57,4.57,0,0,1,.75,1.33,4.7,4.7,0,0,1,.26,1.51,4.38,4.38,0,0,1-.62,2.28,3.76,3.76,0,0,1-1.73,1.52A4,4,0,0,1,176,29.1,4.3,4.3,0,0,1,176.83,31.69ZM166,20.65v6.53h6a2.58,2.58,0,0,0,1.22-.28,3.11,3.11,0,0,0,1-.72,3.27,3.27,0,0,0,.63-1.05,3.5,3.5,0,0,0,0-2.47,3.25,3.25,0,0,0-.6-1,2.83,2.83,0,0,0-.9-.71,2.58,2.58,0,0,0-1.18-.26Zm9.69,10.87a3.63,3.63,0,0,0-.23-1.25,3.58,3.58,0,0,0-.65-1.08,3.24,3.24,0,0,0-1-.75,2.78,2.78,0,0,0-1.21-.27H166v6.69h6.47a2.85,2.85,0,0,0,1.27-.28,3.26,3.26,0,0,0,1-.74,3.71,3.71,0,0,0,.67-1.07A3.18,3.18,0,0,0,175.66,31.52Z"></path><g><path d="M.88,10.69V1H3.75a3.84,3.84,0,0,1,2.64.75A3.08,3.08,0,0,1,7.2,4.08a3.35,3.35,0,0,1-.82,2.53,3.83,3.83,0,0,1-2.68.78H2.17v3.3ZM2.17,6.21H3.42A4,4,0,0,0,4.92,6a1.29,1.29,0,0,0,.7-.64A2.9,2.9,0,0,0,5.84,4.1a1.92,1.92,0,0,0-.51-1.48,2.51,2.51,0,0,0-1.72-.47H2.17Z"></path><path d="M8.52,8.62a2.4,2.4,0,0,1,.3-1.26,2.06,2.06,0,0,1,.86-.79,4.78,4.78,0,0,1,1.64-.42L13.14,6V5.63a1.28,1.28,0,0,0-.48-1.16,2.41,2.41,0,0,0-1.31-.31,2.18,2.18,0,0,0-1.15.26A1.84,1.84,0,0,0,9.62,5l-1-.6a2.25,2.25,0,0,1,1-.94,4,4,0,0,1,1.72-.33,3.53,3.53,0,0,1,2.28.58,2.49,2.49,0,0,1,.68,2v5h-1.2V9.77a6.67,6.67,0,0,1-1.14.81,2.46,2.46,0,0,1-1.28.32,2.08,2.08,0,0,1-1.63-.64A2.37,2.37,0,0,1,8.52,8.62Zm1.25,0a1.22,1.22,0,0,0,.33.95,1.48,1.48,0,0,0,1,.28,1.44,1.44,0,0,0,.54-.1,3.65,3.65,0,0,0,.53-.25,4.1,4.1,0,0,0,.5-.35l.48-.37V7L12,7.06a3.54,3.54,0,0,0-1.7.47A1.24,1.24,0,0,0,9.77,8.59Z"></path><path d="M15.84,9.55l1-.6a2.48,2.48,0,0,0,.7.68,1.84,1.84,0,0,0,1,.22,2.43,2.43,0,0,0,1.3-.31,1,1,0,0,0,.51-.94c0-.84-.5-1.26-1.51-1.26H17.19v-1h1.54a2.49,2.49,0,0,0,1.21-.23.79.79,0,0,0,.39-.74c0-.8-.6-1.2-1.79-1.2a1.76,1.76,0,0,0-1,.24,2.38,2.38,0,0,0-.64.66l-1-.6a2.75,2.75,0,0,1,2.59-1.35,3.51,3.51,0,0,1,2.23.6,1.93,1.93,0,0,1,.75,1.6,1.65,1.65,0,0,1-.35,1.08,1.73,1.73,0,0,1-.81.57,1.75,1.75,0,0,1,.79.59,1.84,1.84,0,0,1,.35,1.18c0,1.45-1,2.17-3,2.17a3.17,3.17,0,0,1-1.7-.38A2.84,2.84,0,0,1,15.84,9.55Z"></path><path d="M23.42,13.46V3.32h1.21v.74a3.8,3.8,0,0,1,1-.67,2.79,2.79,0,0,1,1.25-.28,2.4,2.4,0,0,1,2,1A4.78,4.78,0,0,1,29.65,7a4.7,4.7,0,0,1-.79,2.87,2.54,2.54,0,0,1-2.17,1.07,3.09,3.09,0,0,1-2.06-.82v3.38ZM24.63,9a2.94,2.94,0,0,0,1.9.79,1.64,1.64,0,0,0,1.34-.68A3.5,3.5,0,0,0,28.4,7c0-1.86-.58-2.79-1.75-2.79a2.3,2.3,0,0,0-1.11.29,4.17,4.17,0,0,0-.91.66Z"></path><path d="M31.24,8.62a2.4,2.4,0,0,1,.3-1.26,2,2,0,0,1,.86-.79A4.72,4.72,0,0,1,34,6.15L35.85,6V5.63a1.3,1.3,0,0,0-.47-1.16,2.44,2.44,0,0,0-1.31-.31,2.15,2.15,0,0,0-1.15.26,1.84,1.84,0,0,0-.58.56l-1-.6a2.25,2.25,0,0,1,1-.94,4,4,0,0,1,1.72-.33,3.51,3.51,0,0,1,2.27.58,2.46,2.46,0,0,1,.69,2v5H35.85V9.77a6.25,6.25,0,0,1-1.13.81,2.51,2.51,0,0,1-1.28.32,2.05,2.05,0,0,1-1.63-.64A2.37,2.37,0,0,1,31.24,8.62Zm1.25,0a1.22,1.22,0,0,0,.33.95,1.74,1.74,0,0,0,1.53.18,4.22,4.22,0,0,0,.53-.25,4.1,4.1,0,0,0,.5-.35l.47-.37V7l-1.18.11A3.49,3.49,0,0,0,33,7.53,1.22,1.22,0,0,0,32.49,8.59Z"></path><path d="M38.9,6.1A16.56,16.56,0,0,1,39,3.8a6.12,6.12,0,0,1,.45-1.6,2.93,2.93,0,0,1,.77-1A3.61,3.61,0,0,1,41.41.55,7.79,7.79,0,0,1,43,.22c.58-.08,1.25-.15,2-.22V1.15c-.78.06-1.47.12-2.07.2a4.14,4.14,0,0,0-1.5.46,2.21,2.21,0,0,0-.9,1,4.3,4.3,0,0,0-.31,1.81,3.35,3.35,0,0,1,1.11-.71,3.45,3.45,0,0,1,1.34-.27q2.85,0,2.85,3.37a4.51,4.51,0,0,1-.81,2.85,2.76,2.76,0,0,1-2.3,1,3,3,0,0,1-2.6-1.23A6.23,6.23,0,0,1,38.9,6.1Zm1.25.3A4.74,4.74,0,0,0,40.73,9a1.83,1.83,0,0,0,1.63.91,1.51,1.51,0,0,0,1.36-.8,3.87,3.87,0,0,0,.49-2,3,3,0,0,0-.45-1.81,1.66,1.66,0,0,0-1.42-.6A2.45,2.45,0,0,0,41.18,5a3.27,3.27,0,0,0-1,.82v.6Z"></path><path d="M46.84,7a4.42,4.42,0,0,1,.84-2.95,3,3,0,0,1,2.41-1,3,3,0,0,1,2.41,1A4.47,4.47,0,0,1,53.32,7a4.39,4.39,0,0,1-.82,2.89,3,3,0,0,1-2.41,1,3,3,0,0,1-2.41-1A4.31,4.31,0,0,1,46.84,7Zm1.25,0a3.91,3.91,0,0,0,.47,2.13,1.73,1.73,0,0,0,1.53.69,1.69,1.69,0,0,0,1.49-.69A3.66,3.66,0,0,0,52.07,7a3.79,3.79,0,0,0-.49-2.19,2,2,0,0,0-3,0A3.76,3.76,0,0,0,48.09,7Z"></path><path d="M54,4.27V3.32h5.9v.95H57.58v6.42H56.4V4.27Z"></path><path d="M61.24,10.69V3.32h1.18V6.48h1a1,1,0,0,0,.71-.3,3.13,3.13,0,0,0,.57-1,13.11,13.11,0,0,0,.55-1.86h1.21a14.67,14.67,0,0,1-.56,2,4.83,4.83,0,0,1-.58,1.15,1.31,1.31,0,0,1-.73.48,1.76,1.76,0,0,1,.84.49,2.72,2.72,0,0,1,.55,1l.72,2.23H65.52c-.18-.58-.32-1.07-.45-1.48a4.69,4.69,0,0,0-.41-1,1.46,1.46,0,0,0-.54-.56,1.61,1.61,0,0,0-.78-.17h-.92v3.2Z"></path><path d="M67.6,8.62a2.4,2.4,0,0,1,.3-1.26,2,2,0,0,1,.86-.79,4.72,4.72,0,0,1,1.64-.42L72.21,6V5.63a1.3,1.3,0,0,0-.47-1.16,2.46,2.46,0,0,0-1.31-.31,2.15,2.15,0,0,0-1.15.26A1.84,1.84,0,0,0,68.7,5l-1-.6a2.2,2.2,0,0,1,1-.94,4,4,0,0,1,1.71-.33,3.53,3.53,0,0,1,2.28.58,2.46,2.46,0,0,1,.69,2v5H72.21V9.77a6.25,6.25,0,0,1-1.13.81,2.52,2.52,0,0,1-1.29.32,2,2,0,0,1-1.62-.64A2.37,2.37,0,0,1,67.6,8.62Zm1.25,0a1.22,1.22,0,0,0,.33.95,1.74,1.74,0,0,0,1.53.18,3.54,3.54,0,0,0,.52-.25,4.2,4.2,0,0,0,.51-.35l.47-.37V7L71,7.06a3.49,3.49,0,0,0-1.69.47A1.22,1.22,0,0,0,68.85,8.59Z"></path><path d="M79.26,7a4.57,4.57,0,0,1,.81-2.93,3,3,0,0,1,2.41-1,2.74,2.74,0,0,1,2.59,1.36l-1,.6a2.2,2.2,0,0,0-.65-.67,1.74,1.74,0,0,0-1-.24,1.58,1.58,0,0,0-1.5.77,4.2,4.2,0,0,0-.45,2.12,4.86,4.86,0,0,0,.21,1.61,1.75,1.75,0,0,0,.66.88,1.89,1.89,0,0,0,1.13.31,1.82,1.82,0,0,0,1-.22A2.38,2.38,0,0,0,84.18,9l1,.6a2.78,2.78,0,0,1-1,1,3.12,3.12,0,0,1-1.68.38,3,3,0,0,1-2.45-1A4.42,4.42,0,0,1,79.26,7Z"></path><path d="M86.44,8.62a2.5,2.5,0,0,1,.29-1.26,2,2,0,0,1,.87-.79,4.72,4.72,0,0,1,1.64-.42L91.05,6V5.63a1.3,1.3,0,0,0-.47-1.16,2.46,2.46,0,0,0-1.31-.31,2.15,2.15,0,0,0-1.15.26,1.84,1.84,0,0,0-.58.56l-1-.6a2.2,2.2,0,0,1,1-.94,4,4,0,0,1,1.71-.33,3.53,3.53,0,0,1,2.28.58,2.46,2.46,0,0,1,.69,2v5H91.05V9.77a6.62,6.62,0,0,1-1.13.81,2.52,2.52,0,0,1-1.29.32A2,2,0,0,1,87,10.26,2.37,2.37,0,0,1,86.44,8.62Zm1.25,0a1.22,1.22,0,0,0,.33.95,1.74,1.74,0,0,0,1.53.18,4.11,4.11,0,0,0,.52-.25,4.2,4.2,0,0,0,.51-.35l.47-.37V7l-1.18.11a3.49,3.49,0,0,0-1.69.47A1.22,1.22,0,0,0,87.69,8.59Z"></path><path d="M94.59,10.69V3.32h1.18V9.14l3.58-5.82h1.28v7.37H99.45V5l-3.52,5.7ZM95.35.56h1.18a1.2,1.2,0,0,0,.37.78,1.09,1.09,0,0,0,.73.26,1.14,1.14,0,0,0,.84-.26,1.28,1.28,0,0,0,.32-.78H100a1.56,1.56,0,0,1-.28.92,1.74,1.74,0,0,1-.81.64,3.07,3.07,0,0,1-1.23.23,3,3,0,0,1-1.21-.23,1.78,1.78,0,0,1-.8-.65A1.52,1.52,0,0,1,95.35.56Z"></path><path d="M101.86,4.27V3.32h5.9v.95H105.4v6.42h-1.18V4.27Z"></path><path d="M108.64,8.62a2.4,2.4,0,0,1,.3-1.26,2,2,0,0,1,.86-.79,4.78,4.78,0,0,1,1.64-.42L113.25,6V5.63a1.3,1.3,0,0,0-.47-1.16,2.44,2.44,0,0,0-1.31-.31,2.15,2.15,0,0,0-1.15.26,1.84,1.84,0,0,0-.58.56l-1-.6a2.25,2.25,0,0,1,1-.94,4,4,0,0,1,1.72-.33,3.5,3.5,0,0,1,2.27.58,2.46,2.46,0,0,1,.69,2v5h-1.21V9.77a6.25,6.25,0,0,1-1.13.81,2.51,2.51,0,0,1-1.28.32,2.07,2.07,0,0,1-1.63-.64A2.37,2.37,0,0,1,108.64,8.62Zm1.25,0a1.22,1.22,0,0,0,.33.95,1.74,1.74,0,0,0,1.53.18,4.22,4.22,0,0,0,.53-.25,4.1,4.1,0,0,0,.5-.35l.47-.37V7l-1.18.11a3.49,3.49,0,0,0-1.69.47A1.22,1.22,0,0,0,109.89,8.59Z"></path></g></g></g></svg></a>
						
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="./assets/javascript/menu.js"></script>
    <script src="./assets/javascript/form.js"></script>
		<script src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
		<script src="./assets/javascript/jquery.cookie.js"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(50961584, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/50961584" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(53276584, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/53276584" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Офис 21 века -->
    <button id="callme_wrap">
      <div class="callme_image">
        <img src="http://images.trans-s.su/assets/images/phone.svg" />
      </div>
      <div class="callme_btn">Заказать звонок</div>
    </button>
    <link rel="stylesheet" href="https://trans74.of21.net/assets/callback.css" />
    <script src="https://trans74.of21.net/api/js?token=4b238a8e40da814492dface036e73472" type="text/javascript" charset="utf-8"></script>
</div>

</body>
</html>