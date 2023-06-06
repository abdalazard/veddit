<?php
$pages_url = "../../pages";
$home_url = "../../";
$config_url = "../../config";

include $config_url . '/Autentication.php';
include $config_url . '/DB_Connection.php';

$topicId = $_GET['idTopic'];

$sql = "DELETE FROM Topics WHERE id LIKE '" . $topicId . "'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $msg = "<b style='color:green;'>Erro ao tentar excluir tópico!</b>";
    header("location: " . $pages_url . "/timeline/timeline.php?msg=" . $msg);
}

$msg = "<b style='color:green;'> Seu tópico foi </b><b style='color:red;'>DELETADO!</b>";
header("location:  " . $pages_url . "/timeline/timeline.php?msg=" . $msg);
