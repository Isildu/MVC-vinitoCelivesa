<?php
require_once 'models/springfield_news.db';
require_once 'controllers/ArticleController.php';

$controlador = new ArticleController($conn);
$controlador->llistar();
?>
