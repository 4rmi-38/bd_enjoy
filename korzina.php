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
$iN_ORDER=[];
if (isset($_SESSION["user"])){
    $data =$conn->prepare("SELECT * FROM korsina where iduser=".$_SESSION['user']['id']);
    $data ->execute();
    $result = $data ->fetchAll();
    foreach( $result as $id)
    {
        $result = $id['idtovar'];
        $data =$conn->prepare("SELECT * FROM tovar where id='".$result."'");

        $data ->execute();
        array_push($iN_ORDER,$data ->fetch());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
    <link rel="stylesheet" type="text/css" href="bloki.css.php">
    <script src="jquery-3.6.1.min.js"></script>
    <script src="korsina.js"></script>
</head>
<?php
if (isset($_SESSION["user"])) {
    echo "<input type='hidden' value='".$_SESSION['user']['id']."' id='sesionid'>";
} else {
    echo "<input type='hidden' value='-1' id='sesionid'>";
}
?>
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
            </li>
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
<p class="p"">МОЯ КОРЗИНА</p>
<main>
    <section>
        <article id="in-check">
    <?php
foreach( $iN_ORDER as $id){
    echo "<div class='f1'>";
    $naimenovanie=$id['naimenovanie'];
    $cena=$id['cena'];
    $foto= $id['img'];
    $naz = $id ['nazvanie'];
    $rasmer=$id['rasmer'];
    echo"<img src='$foto' class='img'>";
    echo "<span class='podpisi'>$naimenovanie <br>$naz<br>$cena Р Size:$rasmer<br></span><input data-id='".$id['id']."' class='st12' type='button' value='Удалить'>";
    echo "</div>";
}
?>
        </article>

    </section>
</main>
<form  action="zakaz.php" ><button class="st">Оформить заказ</button></form>

</body>
</html>