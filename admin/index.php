<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin - Susu Murni</title>
</head>
<body>
  <!-- Navbar khusus admin -->
  <nav>
    <ul>
      <li><a href="admin.php">Dashboard</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>

  <!-- Form Tambah Produk dan Tabel CRUD -->
  <h2>Manajemen Produk</h2>
  <?php include 'read.php'; ?>
</body>
</html>
