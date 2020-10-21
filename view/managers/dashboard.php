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
      <a class="navbar-brand" href="#">ABC Mart</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
          </li>
          <li class="nav-item active">
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
	<div class="container" style="padding-top: 30px">
	<h1><center>Daftar Akun Pengguna</center></h1>
		<table class="table table-striped">
			<tr>
				<td>No</td>
				<td>id user</td>
				<td>Username</td>
				<td>Password</td>
				<td>Level</td>
				<td colspan="2">Action</td>
			</tr>
			<?php
				include '../../controller/koneksi.php';
				$query="SELECT * FROM tb_user";
				$result=mysqli_query($koneksi, $query);
				$no=1;
				$total=0;
				
				foreach ($result as $row) {
					$total++;
					?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$row['id_user']?></td>
						<td><?=$row['username']?></td>
						<td><?=$row['password']?></td>
						<td><?=$row['level']?></td>
						<td>
							<a href="edit.php?id_user=<?=$row['id_user'];?>" class="btn btn-warning">ubah</a>
							
							<!-- Trigger the modal with a button -->
							<a href="delete.php?id_user=<?=$row['id_user'];?>" class="btn btn-danger">hapus</a>
							<!-- <a href="delete.php?id_user=?=$row['id_user'];?>" class="btn btn-danger" data-toggle="modal" data-target="#myModal">hapus</a> -->

						  <!-- Modal -->
						  <!-- <div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							 -->
							  <!-- Modal content-->
							<!--   <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
							 -->	  <!-- <h4 class="modal-title">Modal Header</h4> -->
							<!-- 	</div>
								<div class="modal-body">
								  <p>Anda yakin ?</p>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">kembali</button>
								  <a href="delete.php?id_user=?=$row['id_user'];?>" class="btn btn-danger">hapus</a>
								</div>
							  </div>
							 -->  
							</div>
						  </div>
						</td>
					</tr>
					<?php
				}
			?>
		</table>
						<h3>Total : <?= $total?></h3>
		
	</div>
	<!-- finish content	 -->
	
</body>
</html>