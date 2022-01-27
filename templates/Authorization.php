<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/authorization.css">
    <title>Авторизация на сайте</title>
</head>
<body>
    <form>

        <img src="../img/logo-color.png" alt="logo">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <input id="LoginBtn" type="submit" value="Войти">
        <span id="FormError" class="disable">Lorem, ipsum dolor.</span>
    </form>

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>