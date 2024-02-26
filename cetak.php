<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>
		<div class="container">
			<h1>Laporan Peminjaman Buku</h1>
			<br>
			<br>
			<b><?php
				if(isset($_POST['filter'])){
					$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
					$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
					echo "Dari Tanggal ".$dari_tgl."Sampai Tanggal ".$sampai_tgl;
				}
			?></b>
			<br>
			<br>
		<table class="table table-bordered" border="1" cellspading="5" cellspacing="0" width="80%">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>User</th>
					<th>Buku</th>
					<th>Tanggal Peminjaman</th>
					<th>Tanggal Pengembalian</th>
					<th>Status Peminjaman</th>
				</tr>
			</thead>
			<?php
				$i = 1;

				if(isset($_POST['filter'])){
					$dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
					$sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
					$query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user ON user.id_user = peminjaman.id_user LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku WHERE tanggal_peminjaman BETWEEN '$dari_tgl' AND '$sampai_tgl'");
				}else{
					$query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user ON user.id_user = peminjaman.id_user LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku");
				}
				while($data = mysqli_fetch_array($query)){
			?>
				<tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['judul'];?></td>
                    <td><?php echo $data['tanggal_peminjaman'];?></td>
                    <td><?php echo $data['tanggal_pengembalian'];?></td>
                    <td><?php echo $data['status_peminjaman'];?></td>
                </tr>
			<?php
				}
			?>
		</table>
		</div>
	</center>
</body>
</html>
<script>
    window.print();
    setTimeout(function(){
        window.close();
    },100);
</script>