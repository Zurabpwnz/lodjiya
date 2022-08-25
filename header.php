<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lodjiya
 */

?>
    <!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

<header class="container">

    <!-- Mobile header -->
    <div class="row row-no-gutters">

        <div class="col-xs-5 visible-xs visible-sm">
            <div itemscope="" itemtype="http://schema.org/Organization" itemref="orgAddr orgName orgPhone">
                <a id="orgUrl" itemprop="url" href="/" class="met_logo" title="На главную страницу">

                    <picture>
                        <source srcset="/img/logo4_mobile.webp" type="image/webp">
                        <source srcset="/img/logo4_mobile.jpg" type="image/jpeg">
                        <img itemprop="logo" src="/img/logo4_mobile.jpg" alt="Лоджия.ру" class="img-responsive">
                    </picture>

                    <link id="orgAddr" itemprop="address" href="#lodjAddress">
                </a>
            </div>
            <a style="font-size: 10px; color: #BDC0C7;" href="/contact.php" target="_blank"
               title="ГРАФИК РАБОТЫ И АДРЕС ОФИСА СМОТРИТЕ ПОДРОБНЕЕ" class="met_color_transition">Ежедневно с 9:00
                до 21:00</a>
        </div>

        <div class="col-xs-7 visible-xs visible-sm">
            <p class="top_phone"><a href="tel:+7(499)390-53-55">+7(499)390-53-55</a></p>

        </div>

    </div>
    <!-- /Mobile header/ -->

    <!-- Desktop header -->
    <div class="row">

        <div class="col-lg-3 col-md-4 visible-lg visible-md">
            <div itemscope="" itemtype="http://schema.org/Organization" itemref="orgAddr orgName orgPhone">
                <a id="orgUrl" itemprop="url" href="/" class="met_logo" title="На главную страницу">

                    <picture>
                        <source srcset="/img/logo4.webp" type="image/webp">
                        <source srcset="/img/logo4.jpg" type="image/jpeg">
                        <img itemprop="logo" src="/img/logo4.jpg" alt="Лоджия.ру" class="img-responsive"
                             style="margin: 0 auto;">
                    </picture>

                    <link id="orgAddr" itemprop="address" href="#lodjAddress">
                </a>
            </div>
        </div>

        <div class="col-lg-5 col-md-4 visible-lg visible-md">

            <div class="row">
                <div class="top_circles">

                    <div class="col-md-6">
                        <a class="top_circle top_icon_ruletka" href="/mailorder.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <picture>
                                        <source srcset="/images/custom/top_icon_ruletka3.webp" type="image/webp">
                                        <source srcset="/images/custom/top_icon_ruletka3.jpg" type="image/jpeg">
                                        <img src="/images/custom/top_icon_ruletka3.jpg" class="img-responsive"
                                             alt="Вызывать замерщика">
                                    </picture>
                                </div>
                                <div class="col-md-6 nopadding">
                                    <p>ЗАМЕР ОКОН<br>+ СКИДКА 23%</p>
                                </div>
                            </div>


                        </a>
                    </div>

                    <div class="col-md-6">
                        <a class="top_circle top3_callback_btn" href="#form_calculator_modal">
                            <div class="row">
                                <div class="col-md-6">

                                    <picture>
                                        <source srcset="/images/custom/top_icon_calculator4.webp" type="image/webp">
                                        <source srcset="/images/custom/top_icon_calculator4.jpg" type="image/jpeg">
                                        <img src="/images/custom/top_icon_calculator4.jpg"
                                             class="img-responsive pull-right" alt="Заказать расчет">
                                    </picture>
                                </div>
                                <div class="col-md-6 nopadding">
                                    <p>Расчет<br> по серии<br> дома</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-lg-4 col-md-4 visible-lg visible-md">

            <p class="top_phone"><a href="tel:+7(499)390-53-55">+7(499)390-53-55</a></p>


            <aside class="clearfix">

                <a class="top_icon_row top_icon_cl top3_callback_btn" href="#form_callback_modal"
                   title="ОБРАТНЫЙ ЗВОНОК"></a>
                <a class="top_icon_row top_icon_in" href="/advert-php-id-42" title="НАШ INSTAGRAM"></a>
                <a class="top_icon_row top_icon_fb" href="https://vk.com/lodjiyaru" title="НАШ ВКОНТАКТЕ"></a>
                <a class="top_icon_row top_icon_yt" href="https://youtube.com/user/LODJIYAruNEWS"
                   title="Наш YouTube канал"></a>
                <a class="top_icon_row top_icon_mp" href="/sitemap.php" title="Карта сайта"></a>
                <a class="top_icon_row top_icon_16" href="/user_confirmation.php"
                   title="Информационное содержание сайта предназначено для лиц старше 16 лет"></a>

                <nav class="top_menu_small">
                    <a style="font-size: 12px;color: #BDC0C7;line-height: 18px;margin: 0 0 0 10px;"
                       href="/contact.php" target="_blank" title="ГРАФИК РАБОТЫ И АДРЕС ОФИСА СМОТРИТЕ ПОДРОБНЕЕ"
                       class="met_color_transition">ЕЖЕДНЕВНО с 9:00 до 21:00</a>
                </nav>

            </aside>

        </div>


    </div>
    <!-- /Desktop header/ -->


    <!-- МЕНЮ ДЛЯ МОБИЛЬНЫХ, в моб виде исчезает панель соцсетей и большое и малое верхн меню -->
    <div id="dl-menu" class="dl-menuwrapper">
        <button class="met_bgcolor met_bgcolor_transition2">МЕНЮ</button>
        <ul class="dl-menu met_bgcolor7">
            <li><a href="/index.php">Главная</a></li>
            <li><a href="#">Услуги</a>
                <ul class="dl-submenu">
                    <li class="dl-back"><a href="#">Назад</a></li>
                    <li><a href="/prod-php-id-17">СРОКИ ПРОИЗВОДСТВА ОКОН И РАБОТ</a></li>
                    <li><a href="/prod-php-id-29">ЗАМЕНА ХОЛОДНОГО ФАСАДА НА ТЕПЛЫЙ</a></li>
                    <li><a href="/prod-php-id-39">ПЛАСТИКОВЫЕ ОКНА REHAU И KBE</a></li>
                    <li><a href="/prod-php-id-35">ЦЕНЫ НА ПЛАСТИКОВЫЕ ОКНА</a></li>
                    <li><a href="/prod-php-id-11">УТЕПЛЕНИЕ И ОТДЕЛКА БАЛКОНОВ</a></li>
                    <li><a href="/prod-php-id-10">Отделка балконов и лоджий</a></li>
                    <li><a href="/prod-php-id-38">Комната на балконе</a></li>
                    <li><a href="/prod-php-id-12">Теплый пол на балконе</a></li>
                    <li><a href="/prod-php-id-30">Крыша на балкон</a></li>
                    <li><a href="/prod-php-id-13">Шкаф на балкон</a></li>
                    <li><a href="/prod-php-id-32">Шторы и Жалюзи</a></li>
                    <li><a href="/prod-php-id-18">Статьи Лоджия.ру</a></li>
                </ul>
            </li>
            <li><a href="/mailorder.php">ВЫЗВАТЬ</a></li>
            <li><a href="/contact.php">Контакты</a></li>
            <li><a href="/prodpages-php-id-92?SDid=17">Отзывы</a></li>
            <li><a href="/news.php">NEWS-2020</a></li>
            <li><a href="/advert-php-id-42">INSTAGRAM</a></li>
            <li><a href="/blog">БЛОГ</a></li>
            <li><a href="/doma_new.php">Панорамы</a></li>
            <li><a href="#">Важное</a>
                <ul class="dl-submenu">
                    <li class="dl-back"><a href="#">Назад</a></li>
                    <li><a href="/fotoalbom.php">ФотоБанк</a></li>
                    <li><a href="/newfaq.php">Вопросы - ответы</a></li>
                    <li><a href="/search.php">ПОИСК ПО САЙТУ</a></li>
                    <li><a href="/gallery/">АРХИВНАЯ ФОТОГАЛЕРЕЯ 2004-2020</a></li>
                    <li><a href="/poolsall.php">ОПРОСЫ - ПРИМИ УЧАСТИЕ!</a></li>
                    <li><a href="/about.php">О КОМПАНИИ</a></li>
                    <li><a href="/articleall.php">Полезно знать</a></li>
                    <li><a href="/brands.php">Бренд-зона</a></li>
                    <li><a href="/prod-php-id-25">Пеноплэкс</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- конец МЕНЮ ДЛЯ МОБИЛЬНЫХ, в моб виде исчезает панель соцсетей и большое и малое верхн меню -->

