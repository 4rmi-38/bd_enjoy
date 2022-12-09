
<?php
$servername = "web.edu";
$username = "19077";
$password = "olrhxp";
$dbname = "19077_bd_enjoy";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$data =$conn->prepare("SELECT * FROM `tovar`");
$data ->execute();
$result = $data ->fetchAll();
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Enjoy</title>
    <link rel="stylesheet" type="text/css" href="bloki.css.php">
    <script src="korsina.js"></script>
</head>
<body class="load">
<div class="rasmer">
    <div class="lg2"><img src="shapa.png" width="100%" height="100%">
        <div class="side-panel">
            <div class="side-title">Ваш аккаунт</div>
            <?php
            if (isset($_SESSION['user']['name']))
                echo ("<p>".$_SESSION['user']['name']."</p>");
            else echo "<p>Войдите в аккаунт</p>";

            ?>
            <div class="menu">
                <ul>
                    <li>
                        <a href="index.php">
                            Главная
                        </a></li>
                    <li><a>Каталог</a>
                        <ul>
                            <li><a href="futbolki.php">Футболки</a></li>
                            <li><a href="kofti.php">Кофты</a></li>
                            <li><a href="igrushki.php">Игрушки</a></li>
                            <li><a href="katani.php">Катаны</a></li>
                            <li><a href="akrilki.php">Акриловые фигурки</a></li>
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

        <script type="text/javascript" src="poisk.js"></script>
        <p class="p"">Акриловые фигурки</p>
        <main>
            <section>
                <article >
                    <?php
                    foreach( $result as $img){
                        if ($img['naimenovanie'] == 'Акрилка'  ){
                            echo "<div class='f1'>";
                            $naimenovanie=$img['naimenovanie'];
                            $cena=$img['cena'];
                            $foto= $img['img'];
                            $naz = $img['nazvanie'];
                            $rasmer=$img['rasmer'];
                            echo"<img src='$foto' class='img'>";
                            echo "<span class='podpisi'>$naimenovanie <br>$naz<br>$cena Р Size:$rasmer<br></span><input type='button' class='st11' value='В корзину' data-id='".$img['id']."'>";
                            echo "</div>";
                        }
                    }
                    ?>
                </article>
            </section>
        </main>
    </div>

</div>
</div>
</body>
</html>
