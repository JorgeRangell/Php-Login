<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $nivel = "U";

    if($usuario == 'cliente' && $senha == '1234'){
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nivel'] = $nivel;
        
        if($nivel == "U"){
        header('location:index.html');
        }elseif($nivel == "A"){
            header('location:admin.php');
        }
    }
    else{
        header('location:index.php?erro_pass=true');
        exit;
    }
?>