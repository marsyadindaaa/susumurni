<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "susu_d_susu";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
