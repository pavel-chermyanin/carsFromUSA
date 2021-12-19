<!DOCTYPE html>
<!-- Выводит атрибуты для HTML тега <html> со значениями текущего языка: lang="ru-RU" -->
<html <?php language_attributes(); ?> >

<head>
  <!-- Кодировка сайта: UTF-8 -->
  <meta charset="<?php bloginfo('charset'); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Авто из США</title>

  <?php wp_head(); ?> 


</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__top">
        <a class="logo" href="#">
          <img class="logo__img" src="<?php bloginfo("template_url"); ?>/assets/images/logo.svg" alt="logo">
        </a>
        <a class="phone" href="tel:+380505556677">
          +38 (050) 555 66 77
        </a>
      </div>
      <div class="header__content">
        <h1 class="header__title animate__animated animate__fadeInLeft">авто из сша “под ключ”</h1>
        <h2 class="header__subtitle animate__animated animate__fadeInLeft animate__slow">
          ЗАКАЖИ СЕБЕ АВТО ИЗ США С ВЫГОДОЙ ДО 40%
        </h2>
        <p class="header__text animate__animated animate__fadeInLeft animate__slower">
          Подбор, покупка, доставка, растаможка, ремонт, оформление по договору
        </p>
        <a class="button" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
        <div class="social header__social">
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/instagram.svg" alt="instagram icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/telegram.svg" alt="telegram icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/whatsapp.svg" alt="whatsapp icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/facebook.svg" alt="facebook icon">
          </a>
        </div>
        <img class="header__images animate__animated animate__fadeInUp animate__delay-1s" src="<?php bloginfo("template_url"); ?>/assets/images/mustang.png" alt="ford mustang">
      </div>
    </div>
  </header>