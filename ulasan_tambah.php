<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                        if(isset($_POST['submit'])){
                            $id_buku = $_POST['id_buku'];
                            $id_user = $_SESSION['user']['id_user'];
                            $ulasan = $_POST['ulasan'];
                            $rating = $_POST['rating'];
                            $query = mysqli_query($koneksi, "INSERT INTO ulasan(id_buku,id_user,ulasan,rating) VALUES('$id_buku','$id_user','$ulasan','$rating')");

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
                        <div class="col-md-2">Ulasan</div>
                        <div><input type="text" class="form-control" name="ulasan"></div>
                    </div>
                    <div class="rows">
                        <div class="col-md-2">Rating</div>
                        <select name="rating" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
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