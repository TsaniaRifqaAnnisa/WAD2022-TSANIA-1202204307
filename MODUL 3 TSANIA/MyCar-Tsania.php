<?php
    include('connect.php');
    $query = "SELECT * FROM showroom_tsania_table";
    $sql = mysqli_query($connect, $query);
?>


<!doctype html>
    <html lang="en">
    <head>
        <title>EAD Rental Car</title>
    </head>
    <style>
        /* li:last-child  {
            background-color: white;
        } */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 300
        }

        .container {
            padding: 2px 16px;
        }
        
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top">
        <div class="container-fluid">
            <div class="navbar-collapse collapse justify-content-between" style="justify-content: left;" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="Home-Tsania.php"> Home </a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="MyCar-Tsania.php"> My Car </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button type="button" class="btn btn-default" style="background-color: aliceblue; text-decoration: none; color:blue;"><a href="AddCar-Tsania.php" style="text-decoration: none;">Add Car</a></button>
                      </li>
                </ul>
            </div>
        </div>
    </nav>

        <div class='container col m-5'>

        <h2>My Show Room</h2>
        <p style="color:gray">List Show Room Tsania - 1202204307</p>
            
        <div class="container d-flex flex-wrap align-items-center">
            <?php 
                    while($cars = mysqli_fetch_array($sql)){
                
            ?>
            <div class="m-2 card">
                <div class="card" style="width:300px">
                    <img src="<?php echo $cars['foto_mobil'];?>" width=100% height=200>
                    <div class='card-body'>
                        <div class='container'>
                            <h5 class='card-title'> <?php echo $cars['nama_mobil'];?> </h5>
                            <p class='card-text'> <?php echo substr($cars['deskripsi'],0,50)."...";?> </p>
                            <a href='Detail-Tsania.php?id=<?php echo $cars['id_mobil'];?>' class='btn btn-primary'>Detail</a>
                            <a href='delete.php?id=<?php echo $cars['id_mobil'];?>' class='btn btn-danger'>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
            
    
        <footer>
            <?php
                $jumlah = mysqli_num_rows($sql);
                echo "Jumlah Mobil: $jumlah";
            ?>
        </footer>
        </div>

    </body>