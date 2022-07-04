<?php
    ini_set('default_charset','UTF-8');

    session_start();
    if(isset($_SESSION["email"])){
        header("location:timeline/timeline.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/veddit-logo.png" >
    <link href="/style.css" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a href="index.php" id="sem-sublinhado">
                <span id="title" class="navbar-brand"><img src="images/veddit-logo.png" alt="VEDDIT" id="logo"><b>VEDDIT</b></span>
            </a>
        </div>
    </nav>
    <br>
    <div class="container p-3 mb-2 bg-light text-dark" id="panel">
        <div id="button-group">

            <img src="images/veddit-logo.png" id="logo-login-panel" alt="VEDDIT">

            <h1>Bem-vindo ao Veddit</h1>
            <br>
                <div class="row">
                    <a type="button" id="button" class="btn col-8" href="login/Login.php">Logar</a>
                </div>
                <br>
                <div class="row">
                    <a type="button" id="button" class="btn col-8" href="register/create_user.php">Cadastrar</a>
                </div>
        </div>
    </div>
    <p><?php 
            if(isset($_GET["msg"])){ 
                echo $_GET["msg"];
            }
        ?>
    </p>
    <footer><b>Veddit</b> &copy Todos os direitos reservados 2022</footer>
    
</body>
</html>
