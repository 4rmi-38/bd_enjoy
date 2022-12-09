<?php
$servername = "web.edu";
$username = "19077";
$password = "olrhxp";
$dbname = "19077_bd_enjoy";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['text10'])){
    $stmt = $conn -> prepare(" DELETE  FROM tovar where nazvanie like '%".$_POST['text10']."%'");
    $stmt -> execute();
    $result = $stmt->fetchAll();
    header("Location: dobav_img.php");
}
?>