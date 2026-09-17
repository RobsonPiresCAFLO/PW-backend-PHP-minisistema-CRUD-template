<?php
    session_start();
    if (  !(isset($_SESSION['logado']) AND isset($_SESSION['login']))  ) {
        header("Location: index.php?erro=Faça o login seu mala!");
        session_destroy();   
    } 