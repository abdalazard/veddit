<?php
include "../config/Connection.php";
session_start();

$email = $_POST['email'];
$password = MD5($_POST['password']);


$sql = "SELECT * FROM users WHERE email LIKE '".$email."' AND password LIKE '".$password."'";
$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);

if($total == 0) {
    $msg = "Login/Senha inválido(s)";
    header("location:../index.php?msg=".$msg);
    ?><script>alert( "Senha invalida!")</script>
    <?php   
}

$dados = mysqli_fetch_array($result);
if(!strcmp($password, $dados['password'] )) {
    $_SESSION['idUser'] = $dados['id'];
    $_SESSION['name'] = $dados['name'];
    $_SESSION['email'] = $dados['email'];
    $_SESSION['password'] = $dados['password'];
    $_SESSION['profile'] = $dados['profile'];

    header("location:../timeline/Timeline.php");
}
?>
