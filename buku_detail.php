
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post" enctype="multipart/form-data">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                        if(isset($_POST['submit'])){
                            $id_kategori = $_POST['id_kategori'];
                            $judul = $_POST['judul'];
                            $penulis = $_POST['penulis'];
                            $penerbit = $_POST['penerbit'];
                            $tahun_terbit = $_POST['tahun_terbit'];
                            $deskripsi = $_POST['deskripsi'];
                            $direktori = "berkas/";
                            $file_name = $_FILES['NamaFile']['name'];
                            move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name); 

                            
                            
                        }
                        $query = mysqli_query($koneksi, "SELECT*FROM buku WHERE id_buku=$id");
                        $data = mysqli_fetch_array($query);
                    ?>

<div class="container">
	<h2 style=" width: 100%; border-bottom: 4px solid #ff8680"><b>Detail Buku</b></h2>

	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="berkas/<?= $data['file']; ?>" width="400">
			</div>
		</div>
        <div class="col-md-8">
				<table class="table table-striped">
                    <tbody>
						<tr>
							<td><b>Judul</b></td>
							<td><?= $data['judul']; ?></td>
						</tr>
                        <tr>
							<td><b>Penulis</b></td>
							<td><?= $data['penulis']; ?></td>
						</tr>
						<tr>
							<td><b>Penerbit</b></td>
							<td><?= $data['penerbit'];  ?></td>
						</tr>
                        <tr>
							<td><b>Tahun Terbit</b></td>
							<td><?= $data['tahun_terbit'];  ?></td>
						</tr>
                        <tr>
							<td><b>Deskripsi</b></td>
							<td><?= $data['deskripsi'];  ?></td>
						</tr>
					</tbody>
				</table>
                </form>
                </div>
                </div>
                </div>
                </div>
                </div> 
            </div>
        </div>
    </div>
</div>