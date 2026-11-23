<?php
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false || $id === null || $id < 1) {
    http_response_code(400);
    exit('Invalid article ID');
}
$articles = [42 => 'Choosing a laptop', 108 => 'Network basics'];
if (!isset($articles[$id])) {
    http_response_code(404);
    exit('Article not found');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Article</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <header>
        <h1><?= htmlspecialchars($articles[$id], ENT_QUOTES, 'UTF-8') ?></h1>
    </header>
    <main>
        <p>Article number <?= $id ?>.</p>
    </main>
    <footer>
        <p>&copy; 2026 Arturo Mora-Rioja</p>
    </footer>
</body>
</html>
