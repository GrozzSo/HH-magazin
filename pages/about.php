<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWGURU</title>
    <link rel="stylesheet" href="assets/style/about.css">
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


        <!--fon-->
        <div class="fon">
            <img src="assets/img/bg/bg1.png" alt="" class="fon__img1">
            <img src="assets/img/bg/bg2.png" alt="" class="fon__img2">
        </div>
        <!--fon-->

        <!--about-->
        <div class="container">
            <div class="about">
                <div class="about-header">
                    <div class="about__title">
                        О компании
                    </div>
                    <div class="about__bread">
                        <a href="index.html">Главная</a>
                        <p>—</p>
                        <a href="#">О нас</a>
                    </div>
                </div>
                <div class="about__body">
                    <p class="ab__txt">
                        GLOWGURU - мультибрендовый интернет-магазин косметики. Мы предлагаем вам большой выбор брендов,
                        среди
                        которых вы обязательно найдете то, что нужно вам.
                    </p>
                    <p class="ab__txt">
                        Мы сотрудничаем с официальными дистрибьюторами, можете быть уверены в качестве и оригинальности
                        представленной продукции на сайте.
                    </p>
                    <p class="ab__txt">
                        Вы всегда можете получить бесплатную консультацию по подбору ухода от наших специалистов.
                    </p>
                    <p class="ab__txt">
                        Приятного шоппинга с GLOWGURU
                    </p>

                    <a href="assets/img/about/ревезиты.pdf" target="_blank" download="newfilename">Скачать реквизиты</a>

                    <div class="contact__row contact__row_tablet contact__row_mobile">
                        <div class="contact__column">
                            <div class="column__title">
                                Юридический адрес:
                            </div>
                            <p class="column__subtitle">
                                113031, г. Казань, ул. Халева 10
                            </p>
                        </div>
                        <div class="contact__column">
                            <div class="contact__column_row">
                                <div class="column__title">
                                    ИНН
                                </div>
                                <p class="column__subtitle">
                                    9632221346,
                                </p>
                            </div>
                            <div class="contact__column_row">
                                <div class="column__title">
                                    КПП
                                </div>
                                <p class="column__subtitle">
                                    198098034,
                                </p>
                            </div>
                            <div class="contact__column_row">
                                <div class="column__title">
                                    ОГРН
                                </div>
                                <p class="column__subtitle">
                                    8288081335952,
                                </p>
                            </div>
                            <div class="contact__column_row">
                                <div class="column__title">
                                    ОКПО
                                </div>
                                <p class="column__subtitle">
                                    969858677782,
                                </p>
                            </div>

                        </div>
                        <div class="contact__column">
                            <div class="contact__column_row">
                                <div class="column__title">
                                    Расчетный счет:
                                </div>
                                <p class="column__subtitle">
                                    40801840239544666973
                                </p>
                            </div>

                            <div class="contact__column_row">
                                <div class="column__title">
                                    к/с
                                </div>
                                <p class="column__subtitle">
                                    55202978026059504398
                                </p>
                            </div>
                            <div class="contact__column_row">
                                <div class="column__title">
                                    БИК
                                </div>
                                <p class="column__subtitle">
                                    76967293060
                                </p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!--about-->

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