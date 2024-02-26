<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                        if(isset($_POST['submit'])){
                            $id_buku = $_POST['id_buku'];
                            $id_user = $_SESSION['user']['id_user'];
                            $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                            $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                            $status_peminjaman = $_POST['status_peminjaman'];
                            $jumlah = $_POST['jumlah'];
                            $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_buku,id_user,tanggal_peminjaman,tanggal_pengembalian,status_peminjaman,jumlah) VALUES('$id_buku','$id_user','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman','$jumlah')");

                            if($query){
                                echo '<script>alert("Tambah data berhasil.");</script>';
                            }else{
                                echo '<script>alert("Tambah data gagal.");</script>';
                            }
                        }
                    ?>
                     <div class="rows">
                        <div class="col-md-2">Buku</div>
                        <div><select name="id_buku" class="form-control">
                            <?php
                                $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                                while($buku = mysqli_fetch_array($buk)){
                                    ?>
                                    <option value="<?php echo $buku['id_buku'];?>"><?php echo $buku['judul'];?></option>
                                    <?php
                                }
                            ?>
                        </select></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Tanggal Peminjaman</div>
                        <div><input type="date" class="form-control" name="tanggal_peminjaman" required="required"></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Tanggal Pengembalian</div>
                        <div><input type="date" class="form-control" name="tanggal_pengembalian" required="required"></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Jumlah</div> 
                        <div><input type="number" class="form-control" name="jumlah" required="required"></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Status Peminjaman</div>
                        <div class="col-md-8">
                            <select name="status_peminjaman" class="form-control" required="required">
                            <option value="dipinjam">Dipinjam</option>
                            <option value="dikembalikan">Dikembalikan</option>
                            </select>
                        </div>
                        </div>
                    <div class="col-md-8">
                        <br>
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=buku_daftar" class="btn btn-danger">Kembali<a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>