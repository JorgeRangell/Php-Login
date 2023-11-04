<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style-login.css">
</head>
<body>
    
    <form class="index-form" action="auth.php" method="post">
        <img class="logo" src="css/burguermania.png" alt="logo">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" placeholder="Digite o Usuário"><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Digite a Senha"><br>
        <input class="acessar" type="submit" value="Acessar">
        <div class="error-box">
            <?php
                if(isset($_GET['erro_pass'])){
                    echo '<p class="error-item">Usuario e/ou Senha incorretos</p>';
                }
                elseif(isset($_GET['erro_login'])){
                    echo '<p class="error-item">É necessário estar logado para acessar a página</p>';
                }
                else{
                    echo "";
                }
            ?>
        </div>
    </form>

</body>
</html>