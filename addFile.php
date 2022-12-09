<?php
$servername = "web.edu";
$username = "19077";
$password = "olrhxp";
$dbname = "19077_bd_enjoy";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//if (!empty($_FILES['file'])){
//    $file = $_FILES['file'];
//    $name = $file ['name'];
//    $path =__DIR__.'/img/'.$name;
//    if (!move_uploaded_file($file['tmp_name'],$path)){
//        echo '���� �� ���� �����������';
//        $stmt = $conn->prepare("INSERT INTO tovar $name VALUES (:img)");
//        $stmt ->execute();
//    }
    if(isset($_POST['text1'],$_POST['text2'],$_POST['text3'],$_POST['text4'],$_FILES['file'])){
    $nam = $_POST["text1"];
    $query = $conn->prepare("SELECT * FROM tovar WHERE text1=:naimenovanie");
    if ($query == $nam) {
        echo
        $text ="<p class='p'>��� ������������ ��� ����!</p><style>.p {color: white;}</style>";
    }
    else {
            $stmt = $conn->prepare("INSERT INTO tovar (naimenovanie,cena,rasmer,ves,img) VALUES (:naimenovanie,:cena,:rasmer,:ves,:img)");
            $stmt->execute(["naimenovanie" => ($_POST["text1"]), "cena" => ($_POST["text2"]), "rasmer" => ($_POST["text3"]), "ves" => ($_POST["text4"]), "img" => ($_FILES['file']['name'])]);

            header("Location: dobav_img.php");
        }

    }

//header("Location: dobav_img.php");
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">


</head>
<body>
</body>
</html>