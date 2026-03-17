<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sklep</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="header">
<h1>Sklep</h1>
<nav>
<a href="index.php">Home</a>
<a href="cart.php">Koszyk</a>
<?php if(isset($_SESSION['user'])): ?>
    <span>Witaj <?= $_SESSION['user'] ?></span>
    <a href="logout.php">Wyloguj</a>
<?php else: ?>
    <a href="login.php">Login</a>
    <a href="register.php">Rejestracja</a>
<?php endif; ?>
</nav>
</header>
<main>