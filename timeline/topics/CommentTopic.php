<?php
include '../../config/Autentication.php';
include "../config/DB_Connection.php";

$postId = $_POST["postId"];
$comment = $_POST["comment"];
$idUser = $_SESSION['idUser'];

$sql = "INSERT INTO comments Values(NULL, '".$comment."', '".$idUser."', '".$postId."')";

$result = mysqli_query($conn,$sql);

if(! $result) {
    $msg = "Erro ao comentar";
    header("location:open_topic.php?idTopic=".$postId."&msg=".$msg."");
}

header("location:open_topic.php?idTopic=".$postId."");
