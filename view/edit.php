<?php
	include("../templates/header.php");
?>	

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['level']!="karyawan"){
		/* header("location:../index.php?role=notkaryawan"); */
		header("location:index.php?pesan=gagal");
	};
	?>
	<!-- start menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Daftar Barang</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- finish menu -->
    <!-- start content -->
	
	<div class="container" style="padding-top: 30px">
	<h1><center>Edit Daftar Barang</center></h1>
		<form action="../controller/update.php" method="post">
			<?php
				include '../controller/koneksi.php';
				$id_barang=$_GET['id_barang'];
				$query="SELECT * FROM tb_barang WHERE id_barang='$id_barang'";
				$result=mysqli_query($koneksi, $query);
				
				$row=mysqli_fetch_array($result);
			?>
			<input type="hidden" name="id_barang" value="<?=$row['id_barang'];?>">
			<div class="form-group">
				<label>Nama Jenis Barang</label>
				<input type="text" name="nama_barang" class="form-control" value="<?=$row['nama_barang']?>"></input>
			</div>	
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
		<br><br>
	</div>
	<!-- finish content -->
</body>
</html>