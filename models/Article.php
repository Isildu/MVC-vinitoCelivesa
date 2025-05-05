<?php
class Article {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }
    public function getArticles() {
        $sql = "SELECT * FROM articles";
        $result = $this->conn->query($sql);
        $articles = [];
        while($article = $result->fetchArray(SQLITE3_ASSOC))
            $articles[] = $article;
        return $articles;
    }
}
?>
