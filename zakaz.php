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
$text='';
if (isset($_POST["text11"], $_POST["text22"], $_POST["text33"], $_POST["text44"], $_POST["text55"])) {
    $data = $conn->prepare("SELECT * FROM korsina where iduser=" . $_SESSION['user']['id']);
    $data->execute();
    $tp = $data->fetchAll();
    foreach ($tp as $value) {
        $stmt = $conn->prepare("INSERT INTO zakaz (name, name2, card,date,cvv,idtovar,iduser) VALUES (:name, :name2, :card,:date,:cvv,:idtovar,:iduser)");
        $stmt->execute(["name" => $_POST["text11"], "name2" => $_POST["text22"], "card" => $_POST["text33"], "date" => $_POST["text44"], "cvv" => ($_POST["text55"]), "idtovar" => ($value["idtovar"]), "iduser" => $_SESSION['user']['id']]);
    }
    $conn->query("DELETE FROM korsina where iduser = " . $_SESSION['user']['id']);
    $text = "<p class='p'>Оплата прошла успешна</p>";
}

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Enjoy</title>
    <link rel="stylesheet" type="text/css" href="bloki.css.php">
    <script src="jquery-3.6.1.min.js"></script>
    <script src="korsina.js"></script>
</head>
<body class="load">
<?php
if (isset($_SESSION["user"])) {
    echo "<input type='hidden' value='".$_SESSION['user']['id']."' id='sesionid'>";
} else {
    echo "<input type='hidden' value='-1' id='sesionid'>";
}
?>
<div class="rasmer">
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
    <?php
    echo $text;
    ?>
        <main>
            <section>
                <article class="post" >
                    <form action="" method="post" class="oplata">
                        <input class="opl" type="text" name="text11" id="text11"placeholder="Имя..." required style="width: 180px">
                        <input class="opl" type="text" name="text22" id="text22"placeholder="Фамилия"required style="width: 220px">
                        <input class="opl" type="text" name="text33" id="text33"placeholder="Номер карты"required style="width: 220px">
                        <input class="opl2" type="text" name="text44" id="text44"placeholder="Дата"required style="width: 120px">
                        <input class="opl2" type="text" name="text55" id="text55"placeholder="CVV код"required style="width: 120px">
                        <button class="st" type="submit" >Оплатить</button>
                        <script>
                            document.querySelector("#text55").addEventListener("input",function (){
                                if (!this.value.match(/^\d+$/)){
                                    this.value = this.value.substr(0,this.value.length-1)
                                }
                                else{
                                    if (this.value.length > 3){
                                        this.value = this.value.substr(0,3)
                                    }
                                }

                            })
                            document.querySelector("#text44").addEventListener("input",function (){
                                if (!this.value.match(/^\d+$/)){
                                    this.value = this.value.substr(0,this.value.length-1)
                                }
                                else{
                                    if (this.value.length > 5){
                                        this.value = this.value.substr(0,5)
                                    }
                                }

                            })
                            document.querySelector("#text33").addEventListener("input",function (){
                                if (!this.value.match(/^\d+$/)){
                                    this.value = this.value.substr(0,this.value.length-1)
                                }
                                else{
                                    if (this.value.length > 16){
                                        this.value = this.value.substr(0,16)
                                    }
                                }

                            })
                        </script>
                    </form>
                </article>
            </section>
        </main>
    </div>
</div>
</div>
</body>
</html>