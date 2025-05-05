<!DOCTYPE html>
<html>
<head>
    <title>Llista d'Articles</title>
</head>
<body>
    <h1>Llista d'Articles</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li><?= $article['nom'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>