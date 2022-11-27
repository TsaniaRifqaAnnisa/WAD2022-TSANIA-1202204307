<!doctype html>
    <html lang="en">
    <head>
        <title>EAD Rental Car</title>
    </head>
    <style>
        /* nav.navbar li a {
            color: white;
        } */
        div.card{
            border-color: white;
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
                            <a class="nav-link active" href="MyCar-Tsania.php"> My Cars </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <br><br>
        <div class='container col m-5'>
            <table>
                <th>
                    <td>
                        <div class="card">
                            <h1>Selamat Datang di Show Room Tsania</h1><br>
                            <p style="color:gray;">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
                            <br>
                            <form action="./MyCar-Tsania.php">
                                <input type="submit" class="btn btn-primary" value="My Car">  
                            </form>
                            <br><br>
                            <div style="width: 100%; display: table;">
                                <div style="display: table-row; height: 100px;">
                                    <div style="width: 25%; display: table-cell;">
                                        <img src="logo-ead.png" widht="50px" height="30px">
                                    </div>
                                    <div style="display: table-cell;">
                                    <p style="color:gray;">Tsania_1202204307</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card">
                            <img src="Car.png" widht="500px" height="350px">
                        </div>
                    </td>
                </th>
            </table>
        </div>
        
    </body>