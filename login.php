<?php

ob_start();
session_start();
if (isset($_Session['username'])) header("location:index.php");
include "koneksi.php";

?>

<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <?php if (isset($_GET['error'])): ?>
    <script>
      alert("Gagal Login!!!");
    </script>
  <?php endif; ?>
  <div class="wrapper">
    <div class="Kotak-Masuk">
      <div class="Judul-Masuk">
        Sign In
      </div>
      <div class="Masuk">
        <form action="proses_login.php" method="POST">
        <div class="form_input">
          <input type="text" required name="Username" value="" autocomplete="off" placeholder="Username" autofocus>
          <input type="Password" required name="Password" value="" autocomplete="off" placeholder="Password">
          <button type="submit" name="button">Login</button>
          <p class="message">Belum Punya Akun? <a href="registrasi.php">Buat Akun</a></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

<?php
ob_end_flush();
 ?>
