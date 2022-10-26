<?php
session_start();

if (!isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
{
    //Acessa o banco de dados
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

    //Verifica no banco de dados se existe um e-mail e senha identicos ao passado!
    $sql = "SELECT * FROM tb_usuario WHERE email = '$email' and senha = '$senha'";

    $result = $con->query($sql);

    // print_r('sql');
    // print_r('result');

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: index_rota.php');
    }
}   
else
{
        // Não acessa
        header('Location: index.php');
}


?>