<?php 
    require __DIR__.'/vendor/autoload.php';

    use \App\entity\vaga;
    $vaga = vaga::getvaga();
    // echo "<pre>"; print_r($vaga); echo "</pre>"; exit;

    require __DIR__.'/includes/header.php';
    require __DIR__.'/includes/listagem.php';
    require __DIR__.'/includes/footer.php';
?>