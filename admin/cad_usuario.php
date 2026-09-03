<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body{
            background-color:#f5f6fa;
        }

        .card-form{
            border:none;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
        }

        .titulo{
            color:#0d6efd;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-6">

            <div class="card card-form">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-person-plus-fill"></i>
                        Cadastro de Usuário
                    </h4>
                </div>

                <div class="card-body">

                    <form action="salvar_usuario.php" method="post">

                        <div class="mb-3">
                            <label for="nome" class="form-label">
                                Nome Completo
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                id="nome"
                                name="nome"
                                maxlength="100"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="login" class="form-label">
                                Login
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                id="login"
                                name="login"
                                maxlength="50"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="senha" class="form-label">
                                Senha
                            </label>
                            <input
                                type="password"
                                class="form-control"
                                id="senha"
                                name="senha"
                                minlength="4"
                                required>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="principal.php" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i>
                                Voltar
                            </a>

                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i>
                                Salvar Usuário
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>