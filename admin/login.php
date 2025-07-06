<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $result = $conn->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
  
  if ($result->num_rows > 0) {
    $_SESSION['login'] = true;
    header("Location: index.php");
  } else {
    $error = "Login gagal. Username atau password salah.";
  }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login Admin</title></head>
<body>
  <h2>Login Admin</h2>
  <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
  <form method="post">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>
