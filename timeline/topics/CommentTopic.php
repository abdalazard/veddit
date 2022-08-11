<?php
include '../../config/Autentication.php';
include '../../config/DB_Connection.php';

$postId = $_POST["postId"];
$comment = $_POST["comment"];
$userId = $_SESSION['idUser'];

$sql = "INSERT INTO Comments Values(NULL, '".$comment."', '".$userId."', '".$postId."')";

$result = mysqli_query($conn,$sql);

if(! $result) {
    $msg = "Erro ao comentar";
    header("location:./open_topic.php?idTopic=".$postId."&msg=".$msg."");
}

header("location:./open_topic.php?idTopic=".$postId."");
