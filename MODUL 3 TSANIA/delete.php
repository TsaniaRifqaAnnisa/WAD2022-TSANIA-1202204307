<?php
    include('connect.php');
    $id = $_GET['id'];
    $query = "DELETE FROM showroom_tsania_table WHERE id_mobil = $id";
    $sql = mysqli_query($connect, $query);
    
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<meta http-equiv = 'refresh' content ='1 url =Mycar-Tsania.php'>";
?>