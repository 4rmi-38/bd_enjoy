<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Закладки</title>
    <link rel="stylesheet" type="text/css" href="bloki.css.php">
</head>
<body>
<header><div class="lg2"><img src="shapa.png" width="100%" height="100%"></div></header>
<div class="side-panel">
    <!--            <label class="side-button-2" for="side-checkbox">+</label>-->
    <div class="side-title">Ваш аккаунт</div>
    <?php
    if (isset($_SESSION['user']['name']))
        echo ("<p>".$_SESSION['user']['name']."</p>");
    else echo "<p>Войдите в аккаунт</p>";

    ?>
    <div class="menu">
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a>Каталог</a>
                <ul>
                    <li><a href="#">Футболки</a></li>
                    <li><a href="">Кофты</a></li>
                    <li><a href="#">Игрушки</a></li>
                    <li><a href="#">Катаны</a></li>
                    <li><a href="#">Акриловые фигурки</a></li>
                </ul>
            </li>
            <li><a href="korzina.php">Корзина</a></li>
            <li><a href="izbrannoe.php">Избранное</a></li>
            <li><a href="pokup.php">Покупки</a></li>
            <li><a href="onas.php">О нас</a></li>
        </ul>
    </div>
    <?php
    if(isset($_SESSION['user']['id'])){
        echo "<div class='reg'><form action='logout.php' style='color: #FFFFFF'><button class='st1'>Выход</button></form></div>";
    }
    else
        echo " <div class='fh'><form action='vhod.php' style='color: #FFFFFF'><button class='st1'>Вход</button></form></div>
            <div class='reg'><form action='registraciy.php' style='color: #FFFFFF'><button class='st1'>Регистрация</button></form></div>"
    ?>
</div>
</body>
</html>