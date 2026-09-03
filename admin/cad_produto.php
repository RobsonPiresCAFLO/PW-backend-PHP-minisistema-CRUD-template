<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Item</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="mb-0">Cadastro de Item</h3>
                    </div>

                    <div class="card-body">
                        <form action="cad_produto.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="titulo"
                                    name="titulo"
                                    placeholder="Digite o título">
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea
                                    class="form-control"
                                    id="descricao"
                                    name="descricao"
                                    rows="4"
                                    placeholder="Digite a descrição"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="valor"
                                    name="valor"
                                    step="0.01"
                                    placeholder="0,00">
                            </div>

                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input
                                    type="url"
                                    class="form-control"
                                    id="link"
                                    name="link"
                                    placeholder="https://exemplo.com">
                            </div>

                            <div class="mb-3">
                                <label for="imagem" class="form-label">Imagem</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    id="imagem"
                                    name="imagem"
                                    accept="image/*">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Salvar
                                </button>
                            </div>

                        </form>
                    </div>
                    <?php
                        include "../lib/conexao.php";
                        include "../lib/lib.php";
                        
                        if (isset($_POST['titulo'])) {
                            $titulo = $_POST['titulo'];
                            $descricao = $_POST['descricao'];
                            $valor = $_POST['valor'];
                            $link = $_POST['link'];
                            $imagem = $_POST['imagem'];                               
                            $SQL = "INSERT INTO produtos 
                            (titulo, descricao, valor, link, imagem)
                            VALUES ('$titulo', '$descricao', $valor, '$link','$imagem')";
                            if (mysqli_query($conn, $SQL)) {
                                mensagem("OK!", "Produto cadastrado com sucesso!", "success");
                            }
                        }
                    ?>
                    <a class="btn btn-secondary" href="principal.php">Voltar</a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>