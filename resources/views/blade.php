<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Midterm Exam - Products</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; background: #f4f4f4; }
        h1 { color: #333; }
        .product-card {
            background: white;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .product-card h3 { margin: 0 0 5px; }
        .product-card p { margin: 0; color: #666; }
        .price { font-weight: bold; color: #2d6a4f; margin-top: 5px !important; }
    </style>
</head>
<body>
    <h1>Anime Products</h1>

    <?php foreach ($products as $product): ?>
        <div class="product-card">
            <h3><?= htmlspecialchars($product['name']) ?></h3>
            <p><?= htmlspecialchars($product['description']) ?></p>
            <p class="price">$<?= htmlspecialchars($product['price']) ?></p>
        </div>
    <?php endforeach; ?>

</body>
</html>