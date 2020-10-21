<!DOCTYPE html>
<html>
<head>
    <title>Latihan Pertemuan Ke-15</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
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
    </style>
</head>
<body>
	<!-- start menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">latihan CRUD Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftarsiswa.php">Daftar Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentangsekolah.php">Tentang Sekolah</a>
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
	<h1><center>Daftar Calon Siswa PSB Online 2019</center></h1>
		<table class="table table-striped">
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Tgl Lahir</td>
				<td>Jenis Kelamin</td>
				<td>No. Telfon</td>
				<td>Email</td>
				<td>Asal Sekolah</td>
				<td>Alamat</td>
				<td>Aksi</td>
			</tr>
			<?php
				include '../controller/koneksi.php';
				$query="SELECT * FROM calon_siswa";
				$result=mysqli_query($koneksi, $query);
				$no=1;
				
				foreach ($result as $row) {
					?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$row['nama']?></td>
						<td><?=$row['tgl_lahir']?></td>
						<td><?=$row['jk']?></td>
						<td><?=$row['no_telfon']?></td>
						<td><?=$row['email']?></td>
						<td><?=$row['asal_sekolah']?></td>
						<td><?=$row['alamat']?></td>
						<td>
							<a href="edit.php?id_pendaftaran=<?=$row['id_pendaftaran'];?>" class="btn btn-warning">ubah</a>
							
							<!-- Trigger the modal with a button -->
						  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">hapus</button>

						  <!-- Modal -->
						  <div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							
							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <!-- <h4 class="modal-title">Modal Header</h4> -->
								</div>
								<div class="modal-body">
								  <p>Anda yakin ?</p>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">kembali</button>
								  <a href="../controller/delete.php?id_pendaftaran=
							<?=$row['id_pendaftaran'];?>" class="btn btn-danger">hapus</a>
								</div>
							  </div>
							  
							</div>
						  </div>
						</td>
					</tr>		
					<?php
				}
			?>
		</table>
		
	</div>
	<!-- finish content	 -->
</body>
</html>