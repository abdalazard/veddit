<?php
include "../config/connection.php";

$email = $_POST['email'];
$password = MD5($_POST['password']);

$sql = "SELECT * FROM Users WHERE email like $email AND password like $password";

$result = mysqli_query($con, $sql);
$total = mysqli_num_rows($result);

if($total > 0) {
    $dados = mysqli_fetch_array($result);
    if(!strcmp($password, $dados['password'] )) {
        $_SESSION['idUser'] = $dados['id'];
        $_SESSION['email'] = $dados['email'];
        $_SESSION['password'] = $dados['password'];

        header("location:/timeline/timeline.php");
    }else{
        ?><script>alert( "Senha invalida!")</script>
        <?php
            header("location: ../index.php");
        }
}else{    
        $msg = "Login/Senha inválido(s)";
        header("location:../index.php?msg=".$msg); //redirecionamento em PHP
}
?>