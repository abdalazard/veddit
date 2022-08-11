<?php
include '../../config/Autentication.php';
include "../config/DB_Connection.php";

$TopicId = $_POST["postId"];
$comment = $_POST["comment"];

$sql = "INSERT INTO Comments Values(NULL, '".$comment."', '".$_SESSION['idUser']."', '".$TopicId."')";

$result = mysqli_query($conn,$sql);

if(! $result) {
    $msg = "Erro ao comentar";
    header("location:open_topic.php?idTopic=".$TopicId."&msg=".$msg."");
}

header("location:open_topic.php?idTopic=".$TopicId."");
