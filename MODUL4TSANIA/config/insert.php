    <?php
    require 'connector.php';

    $namamobil = $_POST['car'];
    $pemilik = $_POST['own'];
    $merk = $_POST['merk'];
    $tanggalbeli = $_POST['date'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];

    $gambar = $_FILES['image']['name'];

    $target = "../upload/images/";

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target . $gambar)) {
        $mysql = "INSERT INTO showroom_tsania_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
        if (mysqli_query($conn, $mysql)) {
            header("location: ../pages/ListCar-Tsania.php?message=success");
        } else {
            echo "Gagal";
        }
    } else {
    echo "Gagal";
    }

    ?>