<?php
include '../../config/Autentication.php';
include '../../config/connection.php';

$topicId = $_GET['idTopic'];

$sql = "DELETE FROM Topics WHERE id LIKE '".$topicId."'";
$result = mysqli_query($conn, $sql);
if(! $result) {
    $msg = "<b style='color:green;'>Erro ao tentar excluir tópico!</b>";
    header("location:../timeline.php?msg=".$msg);
}

$msg = "<b style='color:green;'> Seu tópico foi </b><b style='color:red;'>DELETADO!</b>";
header("location:../timeline.php?msg=".$msg);