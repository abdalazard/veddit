<?php
session_start();
session_destroy();
$home_url = "..";

$msg = "Logout efetuado";
header("location: $home_url/index.php?msg=" . $msg);