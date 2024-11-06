<?php
session_start();
require_once '../database/database.php';
global $conn;

if (!isset($_POST)) die('Поддерживается только post запрос');

$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['email'] = $email;

$sql = "SELECT * FROM users WHERE email = '$email'";
$query = $conn->query($sql);
$user = $query->fetch(PDO::FETCH_ASSOC);

if (empty($email)) $_SESSION['errors']['email'] = 'Поле email является обязательным';

if (empty($password)) $_SESSION['errors']['password'] = 'Поле пароля является обязательным';

else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $_SESSION['errors']['email'] = 'Почта введена неккоректно';

else {
    if (empty($user)) $_SESSION['errors']['email'] = 'Вы не зарегистрированы';

    //Проверка на заблокирован ли пользователь, если заблокирован, то выдает ошибку
    if ($user['role_id'] == 3) $_SESSION['errors']['email'] = 'Вы заблокированы и не можете войти в систему';
}


if (!empty($password) && empty($_SESSION['errors']['email']) && !password_verify($password, $user['password'])) {
    $_SESSION['errors']['password'] = 'Неверный пароль';
}

if (!empty($_SESSION['errors'])) {
    header('Location: ../index.php?page=login');
    die;
}

$_SESSION['user'] = $user;
unset($_SESSION['email']);
if ($_SESSION['user']['role_id'] == 2) header('location: ../?page=admin');
else header('location: ../?page=profile');
