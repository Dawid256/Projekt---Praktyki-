<?php
require '../config/db.php';

if(isset($_POST['login_btn'])){
    $login=$_POST['login'];
    $pass=$_POST['password'];

    $stmt=$pdo->prepare("SELECT * FROM users WHERE login=?");
    $stmt->execute([$login]);
    $user=$stmt->fetch();

    if($user && password_verify($pass,$user['password'])){
        $_SESSION['user']=$user['login'];
        header("Location: index.php");
        exit;
    } else {
        $error = "Błędne dane";
    }
}

include '../includes/header.php';
?>

<h2>Login</h2>
<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST" class="form">
<input type="text" name="login" placeholder="login" required>
<input type="password" name="password" placeholder="hasło" required>
<button class="btn" name="login_btn">Zaloguj</button>
</form>
<p>Nie masz konta? <a href="register.php">Zarejestruj się</a></p>

<?php include '../includes/footer.php'; ?>