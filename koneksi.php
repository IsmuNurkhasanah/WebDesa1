<?php

global $koneksi;

$host="localhost";
$username="root";
$password="";
$namadatabase="login";
$koneksi = new PDO('mysql:host;');
mysql_connect("localhost","root","") or die ("Gagal Mengkoneksikan Ke Database");
mysql_select_db("login") or die ("Database Tidak Ditemukan");
?>
