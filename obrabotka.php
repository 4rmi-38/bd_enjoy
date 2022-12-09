<?php
$servername = "web.edu";
$username = "19077";
$password = "olrhxp";
$dbname = "19077_bd_enjoy";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_GET["id"])) {
    if($_GET['userid'] == -1)
        return;
    $id = $_GET["id"];
    $query = $conn->prepare("SELECT * FROM korsina WHERE iduser = :iduser");
    $query->execute(['iduser' => $id] );
    if ($query->rowCount()) {
        $text ="<p class='p'>�� �������� ��� ���� ����� � �������!</p><style>.p {color: white;}</style>";

    }
    else{
        $stmt = $conn->prepare("INSERT INTO korsina (iduser,idtovar) VALUES (:iduser,:idtovar)");
        $stmt->execute(["iduser" => $_GET['userid'], 'idtovar'=>$id]);
        echo json_encode(['code' =>'ok']);
    }

}

?>
