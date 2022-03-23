<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar Vaga');

use \App\entity\vaga;

// Validação do ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

// Consulta Vaga
$obvaga = vaga::getvagas($_GET['id']);

// Validação da Vaga
if (!$obvaga instanceof vaga) {
    header('location: index.php?status=error');
    exit;
}

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['status'])) {
    $obvaga->titulo = $_POST['titulo'];
    $obvaga->descricao = $_POST['descricao'];
    $obvaga->status = $_POST['status'];
    // echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

    $obvaga->atualizar();

    header('location: index.php?status=success');
    exit;
}

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/formulario.php';
require __DIR__ . '/includes/footer.php';
