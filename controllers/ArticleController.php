<?php
require_once 'app/models/articles.php';

class ArticleController {
    private $model;

    public function __construct($db) {
        $this->model = new Article($db);
    }

    public function llistar() {
        $articles = $this->model->getArticles();
        require 'app/views/articles.php';
    }
}
?>
