<?php
$conn = new mysqli("localhost", "root", "", "showroom_tsania_table");

if (!$conn) {
  die("Koneksi Error: " . $conn->connect_error);
}
