<?php
require '../config/db.php'; 
include '../includes/header.php';
?>

<h2>Koszyk</h2>

<?php
if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0):
$total = 0;
?>
<table>
<tr>
    <th>Produkt</th>
    <th>Cena</th>
    <th>Ilość</th>
    <th>Razem</th>
</tr>
<?php foreach($_SESSION['cart'] as $id => $item): 
    $subtotal = $item['price'] * $item['qty'];
    $total += $subtotal;
?>
<tr>
    <td><?= $item['name'] ?></td>
    <td><?= $item['price'] ?> zł</td>
    <td><?= $item['qty'] ?></td>
    <td><?= $subtotal ?> zł</td>
</tr>
<?php endforeach; ?>
<tr>
    <td colspan="3"><strong>Razem:</strong></td>
    <td><strong><?= $total ?> zł</strong></td>
</tr>
</table>
<?php else: ?>
<p>Pusty koszyk</p>
<?php endif; ?>

<?php include '../includes/footer.php'; ?>