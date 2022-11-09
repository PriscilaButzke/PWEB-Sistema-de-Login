<!--Se o usuário não estiver logado, mostraremos o link de login.
Caso ele já esteja logado, mostraremos seu nome e os links do Painel e de Sair.
 -->
<?php
session_start();
 
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de Login em PHP</title>
    </head>
 
    <body>
         
        <h1>Sistema de Login em PHP</h1>
 
        <?php if (isLoggedIn()): ?>
            <p>Olá, <?php echo $_SESSION['user_name']; ?>. <a href="panel.php">Painel</a> | <a href="logout.php">Sair</a></p>
        <?php else: ?>
            <p>Olá, visitante. <a href="form-login.php">Login</a></p>
        <?php endif; ?>
 
    </body>
</html>
