<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
<div class="row">
    <div class="col-md-12">
        <a href="?page=buku_tambah" class="btn btn-primary">+ Tambah Buku</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspading="0">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        $i = 1;
            $query = mysqli_query($koneksi, "SELECT*FROM buku LEFT JOIN kategori ON buku.id_kategori = kategori.id_kategori");
            while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['kategori'];?></td>
                    <td><?php echo $data['judul'];?></td>
                    <td><?php echo $data['stok'];?></td>
                    <td><a href="berkas/<?php echo $data['file']?>" target="_blank"><img src="berkas/<?php echo $data['file']?>" width="50px"></a></td>
                    <td>
                        <a href="?page=buku_ubah&&id=<?php echo $data['id_buku'];?>" class="btn btn-dark">Ubah</a>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=buku_hapus&&id=<?php echo $data['id_buku'];?>" class="btn btn-dark">Hapus</a>
                    </td>
                </tr>
                <?php
            }
        ?>
        </table>
    </div>
</div>
</div>
</div>
</div>