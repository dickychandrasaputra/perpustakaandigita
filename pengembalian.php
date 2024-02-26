<h1 class="mt-4">Peminjaman Buku</h1>
<div class="row">
    <div class="col-md-12">
        <a href="?page=buku_daftar" class="btn btn-primary">Lihat Buku</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspading="0">
        <tr>
            <th>No</th>
            <th>User</th>
            <th>Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Status Peminjaman</th>
            <th>Aksi</th>
        </tr>
        <?php
        $i = 1;
            $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user ON user.id_user = peminjaman.id_user LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=".$_SESSION['user']['id_user']);
            while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['judul'];?><a href=""> Lihat buku...</a></td>
                    <td><?php echo $data['tanggal_peminjaman'];?></td>
                    <td><?php echo $data['tanggal_pengembalian'];?></td>
                    <td><?php echo $data['status_peminjaman'];?></td>
                    <td>
                        <?php
                            if($data['status_peminjaman'] != 'dikembalikan'){
                        ?>
                        <a href="?page=pengembalian_ubah&&id=<?php echo $data['id_peminjaman'];?>" class="btn btn-info">Ubah</a>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjaman'];?>" class="btn btn-danger">hapus</a>
                        <?php
                            }
                        ?>
                    </td>
                </tr>
                <?php
            }
        ?>
        </table>
    </div>
</div>