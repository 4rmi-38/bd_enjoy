<?php
$servername = "web.edu";
$username = "19077";
$password = "olrhxp";
$dbname = "19077_bd_enjoy";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$data =$conn->prepare("SELECT * FROM tovar");
$data ->execute();
$result = $data ->fetchAll();
if(isset($_GET['export']))
{
    $filename = "Export_Exel.txt";
//    header("Content-Type: application/vnd.ms-exel.");
//    header("Content-Disposition: attachment; filename=\"$filename\"");
    header('Content-Encoding: UTF-8');
    header('Content-type: application/vnd.ms-exel; charset=UTF-8');
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $print = false;
    if (! empty($result))
    {
        foreach ($result as $exp){
            if(! $print){
                echo implode("\t", array_keys($exp)) . "\n";
                $print = true;
            }
            echo implode("\t", array_values($exp)) . "\n";
        }

    }
    exit();
}

?>
<!DOCTYPE>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bloki.css.php">
    <title>Добавление картинок в BD</title>
</head>
<body>
<div class="dobav">

    <form action="addFile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="text" name="text1" id="text1" placeholder="Введите наименование..." required>
        <input type="text" name="text2" id="text2" placeholder="Введите цену..." required>
        <input type="text" name="text3" id="text3" placeholder="Введите размер..." required>
        <input type="text" name="text4" id="text4" placeholder="Введите вес..." required>
        <input class="submit1" type="submit" value="Добавить">
    </form>
    <form action="delete.php" method="post" enctype="multipart/form-data">
        <input type="text" name="text10" id="text10" placeholder="Введите название..." required>
        <input class="submit1" type="submit" value="Удалить">
    </form>
    <form>
        <input  class="submit1" type="submit" name="export" value="Экспорт Товаров в Эксель">
    </form>
    <a href="index.php" class="glavnay">На главную</a>
</div>
</body>
</html>
