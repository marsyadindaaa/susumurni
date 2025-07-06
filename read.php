<?php
include 'config.php';

$result = $conn->query("SELECT * FROM produk");

echo "<table border='1' cellpadding='10'>
<tr>
  <th>No</th>
  <th>Nama Produk</th>
  <th>Harga</th>
  <th>Stok</th>
  <th>Aksi</th>
</tr>";

$no = 1;
while ($row = $result->fetch_assoc()) {
  echo "<tr>
    <td>" . $no++ . "</td>
    <td>" . $row['nama_produk'] . "</td>
    <td>" . $row['harga'] . "</td>
    <td>" . $row['stok'] . "</td>
    <td>
      <a href='edit.php?id=" . $row['id'] . "'>Edit</a> |
      <a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Hapus produk ini?')\">Hapus</a>
    </td>
  </tr>";
}

echo "</table>"; // ← tambahkan ini
?>
