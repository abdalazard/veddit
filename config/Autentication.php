<?php 

session_start(); 

if(!isset($_SESSION["email"])){

    session_destroy();
    $msg = "Acesso negado";
    header("location:../index.php?msg=".$msg); //redirecionamento em PHP

}

?>