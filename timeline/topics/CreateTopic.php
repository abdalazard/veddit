<?php
include '../../config/Autentication.php';
include '../../config/DB_Connection.php';

$title = $_POST['title'];
$idUser = $_POST['idUser'];
$content = $_POST['content'];

$sql = "INSERT INTO Topics VALUES(null, '".$idUser."', null, '".$title."', '".$content."', 0, 0, null)";
$result = mysqli_query($conn, $sql);

$msg = "<b style='color:green;'>Seu tópico foi criado! :D</b>";

if(! $result) {
    $msg = "<b style='color:red;'>Alguma coisa deu errado na publicação do seu tópico. :(</b>";
}

header("location:../timeline.php?msg=".$msg);
?>
