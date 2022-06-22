<?php
    ini_set('default_charset','UTF-8');

    session_start();
    if(isset($_SESSION["email"])){
        header("location:/timeline/timeline.php");
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
    <title>Inicio</title>
    <style>
        #logo {
            width: 70px;
            height: 80px;
        }
        #logo-login-panel {
            width: 100px;
            height: 110px;
            display: block;
            margin: 0px auto;
        }
        #title {
            color:coral;
        }
        #panel {
            padding: 60px 60px 60px 60px;
            background-color: lightgrey;
            margin-top: 30px;
            border-radius: 10px;
        }
        
        #button {
            background-color:coral;
            display:block;
            margin-top: 10px;
            color: white;
            display: block;
            margin: 0px auto;
        }
        #sem-sublinhado {
            text-decoration: none;
        }
        footer {
            text-align:center;
            color:coral;
            font-size: small;
        }
        h1 {
            text-align:center;
        }
        p {
            text-align:center;
            color:red;
        }

    </style>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a href="index.php" id="sem-sublinhado">
                <span id="title" class="navbar-brand"><img src="images/veddit-logo.png" alt="VEDDIT" id="logo">VEDDIT</span>
            </a>
        </div>
    </nav>

    <div class="container" id="panel">
        <img src="images/veddit-logo.png" id="logo-login-panel" alt="VEDDIT">

        <h1>Bem-vindo ao Veddit</h1>
        <br>
            <div class="row">
                <a type="button" id="button" class="btn col-4" href="login/Login.php">Logar</a>
            </div>
            <br>
            <div class="row">
                <a type="button" id="button" class="btn col-4" href="register/Register.php">Cadastrar</a>
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
