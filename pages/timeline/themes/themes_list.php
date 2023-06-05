<?php
include '../../../config/Autentication.php';
include "../../../config/DB_Connection.php";

try {
    $sql = "SELECT * FROM Topics WHERE theme_id LIKE '".$_GET['themeId']. "' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
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
    <link rel="shortcut icon" href="../../../img//logo.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>Tópicos</title>
    <link href="../style/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <div class="row">
                <a href="../../../index.php" id="sem-sublinhado">
                    <span id="title" class="navbar-brand"><img src="../../../img//logo.svg" alt="VEDDIT" id="logo"></span>
                </a>
            </div>
            <div class="flex-end">
                <a type="button" id="logout" class="btn" href="../../../config/Logout.php" alt="Sair">
                    <strong>Logout</strong>
                </a>
            </div>
        </div>
    </nav>
    <div class="container p-3 mb-2 bg-light text-dark" id="panel">
        <img src="../../../img//logo.svg" id="logo-panel" alt="VEDDIT">
        <div id="feed">
            <?php
            if ($result) {
            ?>
                <form action="../topics/open_topic.php" METHOD="GET">
                    <?php
                    $num = mysqli_num_rows($result);
                    if ($num == 0) {
                        echo "<p style='text-align:center;'>Não existem tópicos disponíveis. </p>";
                    }
                    for ($i = 1; $i <= $num; $i++) {
                        $dados = mysqli_fetch_array($result);
                    ?>
                         <div id="topic" class="p-2 mb-1 bg-light text-dark">
                            <a href="../../timeline/topics/open_topic.php?idTopic=<?php echo $dados['id'] ?>" id="sem-sublinhado">
                                <div id="titleTopic">
                                    <p><?php echo $dados['title'] ?>
                                        <?php if ($_SESSION['profile'] == 1) { ?>
                                            <a href="../../../src/Topics/DeleteTopic.php?idTopic=<?php echo $dados['id'] ?>" class="btn col-1" id="delete_button"><i class="bi bi-trash3"></i></a>
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
    <br>

    <footer> &copy Todos os direitos reservados 2022</footer>
</body>

</html>