<!DOCTYPE html>
<!-- Выводит атрибуты для HTML тега <html> со значениями текущего языка: lang="ru-RU" -->
<html <?php language_attributes(); ?>>

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
                <!-- the_custom_logo Выводит на экран HTML код логотипа сайта установленного в кастомайзере (в настройках темы). Код будет такой: <a href="/"><img></a>. -->
                <?php the_custom_logo(); ?>
                <a class="phone" href="tel:<?php the_field('phone-number'); ?>">
                    <?php the_field('phone'); ?>
                </a>
            </div>
            <div class="header__content">
                <h1 class="header__title animate__animated animate__fadeInLeft"><?php the_field('title');?></h1>
                <h2 class="header__subtitle animate__animated animate__fadeInLeft animate__slow">
                    <?php the_field('trigger');?>
                </h2>
                <p class="header__text animate__animated animate__fadeInLeft animate__slower">
                    <?php the_field('text');?>
                </p>
                <a class="button" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
                <div class="social header__social">
                    <a class="social__link" href="<?php the_field('instagram-link'); ?>">
                        <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/instagram.svg"
                            alt="instagram icon">
                    </a>
                    <a class="social__link" href="<?php the_field('telegram-link'); ?>">
                        <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/telegram.svg"
                            alt="telegram icon">
                    </a>
                    <a class="social__link" href="<?php the_field('whatsapp-link'); ?>">
                        <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/whatsapp.svg"
                            alt="whatsapp icon">
                    </a>
                    <a class="social__link" href="<?php the_field('facebook-link'); ?>">
                        <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/facebook.svg"
                            alt="facebook icon">
                    </a>
                </div>
                <img class="header__images animate__animated animate__fadeInUp animate__delay-1s"
                    src="<?php the_field("top-images"); ?>" alt="ford mustang">
            </div>
        </div>
    </header>