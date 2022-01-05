<?php
/*
Template Name: home
*/

?>

<?php get_header(); ?>


<section class="services">
    <div class="container">
        <h2 class="title">
            НАШИ УСЛУГИ
        </h2>
        <div class="services__inner">
            <div class="services__content">
                <div class="services__content-box">
                    <?php the_field('service-text'); ?>
                    <a class="button button--decor" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
                </div>
            </div>
            <?php the_field('service-item'); ?>
        </div>
    </div>
</section>
<section class="benefits">
    <div class="container">
        <div class="benefits__inner">
            <img class="benefits__images wow animate__animated animate__fadeInUp" data-wow-offset="100"
                src="<?php the_field('benefits-img'); ?>" alt="">
            <div class="benefits__content">
                <h2 class="title benefits__title">ПОЧЕМУ МЫ?</h2>
                <?php the_field('benefits-text'); ?>
            </div>
        </div>
    </div>
</section>
<section class="carousel">
    <div class="container">
        <h2 class="title">ПРИГНАННЫЕ НАМИ АВТО</h2>
        <div class="carousel__inner">

            <!-- Цикл будет выводить все созданные записи в WordPress -->
            <?php
      global $post;
      
      $myposts = get_posts([ 
      	'numberposts' => -1,
      ]);
      
      if( $myposts ){
      	foreach( $myposts as $post ){
      		setup_postdata( $post );
      ?>
            <div class="carousel__item">
                <div class="carousel__item-box">
                    <!-- bloginfo() возвращает правильный путь к картинкам -->
                    <!-- the_post_thumbnail() Выводит html код картинки-миниатюры текущего поста. -->
                    <?php the_post_thumbnail(
                   array(380, 250),
                   array(
                       'class' => 'carousel__item-img'
                   ),
                ); ?>
                    <!-- the_title() Выводит заголовок текущей записи -->
                    <h4 class="carousel__item-title"><?php the_title(); ?></h4>
                    <!-- the_title() Выводит контент текущей записи -->
                    <p class="carousel__item-text"><?php the_content(); ?></p>
                </div>
            </div>
            <?php }} wp_reset_postdata(); // Сбрасываем $post?>






        </div>
    </div>
</section>
<section class="contacts">
    <div class="container">
        <div class="contacts__inner">
            <div class="contacts__info">
                <h2 class="title">
                    КОНТАКТЫ
                </h2>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <p class="contacts__item-title">Адрес</p>
                        <p class="contacts__item-text">
                        <?php the_field('adress'); ?>
                        </p>
                    </li>
                    <li class="contacts__item">
                        <p class="contacts__item-title">Время работы</p>
                        <p class="contacts__item-text">
                        <?php the_field('working-hours'); ?>

                        </p>
                    </li>
                    <li class="contacts__item">
                        <p class="contacts__item-title">Телефон</p>
                        <p class="contacts__item-text">
                            <a href="tel:<?php the_field('phone-number'); ?>">
                                <?php the_field('phone'); ?>
                            </a>
                        </p>
                    </li>
                </ul>
            </div>
            <form class="contacts__form">
                <h2 class="title contacts__title">Оставить заявку</h2>
                <!-- do_shortcode() Находит в переданном тексте зарегистрированные шорткоды и обрабатывает их. -->
                <?php echo do_shortcode('[contact-form-7 id="26" title="Контактная форма"]'); ?>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>