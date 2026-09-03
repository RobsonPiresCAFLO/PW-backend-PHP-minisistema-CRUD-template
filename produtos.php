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
                <?php
                    $q = 20;
                    for ($i=0; $i < $q ; $i++) { 
                        card("Título do Card", "Olá mundo PHP!", "img/brasil.jpg", "#");
                    }
                ?>
        </main>
       <?php
            include "layout/footer.php";
       ?>
    </div>  
</body>
</html>