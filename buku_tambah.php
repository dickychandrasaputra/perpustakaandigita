<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post" enctype="multipart/form-data">
                    <?php
                        if(isset($_POST['submit'])){
                            $id_kategori = $_POST['id_kategori'];
                            $judul = $_POST['judul'];
                            $penulis = $_POST['penulis'];
                            $penerbit = $_POST['penerbit'];
                            $tahun_terbit = $_POST['tahun_terbit'];
                            $deskripsi = $_POST['deskripsi'];
                            $stok = $_POST['stok'];
                            $direktori = "berkas/";
                            $file_name = $_FILES['NamaFile']['name'];
                            move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name); 


                            $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori,judul,penulis,penerbit,tahun_terbit,deskripsi,file,stok) values('$id_kategori','$judul','$penulis','$penerbit','$tahun_terbit','$deskripsi','$file_name','$stok')");

                            if($query){
                                echo '<script>alert("Tambah data berhasil.");</script>';
                            }else{
                                echo '<script>alert("Tambah data gagal.");</script>';
                            }
                        }
                    ?>
                     <div class="rows">
                        <div class="col-md-4">Kategori</div>
                        <div class="col-md-8"><select name="id_kategori" class="form-control">
                            <?php
                                $kat = mysqli_query($koneksi, "SELECT*FROM kategori");
                                while($kategori = mysqli_fetch_array($kat)){
                                    ?>
                                    <option value="<?php echo $kategori['id_kategori'];?>"><?php echo $kategori['kategori'];?></option>
                                    <?php
                                }
                            ?>
                        </select></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Judul</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="judul" required oninvalid="setCustomValidity('Harap isi judul')" oninput="setCustomValidity('')"></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Penulis</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="penulis" required oninvalid="setCustomValidity('Harap isi penulis')" oninput="setCustomValidity('')"></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Penerbit</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="penerbit" required oninvalid="setCustomValidity('Harap isi penerbit')" oninput="setCustomValidity('')"></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8"><input type="date" class="form-control" name="tahun_terbit" required oninvalid="setCustomValidity('Harap isi tahun terbit')" oninput="setCustomValidity('')"></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Deskripsi</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="deskripsi" required oninvalid="setCustomValidity('Harap isi deskripsi')" oninput="setCustomValidity('')"></div>
                    </div>
                    <div class="col-md-2">Stok</div>
                        <div class="col-md-8"><input type="number" class="form-control" name="stok" required oninvalid="setCustomValidity('Harap isi stok')" oninput="setCustomValidity('')"></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Foto</div>
                        <div class="col-md-8"><input type="file" class="form-control" name="NamaFile" required oninvalid="setCustomValidity('Harap isi foto')" oninput="setCustomValidity('')"></div>
                    </div>
                    <div class="col-md-8">
                        <br>
                        <button type="submit" class="btn btn-dark" name="submit" value="submit">Simpan</button>
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <a href="?page=buku" class="btn btn-dark">Kembali<a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>