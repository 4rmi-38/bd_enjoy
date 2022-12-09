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
if (isset($_POST["name"], $_POST["pass"], $_POST["email"])){
    $email = $_POST["email"];
    $query = $conn->prepare("SELECT * FROM user WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        $text ="<p class='p'>Этот адрес уже зарегистрирован!</p><style>.p {color: white;}</style>";
    }
    else{
        $stmt = $conn->prepare("INSERT INTO user (email, name, password) VALUES (:email, :name, :password)");
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->execute(["email" => $_POST["email"], "name" => $_POST["name"], "password" => ($_POST["pass"] )]);
        header("Location: vhod.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
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
<div class="block">
    <form action="" method="post">
        <input type="email" name="email" id="email"placeholder="Введите email..." required>
        <input type="text" name="name" id="name"placeholder="Введите никнейм..."required>
        <input type="password" name="pass" id="pass"placeholder="Введите пароль..."required>
        <?php
        echo $text;
        ?>
        <input class="submit1" type="submit"  value="Зарегистрироваться">
    </form>
    </div>
</div>
</body>
</html>