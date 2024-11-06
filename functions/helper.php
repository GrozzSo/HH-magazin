<?php

// Функции для debug
// dd() - выводит информацию о переменной, массиве и т.д. и останавливает выполнение дальнейшего кода
function dd($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    die();
}
// dump() - выводит информацию о переменной, массиве и т.д.
function dump($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

// Функция для получения данных пользователя
function getUser()
{
    global $conn;

    $sql = "SELECT * FROM `users` WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':id' => $_SESSION['user']['id']
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getRoles()
{
    global $conn;

    $sql = "SELECT * FROM `roles`";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUsers()
{
    global $conn;

    $sql='SELECT * FROM `users`';

    $query = $conn->query($sql);

    return $query->fetchAll(2);
}

function getUsersByRole($roleId)
{
    global $conn;

    $sql='SELECT * FROM `users` WHERE role_id = :roleId';

    $stmt = $conn->prepare($sql);

    $stmt->execute([':roleId' => $roleId]);

    return $stmt->fetchAll(2);
}