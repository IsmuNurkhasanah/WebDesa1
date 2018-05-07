<?php
session_start();
include 'koneksi.php';

  $pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '');
  $username=$_POST['Username'];
  $password=$_POST['Password'];

  if ($username == "") {
    header("location:login_gagal.php");
  }
  else {
  $exec=$pdo->prepare("SELECT * FROM loginform WHERE User = :username AND Pass = :password");
  $exec->execute([
  'username' => $username,
  'password' => $password
  ]);


  $exec->setFetchMode(PDO::FETCH_ASSOC);
  $data = $exec->fetchAll();
  if (count($data) > 0) {
  $data = $data[0];
  $_SESSION['username'] = $data;
  header("location: index.php");
  }else{
  header("location: login_gagal.php?error=1");
  }
}
  exit;

  if ($data=="") {
  header("location:login_gagal.php");
  }

  else {
  $query = 'SELECT * from pengguna where Password ="'.$password.'"';
  $hasil_p = mysql_query($query);
  $data_p = mysql_fetch_array($hasil);
  $data_p[0];

  if ($data_p=="") {
    header("location:index.php");
  }
  else {
    session_start();
    $_SESSION["pengguna"] = $username;
    header("location:index.php");
  }
  mysql_close($connect);
  }
?>
