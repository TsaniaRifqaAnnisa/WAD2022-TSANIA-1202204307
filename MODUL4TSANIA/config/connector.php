<?php
$connector = new mysqli("127.0.0.1". ":" . "3315", "root", "", "wad_modul4_tsania");

if (!$connector) {
  die("Koneksi Error: " . $connector->connector_error);
}