<?php
    require 'connector.php';

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    setcookie("bg-nav", $_POST["bg-nav"], time() + 3600, "/");

    if($password == $repassword){
        $mysql = "UPDATE user_tsania SET nama = '$nama', `password` = '$password', no_hp = '$no_hp' WHERE email = '$email'";
        if (mysqli_query($connector, $mysql)) {
            header("location: ../pages/Profil-Tsania.php");
        } else {
            echo "Gagal";
        }
    } else {
        echo "Password Tidak Cocok";
    }