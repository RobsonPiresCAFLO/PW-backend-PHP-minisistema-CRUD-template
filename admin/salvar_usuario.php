<?php
    include "../lib/conexao.php";
    include "../lib/lib.php";
    foreach ($_POST as $key => $value) {
        $$key = $value;
    }
    $senha = password_hash($senha, PASSWORD_DEFAULT);  
    $sql = "INSERT INTO usuarios (nome, login, senha) 
    VALUES ('$nome', '$login', '$senha')";
    
    if (mysqli_query($conn, $sql)) {
        mensagem("OK!", "Usuário $nome cadastrado com sucesso!", "success");
    }

    
    ?>
<a href="cad_usuario.php">Voltar</a>