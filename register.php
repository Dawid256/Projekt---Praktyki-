<?php
require '../config/db.php';

if(isset($_POST['register_btn'])){
    $login=$_POST['login'];
    $pass=password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt=$pdo->prepare("INSERT INTO users(login,password) VALUES(?,?)");
    $stmt->execute([$login,$pass]);

    header("Location: login.php");
    exit;
}

include '../includes/header.php';
?>

<h2>Rejestracja</h2>
<form method="POST" class="form">
<input type="text" name="login" placeholder="login" required>
<input type="password" name="password" placeholder="hasło" required>
<button class="btn" name="register_btn">Zarejestruj</button>
</form>
<p>Masz już konto? <a href="login.php">Zaloguj się</a></p>

<?php include '../includes/footer.php'; ?>