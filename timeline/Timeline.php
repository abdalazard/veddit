<?php
    include '../config/Autentication.php';
    include '../config/connection.php';

    $sql = "SELECT * FROM Posts ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/veddit-logo.png" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Feed</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <div class="row">
                <a href="../index.php" id="sem-sublinhado">
                    <span id="title" class="navbar-brand"><img src="../images/veddit-logo.png" alt="VEDDIT" id="logo"><b>VEDDIT</b></span>
                </a>   
            </div>
            <div class="flex-end">             
                <a type="button" id="logout" class="btn" href="../config/Logout.php" alt="Sair"><i class="bi bi-x-square-fill"></i>   <b>Logout</b></a>
            </div>
        </div>
    </nav>
    <div class="container p-3 mb-2 bg-light text-dark" id="panel">
        <img src="../images/veddit-logo.png" id="logo-login-panel" alt="VEDDIT">
        <h1>Feed</h1>
        <br>
        <div>
            <form action="../timeline/posts/create_post.php" METHOD="GET">
                <div class="row">
                        <input type="text" name="title" class="col-8" id="titlespace" placeholder="Crie um tópico">
                        <input type="submit" class="btn col-4" id="button" value="Publicar">
                </div>
            </form>
        </div>
        <br>
        <?php  if(isset($_GET["msg"])){ 
        ?>
            <div>
                <p style="text-align:center;"><?php echo $_GET['msg']?></p>
            </div>
        <?php } ?>
        <div id="feed">
                <?php 
                if($result){
                    $num = mysqli_num_rows($result);
                    for($i = 1; $i <= $num; $i++){
                        $dados = mysqli_fetch_array($result);
            ?>
            <div class="p-3 mb-2 bg-light text-dark" id="topic">
                <div class="row" >
                    <a href="" id="sem-sublinhado">
                        <h1 id="titleTopic"><?php echo $dados['title'] ?></h1>
                    </a>
                </div>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
    
    <footer><b>Veddit</b> &copy Todos os direitos reservados 2022</footer>
    
</body>
</html>
