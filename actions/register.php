<?php
session_start();
require_once "../database/database.php";
global $conn;

if(!isset($_POST))die('Поддерживается только post запрос вы пытаетесь передать get запрос');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_r = $_POST['password_r'];

$_SESSION['email'] = $email;

if(empty($email)){
    $_SESSION['errors']['email'] = "Поля email является обязательным!" ;
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['errors']['email'] = "Неверный email!" ;

}else {
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $query =$conn->query($sql);
    $isReg = $query->fetch(PDO::FETCH_ASSOC);

    if(!empty($isReg)){
        $_SESSION['errors']['email'] = "Данный email уже зарегистрирован!" ;
    }
}


if(empty($password)){
    $_SESSION['errors']['password'] = "Поля пароль является обязательным!" ;
}else if(strlen($password) < 6) {
    $_SESSION['errors']['password'] = "Пароль должен содержать не меньше 6 символов " ;

}
if (empty($password_r)) {
    $_SESSION['errors']['password_r'] = "Повторите пароль!" ;
}

else if($password !== $password_r){
    $_SESSION['errors']['password_r'] = "Пороли должны совпадать" ;
}
if (!empty($_SESSION['errors'])) {
    header('location: ../index.php?page=register');
    die();
}

$password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (id, name, email, password) VALUES (NULL,'$name','$email', '$password')";
$query =$conn->query($sql);

// header('location: ../index.php?page=start');
header('location: ../index.php?page=profile');
