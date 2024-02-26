<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    $id = $_GET['id'];
                        if(isset($_POST['submit'])){
                            $kategori = $_POST['kategori'];
                            $query = mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori' WHERE id_kategori=$id");

                            if($query){
                                echo '<script>alert("Tambah data berhasil.");</script>';
                            }else{
                                echo '<script>alert("Tambah data gagal.");</script>';
                            }
                        }
                        $query = mysqli_query($koneksi, "SELECT*FROM kategori WHERE id_kategori=$id");
                        $data = mysqli_fetch_array($query);
                    ?>
                    <div class="rows">
                        <div class="col-md-4">Nama Kategori</div>
                        <div class="col-md-8"><input type="text" class="form-control" value="<?php echo $data['kategori'];?>" name="kategori" required oninvalid="setCustomValidity('Harap isi kategori')" oninput="setCustomValidity('')"></div>
                    </div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-dark" name="submit" value="submit">Simpan</button>
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <a href="?page=kategori" class="btn btn-dark">Kembali<a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>