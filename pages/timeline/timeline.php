<?php
include '../../config/Autentication.php';
include "../../config/DB_Connection.php";

$sql = "SELECT * FROM Topics ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

try {
    $sqlThemes = "SELECT * FROM Themes";
    $resultThemes = mysqli_query($conn, $sqlThemes);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/logo.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="style/style.css" rel="stylesheet">
    <title>Feed</title>
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <div class="row">
                <a href="/index.php" id="sem-sublinhado">
                    <span id="title" class="navbar-brand"><img src="/img/logo.svg" alt="VEDDIT" id="logo"></span>
                </a>
            </div>
            <div class="dropdown flex-end">
                <a class="btn dropdown-toggle" href="#" role="button" id="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dashboard
                </a>
                <ul class="dropdown-menu m-2">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                    <li><a type="text" class="dropdown-item" style="color:red;" href="/config/Logout.php"
                            alt="Sair"><strong>Logout</strong></a></li>
                </ul>
            </div>

        </div>
    </nav>
    <div class="container p-3 bg-light text-dark" id="panel">
        <img src="/img/logo.svg" id="logo-panel" alt="VEDDIT"><br>
        <h3 style="text-align:center;">Feed</h3>
        <br>
        <div>
            <form action="topics/create_topic.php" METHOD="GET">
                <div class="row" style="text-align:center">
                    <input type="text" name="title" class="col-9" placeholder="Crie um tópico" required>
                    <div class="col-3">
                        <input type="submit" class="btn col-12" id="button" value="Publicar">
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="groups row">
            <?php
            if ($resultThemes) {
                $num = mysqli_num_rows($resultThemes);
                if ($num > 0) {
                    while ($themes = mysqli_fetch_array($resultThemes)) {
            ?>
            <div class="col-3">
                <a href="themes/themes_list.php?themeId=<?php echo $themes['id'] ?>" type="button"
                    class="btn"><?php echo $themes['theme']; ?></a>
            </div>
            <?php
                    }
                }
                ?>

            <?php
            }
            ?>
        </div>
        <br>
        <?php if (isset($_GET["msg"])) { ?>
        <div style="text-align:center;">
            <p><?php echo $_GET['msg'] ?></p>
        </div>
        <?php } ?>

        <div id="feed">
            <?php
            if ($result) {
            ?>
            <form action="topics/open_topic.php" METHOD="GET">
                <?php
                    $num = mysqli_num_rows($result);
                    if ($num <= 0) {
                        echo "<p style='text-align:center;'>Não existem tópicos disponíveis. </p>";
                    }
                    for ($i = 1; $i <= $num; $i++) {
                        $dados = mysqli_fetch_array($result);
                    ?>
                <div id="topic" class="p-2 mb-1 bg-light text-dark">
                    <a href="../timeline/topics/open_topic.php?idTopic=<?php echo $dados['id'] ?>" id="sem-sublinhado">
                        <div id="titleTopic">
                            <p><?php echo $dados['title'] ?>
                                <?php if ($_SESSION['profile'] == 1) { ?>
                                <a href="/src/Topics/DeleteTopic.php?idTopic=<?php echo $dados['id'] ?>"
                                    class="btn col-1" id="delete_button"><i class="bi bi-trash3"></i></a>
                                <?php } ?>
                            </p>
                        </div>


                    </a>
                </div>
                <?php
                    }
                    ?>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
    <footer> &copy Todos os direitos reservados 2022</footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>

</html>