<?php
include '../../config/Autentication.php';
include '../../config/DB_Connection.php';

$topicId = $_POST["postId"];
$comment = $_POST["comment"];
$creatorId = $_SESSION['idUser'];

$sql = "INSERT INTO Comments Values(NULL, '".$comment."', '".$creatorId."', '".$topicId."')";

$result = mysqli_query($conn,$sql);

if(! $result) {
    $msg = "Erro ao comentar";
    header("location:./open_topic.php?idTopic=".$topicId."&msg=".$msg."");
}

header("location:./open_topic.php?idTopic=".$topicId."");