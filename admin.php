<?php
    include'check-login.php';

    if($_SESSION['nivel'] != "A"){
        session_destroy();
        header('location:index.php?erro_login=true');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
<h1>Pagina de Administração</h1>
    <p>usuario logado:
        <?php echo $usuario; ?>
    </p>

    <a href="logout.php">Sair</a>   
</body>
</html>