<?php
    include "../lib/conexao.php";
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
    }
    
    $sql = "SELECT nome, login, senha FROM usuarios 
    WHERE login = '$login'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $dados = mysqli_fetch_assoc($result);
        $hash = $dados['senha'];
        // Verificar se os Hashes batem...
        if (password_verify($senha, $hash)) {
            // Usuário validado - Criando a sessão
            session_start();
            $_SESSION['logado'] = True;
            $_SESSION['login'] = $login;
            header("Location: principal.php");
        
        
            } else {
           header("Location: index.php?erro=Senha errada"); 
        }
    } else {
        header("Location: index.php?erro=Login não encontrado");
    }   


