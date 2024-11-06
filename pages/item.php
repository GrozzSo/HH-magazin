<?php
session_start();
require 'database/database.php';
global $conn;
$product_id = $_GET['id'];
$sql = "SELECT * FROM tovars WHERE id = $product_id";
$query = $conn->query($sql);
$products = $query->fetch(PDO::FETCH_ASSOC); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWGURU</title>
    <link rel="stylesheet" href="assets/style/item.css">
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


        <!--item-->
        <div class="container">
            <div class="item">
                <div class="item__header mobile__none">
                    <div class="bread">
                        <a href="catalog.html">Каталог</a>
                        <p>—</p>
                        <p>Товар </p>
                    </div>
                </div>
                <div class="item_flex">
                    <div class="item__img">
                        <img src="<?php
                                    if (!is_null($products['avatar'])) {
                                        echo $products['avatar'];
                                    } else {
                                        echo 'image/item.png';
                                    }
                                    ?>" alt="">
                        <!-- <div class="item__img_flex mobile__none">
                    <img src="assets/img/item/1.png" alt="">
                    <img src="assets/img/item/2.png" alt="">
                    <img src="assets/img/item/3.png" alt="">
                </div> -->
                    </div>
                    <div class="item__inf">
                        <div class="item__small-ops">
                            <p class="podzagtov"><?= $products['description'] ?></p>
                        </div>
                        <div class="item__title">
                            <p class="zagtovv"><?= $products['nametov'] ?></p>
                        </div>
                        <div class="item__row d-flex">
                            <div class="item__stars">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.49414 30.6251L10.8639 20.3803L2.91602 13.4897L13.416 12.5782L17.4993 2.91675L21.5827 12.5782L32.0827 13.4897L24.1348 20.3803L26.5046 30.6251L17.4993 25.1928L8.49414 30.6251Z" fill="black" />
                                </svg>
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.49414 30.6251L10.8639 20.3803L2.91602 13.4897L13.416 12.5782L17.4993 2.91675L21.5827 12.5782L32.0827 13.4897L24.1348 20.3803L26.5046 30.6251L17.4993 25.1928L8.49414 30.6251Z" fill="black" />
                                </svg>
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.49414 30.6251L10.8639 20.3803L2.91602 13.4897L13.416 12.5782L17.4993 2.91675L21.5827 12.5782L32.0827 13.4897L24.1348 20.3803L26.5046 30.6251L17.4993 25.1928L8.49414 30.6251Z" fill="black" />
                                </svg>
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.49414 30.6251L10.8639 20.3803L2.91602 13.4897L13.416 12.5782L17.4993 2.91675L21.5827 12.5782L32.0827 13.4897L24.1348 20.3803L26.5046 30.6251L17.4993 25.1928L8.49414 30.6251Z" fill="black" />
                                </svg>
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.49414 30.6251L10.8639 20.3803L2.91602 13.4897L13.416 12.5782L17.4993 2.91675L21.5827 12.5782L32.0827 13.4897L24.1348 20.3803L26.5046 30.6251L17.4993 25.1928L8.49414 30.6251Z" fill="#A6A6A6" />
                                </svg>
                            </div>
                            <div class="article mobile__none">
                                Артикул: 159187
                            </div>
                        </div>
                        <div class="action d-flex">
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M59.0043 32.3121C58.9215 31.9615 58.7533 31.6368 58.5148 31.3668C58.2763 31.0968 57.9748 30.8899 57.6371 30.7645L41.8844 24.8555L45.893 4.80433C45.9838 4.33845 45.9205 3.85568 45.7129 3.42888C45.5052 3.00209 45.1643 2.65441 44.7417 2.43833C44.3191 2.22224 43.8377 2.14947 43.3701 2.231C42.9026 2.31252 42.4742 2.54392 42.1496 2.89026L11.5246 35.7028C11.2759 35.9649 11.096 36.2845 11.0009 36.6331C10.9058 36.9817 10.8986 37.3484 10.9798 37.7005C11.0611 38.0526 11.2283 38.379 11.4665 38.6507C11.7047 38.9224 12.0065 39.1309 12.3449 39.2575L28.1031 45.1664L24.1055 65.1957C24.0147 65.6616 24.0779 66.1444 24.2856 66.5712C24.4933 66.998 24.8341 67.3456 25.2567 67.5617C25.6793 67.7778 26.1607 67.8506 26.6283 67.7691C27.0959 67.6875 27.5243 67.4561 27.8488 67.1098L58.4738 34.2973C58.7181 34.0351 58.8942 33.717 58.9867 33.3709C59.0792 33.0247 59.0852 32.6612 59.0043 32.3121ZM29.9051 58.5157L32.768 44.193C32.8704 43.685 32.7893 43.1572 32.5389 42.7035C32.2885 42.2498 31.8852 41.8997 31.4008 41.7157L16.9524 36.2879L40.0906 11.4981L37.2305 25.8207C37.128 26.3287 37.2092 26.8565 37.4596 27.3102C37.71 27.7639 38.1133 28.114 38.5977 28.2981L53.0352 33.7121L29.9051 58.5157Z" fill="black" />
                            </svg>
                            <div class="action__text">
                                <div class="action__title">
                                    Товар участвует в акциях
                                </div>
                                <div class="action__subtitle">
                                    Маска-плёнка в подарок от 10 000₽
                                </div>
                            </div>
                        </div>
                        <div class=" price-stock d-flex">
                            <div class="price">
                                <p class="tsena"><?= number_format($products['price'], 0, '.', ' ') ?> ₽</p>
                            </div>
                            <div class="in-stock">
                                в наличии
                            </div>
                        </div>
                        <div class="item__nav d-flex">
                            <div class="kol-vo mobile__none">
                                <a href="#">-</a>
                                <p>1</p>
                                <a href="#">+</a>
                            </div>
                            <div class="like">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="50" height="50" fill="url(#pattern0_81_3634)" />
                                    <defs>
                                        <pattern id="pattern0_81_3634" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_81_3634" transform="scale(0.01)" />
                                        </pattern>
                                        <image id="image0_81_3634" width="100" height="100" xlink:href="data:image/png;base64,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" />
                                    </defs>
                                </svg>
                            </div>
                            <?php
                            if (!empty($_SESSION['user'])) {
                            ?>
                                <div class="btn__to-bag">

                                    <a href="?page=profile">в корзину</a>
                                </div>
                            <?php }
                            ?>
                        </div>
                        <div class="item__ops">
                            <div class="item__ops__title seim-bold">
                                Описание товара
                            </div>
                            <div class="seim-bold">
                                Осветляющий гель для умывания с глутатионом обеспечивает глубокое и комфортное очищение кожи, а
                                также выравнивание тона.
                            </div>
                            <div class="seim-bold">
                                Объём: 150 мл.
                            </div>
                            <p>
                                <span class="seim-bold">Подходит для:</span> Всех типов кожи, склонной к неровностям тона.
                            </p>
                            <div class="seim-bold">
                                Преимущества:
                            </div>
                            <ul>
                                <li>
                                    Глубоко, но деликатно, очищает кожу от загрязнений и излишков себума, обеспечивает чистоту и
                                    свежесть.
                                </li>
                                <li>
                                    Оказывает мягкое осветляющее действие, помогает устранить неровности тона и предотвратить
                                    гиперпигментацию.
                                </li>
                                <li>
                                    Смягчает кожу и препятствует потере влаги в процессе очищения.
                                </li>
                            </ul>
                            <div class="seim-bold">
                                Основные компоненты:
                            </div>
                            <ul>
                                <li>
                                    Глутатион оказывает осветляющее действие, устраняет и предотвращает пигментные пятна,
                                    выравнивает тон кожи.
                                </li>
                                <li>
                                    Гиалуроновая кислота глубоко увлажняет кожу, сохраняя влагу внутри, препятствует
                                    обезвоживанию и сухости, а также способствует сохранению гладкости и упругости кожи.
                                </li>
                                <li>
                                    Экстракт Расторопши обладает восстанавливающим, антиоксидантным и противовоспалительным
                                    действием, осветляет кожу, повышает тонус, защищает кожу от шелушения и сухости.
                                </li>
                                <li>
                                    Комплекс из 5 пептидов поддерживает общую регенерацию клеток кожи.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--item-->

        <!-- Similar products
        <div class="container">
            <div class="similar">
                <div class="similar__title">
                    Похожие товары
                </div>

                <div class="similar__list">
                    <div class="similar-item">
                        <a href="#">
                            <div class="similar-item__img">
                                <img src="assets/img/catalog/item.png" alt="">
                            </div>
                            <div class="similar__rating">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <p>10</p>
                            </div>
                            <p class="similar-item__title">
                                Huxley Be Clean Be Moist Cleansing Water
                            </p>
                            <p class="similar-item__subtitle">
                                Очищение и снятие макияжа
                            </p>
                            <p class="item__text">
                                30 мл
                            </p>
                            <div class="similar-item_bottom">
                                <div class="item__price">
                                    2 280 ₽
                                </div>
                                <div class="item__ico">
                                    <a href="#"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                    <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="similar-item">
                        <a href="#">
                            <div class="similar-item__img">
                                <img src="assets/img/catalog/item.png" alt="">
                            </div>
                            <div class="similar__rating">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <p>10</p>
                            </div>
                            <p class="similar-item__title">
                                Huxley Be Clean Be Moist Cleansing Water
                            </p>
                            <p class="similar-item__subtitle">
                                Очищение и снятие макияжа
                            </p>
                            <p class="item__text">
                                30 мл
                            </p>
                            <div class="similar-item_bottom">
                                <div class="item__price">
                                    2 280 ₽
                                </div>
                                <div class="item__ico">
                                    <a href="#"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                    <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="similar-item">
                        <a href="#">
                            <div class="similar-item__img">
                                <img src="assets/img/catalog/item.png" alt="">
                            </div>
                            <div class="similar__rating">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <p>10</p>
                            </div>
                            <p class="similar-item__title">
                                Huxley Be Clean Be Moist Cleansing Water
                            </p>
                            <p class="similar-item__subtitle">
                                Очищение и снятие макияжа
                            </p>
                            <p class="item__text">
                                30 мл
                            </p>
                            <div class="similar-item_bottom">
                                <div class="item__price">
                                    2 280 ₽
                                </div>
                                <div class="item__ico">
                                    <a href="#"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                    <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="similar-item">
                        <a href="#">
                            <div class="similar-item__img">
                                <img src="assets/img/catalog/item.png" alt="">
                            </div>
                            <div class="similar__rating">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z" fill="black" />
                                </svg>
                                <p>10</p>
                            </div>
                            <p class="similar-item__title">
                                Huxley Be Clean Be Moist Cleansing Water
                            </p>
                            <p class="similar-item__subtitle">
                                Очищение и снятие макияжа
                            </p>
                            <p class="item__text">
                                30 мл
                            </p>
                            <div class="similar-item_bottom">
                                <div class="item__price">
                                    2 280 ₽
                                </div>
                                <div class="item__ico">
                                    <a href="#"><img src="assets/img/ico/bag-item.png" alt="bag"></a>
                                    <a href="#"><img src="assets/img/ico/heart-item.png" alt="heart"></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!--Similar products-->

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