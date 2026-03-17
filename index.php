<?php
require '../config/db.php';
require '../includes/functions.php';
include '../includes/header.php';
$products=getProducts($pdo);
?>

<h2>Produkty</h2>
<div class="products">
<?php foreach($products as $p): ?>
<div class="card">
<h3><?= $p['name'] ?></h3>
<p><?= $p['price'] ?> zł</p>
<a class="btn" href="product.php?id=<?= $p['id'] ?>">Zobacz</a>
</div>
<?php endforeach; ?>
</div>

<?php include '../includes/footer.php'; ?>