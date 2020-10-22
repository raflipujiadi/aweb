<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/signin.css">
	<script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		body {
			background: url(pexels-photo-132957.jpeg);
			background-repeat: no-repeat;
			background-size: cover;

		}
	</style>
</head>

<body class="text-center">
	<div class="form-signin">

		<form class="" action="controller/loginaksi.php" method="POST">
			<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
			<?php
			if (isset($_GET['pesan'])) {
				if ($_GET['pesan'] == "gagal") {
					echo "Login gagal! username dan password salah! <hr>";
				} else if ($_GET['pesan'] == "logout") {
					echo "Anda telah berhasil logout <hr>";
				} else if ($_GET['pesan'] == "belum_login") {
					echo "Username atau password yang Anda masukkan salah <hr>";
				}
			}
			?>
			<label class="sr-only">Username</label>
			<input type="text" name="username" id="username" class="form-control" placeholder="Username" required="" autofocus="">
			<label class="sr-only">Password</label>
			<input type="password" name="password" id="passwordd" class="form-control" placeholder="Password" required="">
			<div class="checkbox mb-3">
				<!-- <label>
				<input type="checkbox" value="remember-me"> Remember me
			</label> -->
			</div>
			<button class="btn btn-lg btn-primary btn-block" value="LOGIN" type="submit">Sign in</button>
			<p class="mt-5 mb-3 text-muted">2017-2019</p>
		</form>
		<a href="controller/signup.php"><button class="btn btn-lg btn-dark" value="SIGNUP">Sign up</button></a>
	</div>
</body>

</html>