<?php
$db_host = "localhost";
$db_user = "ваш_логин_mysql";
$db_pass = "ваш_пароль_mysql";
$db_name = "shop_db";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>