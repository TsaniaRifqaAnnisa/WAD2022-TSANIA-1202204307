<!doctype html>
    <html lang="en">
    <head>
        <title>EAD Rental Car</title>
    </head>
    <style>
        /* nav.navbar li a {
            color: white;
        } */
        .submit{
           width: 10%
        }
        input {
            width: 100%;
        }
        input[type=submit]{
            width: 10%
        }
        textarea {
            width: 100%;
        }
      
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <body>
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" style="justify-content: left;" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="Home-Tsania.php"> Home </a>
                        </li>

                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="MyCar-Tsania.php"> My Car </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class='container col m-5'>
            <h3>Tambah Mobil</h3>
            <p syle="color:gray">Tambah Mobil Baru Anda ke List Show Room</p>
            <br>

            <form action="./insert.php" method="POST" enctype="multipart/form-data">
                <label for="namamobil">Nama Mobil</label><br>
                <input type="text" id="namamobil" name="namamobil"><br><br>

                <label for="namapemilik">Nama Pemilik</label><br>
                <input type="text" id="namapemilik" name="namapemilik"><br><br>

                <label for="merk">Merk</label><br>
                <input type="text" id="merk" name="merk"><br><br>

                <label for="beli">Tanggal Beli</label><br>
                <input type="date" id="beli" name="beli"><br><br>

                <label for="deskripsi">Deskripsi</label><br>
                <textarea id="deskripsi" name="deskripsi"></textarea><br><br>

                <label for="foto">Foto</label><br>
                <input type="file" id="foto" name="foto" value="Pilih File"><br><br>

                <label for="exampleInputPassword1" class="form-control-plaintext">Status Pembayaran</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Lunas">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Lunas
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Belum Lunas">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Belum Lunas
                    </label>
                </div><br><br>
                <input type="submit" id="add" name="add" class="btn btn-primary" value="Selesai">
            </form>
        </div>
    </body>