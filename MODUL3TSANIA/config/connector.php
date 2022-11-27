<?php
$connect = new mysqli("127.0.0.1". ":" . "3315", "root", "", "showroom_tsania_table");

if (!$connect) {
  die("Koneksi Error: " . $connect->connect_error);
}