</header>

<!--<nav class="met_content met_main_nav met_bgcolor3 clearfix">-->
<!---->
<!--    --><?php
//    wp_nav_menu(
//        array(
//            'theme_location' => 'menu-1',
//            'menu_id' => 'primary-menu',
//        )
//    );
//    ?>
<!---->
<!--    <ul class="sf-js-enabled sf-arrows">-->
<!--        <li class="met_bgcolor_transition2"><a href="/" class="met_menu_home"><i class="icon-home"></i></a>-->
<!--        </li>-->
<!--        <li class="met_bgcolor_transition2"><a href="#" class="sf-with-ul">Услуги</a>-->
<!--            <ul style="display: none;">-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-17">СРОКИ ПРОИЗВОДСТВА ОКОН И РАБОТ</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-29">ЗАМЕНА ХОЛОДНОГО ФАСАДА НА ТЕПЛЫЙ</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-39">ПЛАСТИКОВЫЕ ОКНА REHAU И KBE</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-35">ЦЕНЫ НА ПЛАСТИКОВЫЕ ОКНА</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-11">УТЕПЛЕНИЕ И ОТДЕЛКА БАЛКОНОВ</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-10">Отделка балконов и лоджий</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-38">Комната на балконе</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-12">Теплый пол на балконе</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-30">Крыша на балкон</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-13">Шкаф на балкон</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-32">Шторы и Жалюзи</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a class="menu" href="/prod-php-id-18">Статьи Лоджия.ру</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="met_bgcolor_transition2"><a href="/mailorder.php">ВЫЗВАТЬ</a></li>-->
<!--        <li class="met_bgcolor_transition2"><a href="/contact.php">Контакты</a></li>-->
<!--        <li class="met_bgcolor_transition2"><a href="/prodpages-php-id-92?SDid=17">Отзывы</a></li>-->
<!--        <li class="met_bgcolor_transition2"><a href="/news.php">NEWS-2020</a></li>-->
<!--        <li class="met_bgcolor_transition2"><a href="/advert-php-id-42">INSTAGRAM</a></li>-->
<!--        <li class="met_bgcolor_transition2"><a href="/blog">БЛОГ</a></li>-->
<!--        <li class="met_bgcolor_transition2"><a href="/doma_new.php">Панорамы</a></li>-->
<!--        <li class="met_bgcolor_transition2"><a href="#" class="sf-with-ul">Важное</a>-->
<!--            <ul style="display: none;">-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a href="/fotoalbom.php">ФотоБанк</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a href="/newfaq.php">Вопросы - ответы</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a href="/search.php">ПОИСК ПО САЙТУ</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a href="/gallery/">АРХИВНАЯ ФОТОГАЛЕРЕЯ 2004-2020</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a href="/poolsall.php">ОПРОСЫ - ПРИМИ УЧАСТИЕ!</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a href="/about.php">О КОМПАНИИ</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a href="/articleall.php">Полезно знать</a></li>-->
<!--                <li>-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a href="/brands.php">Бренд-зона</a></li>-->
<!--                <li class="">-->
<!--                    <picture>-->
<!--                        <source srcset="images/icons/grid2.webp" type="image/webp">-->
<!--                        <source srcset="images/icons/grid2.png" type="image/png">-->
<!--                        <img src="images/icons/grid2.png" alt="Иконка подпункта"-->
<!--                             style="float: left; padding-right: 15px; padding-left: 15px;"></picture>-->
<!--                    <a href="/prod-php-id-25">Пеноплэкс</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="met_bgcolor_transition2"><a style="font-size: 25px; padding: 0 19px;"-->
<!--                                               href="/registration_new.php"><i class="icon-user"></i></a></li>-->
<!--    </ul>-->
<!--    <div class="pull-right met_bgcolor met_menu_search_wrapper">-->
<!--        <form class="met_menu_search" method="get" action="/search" abineguid="0E333E0238E84CE0B5B9A852557FE507">-->
<!--            <input type="text" name="q" class="met_menu_search_text" required="" placeholder="ПОИСК">-->
<!--            <div class="met_menu_search_submit"><i class="icon-search"></i></div>-->
<!--        </form>-->
<!--    </div>-->
<!--</nav>-->

<main id="page" class="site">

