<?php
$conn = mysqli_connect("localhost". ":" . "3315", "root", "", "showroom_tsania_table");

if (!$conn) {
  die("Koneksi Error: " . $conn->connect_error);
}
