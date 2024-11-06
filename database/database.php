<?php
try{
    $host = 'localhost';
    $dbname = 'kursavaya';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    $conn = new PDO($dsn,$username,$password);
}
catch(PDOException $exception){
    echo 'Ошибка' . $exception->getMessage();
}
?>