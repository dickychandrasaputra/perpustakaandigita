<h1 class="mt-4">Ulasan Buku</h1>
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
                            $ulasan = $_POST['ulasan'];
                            $rating = $_POST['rating'];
                            $query = mysqli_query($koneksi, "UPDATE ulasan SET id_buku='$id_buku', ulasan='$ulasan', rating='$rating' WHERE id_ulasan=$id");

                            if($query){
                                echo '<script>alert("Tambah data berhasil.");</script>';
                            }else{
                                echo '<script>alert("Tambah data gagal.");</script>';
                            }
                        }
                        $query = mysqli_query($koneksi, "SELECT*FROM ulasan WHERE id_ulasan=$id");
                        $data = mysqli_fetch_array($query);
                    ?>
                     <div class="rows">
                        <div class="col-md-2">Buku</div>
                        <div><select name="id_buku" class="form-control">
                            <?php
                                $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                                while($buku = mysqli_fetch_array($buk)){
                                    ?>
                                    <option <?php if($data['id_buku'] == $buku['id_buku']) echo 'selected';?> value="<?php echo $buku['id_buku'];?>"><?php echo $buku['judul'];?></option>
                                    <?php
                                }
                            ?>
                        </select></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Ulasan</div>
                        <div><input type="text" class="form-control" name="ulasan" value="<?php echo $data['ulasan']?>"></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Rating</div>
                        <select name="rating" class="form-control">
                            <?php
                                for($i = 1; $i<=10; $i++){
                                    ?>
                                    <option <?php if($data['rating'] == $i) echo 'selected';?>><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=ulasan" class="btn btn-danger">Kembali<a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>