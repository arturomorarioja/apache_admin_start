<?php
$products = [
    ['name' => 'Desk lamp', 'price' => 39],
    ['name' => 'Notebook', 'price' => 12],
    ['name' => 'Monitor stand', 'price' => 65]
];
?>
<!doctype html>
<html lang="en">
    <head><meta charset="utf-8">
    <title>Harbor Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Harbor Shop</h1>
    <ul>
<?php foreach ($products as $product): ?>
<li><?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?> — €<?= $product['price'] ?></li>
<?php endforeach; ?>
    </ul>
    <p><a href="/uploads/">Browse uploads</a></p>
    <footer>
        <p>&copy; 2026 Arturo Mora-Rioja</p>
    </footer>
</body>
</html>
