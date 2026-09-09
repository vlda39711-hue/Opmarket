<?php
session_start();
if ($_POST['username'] === 'admin' && $_POST['password'] === '12345') {
    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
}
?>
<form method="POST">
    <input type="text" name="username" placeholder="Логин">
    <input type="password" name="password" placeholder="Пароль">
    <button type="submit">Войти</button>
</form>