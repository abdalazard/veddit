<?php
$pages_url = "../../pages";
$home_url = "../../";
$config_url = "../../config";

include $config_url . '/Autentication.php';
include $config_url . '/DB_Connection.php';

$commentId = $_GET['CommentId'];
$topicId = $_GET['topicId'];

$sql = "DELETE FROM Comments WHERE id LIKE '" . $commentId . "' AND topic_id LIKE '" . $topicId . "'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $msg = "<b style='color:green;'>Erro ao tentar excluir comentário!</b>";
    header("location: " . $pages_url . "/timeline/topics/open_topic.php?idTopic=" . $topicId . "&msg=" . $msg);
}

$msg = "<b style='color:green;'> Seu comentário foi </b><b style='color:red;'>DELETADO!</b>";
header("location: " . $pages_url . "/timeline/topics/open_topic.php?idTopic=" . $topicId . "&msg=" . $msg);
