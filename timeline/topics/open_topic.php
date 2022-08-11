<?php
    include '../../config/Autentication.php';
    include '../../config/DB_Connection.php';

    $idTopic = $_GET['idTopic'];

    $sql = "SELECT * FROM Topics WHERE id LIKE '".$idTopic."'";
    $topicResult = mysqli_query($conn, $sql);
    $topicData = mysqli_fetch_array($topicResult);

    $commentSql = "SELECT Comments.id, Comments.content, Comments.user_id, Users.name 
                    FROM Comments 
                    JOIN Users 
                    ON Comments.user_id = Users.id 
                    WHERE topic_id LIKE '".$topicData['id']."'";
    $commentResult = mysqli_query($conn, $commentSql);

    $profile = $_SESSION['profile'];
    $idUser = $_SESSION['idUser'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../images/veddit-logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    <title>Tópico</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <div class="row">
                <a href="../../index.php" id="sem-sublinhado">
                    <span id="title" class="navbar-brand"><img src="../../img//logo.svg" alt="VEDDIT" id="logo"></span>
                </a>
            </div>
            <div class="flex-end">
                <a type="button" id="logout" class="btn" href="../../config/Logout.php" alt="Sair"><i class="bi bi-x-square-fill"></i> <b>Logout</b></a>
            </div>
        </div>
    </nav>
    <div class="container p-3 mb-2 bg-light text-dark" id="panel">
        <img src="../img//logo.svg"" id="logo-login-panel" alt="VEDDIT">
        <h1><?php echo $topicData['title'] ?></h1>        
        <div id="post">            
            <div style="display: flex; justify-content: flex-end;">
            <?php if($profile == 1 or $idUser == $topicData["user_id"]) {?>
                <a href="DeleteTopic.php?idTopic=<?php echo $idTopic ?>" class="btn col-1" id="delete_button"><i class="bi bi-trash3"></i></a>
                <?php } ?>
            </div>
            <br>
            <div>
                <p><?php echo $topicData['content'] ?></p>
            </div>
        </div>
        <br>
        <div id="comment">
            <form action="CommentTopic.php" METHOD="POST">
                <div class="row">
                    <input type="text" hidden name="postId" value="<?php echo $idTopic; ?>">
                    <input type="text" class="col-8" placeholder="Atenção ao português" id="comment_space" name="comment" required>
                    <input type="submit" class="col-4" id="comment_button" value="Comentar">
                </div>
            </form>
        </div>
        <br>
        <div>
            <h4>Comentários:</h4>
        </div>
        <div>
            <?php if (isset($_GET["msg"])) { ?>
                <div style="text-align:center; font-size:small;">
                    <p><?php echo $_GET['msg']; ?></p>
                </div>
            <?php } ?>
        </div>
        <?php
            if($commentResult) {
                $num = mysqli_num_rows($commentResult);
                if($num == 0) {
                    echo "<p style='text-align:center;'>Sem comentários. </p>";
                }else {
                    for ($i = 1; $i <= $num; $i++) {
                        $commentData = mysqli_fetch_array($commentResult);
        ?>
        <div class="row">
             <div>
                <div class="row">
                    <h6 style="color: grey; font-size: 11px;"> <?php echo $commentData['name']; ?>
                    <?php if($profile == 1 or $idUser == $commentData['user_id']) {?>
                       | <a href="DeleteComment.php?idComment=<?php echo $commentData['id']."&topicId=$idTopic"; ?>">Excluir</a>
                     <?php } ?>
                    </h6>
                </div>
                
                <p style='text-align:start; font-size:small;'>
                    <?php echo $commentData['content']; ?>
                </p>           
            </div>
            <?php 
                    } 
                }
            }
            ?>
        </div>
    <footer>  &copy Todos os direitos reservados 2022</footer>
</body>
</html>
