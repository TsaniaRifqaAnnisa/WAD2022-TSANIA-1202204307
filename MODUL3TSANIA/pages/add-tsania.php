<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AddItem</title>
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
  <section id='form'>
    <div class="container">
      <h1 class="add1">Tambah Mobil Baru</h1>
      <p class="addn">Tambah Mobil Baru Anda Ke List Show Room</p>
      <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
        <label for="nama_mobil">Nama Mobil</label>
        <input type="text" id="nama_mobil" name="nama_mobil" placeholder="Nama Mobil Anda">
        <label for="pemilik_mobil">Nama Lengkap</label>
        <input type="text" id="pemilik_mobil" name="pemilik_mobil" placeholder="Nama Anda">
        <label for="merk_mobil">Merk</label>
        <input type="text" id="merk_mobil" name="merk_mobil" placeholder="Merk Mobil Anda">
        <label for="tanggal_beli">Tanggal Beli</label>
        <input type="date" id="tanggal_beli" name="tanggal_beli">
        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" placeholder="Deskripsi Mobil Anda" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>
        <label for="foto_mobil">Foto</label>
        <input type="file" class="form-control" id="foto_mobil" name="foto_mobil" style="height: 40px;">
        <label for="status_pembayaran">Status Pembayaran</label>
        <span class="d-flex">
          <input type="radio" name="status_pembayaran" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
          <input type="radio" name="status_pembayaran" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
        </span>
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
  <!-- Form End -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>