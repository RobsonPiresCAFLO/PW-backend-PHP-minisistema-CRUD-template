<?php include "validar.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f6fa;
        }

        .navbar-brand{
            font-weight:bold;
        }

        .menu-card{
            transition: all .3s;
            border: none;
            border-radius:12px;
        }

        .menu-card:hover{
            transform:translateY(-5px);
            box-shadow:0 10px 20px rgba(0,0,0,.15);
        }

        .menu-icon{
            font-size:60px;
            color:#0d6efd;
        }

        footer{
            margin-top:50px;
            padding:20px;
            text-align:center;
            color:#777;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="bi bi-speedometer2"></i>
            Painel Administrativo
        </a>
    </div>
</nav>

<div class="container mt-5">

    <div class="mb-4">
        <h2>Bem-vindo!</h2>
        <p class="text-muted">
            Escolha uma das opções abaixo.
        </p>
    </div>

    <div class="row g-4">

        <!-- Produtos -->
        <div class="col-md-6 col-lg-3">
            <div class="card menu-card text-center p-4 h-100">

                <div class="menu-icon">
                    <i class="bi bi-box-seam"></i>
                </div>

                <h5 class="mt-3">Produtos</h5>

                <p class="text-muted">
                    Cadastrar e gerenciar produtos.
                </p>

                <a href="cad_produto.php" class="btn btn-primary">
                    Acessar
                </a>

            </div>
        </div>

        <!-- Dados Pessoais -->
        <div class="col-md-6 col-lg-3">
            <div class="card menu-card text-center p-4 h-100">

                <div class="menu-icon">
                    <i class="bi bi-person-circle"></i>
                </div>

                <h5 class="mt-3">Meus Dados</h5>

                <p class="text-muted">
                    Alterar informações pessoais.
                </p>

                <a href="cad_usuario.php" class="btn btn-success">
                    Editar
                </a>

            </div>
        </div>

        <!-- Mensagens -->
        <div class="col-md-6 col-lg-3">
            <div class="card menu-card text-center p-4 h-100">

                <div class="menu-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>

                <h5 class="mt-3">Mensagens</h5>

                <p class="text-muted">
                    Visualizar mensagens enviadas pelos visitantes.
                </p>

                <a href="mensagens.php" class="btn btn-warning text-dark">
                    Ler Mensagens
                </a>

            </div>
        </div>

        <!-- Logout -->
        <div class="col-md-6 col-lg-3">
            <div class="card menu-card text-center p-4 h-100">

                <div class="menu-icon text-danger">
                    <i class="bi bi-box-arrow-right"></i>
                </div>

                <h5 class="mt-3">Sair</h5>

                <p class="text-muted">
                    Encerrar a sessão do sistema.
                </p>

                <a href="logout.php" class="btn btn-danger">
                    Logout
                </a>

            </div>
        </div>

    </div>

</div>

<footer>
    Painel Administrativo &copy; <?php echo date('Y'); ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>