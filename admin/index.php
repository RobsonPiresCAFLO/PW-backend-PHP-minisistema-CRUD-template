<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
        }

        .login-card {
            max-width: 400px;
            width: 100%;
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="card shadow login-card">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4">Acesso ao Sistema</h2>

                        <form method="POST" action="auth.php">
                            <div class="mb-3">
                                <label for="login" class="form-label">Login</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="login"
                                    placeholder="Digite seu login"
                                    name="login"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input
                                    name="senha"
                                    type="password"
                                    class="form-control"
                                    id="senha"
                                    placeholder="Digite sua senha"
                                    required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Entrar
                                </button>
                            </div>
                        </form>
                        <?php
                            include "../lib/lib.php";
                            if (isset($_GET['erro'])) {
                                mensagem("Erro", $_GET['erro'], 'danger');
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>a

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>