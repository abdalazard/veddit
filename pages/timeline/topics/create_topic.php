<?php
$src_url = "../../../src";
$img_url = "../../../img";
$config_url = "../../../config";
$home_url = "../../..";

include $config_url . "/Autentication.php";
include $config_url . "/DB_Connection.php";

$title = $_GET['title'];

try {
    $sql = "SELECT * FROM Themes";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo $img_url . '/logo.svg' ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Criador de tópico</title>
    <link href="../style/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <div class="row">
                <a href="<?php echo $home_url . '/index.php' ?>" id="sem-sublinhado">
                    <span id="title" class="navbar-brand"><img src="<?php echo $img_url . '/logo.svg' ?>" alt="VEDDIT"
                            id="logo">
                    </span>
                </a>
            </div>
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dashboard
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a type="text" class="dropdown-item" style="color:red;"
                            href="<?php $config_url . '/Logout.php' ?>" alt="Sair"><strong>Logout</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-3 bg-light text-dark" id="panel">
        <div>
            <h1 id="titleTopic" style="text-align:center; font-size:50px;"><?php echo $title ?></h1>
        </div>
        <form action=<?php echo $src_url . "/Topics/CreateTopic.php" ?> METHOD="POST">
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
                    <select name="theme" class="col-6">
                        <?php while ($theme = mysqli_fetch_array($resultThemes)) { ?>
                        <option value=" <?php echo $theme['id']; ?>"><?php echo $theme['theme']; ?>
                        </option>
                        <?php }
                            }
                        } ?>
                    </select>
                    <div>
                        <input type="submit" class="btn col-4" id="button" value="Publicar">
                    </div>
            </div>

        </form>
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