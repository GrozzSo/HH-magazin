<?php
require_once 'database/database.php';
global $conn;

if(isset($_POST)){
    $product_id = $_GET['id'];
    $sql = "DELETE FROM tovars WHERE `id` = $product_id";
    $query = $conn -> query($sql);
}
header('Location: index.php?page=admin');
?>