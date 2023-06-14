<?php
session_start();
$pages_url = "../../pages";
$home_url = "../../";
$config_url = "../../config";

include $config_url . "/DB_Connection.php";

$email = $_POST['email'];
$password = MD5($_POST['password']);
$url =

    $sql = "SELECT * FROM Users WHERE email LIKE '" . $email . "' AND password LIKE '" . $password . "'";
$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);

if ($total == 0) {
    $msg = "Login/Senha inválido(s)";
    header("location:" . $home_url . "index.php?msg=" . $msg);
?><script>
        alert("Senha invalida!")
    </script>
<?php
}

$dados = mysqli_fetch_array($result);
if (!strcmp($password, $dados['password'])) {
    $_SESSION['idUser'] = $dados['id'];
    $_SESSION['name'] = $dados['name'];
    $_SESSION['email'] = $dados['email'];
    $_SESSION['password'] = $dados['password'];
    $_SESSION['profile'] = $dados['profile'];

    header("location:" . $pages_url . "/timeline/timeline.php");
}
?>