<?php
include '../../config/Autentication.php';
include '../../config/connection.php';

$idPost = $_GET['idPost'];

$sql = "SELECT * FROM Post WHERE id LIKE '".$idPost."'";
$result = mysqli_query($conn, $sql);
if($result) {
    $dados = mysqli_fetch_array($result);
    var_dump($dados);
}

?>