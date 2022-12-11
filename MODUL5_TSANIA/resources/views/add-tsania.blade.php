<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/home-tsania">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/list-tsania">Mycar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container py-5">
            <h1>Add New Car</h1>
            <p>Tambah Mobil Baru Anda ke List Show Room</p>
            <form method="post" action="/" enctype="multipart/form-data">
                <label for="mobil" class="fw-bold">Nama Mobil</label>
                <input type="text" id="mobil" class="form-control mb-3" name="mobil" placeholder="Nama Mobil" required>
                <label for="pemilik" class="fw-bold">Nama Pemilik</label>
                <input type="text" id="pemilik" class="form-control mb-3" name="pemilik" value="Tsania Rifqa Annisa 1202204307" readonly>
                <label for="merk" class="fw-bold">Merk</label>
                <input type="text" id="merk" class="form-control mb-3" name="merk" placeholder="Merk Mobil" required>
                <label for="date" class="fw-bold">Tanggal Beli</label>
                <input type="date" id="date" class="form-control mb-3" name="date" required>
                <label for="deskripsi" class="fw-bold">Deskripsi</label>
                <textarea id="deskripsi" class="form-control mb-3" name="deskripsi"></textarea>
                <label for="foto" class="fw-bold">Foto</label>
                <input type="file" id="foto" class="form-control mb-3" name="foto">
                <div class="mb-3">
                    <div class="fw-bold">Status Pembayaran</div>
                    <input type="radio" id="lunas" class="form-check-input me-2" name="pembayaran" value="Lunas">
                    <label for="lunas" class="font-weight-bold">Lunas</label>
                    <input type="radio" id="belum" class="form-check-input ms-3 me-2" name="pembayaran" value="Belum Lunas">
                    <label for="belum" class="font-weight-bold">Belum Lunas</label>
                </div>
                <button type="submit" class="form-control btn btn-primary"name='selesai'>Submit</button>
            </form>
        </div>
    </body>
</html>