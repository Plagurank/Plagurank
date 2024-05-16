<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php
        include "header.php"
    ?>
    <main class = "container_reg">
        <h2>Регистрация</h2>
        <form id = "myForm">
            <label for = "login">Login:</label><input type = "text" id="login" name = "login" required placeholder="Имя">
            <label for = "login">Password:</label><input type = "password" id="pass" name = "pass" required placeholder="Пароль">
            <label for = "login">FIO:</label><input type = "text" name = "fio" id="fio" required placeholder="ФИО">
            <label for = "login">Phone:</label><input type = "tel" name = "tel" id="tel" required placeholder="Телефон" >
            <label for = "login">Email:</label><input type = "email" name = "email" id="email" required placeholder="Имеил">
            <button class = "sub" onclick = "submitForm(event)">Зарегистрироваться</button>
            <span class = "error"></span>
        </form>
    </main>
    
    <footer class = "footer">
            <span>College cari</span>

    </footer>
</body>
    <script src = "method/reg.js"></script>
</html>