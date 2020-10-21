<?php
	include("../templates/header.php");
?>	

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['level']!="admin"){
		header("location:index.php?pesan=gagal");
	}
	?>
	<!-- start menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">ABC Mart</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
		<div class="nav-item" style="margin-left:1%">
          <a class="btn btn-danger" href="logout.php">Logout</a>
		</div>  
      </div>
    </nav>
    <!-- finish menu -->
    <!-- start content -->
	<div class="container" style="padding-top:30px">
		<h1><center>Form Pendaftaran Pengguna</center></h1>
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<br> Username yang Anda gunakan sudah ada <hr>";
			}else if($_GET['pesan'] == "sukses"){
				echo "<br> Anda telah berhasil daftar <hr>";
			}
		
		}
		?>
		<form action="../../controller/insert.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username"></input>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="password"></input>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
		<br><br>
	</div>
	<!-- finish content -->
</body>
</html>