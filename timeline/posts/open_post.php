<?php
    include '../../config/Autentication.php';
    include '../../config/connection.php';

    $idPost = $_GET['idPost'];

    $sql = "SELECT * FROM Posts WHERE id LIKE '".$idPost."'";
    $result = mysqli_query($conn, $sql);

    $dados = mysqli_fetch_array($result);    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/veddit-logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Tópico</title>
    <link href="/timeline/posts/style/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <div class="row">
                <a href="/index.php" id="sem-sublinhado">
                    <span id="title" class="navbar-brand"><img src="/images/veddit-logo.png" alt="VEDDIT" id="logo"><b>VEDDIT</b></span>
                </a>
            </div>
            <div class="flex-end">
                <a type="button" id="logout" class="btn" href="/config/Logout.php" alt="Sair"><i class="bi bi-x-square-fill"></i> <b>Logout</b></a>
            </div>
        </div>
    </nav>
    <div class="container p-3 mb-2 bg-light text-dark" id="panel">
        <img src="/images/veddit-logo.png" id="logo-login-panel" alt="VEDDIT">
        <h1><?php echo $dados['title'] ?></h1>        
        <div id="post">            
            <div style="display: flex; justify-content: flex-end;">
                <a href="delete_post.php?idPost=<?php echo $idPost ?>" class="btn col-3" id="delete_button">Excluir Tópico</a>
            </div>
            <br>
            <div>
                <p><?php echo $dados['content'] ?></p>
            </div>
        </div>
        <br>
            <div id="comment">
                <form action="CommentPost.php" METHOD="POST">
                    <div class="row">
                        <input type="text" hidden name="postId" value="<?php echo $idPost ?>">
                        <input type="text" class="col-8" placeholder="Atenção ao português" id="comment_space" name="comment" required>
                        <input type="submit" class="col-4" id="comment_button" value="Comentar">
                    </div>
                </form>
            </div>
    </div>
    <footer><b>Veddit</b> &copy Todos os direitos reservados 2022</footer>
</body>
</html>