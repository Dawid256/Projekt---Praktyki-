<?php
function getProducts($pdo){
    return $pdo->query("SELECT * FROM products")->fetchAll();
}

function getProduct($pdo,$id){
    $stmt=$pdo->prepare("SELECT * FROM products WHERE id=?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}
?>
