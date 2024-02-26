<?php
    include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-4 text-center mb-1">
					<h2 class="heading-section">Silahkan Register</h2>
				</div>
			</div>
			<?php
            if(isset($_POST['register'])){
                $nama = $_POST['nama'];
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];
                $telp = $_POST['no_telepon'];
                $level = $_POST['level'];

                $insert = mysqli_query($koneksi, "INSERT INTO user(nama,username,password,email,alamat,no_telepon,level) VALUES('$nama','$username','$password','$email','$alamat','$telp','$level')");

                 if($insert){
                     echo '<script>alert("Selamat, Register berhasil"); location.href="login.php"</script>';
                }else{
                     echo '<script>alert("Maaf, Register gagal");</script>';
                }
            }
        ?>
			<div class="row justify-content-center">
				<div class="col-md-1 col-lg-4">
					<div class="login-wrap p-0">
		      	<form method="post" class="signin-form">
                  <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Full Name" name="nama" required oninvalid="setCustomValidity('Harap isi fullname')" oninput="setCustomValidity('')">
		      		</div>
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name="username" required oninvalid="setCustomValidity('Harap isi username')" oninput="setCustomValidity('')">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password " required oninvalid="setCustomValidity('Harap isi password')" oninput="setCustomValidity('')">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Email" name="email" required oninvalid="setCustomValidity('Harap isi email')" oninput="setCustomValidity('')">
		      		</div>
                      <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Address" name="alamat" required oninvalid="setCustomValidity('Harap isi address')" oninput="setCustomValidity('')">
		      		</div>
                      <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Phone Number" name="no_telepon" required oninvalid="setCustomValidity('Harap isi phone number')" oninput="setCustomValidity('')">
		      		</div>
                      </div>
                      <div class="form-group">
                      <label for="level">Level</label>
                        <select name="level" class="form-control">
							<option value="admin">Admin</option>
                            <option value="peminjam">Peminjam</option>
                         </select>
                         </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="register" value="Register">Sign Up</button>
	            </div>
				</form>
				<form action="login.php">
				<div class="form-group">
	            	<button class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
				</form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

