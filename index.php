<?php

ob_start();
session_start();
if (!isset($_SESSION['username'])) header("location:login.php");
include "koneksi.php";

?>

<html>
<head>
  <title>Web Desa Gentansari</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <div class="logo-header">
        <img src="banjarnegara.png" width="300px" height="200px">
      </div>

      <div class="title-header1">
        Website Desa Gentansari
        <div class="logout-header2">
          <a href="logout.php">Logout</a>
        </div>
      </div>
    </div>

    <div class="runningtext">
      <marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
          Selamat Datang di Website Desa Gentansari
      </marquee>
    </div>

    <div class="menu">
      <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="profil.html">Profil Desa</a></li>
        <li><a href="sejarah.html">Sejarah</a></li>
        <li><a href="kontak.html">Kontak Kami</a></li>
      </ul>
    </div>

    <div class="content">
      Hay,, Ketemu lagi dengan kami di website Desa Gentansari,<br>
      kali ini kami akan memberitahu sedikit tentang Desa Gentansari<br>
      ok. simak terus yaa:)<br>
      <img src="KAMI.jpg" style="width=800px;height=550px;margin:auto;display:blok"/>
    </div>

    <div class="Judul-Masuk">
    </div>

    <div class="Masuk">
    </div>

    <div class="footer">
      rpl1,by 2018
    </div>
  </div>
</body>
</html>

<?php


ob_end_flush();

 ?>
