<?php
session_start();

require_once "database/database.php";

global $conn;
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWGURU</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="shortcut icon" href="assets/img/logo/LOGO.png" type="image/x-icon">
</head>

<body>

    <!-- header -->

    <div class="container">
        <header>
            <div class="header__logo">
                <a href="index.php"><img src="assets/img/logo/LOGO.png" alt="LOGO" class="logo pc"></a>
                <a href="index.php"><img src="assets/img/logo/logo-tablet.png" alt="LOGO" class="logo tablet"></a>
                <a href="index.php"><img src="assets/img/logo/logo-mobile.png" alt="LOGO" class="logo-mob mobile"></a>
            </div>
            <div class="header-search pc">
                <form action="">
                    <label class="header__search_pos-r">
                        <input type="text" class="header__search">
                        <img src="assets/img/ico/search.png" alt="search">
                    </label>
                </form>
            </div>

            <input type="checkbox" name="" id="burger">
            <label for="burger"></label>

            <nav class="pc">
                <ul>
                    <li> <a href="?page=catalog" class="header__btn">Каталог</a></li>
                    <li><a href="?page=about" class="header__btn">О нас</a></li>
                    <li><a href="?page=contact" class="header__btn">Контакты</a></li>
                    <li> <a href="?page=how-order" class="header__btn">Как заказать</a></li>
                </ul>
            </nav>

            <!-- <nav class="pc">
                <a href="?page=catalog" class="header__btn">Каталог</a>
                <a href="?page=about" class="header__btn">О нас</a>
                <a href="?page=contact" class="header__btn">Контакты</a>
                <a href="?page=how-order" class="header__btn">Как заказать</a>
            </nav> -->
            <div class="header-nav__ico pc">

                <?php
                if (isset($_SESSION['user']) && (int) $_SESSION['user']['role_id'] === 2) {
                ?>
                    <div class="icons_h">
                        <a href="index.php?page=admin"><img src="assets/img/admin/admins.svg" alt=""></a>
                    </div>
                <?php
                }
                ?>
                <?php
                if (isset($_SESSION['user']) && (int) $_SESSION['user']['role_id'] === 1) {
                ?>
                    <div class="icons_h">
                        <a href="index.php?page=profile"><img src="assets/img/banner/user-red.svg" alt=""></a>
                    </div>
                <?php
                }
                ?>


                <?php
                if (!empty($_SESSION['user'])) {
                ?>


                <?php
                }
                ?>



                <?php
                if (isset($_SESSION['user'])) { ?>
                    <form action="actions/logout.php" method="post">
                        <button type="submit" class="btn__logout">ВЫХОД</button>
                    </form>
                <?php } else { ?>
                    <a href="?page=login"><button class="btn__login">Войти</button></a>
                <?php
                }
                ?>


            </div>
            <!-- <div class="burger__menu mobile tablet">
                <svg class="tablet" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 9H31.5M4.5 18H31.5M4.5 27H31.5" stroke="#EA0505" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg class="mobile" width="26" height="26   " viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 9H31.5M4.5 18H31.5M4.5 27H31.5" stroke="#EA0505" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div> -->


        </header>
        <!--header-->

        <!--banner  -->

        <div class="banner">
            <div class="banner__column banner__text">
                <h1>
                    Дарите коже <br>
                    лучшее, что <br>
                    заслуживает!
                </h1>
                <div class="subtitle">
                    <p>
                        Открой для себя секрет красоты с нашей уходовой косметикой. Погрузись в мир ухаживающих формул и
                        ощути роскошь ухода, которую заслуживает твоя кожа. Дари своей коже лучшее с нашими продуктами для
                        ухода.
                    </p>
                </div>
                <div class="banner__btn">
                    <a href="?page=catalog">
                        <div class="reg-1">Хочу больше</div>
                        <div class="reg-2"></div>
                        <div class="reg-3"></div>
                    </a>
                </div>
            </div>
            <div class="banner__column">
                <img src="assets/img/banner/banner.jpg" alt="banner" class="banner__img">
            </div>
        </div>
    </div>
    <!--banner  -->

    <!--new items-->
    <div class="container">
        <div class="new-items">
            <div class="new-items__title">
                <h2>
                    Новинки
                </h2>
            </div>
            <div class="new-items_d-flex">
                <div class="new-items__card">
                    <a href="item.php">
                        <div class="item__img">
                            <img src="assets/img/new-item/new-item.png" alt="card">
                        </div>
                        <h3>
                            Vino Rose Anti Aging Serum
                        </h3>
                        <div class="item__subtitle">
                            <p>
                                Сыворотка для сужения пор на лице
                            </p>
                        </div>
                        <p class="item__text">
                            30 мл
                        </p>
                        <div class="item_bottom">
                            <div class="item__price">
                                2 280 ₽
                            </div>
                            <div class="item__ico pc">
                                <a href="?page=profile"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico tablet">
                                <a href="bag.html"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico mobile">
                                <a href="bag.html"><img src="assets/img/ico/bag-mobile.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/Heart-mobile.png" alt="heart"></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="new-items__card">
                    <a href="item.php">
                        <div class="item__img">
                            <img src="assets/img/new-item/nw3.png" alt="card">
                        </div>
                        <h3>
                            Cos De BAHA Retinol 2.5 serum
                        </h3>
                        <div class="item__subtitle">
                            <p>
                                сыворотка с ретинолом
                            </p>
                        </div>
                        <p class="item__text">
                            30 мл
                        </p>
                        <div class="item_bottom">
                            <div class="item__price">
                                1 690 ₽
                            </div>
                            <div class="item__ico pc">
                                <a href="bag.html"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico tablet">
                                <a href="bag.html"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico mobile">
                                <a href="bag.html"><img src="assets/img/ico/bag-mobile.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/Heart-mobile.png" alt="heart"></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="new-items__card">
                    <a href="item.php">
                        <div class="item__img">
                            <img src="assets/img/new-item/nw2.png" alt="card">
                        </div>
                        <h3>
                            COS rxx Advanc Snail
                        </h3>
                        <div class="item__subtitle">
                            <p>
                                Восстанавливающая эссенция для лица
                            </p>
                        </div>
                        <p class="item__text">
                            30 мл
                        </p>
                        <div class="item_bottom">
                            <div class="item__price">
                                2 290 ₽
                            </div>
                            <div class="item__ico pc">
                                <a href="bag.html"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico tablet">
                                <a href="bag.html"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico mobile">
                                <a href="bag.html"><img src="assets/img/ico/bag-mobile.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/Heart-mobile.png" alt="heart"></a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="new-items__card">
                    <a href="item.php">
                        <div class="item__img">
                            <img src="assets/img/new-item/new-item.png" alt="card">
                        </div>
                        <h3>
                            Vino Rose Anti Aging Serum
                        </h3>
                        <div class="item__subtitle">
                            <p>
                                Сыворотка для сужения пор на лице
                            </p>
                        </div>
                        <p class="item__text">
                            30 мл
                        </p>
                        <div class="item_bottom">
                            <div class="item__price">
                                2 280 ₽
                            </div>
                            <div class="item__ico pc">
                                <a href="bag.html"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico tablet">
                                <a href="bag.html"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico mobile">
                                <a href="bag.html"><img src="assets/img/ico/bag-mobile.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/Heart-mobile.png" alt="heart"></a>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <!--new items-->

    <!--selection-->
    <div class="container">
        <div class="selection">
            <h2>
                Подборка от команды GLOWGURU
            </h2>
            <div class="selection_d-flex">
                <div class="selection__item">
                    <a href="#">
                        <img src="assets/img/selection/1.png" alt="selection">
                        <p>Топ средств с ретинолом</p>
                    </a>
                </div>
                <div class="selection__item">
                    <a href="#">
                        <img src="assets/img/selection/2.png" alt="selection">
                        <p>Базовая косметичка с нуля</p>
                    </a>
                </div>
                <div class="selection__item">
                    <a href="#">
                        <img src="assets/img/selection/3.png" alt="selection">
                        <p>Матирующие и <br> саморегулирующие средства</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--selection-->

    <!--hit-->
    <div class="container">
        <div class="hit">
            <h2>
                Хиты
            </h2>
            <div class="hit_d-flex">
                <div class="hit__item">
                    <a href="#">
                        <div class="item__img">
                            <img src="assets/img/hit/tovars1.png" alt="hit">
                        </div>
                        <h3>
                            Vino Rose Anti Aging Serum
                        </h3>
                        <div class="item__subtitle">
                            <p>
                                SPF крем для пор на лице
                            </p>
                        </div>
                        <p class="item__text">
                            30 мл
                        </p>
                        <div class="item_bottom">
                            <div class="item__price">
                                2 280 ₽
                            </div>
                            <div class="item__ico pc">
                                <a href="#"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico tablet">
                                <a href="#"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico mobile">
                                <a href="bag.html"><img src="assets/img/ico/bag-mobile.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/Heart-mobile.png" alt="heart"></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hit__item">
                    <a href="#">
                        <div class="item__img">
                            <img src="assets/img/hit/tovars2.png" alt="hit">
                        </div>
                        <h3>
                            ANUA Birch 70% Moisture 
                        </h3>
                        <div class="item__subtitle">
                            <p>
                                Сыворотка для сужения пор на лице
                            </p>
                        </div>
                        <p class="item__text">
                            30 мл
                        </p>
                        <div class="item_bottom">
                            <div class="item__price">
                                2 080 ₽
                            </div>
                            <div class="item__ico pc">
                                <a href="#"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico tablet">
                                <a href="#"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico mobile">
                                <a href="bag.html"><img src="assets/img/ico/bag-mobile.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/Heart-mobile.png" alt="heart"></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hit__item">
                    <a href="#">
                        <div class="item__img">
                            <img src="assets/img/hit/tovars3.png" alt="hit">
                        </div>
                        <h3>
                        ANUA Heartleaf Pore Control 
                        </h3>
                        <div class="item__subtitle">
                            <p>
                            Очищающее гидрофильное масло
                            </p>
                        </div>
                        <p class="item__text">
                            30 мл
                        </p>
                        <div class="item_bottom">
                            <div class="item__price">
                                2 280 ₽
                            </div>
                            <div class="item__ico pc">
                                <a href="#"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico tablet">
                                <a href="#"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                            </div>
                            <div class="item__ico mobile">
                                <a href="bag.html"><img src="assets/img/ico/bag-mobile.png" alt="bag"></a>
                                <a href="#"><img src="assets/img/ico/Heart-mobile.png" alt="heart"></a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--hit-->

    <!--footer-->
    <div class="container">
        <footer>
            <div class="footer-header">
                <div class="footer-header__column">
                    <div class="phone">
                        <a href="tel:+78000000000">+7 (800) 000-0000</a>
                        <p>Поддержка клиентов</p>
                    </div>
                    <div class="footer__btn">
                        <a href="#">Задать вопрос</a>
                    </div>
                </div>
                <div class="footer-header__colum">
                    <div class="footer__title">
                        Наши мессенджеры и соц сети
                    </div>
                    <div class="footer_d-flex">
                        <a href="https://web.whatsapp.com"><img src="assets/img/ico/soc/what.png" alt="whatsapp"></a>
                        <a href="https://web.telegram.org/a/"><img src="assets/img/ico/soc/telegram.png" alt="telegram"></a>
                        <!-- <a href="instagram.com"><img src="assets/img/ico/soc/inst.png" alt="instagram"></a> -->
                        <a href="https://vk.com"><img src="assets/img/ico/soc/vk.png" alt="vk"></a>
                        <a href="https://www.youtube.com"><img src="assets/img/ico/soc/youtube.png" alt="youtube"></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="cooperating">
                    © Найдёнова Софья Павловна
                </div>
            </div>
        </footer>
    </div>
    <!-- footer -->
</body>

</html>