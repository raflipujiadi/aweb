<?php
	include("../templates/header.php");
?>	

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['level']!="admin"){
		header("location:../index.php?role=notadmin");
	}
	?>
<body>
	<!-- start menu -->
    <?php
		include '../templates/header-ganti.php';
	?>
    <!-- finish menu -->
    <!-- start content -->
	
	<div class="container" style="padding-top: 30px">
	<h1><center>Edit nama akun</center></h1>
		<form action="update.php" method="post">
			<?php
				include '../../controller/koneksi.php';
				$id_user=$_GET['id_user'];
				$query="SELECT * FROM tb_user WHERE id_user='$id_user'";
				$result=mysqli_query($koneksi, $query);
				
				$row=mysqli_fetch_array($result);
			?>
			<input type="hidden" name="id_user" value="<?=$row['id_user'];?>">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?=$row['username']?>"></input>
			</div>	
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" class="form-control" value="<?=$row['password']?>"></input>
			</div>	
			<div class="form-group">
				<label>Role</label>
				<select type="text" name="level" class="form-control" value="<?=$row['level']?>">
					<option type="text" name="level" value="managers">manager</option>
					<option type="text" name="level" value="admin">admin</option>
					<option type="text" name="level" value="karyawan">karyawan</option>
				</select>
			</div>	
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
		<br><br>
	</div>
	<!-- finish content -->
</body>
</html>