    <?php
    require 'connector.php';

    $id = $_POST['id'];
    $namamobil = $_POST['car'];
    $pemilik = $_POST['own'];
    $merk = $_POST['merk'];
    $tanggalbeli = $_POST['date'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];
    $gambar = $_FILES['image']['name'];

    $target = "../upload/images/";

    if($_FILES['image']['name'] != "")
    {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target . $gambar)) {
            $sql = "UPDATE showroom_tsania_table SET nama_mobil = '$namamobil', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', foto_mobil = '$gambar', status_pembayaran = '$status' WHERE id_mobil = $id";
            if (mysqli_query($conn, $sql)) {
            header("location: ../pages/listCar-Tsania.php?message=update");
            } else {
            echo "Gagal";
            }
        }
    } else {
        $sql = "UPDATE showroom_tsania_table SET nama_mobil = '$namamobil', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', status_pembayaran = '$status' WHERE id_mobil = $id";
        if (mysqli_query($conn, $sql)) {
            header("location: ../pages/listCar-Tsania.php?message=update");
        } else {
            echo "Gagal";
        }
    }
    ?>