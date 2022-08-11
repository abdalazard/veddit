<?php
include '../../config/Autentication.php';
include '../../config/DB_Connection.php';

$commentId = $_GET['idComment'];
$topicId = $_GET['topicId'];
$sql = "DELETE FROM Comments WHERE id LIKE '".$commentId."'";
$result = mysqli_query($conn, $sql);
if(! $result) {
    $msg = "<b style='color:green;'>Erro ao tentar excluir comentário!</b>";
    header("location:open_topic.php?idTopic=".$topicId."&msg=".$msg);
}

$msg = "<b style='color:green;'> Seu comentário foi </b><b style='color:red;'>DELETADO!</b>";
header("location:open_topic.php?idTopic=".$topicId."&msg=".$msg);
