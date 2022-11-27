<?php
    require 'connector.php';

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password == $repassword){
        $mysql = "INSERT INTO wad_modul4_tsania (nama, email, `password`, no_hp) VALUES ('$nama', '$email', '$password', '$no_hp')";
        if (mysqli_query($conn, $mysql)) {
            header("location: ../pages/Login-Tsania.php");
        } else {
            echo "Gagal";
        }
    } else {
        echo "Password Tidak Cocok";
    }
?>