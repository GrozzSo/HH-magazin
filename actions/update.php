<?php
require_once '../database/database.php';
require_once '../functions/helper.php';
global $conn;

if(isset($_POST)){
    $product_id = $_POST['product_id'];
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

    $sql = "UPDATE `tovars` SET `avatar`='$path', `nametov` = '$nametov',`description`='$description',`price`='$price' WHERE `id`='$product_id'";
    $query = $conn -> query($sql);

    header('Location: ../index.php?page=admin');
}
?>