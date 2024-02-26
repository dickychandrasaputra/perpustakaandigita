<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    $id = $_GET['id'];
                        if(isset($_POST['submit'])){
                            $id_buku = $_POST['id_buku'];
                            $id_user = $_SESSION['user']['id_user'];
                            $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                            $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                            $status_peminjaman = $_POST['status_peminjaman'];
                            $query = mysqli_query($koneksi, "UPDATE peminjaman SET id_buku='$id_buku', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian', status_peminjaman='$status_peminjaman' WHERE id_peminjaman=$id");

                            if($query){
                                echo '<script>alert("Ubah data berhasil.");</script>';
                            }else{
                                echo '<script>alert("Ubah data gagal.");</script>';
                            }
                        }
                        $query = mysqli_query($koneksi, "SELECT*FROM peminjaman WHERE id_peminjaman=$id");
                        $data = mysqli_fetch_array($query);
                    ?>
                    <div class="rows">
                        <div class="col-md-2">Status Peminjaman</div>
                        <div class="col-md-8">
                            <select name="status_peminjaman" class="form-control">
                            <option value="dipinjam" <?php if($data['status_peminjaman'] == 'dipinjam') echo 'selected';?>>Dipinjam</option>
                            <option value="dikembalikan" <?php if($data['status_peminjaman'] == 'dikembalikan') echo 'selected';?>>Dikembalikan</option>
                            </select>
                        </div>
                        </div>
                        <br>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-dark" name="submit" value="submit">Simpan</button>
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <a href="?page=peminjaman_buku" class="btn btn-dark">Kembali<a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>