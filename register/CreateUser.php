<?php
    include "../config/Connection.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // $profile = 2;
    $email_verify = "SELECT * FROM users WHERE email LIKE '".$email."'";
    $search = mysqli_query($conn, $email_verify);

    if(mysqli_num_rows($search) > 0){
        mysqli_close($conn);
        $msg = 'Este usuário já existe';
        header("location:register.php?msg=".$msg);
    }
    else {
        $sql = "INSERT INTO users VALUES(null, '".$name."', '".$email."','".$password."', '2')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            mysqli_close($conn);
            $msg = "Algum problema foi identificado ao tentar cadastrar este usuário./n Por favor, entre em contato com o suporte.";    
            header("location:register.php?msg=".$msg);
        }
        $msg = "Usuário cadastrado com sucesso!";
        header("location:../index.php?msg=".$msg);
    }
?>