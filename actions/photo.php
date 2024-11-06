<?php

session_start();

require_once '../database/database.php';
global $conn;

$user_id = $_POST['id'];

if (!isset($_POST))
    die('Поддерживается только post запросы');
$file = $_FILES['photo'];

if ($file['error'] !== 0) {
    $_SESSION['error']['photo'] = 'Возникли ошибки при загрузке файла';
    var_dump($_FILES['photo']);
    header('Location: ../index.php?page=profile');

    die();
}

$types = [
    'image/jpeg',
    'image/png',
    'image/jpg',
    'image/gif',
    'image/bmp',
    'image/svg+xml'
];

if (!in_array($file['type'], $types)) {

    $_SESSION['error']['photo'] = 'Неверный тип файла';

    header('Location: ../index.php?page=profile');

    die();
}

if ($file['size'] > 1024 * 1024 * 10) {

    $_SESSION['error']['photo'] = 'Максимальный размер загружаемого файла 10 мб.';

    header('Location: ../index.php?page=profile');

    die();
}
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
$path = 'assets/img/avatar/' . uniqid() . '.' . $extension;
if (!move_uploaded_file($file['tmp_name'], '../' . $path)) {

    $_SESSION['error']['photo'] = 'Не удалось загрузить файл';

    header('location: ../index.php?page=profile');

    die();
}



$sql = "UPDATE users SET photo='$path' WHERE id='$user_id'";
$query = $conn->query($sql);
$_SESSION['user']['photo'] = $path;
header('Location: ../index.php?page=profile');
