<?php
include 'config.php';

$nama  = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok  = $_POST['stok'];

$sql = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', '$harga', '$stok')";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php"); // kembali ke halaman utama setelah simpan
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
