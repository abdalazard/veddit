<?php
    include '../config/Autentication.php';
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
            background-color: gainsboro;
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
        #logout {
            color:white;
            background-color: red;
            margin-right:30px;
        }
        #feed{            
            background-color:white;
            padding: 20px 20px 20px 20px;
        }
        #topic{
            background-color:gainsboro;
            padding: 5px 5px 5px 5px;
            color:black;
            margin-bottom: 20px;
        }
        #titleTopic {
            text-align:start;
        }
        #tag {
            text-align:center;
            font-size: small;
            margin:auto;
        }
        #linkTag {
            color:black;
            text-decoration: none;
            background: white;
            border-style: groove;
            width: auto;
            padding: 2px;
            border: 1px solid groove;
            margin: 2px;
            margin-left: 15px;
        }
    </style>
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

    <div class="container" id="panel">
        <img src="../images/veddit-logo.png" id="logo-login-panel" alt="VEDDIT">
        <h1>Feed</h1>
        <br>
        <div id="feed">
            <div id="topic">
                <h1 id="titleTopic">a</h1>
                <!--teste -->
                <div class="row">
                    <a href="/tags.php?id=" id="linkTag"><p id="tag">
                        NSFW
                    </p></a>
                    <a href="/tags.php?id=" id="linkTag"><p id="tag">
                        Desabafo
                    </p></a>
                </div>
            </div>

            <div id="topic">
                <h1 id="titleTopic">a</h1>
                <div class="row">
                    <a href="/tags.php?id=" id="linkTag"><p id="tag">
                        Fun Animals
                    </p></a>
                    <a href="/tags.php?id=" id="linkTag"><p id="tag">
                        Finances
                    </p></a>
                </div>
                <!--/teste -->
            </div>    
        </div>
    </div>
    
    <footer><b>Veddit</b> &copy Todos os direitos reservados 2022</footer>
    
</body>
</html>
