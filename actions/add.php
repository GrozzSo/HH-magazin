<?php

session_start();
require_once '../functions/helper.php';
require_once '../database/database.php';
global $conn;

$nametov = $_POST['nametov'];
$description = $_POST['description'];
$price = $_POST['price'];


    $file = $_FILES['avatar'];

    // Проверка на наличие ошибок при загрузке файла
    if($file['error'] !== 0) {
    
        $_SESSION['errors']['avatar'] = 'Возникли ошибки при загрузке файла';

        // header('Location: ../index.php?page=addtovar');
    
        die();
    
    }
    
    // Валидация файла по типу
    $types = [
        'image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/bmp', 'image/svg+xml'
    ];
    
    // Проверка на наличеи типа файла в массиве types
    if(!in_array($file['type'], $types)) {
    
        $_SESSION['errors']['avatar'] = 'Неверный тип файла';
    
        header('Location: ../index.php?page=add');
    
        die();
    
    }
    
    // Проверка на размер файла
    if($file['size'] > 1024 * 1024 * 10) {
    
        $_SESSION['errors']['avatar'] = 'Максимальный размер загружаемого файла 10 мб.';
    
        header('Location: ../index.php?page=add');
    
        die();
    
    }
    
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    
    // $filename = pathinfo($file['name'], PATHINFO_FILENAME);
    
    $path = 'image/' . uniqid() . '.' . $extension;
    
    // Загружаем файл через функцию move_uploaded_file
    if(!move_uploaded_file($file['tmp_name'], '../' . $path)) {
    
        $_SESSION['errors']['avatar'] = 'Не удалось загрузить файл';
    
        header('location: ../index.php?page=add');
    
        die();
    
    }
    

    
$sql = "INSERT INTO tovars (id, nametov, description, price, avatar) VALUES (NULL,'$nametov','$description','$price', '$path')";
$query = $conn -> query($sql);

header('Location: ../index.php?page=catalog');
?>