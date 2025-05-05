<?php
require_once 'config/database.php';
require_once 'controllers/ArticleController.php';

$controlador = new ArticleController($conn);
$controlador->llistar();
?>
