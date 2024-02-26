<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
<h1>PERPUSTAKAAN DIGITAL</h1> 

<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body"><?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori"));
                                    ?> Total Kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=kategori">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body"><?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));
                                    ?> Total Buku</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=buku">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body"><?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan"));
                                    ?> Total Ulasan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=ulasan">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
    <div class="card-body">
        <div class="row">
<div class="row">
    <div class="col-md-12">
    <table class="table table-bordered">
        <tr>
            <td width="200">Nama</td>
            <td width="1">:</td>
            <td><?php echo $_SESSION['user']['nama'];?></td>
        </tr>
        <tr>
            <td width="200">Email</td>
            <td width="1">:</td>
            <td><?php echo $_SESSION['user']['email'];?></td>
        </tr>
        <tr>
            <td width="200">Alamat</td>
            <td width="1">:</td>
            <td><?php echo $_SESSION['user']['alamat'];?></td>
        </tr>
        <tr>
            <td width="200">No Telpon</td>
            <td width="1">:</td>
            <td><?php echo $_SESSION['user']['no_telepon'];?></td>
        </tr>
        <tr>
            <td width="200">Level User</td>
            <td width="1">:</td>
            <td><?php echo $_SESSION['user']['level'];?></td>
        </tr>
        <tr>
            <td width="200">Tanggal Login</td>
            <td width="1">:</td>
            <td><?php echo date('d-m-y');?></td>
        </tr>
    </table>
</div>
</div>
</div>
</div>

</body>
</html>