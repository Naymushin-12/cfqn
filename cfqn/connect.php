<?php

$db_name = 'socialsite'; #Проверка названия папки
$db_user = 'root'; #Указываем имя пользователя
$db_pass = 'mysql';
$charset = 'utf8'; #Указываем кодировку
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO("mysql:host=localhost;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);
} catch (PDOException $i) {
    die("Ошибка подключения к базе");
}
