<?php

if (!isset($_SESSION['user']) || (int)$_SESSION['user']['role_id'] !== 2) die('403 Нет права доступа!');

require_once 'database/database.php';
global $conn;

$sql = 'SELECT * FROM `tovars`';
$query = $conn->query($sql);
$products = $query->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM `users`";
$query = $conn->query($sql);
$users = $query->fetchall(PDO::FETCH_ASSOC);
?>



<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GLOWGURU-ADMIN</title>
    <link rel="stylesheet" href="assets/style/admin.css">
    <link rel="shortcut icon" href="assets/img/logo/LOGO.png" type="image/x-icon">
</head>

<body>


    <!--administration -->
    <div class="container section">
        <div class="administration section">
            <div class="administration-img">
                <img src="assets/img/admin/admins.svg" alt="">
                <h1>Панель администратора</h1>
            </div>

        </div>
        <div class="administration-inf section">
            <p class="administration-name">
                <?php
                echo $_SESSION['user']['name'] . ' ' . $_SESSION['user']['surname'];
                ?>
            </p>
            <p class="administration-dan">
                <?php
                echo $_SESSION['user']['email'];
                ?>
            </p>

            <a href="actions/logout.php">Выйти ▶</a>

        </div>
    </div>
    <!--administration -->

    <!--btn add tovar-->
    <div class="add-tovar mt50px section">
        <a href="?page=add" class="add">Добавить товар →</a>
    </div>
    <!--btn add tovar-->

    <!--catalog-->
    <div class="catalog section mt150px">
        <h2>
            КАТАЛОГ
        </h2>
        <div class="catalog-cards mt50px">

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
                                        echo '../assets/img/catalog/item.php';
                                    }
                                    ?>">
                        <p class="zagtovv"><?= $product['nametov'] ?></p>
                        <p class="podzagtov"><?= $product['description'] ?></p>
                        <p class="tsena"><?= number_format($product['price'], 0, '.', ' ') ?> ₽</p>

                        <div class="krud">
                            <a class="buttontov" href="?page=edit&id=<?= $product['id'] ?>">Редактирование</a>
                            <a class="buttontov" href="?page=dalate&id=<?= $product['id'] ?>">Удалить</a>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo 'Нет товаров';
            }
            ?>

            <!-- <div class="catalog-card">
                <div class="catalog-img">
                    <img src="assets/img/catalog/item.png" alt="">
                </div>
                <div class="catalog-inf">
                    <div class="catalog-txt">
                        <h3>
                            Huxley Be Clean
                        </h3>
                        <p class="catalog-ops">
                            Очищение и снятие макияжа
                        </p>
                    </div>
                    <div class="catalog-price">
                        2 800 ₽
                    </div>
                </div>
                <div class="catalog-nav mt">
                    <a href="edit.html" class="catalog-btn red">редактировать</a>
                    <a href="#" class="catalog-btn ">удалить</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="assets/img/catalog/item.png" alt="">
                </div>
                <div class="catalog-inf">
                    <div class="catalog-txt">
                        <h3>
                            Huxley Be Clean 
                        </h3>
                        <p class="catalog-ops">
                            Очищение и снятие макияжа
                        </p>
                    </div>
                    <div class="catalog-price">
                        2 800 ₽
                    </div>
                </div>
                <div class="catalog-nav mt">
                    <a href="edit.html" class="catalog-btn red">редактировать</a>
                    <a href="#" class="catalog-btn ">удалить</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="assets/img/catalog/item.png" alt="">
                </div>
                <div class="catalog-inf">
                    <div class="catalog-txt">
                        <h3>
                            Huxley Be Clean 
                        </h3>
                        <p class="catalog-ops">
                            Очищение и снятие макияжа
                        </p>
                    </div>
                    <div class="catalog-price">
                        2 800 ₽
                    </div>
                </div>
                <div class="catalog-nav mt">
                    <a href="edit.html" class="catalog-btn red">редактировать</a>
                    <a href="#" class="catalog-btn ">удалить</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="assets/img/catalog/item.png" alt="">
                </div>
                <div class="catalog-inf">
                    <div class="catalog-txt">
                        <h3>
                            Huxley Be Clean 
                        </h3>
                        <p class="catalog-ops">
                            Очищение и снятие макияжа
                        </p>
                    </div>
                    <div class="catalog-price">
                        2 800 ₽
                    </div>
                </div>
                <div class="catalog-nav mt">
                    <a href="edit.html" class="catalog-btn red">редактировать</a>
                    <a href="#" class="catalog-btn ">удалить</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="assets/img/catalog/item.png" alt="">
                </div>
                <div class="catalog-inf">
                    <div class="catalog-txt">
                        <h3>
                            Huxley Be Clean 
                        </h3>
                        <p class="catalog-ops">
                            Очищение и снятие макияжа
                        </p>
                    </div>
                    <div class="catalog-price">
                        2 800 ₽
                    </div>
                </div>
                <div class="catalog-nav mt">
                    <a href="edit.html" class="catalog-btn red">редактировать</a>
                    <a href="#" class="catalog-btn ">удалить</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="assets/img/catalog/item.png" alt="">
                </div>
                <div class="catalog-inf">
                    <div class="catalog-txt">
                        <h3>
                            Huxley Be Clean 
                        </h3>
                        <p class="catalog-ops">
                            Очищение и снятие макияжа
                        </p>
                    </div>
                    <div class="catalog-price">
                        2 800 ₽
                    </div>
                </div>
                <div class="catalog-nav mt">
                    <a href="edit.html" class="catalog-btn red">редактировать</a>
                    <a href="#" class="catalog-btn ">удалить</a>
                </div>
            </div> -->
        </div>
    </div>
    <!--catalog-->

    <!--users-->
    <div class="users mt150px section">
        <div class="users-title ">
            Пользователи
        </div>
        <div class="users-cards mt50px">
            <div class="users-flex pc">

                <table>
                    <tr>
                        <td>ID-пользователя</td>
                        <td>Имя пользователя</td>
                        <td>Электронная почта пользователя</td>
                        <td>Статус</td>
                    </tr>
                    <?php
                    foreach ($users as $user) { ?>
                        <tr>

                            <td><?= $user['id'] ?></td>
                            <td>
                                <p><?= $user['name'] ?></p>
                            </td>
                            <td>
                                <p><?= $user['email'] ?></p>
                            </td>
                            <td> <?php
                                    if ($user['role_id'] == 1) { ?>
                                    <a href="?page=ban&id=<?= $user['id'] ?>">Заблокировать</a>
                                <?php
                                    } elseif ($user['role_id'] == 3) {
                                ?>
                                    <a href="?page=razban&id=<?= $user['id'] ?>">Разблокировать</a>
                                <?php
                                    }
                                ?>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>

                </table>


            </div>
        </div>
    </div>
    </div>
    <!--users-->
</body>

</html>