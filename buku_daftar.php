<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
	<h2 style="width: 100%; border-bottom: 4px solid #ff8680"><b>Daftar Buku</b></h1>
    <a href="?page=peminjaman_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Pinjam Buku</a>
       <div class="row">
       <?php
            $query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori");
            while($data = mysqli_fetch_array($query)){
                ?>
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="berkas/<?php echo $data['file']?>">
							<div class="caption">
								<h3><?php echo substr($data['judul'], 0, 50)?></h3>
									<div class="row">
										<div class="col-md-6">
											<a href="buku_detail.php?id=<?php echo $data['id_buku'] ?>">Details</a>
										</div>
									</div>
							</div>
                </div>
                </a>
                <?php
            }
        ?>
       </div>
</div>
<input type ="text">