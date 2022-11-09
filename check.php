<!--verificar se o usuário está logado. Se não estiver, redireciona para o formulário de login -->

<?php
 
require_once 'init.php';
 
if (!isLoggedIn())
{
    header('Location: form-login.php');
}
