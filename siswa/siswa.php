<?php
session_start();
if (empty($_SESSION['nisn'])) {
    echo "<script>alert('Maaf Anda Belum Login);window.location.assign('../index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa - Aplikasi Pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="container mt-5 text-end">
            <a href="siswa.php?url=logout" class="btn btn-primary">Logout <i class="bi bi-box-arrow-right"></i></a>
        </div>
        <h3>Aplikasi Pembayaran SPP.</h3>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <div class="alert alert-info">
            Anda Login Sebagai Siswa<b><?= $_SESSION['nama'] ?></b> Aplikasi Pembayaran SPP.
        </div>
        <a href="siswa.php" class="btn btn-primary"> Siswa</a>
        
        <div class="card mt-2">
            <div class="card-body">
                <!-- ini isi web kita -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Selamat Datang Di Halaman Siswa.</h4>";
                    echo "Aplikasi Pembayaran SPP Digunakan Untuk Mempermudah 
                Dalam Mencatat Pembayaran Siswa / Siswi Disekolah.";
                    echo "<hr>";
                    include 'history-pembayaran.php';
                } else {
                    include $file . '.php';
                }
                ?>

            </div>
        </div>

    </div>


    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>