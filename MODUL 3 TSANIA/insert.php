<?php
    include('connect.php');
    if(isset($_POST["add"])){
        $car = $_POST['namamobil'];

        $owner = $_POST['namapemilik'];
        $merk = $_POST['merk'];
        $buy = $_POST['beli'];
        $description = $_POST['deskripsi'];

        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['foto']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        if(!in_array($ext,$ekstensi) ) {
        
        }else{	
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], './gambar/'.$rand.'_'.$filename);
        }

        $status = $_POST['status'];

        $query = mysqli_query($connect, "INSERT INTO showroom_tsania_table VALUES('','$car', '$owner', '$merk', '$buy', '$description', '$filename', '$status')");
        
    }

    if($query){?>
        <script> alert("Data berhasil dimasukkan"); window.location.href = "./Mycar-Tsania.php"; </script>
    <?php } else{?>
        <script> alert("Data berhasil dimasukkan"); window.location.href = "./Mycar-Tsania.php"; </script>
    <?php }
?>
