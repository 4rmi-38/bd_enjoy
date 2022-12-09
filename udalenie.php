<?php
$servername = "web.edu";
$username = "19077";
$password = "olrhxp";
$dbname = "19077_bd_enjoy";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//if (isset($_SESSION["user"])) {
        $stmt = $conn -> prepare(" DELETE FROM korsina WHERE iduser = ".$_GET['userid']." AND idtovar = ".$_GET['id'] );
        $stmt -> execute();
        $result = $stmt->fetchAll();
var_dump($result);
        echo json_encode(['code' =>'ok']);



