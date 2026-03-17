<?php
require '../config/db.php'; 
require '../includes/functions.php';
include '../includes/header.php';

$id = $_GET['id'] ?? 0;
$p = getProduct($pdo, $id);

if(isset($_POST['add_to_cart'])){
   
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }

    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['qty']++;
    } else {
        $_SESSION['cart'][$id] = [
            'name' => $p['name'],
            'price' => $p['price'],
            'qty' => 1
        ];
    }

    $added = "Produkt dodany do koszyka!";
}
?>
<div class="product-page">
<h2><?= $p['name'] ?></h2>
<p><?= $p['description'] ?></p>
<p class="price"><?= $p['price'] ?> zł</p>

<form method="POST">
    <button class="btn" name="add_to_cart">Dodaj do koszyka</button>
</form>

<?php if(isset($added)) echo "<p style='color:green;'>$added</p>"; ?>
</div>

<?php include '../includes/footer.php'; ?>