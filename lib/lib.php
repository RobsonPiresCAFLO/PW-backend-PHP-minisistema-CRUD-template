<?php
    function mensagem($titulo, $texto, $cor){
        echo "
        <div class='alert alert-$cor alert-dismissible fade show' role='alert'>
            <strong>$titulo</strong> $texto
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        ";
    }

    function card($titulo, $texto, $img, $link) {
        echo "
        <div class='col-sm-12 col-md-6 col-lg-4 col-xl-3'>
            <div class='card'>
                <img src='$img' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$titulo</h5>
                    <p class='card-text'>$texto</p>
                    <a href='$link' class='btn btn-primary'>Veja mais</a>
                </div>
            </div>
        </div>
        ";
    }

?>