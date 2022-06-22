<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Home</title>
    <style>
        #logo {
            width: 70px;
            height: 80px;
        }
        #logo-login-box {
            width: 100px;
            height: 110px;
            display: block;
            margin: 0px auto;
        }
        #title {
            color:coral;
        }
        #log-box {
            padding: 60px 60px 60px 60px;
            background-color: lightgrey;
            margin-top: 30px;
        }
        h1 {
            text-align:center;
        }
        #button {
            background-color:coral;
            display:block;
        }

    </style>
</head>
<body>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a href="index.php">
                    <span id="title" class="navbar-brand"><img src="images/veddit-logo.png" alt="VEDDIT" id="logo">VEDDIT</span>
                </a>
            </div>
        </nav>

        <div class="container" id="log-box">
            <img src="images/veddit-logo.png" id="logo-login-box" alt="VEDDIT">

            <h1>Bem-vindo ao Veddit</h1>
            <br>
            <div>
                <a type="button" id="button" class="btn" href="login/login.php">Logar</a>
            </div>
            <br>
            <div >
                <a type="button" id="button" class="btn" href="register/register.php">Cadastrar</a>
            </div>
        </div>

</body>
</html>
