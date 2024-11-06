<?php
$sql = 'SELECT * FROM `tovars`';
$query = $conn->query($sql);
$products = $query->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWGURU</title>
    <link rel="stylesheet" href="assets/style/catalog.css">
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


        <!--catalog-->
        <div class="container">
            <div class="catalog">
                <div class="catalog-header">
                    <div class="catalog__title">
                        Каталог товаров
                    </div>
                    <div class="catalog__bread">
                        <a href="index.html">Главная</a>
                        <p>—</p>
                        <a href="#">Каталог</a>
                    </div>
                </div>
                <div class="catalog-filter">
                    <svg class="filter" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5833 12.5V20.7083C14.625 21.0208 14.5208 21.3542 14.2813 21.5729C14.1849 21.6695 14.0704 21.7461 13.9444 21.7984C13.8184 21.8506 13.6833 21.8775 13.5469 21.8775C13.4105 21.8775 13.2754 21.8506 13.1494 21.7984C13.0234 21.7461 12.9089 21.6695 12.8125 21.5729L10.7188 19.4792C10.6052 19.3681 10.5188 19.2323 10.4664 19.0823C10.414 18.9323 10.397 18.7722 10.4167 18.6146V12.5H10.3854L4.38543 4.8125C4.21627 4.59534 4.13995 4.32006 4.17313 4.0468C4.20631 3.77354 4.3463 3.52453 4.56251 3.35417C4.76043 3.20833 4.97918 3.125 5.20835 3.125H19.7917C20.0208 3.125 20.2396 3.20833 20.4375 3.35417C20.6537 3.52453 20.7937 3.77354 20.8269 4.0468C20.8601 4.32006 20.7838 4.59534 20.6146 4.8125L14.6146 12.5H14.5833Z" fill="black" />
                    </svg>
                    <a href="#" class="filter">Фильтр</a>
                    <div class="catalog__filter__line">
                    </div>
                    <a href="#" class="sort">По умолчанию (убывание) ▼</a>
                </div>

                <div class="catalog__list">

                    <?php
                    $sql = "SELECT * FROM tovars DESC LIMIT 6";



                    if (count($products) > 0) {
                        foreach ($products as $product) {
                    ?>
                            <div class="tov">
                                <img src="<?php
                                            if (!is_null($product['avatar'])) {
                                                echo $product['avatar'];
                                            } else {
                                                echo 'image/item.png';
                                            }
                                            ?>">

                                <div class="catalog__rating">
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


                                <p class="catalog-item__title"><?= $product['nametov'] ?></p>
                                <p class="catalog-item__subtitle"><?= $product['description'] ?></p>

                                <div class="catalog-item_bottom">
                                    <div class="item__price">
                                        <p class="item__price"><?= number_format($product['price'], 0, '.', ' ') ?> ₽</p>
                                    </div>
                                    <div class="item__ico">
                                        <a href="?page=item&id=<?= $product['id'] ?>"> <button class="btn__bags">Посмотреть товар</button> <!--<img src="assets/img/ico/bag-item.png" alt="bag">  --> </a>

                                    </div>
                                </div>


                            </div>
                    <?php
                        }
                    } else {
                        echo 'Нет товаров';
                    }
                    ?>




                    <!-- <div class="catalog-item"> -->
                    <!-- <a href="item.html">
                <div class="catalog-item__img">
                    <img src="assets/img/catalog/item.png" alt="">
                </div>
                <div class="catalog__rating">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                              fill="black"/>
                    </svg>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                              fill="black"/>
                    </svg>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                              fill="black"/>
                    </svg>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                              fill="black"/>
                    </svg>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                              fill="black"/>
                    </svg>
                    <p>10</p>
                </div>
                <p class="catalog-item__title">
                    Huxley Be Clean Be Moist Cleansing Water
                </p>
                <p class="catalog-item__subtitle">
                    Очищение и снятие макияжа
                </p>
                <p class="item__text">
                    30 мл
                </p>
                <div class="catalog-item_bottom">
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
            <div class="catalog-item">
                <a href="#">
                    <div class="catalog-item__img">
                        <img src="assets/img/catalog/item.png" alt="">
                    </div>
                    <div class="catalog__rating">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <p>10</p>
                    </div>
                    <p class="catalog-item__title">
                        Huxley Be Clean Be Moist Cleansing Water
                    </p>
                    <p class="catalog-item__subtitle">
                        Очищение и снятие макияжа
                    </p>
                    <p class="item__text">
                        30 мл
                    </p>
                    <div class="catalog-item_bottom">
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
            <div class="catalog-item">
                <a href="#">
                    <div class="catalog-item__img">
                        <img src="assets/img/catalog/item.png" alt="">
                    </div>
                    <div class="catalog__rating">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <p>10</p>
                    </div>
                    <p class="catalog-item__title">
                        Huxley Be Clean Be Moist Cleansing Water
                    </p>
                    <p class="catalog-item__subtitle">
                        Очищение и снятие макияжа
                    </p>
                    <p class="item__text">
                        30 мл
                    </p>
                    <div class="catalog-item_bottom">
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
            <div class="catalog-item">
                <a href="#">
                    <div class="catalog-item__img">
                        <img src="assets/img/catalog/item.png" alt="">
                    </div>
                    <div class="catalog__rating">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <p>10</p>
                    </div>
                    <p class="catalog-item__title">
                        Huxley Be Clean Be Moist Cleansing Water
                    </p>
                    <p class="catalog-item__subtitle">
                        Очищение и снятие макияжа
                    </p>
                    <p class="item__text">
                        30 мл
                    </p>
                    <div class="catalog-item_bottom">
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
            <div class="catalog-item">
                <a href="#">
                    <div class="catalog-item__img">
                        <img src="assets/img/catalog/item.png" alt="">
                    </div>
                    <div class="catalog__rating">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <p>10</p>
                    </div>
                    <p class="catalog-item__title">
                        Huxley Be Clean Be Moist Cleansing Water
                    </p>
                    <p class="catalog-item__subtitle">
                        Очищение и снятие макияжа
                    </p>
                    <p class="item__text">
                        30 мл
                    </p>
                    <div class="catalog-item_bottom">
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
            <div class="catalog-item">
                <a href="#">
                    <div class="catalog-item__img">
                        <img src="assets/img/catalog/item.png" alt="">
                    </div>
                    <div class="catalog__rating">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <p>10</p>
                    </div>
                    <p class="catalog-item__title">
                        Huxley Be Clean Be Moist Cleansing Water
                    </p>
                    <p class="catalog-item__subtitle">
                        Очищение и снятие макияжа
                    </p>
                    <p class="item__text">
                        30 мл
                    </p>
                    <div class="catalog-item_bottom">
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
            <div class="catalog-item">
                <a href="#">
                    <div class="catalog-item__img">
                        <img src="assets/img/catalog/item.png" alt="">
                    </div>
                    <div class="catalog__rating">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                                  fill="black"/>
                        </svg>
                        <p>10</p>
                    </div>
                    <p class="catalog-item__title">
                        Huxley Be Clean Be Moist Cleansing Water
                    </p>
                    <p class="catalog-item__subtitle">
                        Очищение и снятие макияжа
                    </p>
                    <p class="item__text">
                        30 мл
                    </p>
                    <div class="catalog-item_bottom">
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
            <div class="catalog-item">
            <a href="#">
                <div class="catalog-item__img">
                    <img src="assets/img/catalog/item.png" alt="">
                </div>
                <div class="catalog__rating">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                              fill="black"/>
                    </svg>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                              fill="black"/>
                    </svg>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                              fill="black"/>
                    </svg>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                              fill="black"/>
                    </svg>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.78496 22.9924L11.2783 16.594L6.31299 12.2923L12.8535 11.7262L15.415 5.69153L17.9766 11.725L24.5159 12.2911L19.5518 16.5928L21.0451 22.9912L15.415 19.5951L9.78496 22.9924Z"
                              fill="black"/>
                    </svg>
                    <p>10</p>
                </div>
                <p class="catalog-item__title">
                    Huxley Be Clean Be Moist Cleansing Water
                </p>
                <p class="catalog-item__subtitle">
                    Очищение и снятие макияжа
                </p>
                <p class="item__text">
                    30 мл
                </p>
                <div class="catalog-item_bottom">
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
        <div class="catalog__btn">
            <a href="#">Показать ещё </a>
        </div>
        <div class="catalog-list__number">
            <a href="#" class="catalog-list__number_active">1</a>
            <a href="#" >2</a>
            <a href="#" >▶</a>
        </div> -->

                    <!--catalog-->

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