<!-- mensagens.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens Recebidas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>
            <i class="fas fa-envelope text-primary"></i>
            Mensagens Recebidas
        </h2>

        <a href="principal.php" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i>
            Voltar
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Mensagem</th>
                        <th width="120">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Maria Silva</td>
                        <td>maria@email.com</td>
                        <td>Gostaria de saber mais informações sobre os serviços oferecidos...</td>
                        <td>
                            <button class="btn btn-primary btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#mensagem1">
                                <i class="fas fa-cog"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>João Pereira</td>
                        <td>joao@email.com</td>
                        <td>Parabéns pelo site, ficou muito organizado e bonito...</td>
                        <td>
                            <button class="btn btn-primary btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#mensagem2">
                                <i class="fas fa-cog"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Ana Costa</td>
                        <td>ana@email.com</td>
                        <td>Estou com dificuldades para acessar minha conta...</td>
                        <td>
                            <button class="btn btn-primary btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#mensagem3">
                                <i class="fas fa-cog"></i>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>

<!-- Modal 1 -->
<div class="modal fade" id="mensagem1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Mensagem de Maria Silva</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p><strong>E-mail:</strong> maria@email.com</p>

                <hr>

                <p>
                    Gostaria de saber mais informações sobre os serviços
                    oferecidos pelo site. Aguardo retorno.
                </p>
            </div>

            <div class="modal-footer">

                <button class="btn btn-success">
                    <i class="fas fa-reply"></i>
                    Responder
                </button>

                <button class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                    Excluir
                </button>

                <button class="btn btn-secondary"
                        data-bs-dismiss="modal">
                    Fechar
                </button>

            </div>

        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="mensagem2">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Mensagem de João Pereira</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p><strong>E-mail:</strong> joao@email.com</p>

                <hr>

                <p>
                    Parabéns pelo site, ficou muito organizado e fácil de usar.
                </p>
            </div>

            <div class="modal-footer">

                <button class="btn btn-success">
                    <i class="fas fa-reply"></i>
                    Responder
                </button>

                <button class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                    Excluir
                </button>

                <button class="btn btn-secondary"
                        data-bs-dismiss="modal">
                    Fechar
                </button>

            </div>

        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="mensagem3">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Mensagem de Ana Costa</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p><strong>E-mail:</strong> ana@email.com</p>

                <hr>

                <p>
                    Estou com dificuldades para acessar minha conta.
                    Poderiam me ajudar?
                </p>
            </div>

            <div class="modal-footer">

                <button class="btn btn-success">
                    <i class="fas fa-reply"></i>
                    Responder
                </button>

                <button class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                    Excluir
                </button>

                <button class="btn btn-secondary"
                        data-bs-dismiss="modal">
                    Fechar
                </button>

            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>