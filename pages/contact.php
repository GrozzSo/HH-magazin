<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWGURU</title>
    <link rel="stylesheet" href="assets/style/contact.css">
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


        <!--contact-->
        <div class="container">
            <div class="contact">
                <div class="contact-header ">
                    <div class="contact__title">
                        Доставка и оплата
                    </div>
                    <div class="contact__bread">
                        <a href="index.html">Главная</a>
                        <p>—</p>
                        <a href="#">Доставка и оплата </a>
                    </div>
                </div>
                <div class="contact__column mobile contact__column_mobile tablet contact__column_tablet">
                    <p class="adres">
                        113031, г. Казань
                        <br>
                        ул. Халева 10
                    </p>
                </div>
                <div class="contact__row">
                    <div class="contact__column pc">
                        <p class="adres">
                            420015, г. Казань
                            <br>
                            улица Пушкина, 58А
                        </p>
                    </div>
                    <div class="contact__column">
                        <div class="column__title">
                            Режим работы:
                        </div>
                        <p class="time">
                            пн.-пт.: 08:00 - 21:00
                            <br>
                            сб.: 08:00 - 20:00
                            <br>
                            вс.: 09:00 - 18:00
                        </p>
                    </div>
                    <div class="contact__column">
                        <div class="column__title">
                            Виды связи:
                        </div>
                        <a href="tel:+88000000000" class="tel">8 (800) 000-00-00</a>
                        <a href="mailto:glowguru@mail.ru" class="mail">glowguru@mail.ru</a>
                    </div>
                </div>
                <div class="contact__body pc">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1d42bbefc7e42ea07cc9b4e353950a777a05aa1717d89aea10021b74bfbdfc03&amp;source=constructor" width="100%" height="402" frameborder="0"></iframe>
                </div>
                <!-- <div class="contact__row contact__row_tablet contact__row_mobile">
                    <div class="contact__column">
                        <div class="column__title">
                            Юридический адрес:
                        </div>
                        <p class="column__subtitle">
                            113031, г. Казань, ул. Халева 10
                        </p>
                    </div> -->
                    <!-- <div class="contact__column">
                        <div class="contact__column_row">
                            <div class="column__title">
                                ИНН
                            </div>
                            <p class="column__subtitle">
                                101001010101,
                            </p>
                        </div>
                        <div class="contact__column_row">
                            <div class="column__title">
                                КПП
                            </div>
                            <p class="column__subtitle">
                                101001010101,
                            </p>
                        </div>
                        <div class="contact__column_row">
                            <div class="column__title">
                                ОГРН
                            </div>
                            <p class="column__subtitle">
                                101001010101,
                            </p>
                        </div>
                        <div class="contact__column_row">
                            <div class="column__title">
                                ОКПО
                            </div>
                            <p class="column__subtitle">
                                101001010101,
                            </p>
                        </div>
                        <div class="contact__column_row">
                            <div class="column__title">
                                ОКАТО
                            </div>
                            <p class="column__subtitle">
                                101001010101,
                            </p>
                        </div>
                    </div>
                    <div class="contact__column">
                        <div class="contact__column_row">
                            <div class="column__title">
                                Расчетный счет:
                            </div>
                            <p class="column__subtitle">
                                101001010101101001010101
                            </p>
                        </div>
                        <div class="contact__column_row">
                            <p class="column__subtitle">
                                ФИЛИАЛ «УФИМСКИЙ» ПАО КБ «УБРиР» г. Уфа
                            </p>
                        </div>
                        <div class="contact__column_row">
                            <div class="column__title">
                                к/с
                            </div>
                            <p class="column__subtitle">
                                101001010101101001010101
                            </p>
                        </div>
                        <div class="contact__column_row">
                            <div class="column__title">
                                БИК
                            </div>
                            <p class="column__subtitle">
                                101001010101
                            </p>
                        </div>
                    </div>

                </div> -->
                <div class="contact__body tablet">
                    <img src="assets/img/contact/map-tablet.png" alt="">
                </div>
            </div>
        </div>

        <div class="contact__body mobile">
            <img src="assets/img/contact/map-mobile.png" alt="">
        </div>
        <!--contact-->

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