<?php
include '../../config/Autentication.php';
include '../../config/connection.php';

$title = $_POST['title'];
$idUser = $_POST['idUser'];
$content = $_POST['content'];

$sql = "INSERT INTO Topics VALUES(null, '".$idUser."', null, '".$title."', '".$content."', 0, 0, null)";
$result = mysqli_query($conn, $sql);

$msg = "Seu tópico foi criado! :D";

if(! $result) {
    $msg = "Alguma coisa deu errado na publicação do seu tópico. :(";
}

header("location:../timeline.php?msg=".$msg);
?>
