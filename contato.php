<!DOCTYPE html>
<html lang="pt-br">
<?php
    include "layout/head.php";
?>
<body>
    <div class="container">
      <?php
          include "layout/header.php";
          include "layout/nav.php";
      ?>
      <main class="row">
        <div class="col-sm-12">
          <h2>Contato</h2>
          <form method="POST">
            <div class="mb-3">
              <label class="form-label">Nome completo</label>
              <input type="text" class="form-control"  aria-describedby="emailHelp" name="nome">
            </div>
            <div class="mb-3">
              <label  class="form-label">Endereço de email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label  class="form-label">Digite aqui sua mensagem</label>
              <textarea name="texto" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar mensagem</button>
          </form>
          <?php
            if ($_POST) {
              mensagem("OK!", "Menssagem enviada com sucesso", "success");
            }
          ?>
        </div>        
      </main>
      <?php
          include "layout/footer.php";
      ?>
    </div>  
</body>
</html>