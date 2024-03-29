<?php $src_url = "../src"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veddit - Login</title>

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap (only reboot, grid and utilities) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap-reboot.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap-grid.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap-utilities.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="page-auth">
        <div class="card card-auth">

            <!-- TODO: Substituir logotipo -->
            <div style="text-align: center; margin-bottom: 28px">
                <svg class="mt-3 mb-2" height="50px" fill="none" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 220 50">
                    <path
                        d="M24.828 49.657c13.713 0 24.829-11.116 24.829-24.829C49.657 11.116 38.54 0 24.828 0 11.116 0 0 11.116 0 24.828c0 13.713 11.116 24.829 24.828 24.829Z"
                        fill="#FF4500" />{
                    <path
                        d="M41.389 24.828a3.625 3.625 0 0 0-6.133-2.482 17.679 17.679 0 0 0-9.559-3.054l1.614-7.747 5.313 1.117a2.483 2.483 0 1 0 .323-1.514L26.864 9.93a.77.77 0 0 0-.918.596l-1.838 8.616a17.729 17.729 0 0 0-9.683 3.053 3.625 3.625 0 1 0-3.997 5.934 7.115 7.115 0 0 0 0 1.093c0 5.562 6.48 10.08 14.475 10.08 7.995 0 14.475-4.518 14.475-10.08a7.115 7.115 0 0 0 0-1.092 3.625 3.625 0 0 0 2.01-3.303ZM16.56 27.311a2.483 2.483 0 1 1 4.966 0 2.483 2.483 0 0 1-4.965 0Zm14.426 6.828a9.534 9.534 0 0 1-6.133 1.912 9.535 9.535 0 0 1-6.133-1.912.67.67 0 0 1 .944-.944 8.12 8.12 0 0 0 5.164 1.565 8.144 8.144 0 0 0 5.19-1.515.693.693 0 1 1 .968.993v-.099Zm-.447-4.246a2.483 2.483 0 1 1 2.483-2.483 2.482 2.482 0 0 1-2.508 2.583l.025-.1Z"
                        fill="#fff" />}
                    <path
                        d="M214.317 41.016V19.068h2.483a2.48 2.48 0 0 0 2.499-1.478c.138-.317.209-.659.208-1.005v-.074a2.494 2.494 0 0 0-.555-1.889 2.475 2.475 0 0 0-1.754-.892h-2.881V9.633a3.056 3.056 0 0 0-2.78-3.054 2.98 2.98 0 0 0-3.154 2.756v4.445h-2.482a2.48 2.48 0 0 0-2.707 2.483v.173a2.493 2.493 0 0 0 .554 1.89 2.492 2.492 0 0 0 1.755.891h2.806v21.874a2.955 2.955 0 0 0 2.955 2.954 2.955 2.955 0 0 0 3.103-2.78.421.421 0 0 0-.05-.249Z"
                        fill="#1C1C1C" />
                    <path d="M196.019 13.805a5.264 5.264 0 1 0 0-10.528 5.264 5.264 0 0 0 0 10.528Z" fill="#FF4500" />
                    <path
                        d="M198.949 19.39a2.956 2.956 0 0 0-5.909 0v21.626a2.955 2.955 0 1 0 5.909 0V19.391ZM155.251 2.955a2.953 2.953 0 1 0-5.909 0v13.208a10.202 10.202 0 0 0-7.449-3.004c-7.697 0-14.127 7.076-14.127 15.766 0 8.69 6.232 15.766 14.028 15.766a10.582 10.582 0 0 0 7.697-3.054 2.907 2.907 0 0 0 2.505 2.1c.385.039.774 0 1.144-.114a2.977 2.977 0 0 0 2.111-2.607V2.955Zm-13.482 35.877c-4.544 0-8.243-4.395-8.243-9.932 0-5.537 3.675-9.931 8.243-9.931 4.568 0 8.218 4.42 8.218 9.931 0 5.512-3.65 9.807-8.193 9.807l-.025.124ZM186.137 2.955A2.955 2.955 0 0 0 183.183 0a2.93 2.93 0 0 0-2.93 2.955v13.208a10.298 10.298 0 0 0-7.449-3.004c-7.696 0-14.127 7.076-14.127 15.766 0 8.69 6.207 15.766 14.003 15.766a10.574 10.574 0 0 0 7.796-3.054 2.91 2.91 0 0 0 2.506 2.1c.385.039.774 0 1.144-.114a2.953 2.953 0 0 0 2.111-2.607l-.1-38.061Zm-13.482 35.877c-4.543 0-8.218-4.395-8.218-9.932 0-5.537 3.65-9.931 8.218-9.931 4.569 0 8.219 4.42 8.219 9.931 0 5.512-3.65 9.807-8.194 9.807l-.025.124ZM121.559 30.886a3.699 3.699 0 0 0 3.947-3.426v-.372a11.795 11.795 0 0 0-.248-2.11 14.472 14.472 0 0 0-13.68-11.819c-7.697 0-14.128 7.076-14.128 15.766 0 8.69 6.332 15.766 14.128 15.766a14.052 14.052 0 0 0 10.899-4.568 3.06 3.06 0 0 0 .511-3.36 3.06 3.06 0 0 0-.709-.96l-.273-.224a3.204 3.204 0 0 0-3.923.422 9.709 9.709 0 0 1-6.505 2.78 8.788 8.788 0 0 1-8.069-7.895h18.05Zm-9.932-11.818a8.47 8.47 0 0 1 7.672 6.555h-15.443a8.462 8.462 0 0 1 7.697-6.555h.074ZM81.95 44.095c-.862 0-1.623-.226-2.28-.678-.617-.452-1.13-1.15-1.541-2.096L67.835 17.404c-.33-.74-.453-1.438-.37-2.096.082-.658.39-1.171.924-1.541.535-.411 1.254-.617 2.158-.617.78 0 1.397.185 1.849.555.452.37.863 1.007 1.233 1.911l9.308 22.931H81.21l9.493-22.93c.37-.905.78-1.542 1.233-1.912.493-.37 1.171-.555 2.034-.555.74 0 1.315.206 1.726.617.452.37.72.883.801 1.541.124.616.02 1.294-.308 2.034l-10.418 23.98c-.37.944-.883 1.643-1.54 2.095-.658.452-1.418.678-2.281.678Z"
                        fill="#1C1C1C" />
                </svg>

            </div>

            <div class="text-2xl text-center mb-3">Crie sua conta</div>
            <div class="text-center">
                <?php
                if (isset($_GET["msg"])) {
                    echo $_GET["msg"];
                }
                ?>
            </div>
            <form action=<?php echo $src_url . "/Register/CreateUser.php" ?> METHOD="POST">
                <label class="label" for="">Nome de usuário:</label>
                <input class="input" type="text" name="user" required>

                <label class="label" for="">Email:</label>
                <input class="input" type="text" name="email" required>

                <label class="label" for="">Senha:</label>
                <input class="input" type="password" name="password" required>

                <button class="btn btn-primary mb-4">Criar conta</button>

                <div class="text-center">
                    <span class="text-muted mb-1">Já possui uma conta?</span> <a href="../index.php">Entre aqui</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>