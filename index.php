<?php
    ini_set('default_charset','UTF-8');

    session_start();
    if(isset($_SESSION["email"])){
        header("location:timeline/Timeline.php");
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
        #sem-sublinhado {
            text-decoration: none;
        }
        h1 {
            text-align:center;
        }       
        #panel {
            border-radius: 10px;
            display: block;
            margin: 0px auto;
            width: fit-content;

        }
        #logo-login-panel {
            width: 100px;
            height: 110px;
            display: block;
            margin: 0px auto;
        }
        #title {
            color: coral;
        }        
        #button {
            background-color:coral;
            display:block;
            margin-top: 10px;
            color: white;
            display: block;
            margin: 0px auto;
        }
        #button-group {
            padding: 30px 15px 15px 30px;
            background-color: white;
            border-radius: 10px;
            display: block;
            margin: 0px auto;
            width: fit-content;
        }
        #sem-sublinhado {
            text-decoration: none;
        }
        p {
            text-align:center;
            color:red;
        }
        footer {
            text-align:center;
            color:coral;
            font-size: small;
        }
       

    </style>
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
                    <a type="button" id="button" class="btn col-8" href="register/Register.php">Cadastrar</a>
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
