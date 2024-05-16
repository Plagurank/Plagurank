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
        <h2>Форма авторизации</h2>
        <form id = "formAuth">
            <label for = "login">Login:</label><input type = "text" name = "login" id = "loginUsername" required placeholder="Имя">
            <label for = "login">Password:</label><input type = "password" name = "pass" id = "loginPassword" required placeholder="Пароль">
            
            <button onclick = "authButton(event)">Войти</button>
            <span id = "error"></span>
        </form>
    </main>
    <footer class = "footer">

            <span>College cari</span>

    </footer>
</body>
    <script src = "method/auth.js"></script>
</html>