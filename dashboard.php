<?php
session_start();
if (isset($_SESSION['status'])) {
    include('koneksi.php');
    $nama       = $_SESSION['nama'];
    $jabatan    = $_SESSION['jabatan'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Taruna Bangsa</title>
    <!-- fil css ini harus dihubungkan menggunakan tag link -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <style>
       table{
            max-width: 100%;
            font-size : 14px;
        }
        body {
            background-color : #1b1b1c;
        }
        h1 {
            color : #0d6efd;
            font-family : Georgia, serif;
        }
        .footer {
            color : #0d6efd;
        }
        .container {
            color : #0d6efd;
        }
        .modal-content{
            background-color : #1b1b1c;
        }
        .modal-title {
            color : #0d6efd;
        }
        .form-group {
            color : #0d6efd;
        }
        body {
            color : whitesmoke;
        }
        th {
            color : #0d6efd;
        }
        td {
            color : #FFC107;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <h1><center>Perpustakaan TB</center></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">LANG</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/lang/dashboard.php">Home</a>
                            </li>

                        <!------- Struktur Kondisi untuk memunculkan menu petugas, sesuai jabatannya---------------------------------------------------------------------->
                            <?php
                                if ($jabatan == "Kepala Perpustakaan"){
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="?page=petugas">Petugas</a>
                            </li>
                            <?php
                                }
                            ?>
                        <!----------------------------------------------------------------------------------------------------------------------------------------------->
                        
                            <li class="nav-item">
                                <a class="nav-link" href="?page=anggota">Anggota</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=buku">Buku</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-dark" type="submit">Search</button>
                        </form>
                        <a href="?page=logout"><button class="btn btn-outline-danger">Logout</button></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Control menu navigasi -->
                <?php
                if(isset($_GET['page'])){
                    if ($_GET['page']=="anggota") {
                        include('anggota.php');
                    }elseif($_GET['page']=="anggota-delete"){
                        include('anggota-delete.php');
                    }elseif($_GET['page']=="anggota-insert"){
                        include('anggota-insert.php');
                    }elseif($_GET['page']=="anggota-edit"){
                        include('anggota-edit.php');
                    }elseif($_GET['page']=="anggota-edit-proses"){
                        include('anggota-edit-proses.php');
                    }elseif($_GET['page']=="petugas") {
                        include('petugas.php');
                    }elseif($_GET['page']=="petugas-delete"){
                        include('petugas-delete.php');
                    }elseif($_GET['page']=="petugas-insert"){
                        include('petugas-insert.php');
                    }elseif($_GET['page']=="petugas-edit"){
                        include('petugas-edit.php');
                    }elseif($_GET['page']=="petugas-edit-proses"){
                            include('petugas-edit-proses.php');
                    }elseif($_GET['page']=="logout"){
                        include('logout.php');
                    }else{
                        echo "<h1>Halaman yang anda cari tidak ditemukan!";
                    }
                }else{
                    echo "<br><br><center><h1>Selamat Datang ".$nama."</h1></center>";
                    echo "<center><h1>".$jabatan."</h1></center><br><br>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <center>@GILANG YOGA PRATAMA 2021</center>
            </div>
        </div>
    </div>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
else
{
    ?>
    <script>
    window.location.href='index.php';
    </script>
    <?php
}
?>

<!--rasmuslerdorf-->