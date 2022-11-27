<?php
require './connector.php';

$id = $_GET['id'];

$mysql = "DELETE FROM showroom_tsania_table WHERE id_mobil = $id";

if (mysqli_query($connect, $mysql)) {
  header("location: ../pages/list-Tsania.php?pesan=delete");
} else {
  echo "Error";
}
