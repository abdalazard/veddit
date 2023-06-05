<?php
include '../../../config/Autentication.php';
include "../../../config/DB_Connection.php";

$title = $_GET['title'];

try {
    $sql = "SELECT * FROM themes";
    $resultThemes = mysqli_query($conn, $sql);
} catch (mysqli_sql_exception $e) {
    var_dump($e);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../../img/logo.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Criador de tópico</title>
    <link href="../style/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <div class="row">
                <a href="/index.php" id="sem-sublinhado">
                    <span id="title" class="navbar-brand"><img src="../../../img/logo.svg" alt="VEDDIT" id="logo"> </span>
                </a>
            </div>
            <div class="flex-end">
                <a type="button" id="logout" class="btn" href="../../../config/Logout.php" alt="Sair"><i class="bi bi-x-square-fill"></i><b>Logout</b></a>
            </div>
        </div>
    </nav>
    <div class="container p-3 mb-2 bg-light text-dark" id="panel">
        <div>
            <h1 id="titleTopic" style="text-align:center; font-size:50px;"><?php echo $title ?></h1>
        </div>
        <form action="../../../src/Topics/CreateTopic.php" METHOD="POST">
            <div id="row">
                <input type="text" hidden name="title" value="<?php echo $title ?>">
                <input type="text" hidden name="idUser" value="<?php echo $_SESSION['idUser'] ?>">
                <textarea name="content" id="content" rows="10" maxlength="255" class="col-12"></textarea>
                <!-- Criar lista selecionavel com opções de tag/theme -->
                <?php
                if ($resultThemes) {
                    $num = mysqli_num_rows($resultThemes);
                    if ($num > 0) { ?>
                        <label>Selecione o tema: </a>
                            <select name="theme">
                                <?php while ($theme = mysqli_fetch_array($resultThemes)) { ?>
                                    <option value="<?php echo $theme['id']; ?>"><?php echo $theme['theme']; ?></option>
                        <?php }
                            }
                        } ?>
                            </select>
            </div>
            <div>
                <input type="submit" class="btn col-4" id="button" value="Publicar">
            </div>
        </form>
    </div>
    <footer> &copy Todos os direitos reservados 2022</footer>
</body>

</html>