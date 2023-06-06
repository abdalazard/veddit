<?php

$pages_url = "../../pages";
$home_url = "../../";
$config_url = "../../config";

include $config_url . '/Autentication.php';
include $config_url . '/DB_Connection.php';

$topicId = $_POST["postId"];
$comment = $_POST["comment"];
$creatorId = $_SESSION['idUser'];

$sql = "INSERT INTO Comments Values(NULL, '" . $comment . "', '" . $creatorId . "', '" . $topicId . "')";

$result = mysqli_query($conn, $sql);

if (!$result) {
    $msg = "Erro ao comentar";
    header("location: " . $pages_url . "/timeline/topics/open_topic.php?idTopic=" . $topicId . "&msg=" . $msg . "");
}
header("location:  " . $pages_url . "/timeline/topics/open_topic.php?idTopic=" . $topicId . "");
