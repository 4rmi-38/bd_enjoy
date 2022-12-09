<?php
session_start();
?>
<?php
$servername = "web.edu";
$username = "19077";
$password = "olrhxp";
$dbname = "19077_bd_enjoy";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$text ='';
if (isset($_POST["email"], $_POST["pass"])) {
    $name = trim($_POST["email"]);
    $password = trim($_POST["pass"]);

    $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->execute(["email" => $name]);

    if ($stmt != ["email"])
    {
        $text = "<p class='p'>Неверные данные!</p><style>.p {color: white;}</style>";
    }
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if ($password == $user["password"]) {
            $_SESSION["user"] = $user;
            header("Location: /Enjoy");
        }
    };
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
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
                    <li><a href="futbolki.php">Футболки</a></li>
                    <li><a href="kofti.php">Кофты</a></li>
                    <li><a href="igrushki.php">Игрушки</a></li>
                    <li><a href="katani.php">Катаны</a></li>
                </ul>
            </li>
            <li><a href="korzina.php">Корзина</a></li>
            <?php
            if (isset($_SESSION['user']['id'])){
                if ($_SESSION['user']['id'] == '51'){
                    echo "<li><a href='dobav_img.php'>Администратор</a></li>";
                }
            }
            else {
                echo
                "";
            }
            ?>
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
<div class="block1">
    <form action="" method="post">
        <input type="email" name="email"placeholder="Введите email..."required>
        <br>
        <input type="password" name="pass"placeholder="Введите пароль..."required>
        <br>
        <?php
        echo $text;
        ?>
        <input class="submit1" type="submit" name="submit" value="Войти">
    </form>
</div>
</div>
</body>
</html>
