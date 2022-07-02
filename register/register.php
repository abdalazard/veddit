<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/veddit-logo.png" >
    <title>Inicio</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a href="../index.php" id="sem-sublinhado">
                    <span id="title" class="navbar-brand"><img src="../images/veddit-logo.png" alt="VEDDIT" id="logo"><b>VEDDIT</b></span>
                </a>
            </div>
        </nav>
        <br>
        <div class="container p-3 mb-2 bg-light text-dark" id="panel">
            <br>
                <form action="CreateUser.php" METHOD="POST">
                    <img src="../images/veddit-logo.png" id="logo-login-panel" alt="VEDDIT">

                    <h1>Crie sua conta</h1>           
                    <p><?php 
                            if(isset($_GET["msg"])){ 
                                echo $_GET["msg"];
                            }
                        ?>
                    </p>
                    <div class="row">
                        <label>Nome de usuário</label>
                        <input type="text" class="col-6" maxlength="15" placeholder="Insira seu usuário" name="name" id="name" required>
                    </div>    
                    <div class="row">
                        <label>E-mail</label>
                        <input type="text" class="col-6" placeholder="Insira seu e-mail" name="email" id="email" required>
                    </div>
                    <div class="row">
                        <label>Senha</label>
                        <input type="password" class="col-6" placeholder="Digite sua senha" name="password" id="password" required>
                    </div>
                    <div class="row">
                        <input type="submit" class="btn col-4" id="button" value="Cadastrar">
                    </div>
                </form>
           
        </div>
        <footer><b>Veddit</b> &copy Todos os direitos reservados 2022</footer>
        
</body>
</html>
