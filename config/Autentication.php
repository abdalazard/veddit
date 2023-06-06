<?php
session_start();
$home_url = "..";

if (!isset($_SESSION["email"])) {

    session_destroy();
    $msg = "Acesso negado";
    header("location: $home_url/index.php?msg=" . $msg);
}
