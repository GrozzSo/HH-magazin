<?php
session_start();

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWGURU</title>
    <link rel="stylesheet" href="assets/style/form.css">
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
                if (!empty($_SESSION['user'])) {
                ?>
                    <a href="?page=profile"><img src="assets/banner/user-red.svg" alt="bag"></a>

                <?php
                }
                ?>

                <a href="?page=admin"><img src="assets/img/banner/admin.png" alt="heart"></a>

                <?php
                if (empty($_SESSION['user'])) {
                ?>
                    <a href="?page=login" class="header__btn-red">Войти</a>
                <?php
                } else {
                ?>
                    <a href="index.php" class="header__btn-red">Выход</a>
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


        <!--register-->
        <div class="container">
            <div class="form">
                <div class="form__title">
                    РЕГИСТРАЦИЯ
                </div>

                <div class="form__body">
                    <form action="actions/register.php" method="post">
                     
                    <input class="reggg" type="text" name="name" placeholder="Введите имя">
            <?php
                if (isset($_SESSION['errors']['name'])) {
            ?>
        <p style="color:red"><?= $_SESSION['errors']['name'] ?></p>
        <?php
        unset($_SESSION['errors']['name']);
    }
    ?>

            <input class="reggg" type="text" name="email" placeholder="Введите почту" value="<?php if (isset($_SESSION['email'])) {
            echo $_SESSION['email'];
            unset($_SESSION['email']);
        } ?>">

    <?php
    if (isset($_SESSION['errors']['email'])) {
        ?>
        <p style="color:red"><?= $_SESSION['errors']['email'] ?></p>
        <?php
        unset($_SESSION['errors']['email']);
    }
    ?>
        <input class="reggg" type="password" name="password"placeholder="Придумайте пароль">
            <?php
                if (isset($_SESSION['errors']['password'])) {
            ?>
        <p style="color:red"><?= $_SESSION['errors']['password'] ?></p>
        <?php
        unset($_SESSION['errors']['password']);
    }
    ?>
            <input class="reggg" type="password" name="password_r" placeholder="Подтвердить пароль">

            <?php
    if (isset($_SESSION['errors']['password_r'])) {
        ?>
        <p style="color:red"><?= $_SESSION['errors']['password_r'] ?></p>
        <?php
        unset($_SESSION['errors']['password_r']);
    }
    ?>
                        <div class=" chek d-flex">
                            <label for=""></label><input type="checkbox" name="" id="" required>
                            <p>
                                Хочу получать рассылку о новинках, акциях и скидках
                            </p>
                        </div>
                        <div class="pol-sogl">
                            Нажав «Зарегистрироваться», вы подтверждаете, что ознакомились и согласны с условиями соглашения на
                            обработку персональных данных и <a href="#">пользовательского соглашения</a>
                        </div>
                        <button type="submit" class="vxod">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                    </form>
                </div>
                <div class="log">
                    <p>Уже есть акаунт?<a href="?page=login">Войти</a></p>
                </div>
            </div>
        </div>
        <!--register-->

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