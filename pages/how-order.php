<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWGURU</title>
    <link rel="stylesheet" href="assets/style/how-order.css">
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
                        <a href="index.php?page=admin"><img src="assets/img/banner/admin-white.svg" alt=""></a>
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
            <img src="assets/img/bg/bg3.png" alt="" class="fon__img3 pc">
            <img src="assets/img/bg/bg3.png" alt="" class="fon__img3 tablet ">
            <img src="assets/img/bg/bg3-mobile.png" alt="" class="fon__img3 mobile">
        </div>
        <!--fon-->

        <!--how-order-->
        <div class="container">
            <div class="how-order">
                <div class="how-order-header">
                    <div class="how-order__title">
                        Доставка и оплата
                    </div>
                    <div class="how-order__bread">
                        <a href="index.html">Главная</a>
                        <p>—</p>
                        <a href="#">Доставка и оплата </a>
                    </div>
                </div>
                <div class="how-order__body">
                    <div class="how-order__item">
                        <div class="item__title">
                            Как оформить заказ?
                        </div>
                        <div class="item__text">
                            Для оформления заказа необходимо добавить выбранные товары в
                            <br>
                            корзину, а затем перейти на страницу «Корзина». Проверьте правильность
                            <br>
                            добавленных позиций и нажмите кнопку «Оформить заказ».
                        </div>
                    </div>
                    <div class="how-order__item">
                        <div class="item__title">
                            Оформление заказа
                        </div>
                        <div class="item__text">
                            Если вы уверены в выборе, то можете самостоятельно
                            <br>
                            оформить заказ, заполнив форму.
                        </div>
                    </div>
                    <div class="how-order__item">
                        <div class="item__title">
                            Доставка
                        </div>
                        <div class="item__text">
                            Срок обработки заказа до 5 рабочих дней
                        </div>
                    </div>
                    <div class="how-order__item">
                        <div class="item__title">
                            Москва
                        </div>
                        <div class="item__text">
                            Курьер СДЭК, Boxberry: Стоимость: 300р, при заказе от
                            <br>
                            4.000р - БЕСПЛАТНО (2-3 дня)
                            <br>
                            До пункта выдачи СДЭК, Boxberry: Стоимость: от 150р,
                            <br>
                            при заказе от 3.000р - БЕСПЛАТНО
                        </div>
                    </div>
                    <div class="how-order__item">
                        <div class="item__title">
                            Другие города
                        </div>
                        <div class="item__text">
                            <div class="item__text__title">
                                Почта России
                            </div>
                            <p>
                                Стоимость: от 300р, при заказе от 4.000р - БЕСПЛАТНО(Кроме удаленных населенных пунктов)
                                Если стоимость вашего заказа 4000р. и более, а стоимость доставки Почтой России дороже чем 300р. При оформлении заказа вам автоматически просчитается скидка в 300р.
                                Сроки и точную стоимость вы всегда можете автоматически рассчитать в корзине, указав ваш населенный пункт.
                                Срок и стоимость доставки могут быть увеличены из-за удаленности выбранного населенного пункта, веса и габаритов посылки.
                            </p>
                            <br>
                            <div class="item__text__title">
                                КУРЬЕРСКАЯ СЛУЖБА СДЭК и Boxberry
                            </div>
                            <p>
                                До пункта выдачи: от 220р.
                                <br>
                                Если стоимость вашего заказа 3000р и более, то доставка до пункта выдачи - БЕСПЛАТНО (Кроме удаленных населенных пунктов и Дальнего Востока)
                                <br>
                                Доставка курьером: от 400р.
                            </p>
                            <br>
                            <p>
                                Если стоимость вашего заказа 4000р. и более, а стоимость доставки СДЭК дороже чем 300р. При оформлении заказа вам автоматически просчитается скидка в 300р.
                                Международная доставка на данный момент недоступна
                            </p>
                        </div>
                    </div>
                    <div class="how-order__item">
                        <div class="item__title">
                            Покупатель
                        </div>
                        <div class="item__text">
                            Введите данные о себе: ФИО, адрес доставки, номер телефона.
                            <br>
                            В поле «Комментарии к заказу» укажите ваши пожелания, тип
                            <br>
                            кожи, чтобы мы подобрали для вас пробники к заказу.
                        </div>
                    </div>
                    <div class="how-order__item_red">
                        ДОСТАВКА В РЕСПУБЛИКУ БЕЛАРУСЬ, АРМЕНИЮ, КИРГИЗИЮ, КАЗАХСТАН НА ДАННЫЙ МОМЕНТНЕ ОСУЩЕСТВЛЯЕТСЯ
                    </div>

                    <div class="how-order__item">
                        <div class="item__title">
                            Оплата возможна по:
                        </div>
                        <div class="item__row">
                            <img src="assets/img/how-order/visa.png" alt="">
                            <img src="assets/img/how-order/master.png" alt="">
                            <img src="assets/img/how-order/mir.png" alt="">
                            <img src="assets/img/how-order/paykeeper.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--how-order-->

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