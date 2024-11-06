<?php
session_start();
require_once 'database/database.php';
?>


<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if($_GET['page'] === 'edit'){
        include 'pages/edit.php';}
            else if ($_GET['page'] === 'dalate' && isset ($_GET['id'])){
                include 'actions/dalate.php';
        }
    if ($page === 'about') include 'pages/about.php';
    else if ($page === 'contact') include 'pages/contact.php';
    else if ($page === 'add') include 'pages/add.php';
    else if ($page === 'admin') include 'pages/admin.php';
    else if ($page === 'profile') include 'pages/profile.php';
    else if ($page === 'catalog') include 'pages/catalog.php';
    else if ($page === 'how-order') include 'pages/how-order.php';
    else if ($page === 'item') include 'pages/item.php';
    else if ($page === 'login') include 'pages/login.php';
    else if ($page === 'register') include 'pages/register.php';
    else if ($page === 'start') include 'pages/start.php';
    else if ($page === 'profile') include 'pages/profile.php';
    else if($page === 'ban') include 'actions/ban.php';
    else if($page === 'razban') include 'actions/razban.php';


}else include 'pages/start.php';
?>

