<?php
require '../config/connector.php';

$id = $_GET['id'];

$sql = "SELECT * FROM showroom_tsania_table WHERE id_mobil = $id";

$hasil = mysqli_query($connector, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Item</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" href="../index.php">Home</a>
          <a class="nav-link" style="color: white;" href="#">MyCar</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->

  <!-- Form -->
  <section id='detail'>
    <div class="container">
      <?php
      while ($getDetail = mysqli_fetch_array($hasil)) {
        echo "
                <h1 class='add1'>" . $getDetail["nama_mobil"] . "</h1>
                <p class='addn'>Detail Mobil " . $getDetail["nama_mobil"] . "</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='../asset/images/" . $getDetail["foto_mobil"] . "' alt='foto_mobil'>
                  <form action='../config/edit.php?id=" . $getDetail["id_mobil"] . "' method='POST' enctype='multipart/form-data'>
                    <label for='nama'>Nama Mobil</label>
                    <input type='text' id='nama_mobil' name='nama_mobil' value='" . $getDetail["nama_mobil"] . "' >
                    <label for='pemilik'>Nama Pemilik</label>
                    <input type='text' id='pemilik_mobil' name='pemilik_mobil' value='" . $getDetail["pemilik_mobil"] . "' >
                    <label for='merk'>Merk</label>
                    <input type='text' id='merk_mobil' name='merk_mobil' value='" . $getDetail["merk_mobil"] . "' >
                    <label for='tanggal_beli'>Tanggal Beli</label>
                    <input type='date' id='tanggal_beli' name='tanggal_beli' value='" . $getDetail["tanggal_beli"] . "' >
                    <label for='deskripsi'>Deskripsi</label>
                    <textarea id='deskripsi' name='deskripsi' style='height:200px; width: 600px; border-radius: 8px;' > " . $getDetail["deskripsi"] . " </textarea>
                    <label for='inputGroupFile01'>Foto</label>
                    <input type='file' class='form-control' id='inputGroupFile01' value='" . $getDetail["foto_mobil"] . "' name='foto_mobil' style='height: 40px;'>
                    <label for='status_pembayaran'>Status Pembayaran</label>
                    <span class='d-flex'>
                      <input type='radio' name='status_pembayaran' id='lunas' value='Lunas' " . (($getDetail["status_pembayaran"] == 'Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status_pembayaran' id='belum_lunas' value='Belum Lunas' " . (($getDetail["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='belum_lunas' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <button type='submit' class='btn btn-primary' style='margin-top: 40px;'>Selesai</button>
                  </form>
                </div>
            ";
      }
      ?>
    </div>
  </section>
  <!-- Form End -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>