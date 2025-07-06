<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin - Susu Murni D'susu</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #fffaf1;
    }

    header {
      background-color: navy;
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    .logo span {
      color: orange;
    }

    form input, form button {
      margin: 5px 10px 10px 0;
      padding: 8px;
      font-size: 14px;
    }

    form button {
      background-color: orange;
      color: white;
      border: none;
      cursor: pointer;
    }

    h2 {
      margin-top: 40px;
      color: navy;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #f0f0f0;
    }

    a {
      text-decoration: none;
      color: navy;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<header>
  <div class="logo">Susu<span>Murni</span> Admin</div>
  <a href="logout.php" style="color:white;">Logout</a>
</header>

<!-- Form Tambah Produk -->
<section>
  <h2>Tambah Produk Baru</h2>
  <form action="create.php" method="POST">
    <input type="text" name="nama_produk" placeholder="Nama Produk" required>
    <input type="number" name="harga" placeholder="Harga (Rp)" required>
    <input type="number" name="stok" placeholder="Stok" required>
    <button type="submit">Simpan</button>
  </form>
</section>

<!-- Data Produk -->
<section>
  <h2>Data Produk</h2>
  <?php include 'read.php'; ?>
</section>

</body>
</html>
