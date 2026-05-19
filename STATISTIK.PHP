<?php
session_start();

if(!isset($_SESSION['nama'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Statistik</title>
</head>
<body>

<h1>HALAMAN STATISTIK</h1>

<p>Ini halaman statistik</p>

<a href="index.php">
Kembali
</a>

</body>
</html>