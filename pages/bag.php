<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWGURU</title>
    <link rel="stylesheet" href="assets/style/bag.css">
    <link rel="shortcut icon" href="assets/img/logo/LOGO.png" type="image/x-icon">
</head>

<body>
    <!-- header -->

    <div class="container">
        <header>
            <div class="header__logo">
                <a href="index.php"><img src="assets/img/logo/LOGO.png" alt="LOGO" class="logo pc"></a>
                <a href="index.php"><img src="assets/img/logo/logo-tablet.png" alt="LOGO" class="logo tablet"></a>
                <a href="index.php"><img src="assets/img/logo/logo-mobile.png" alt="LOGO" class="logo mobile"></a>
            </div>
            <div class="header-search pc">
                <form action="">
                    <label class="header__search_pos-r">
                        <input type="text" class="header__search">
                        <img src="assets/img/ico/search.png" alt="search">
                    </label>
                </form>
            </div>
            <nav class="pc">
                <a href="?page=catalog" class="header__btn">Каталог</a>
                <a href="?page=about" class="header__btn">О нас</a>
                <a href="?page=contact" class="header__btn">Контакты</a>
                <a href="?page=how-order" class="header__btn">Как заказать</a>
            </nav>
            <div class="header-nav__ico pc">

                <?php
                if (isset($_SESSION['user']) && (int) $_SESSION['user']['role_id'] === 2) {
                ?>
                    <div class="icons_h">
                        <a href="index.php?page=admin"><img src="assets/img/banner/admin.png" alt=""></a>
                    </div>
                <?php
                }
                ?>
                <?php
                if (isset($_SESSION['user']) && (int) $_SESSION['user']['role_id'] === 1) {
                ?>
                    <div class="icons_h">
                        <a href="index.php?page=profile"><img src="assets/img/banner/admin.png" alt=""></a>
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
            <div class="burger__menu mobile tablet">
                <svg class="tablet" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 9H31.5M4.5 18H31.5M4.5 27H31.5" stroke="#EA0505" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg class="mobile" width="26" height="26   " viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 9H31.5M4.5 18H31.5M4.5 27H31.5" stroke="#EA0505" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
        </header>
        <!--header-->


        <!--bag-->
        <div class="container">
            <div class="bag">
                <div class="tablet_column d-flex ">
                    <div class="bag__column bag__header mobile__none">
                        <div class="bag__user d-flex ">
                            <p>
                                Софья
                                <br>
                                <br>
                                Найдёнова
                            </p>
                            <img src="assets/img/user/ava.png" alt="">
                        </div>
                        <div class="bag__sell d-flex">
                            <div class="bag__sell__column">
                                <p class="bag__sell__name">
                                    Скидка
                                </p>
                                <p class="meaning">
                                    25%
                                </p>
                            </div>
                            <div class="bag__sell__column">
                                <p class="meaning">
                                    —
                                </p>
                            </div>
                            <div class="bag__sell__column">
                                <p class="bag__sell__name">
                                    Бонусы
                                </p>
                                <p class="meaning">
                                    98
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bag__line tablet__none mobile__none">
                    </div>

                    <div class="bag__column">
                        <div class="design__btn tablet__none mobile__none">
                            <a href="#">
                                оформить заказ
                            </a>
                        </div>
                        <div class="bag__title tablet">
                            Корзина
                        </div>
                        <div class="bag__items">
                            <div class="bag__item d-flex">
                                <div class="bag__item__img">
                                    <img src="assets/img/bag/bag.png" alt=" ">
                                </div>
                                <div class="bag__item__inf">
                                    <div class="bag__item__title">
                                        Vino Rose Anti Aging Serum
                                    </div>
                                    <div class="bag__item__subtitle d-flex">
                                        <p class="bag__item__ops">Сыворотка для сужения пор на лице</p>
                                        <p class="volume">30 мл</p>
                                    </div>
                                    <div class="bag__item__nav d-flex">
                                        <div class="kol-vo">
                                            <a href="#">-</a>
                                            <p>1</p>
                                            <a href="#">+</a>
                                        </div>
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.7487 6.25V8.33333H8.33203V12.5H10.4154V39.5833C10.4154 40.6884 10.8544 41.7482 11.6358 42.5296C12.4172 43.311 13.477 43.75 14.582 43.75H35.4154C36.5204 43.75 37.5802 43.311 38.3616 42.5296C39.143 41.7482 39.582 40.6884 39.582 39.5833V12.5H41.6654V8.33333H31.2487V6.25H18.7487ZM18.7487 16.6667H22.9154V35.4167H18.7487V16.6667ZM27.082 16.6667H31.2487V35.4167H27.082V16.6667Z" fill="#EA0505" />
                                        </svg>
                                    </div>
                                    <div class="bag__item__price d-flex">
                                        <div class="discount-price">
                                            3 920₽
                                        </div>
                                        <div class="price">
                                            2 280 ₽
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="design__btn tablet mobile">
                            <a href="#">
                                оформить заказ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--bag-->

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
                            <a href="#"><img src="assets/img/ico/soc/what.png" alt="whatsapp"></a>
                            <a href="#"><img src="assets/img/ico/soc/telegram.png" alt="telegram"></a>
                            <a href="#"><img src="assets/img/ico/soc/inst.png" alt="instagram"></a>
                            <a href="#"><img src="assets/img/ico/soc/vk.png" alt="vk"></a>
                            <a href="#"><img src="assets/img/ico/soc/youtube.png" alt="youtube"></a>
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
        <!--footer-->

</body>

</html>