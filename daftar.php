<?php include('cek_daftar.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Page | IndieTalk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/favicon2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="sources/login_sources/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="sources/login_sources/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="sources/login_sources/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="sources/login_sources/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="sources/login_sources/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="sources/login_sources/css/util.css">
	<link rel="stylesheet" type="text/css" href="sources/login_sources/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="sources/login_sources/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="daftar.php" method="post">
					<span class="login100-form-title">

						Member Registration
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan nama lengkap yang benar!">
						<input class="input100" type="text" name="nama" placeholder="nama lengkap" value="<?php echo $nama; ?>" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan username yang benar!">
						<input class="input100" type="text" name="username" placeholder="username" value="<?php echo $username; ?>" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan Email yang benar!">
						<input class="input100" type="text" name="email" placeholder="email" value="<?php echo $email; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan password yang benar!">
						<input class="input100" type="password" name="password_1" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan password yang benar!">
						<input class="input100" type="password" name="password_2" placeholder="Konfirmasi Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<!-- <input type="hidden" id="level" name="level" value="1"> -->
						<!-- <div class="wrap-input100 validate-input" data-validate = "Masukkan password yang benar!">
						<select name="level">

						<option value="3">User</option>
						<option value="2">Creator</option>

						</select>
						</div> -->

		            
		                <div class="form-group">
		                  
		                  <select class="form-control" name="level">
		                      <option value="3">User</option>
		                      <option value="2">Creator</option>
		                  </select>
		              </div>
					
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="register" name="reg_user">
							Daftar
						</button>
					</div>

					<br>
					
					<i class="fa fa-home m-l-5" aria-hidden="true"></i>	
							<a class="txt2" href="index.php">
							Kembali Ke Home
							
						</a>
					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
							sudah punya akun? masuk
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					
					
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->	
	<script src="sources/login_sources/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="sources/login_sources/vendor/bootstrap/js/popper.js"></script>
		<script src="sources/login_sources/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="sources/login_sources/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="sources/login_sources/	vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="sources/login_sources/js/main.js"></script>

</body>
</html>