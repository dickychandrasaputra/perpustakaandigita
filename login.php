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
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Silahkan Login</h2>
				</div>
			</div>
			<?php
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = md5($_POST['password']);

                    $data = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");
                    $cek = mysqli_num_rows($data);
                        if($cek > 0){
                            $_SESSION['user'] =mysqli_fetch_array($data);
                            echo '<script>alert("Selamat datang, Login berhasil"); location.href="index.php";</script>';
                        }else{
                            echo '<script>alert("Maaf, Username/Password salah")</script>';
                            }
                        }
        ?>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name="username" required oninvalid="setCustomValidity('Harap isi username')" oninput="setCustomValidity('')">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required oninvalid="setCustomValidity('Harap isi password')" oninput="setCustomValidity('')">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="login" value="Login">Sign In</button>
	            </div>
				</form>
				<form action="register.php">
				<div class="form-group">
	            	<button class="form-control btn btn-primary submit px-3">Sign Up</button>
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

