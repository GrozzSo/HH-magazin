<?php

session_start();
require_once "database/database.php";
global $conn;
if(!isset($_POST))die('Поддерживается только post запрос вы пытаетесь передать get запрос');

$user_id = $_GET['id'];
$ban_id =3;
$sql = "UPDATE `users` SET `role_id` = 3 WHERE `id` = $user_id";
$query =$conn->query($sql);
header('location: ../?page=admin');