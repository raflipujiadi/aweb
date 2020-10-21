<?php
	include 'koneksi.php';

	$username 			= $_POST['username'];
	$password	 	= md5($_POST['password']);
	
	$jumlah = mysqli_query($koneksi,"SELECT * from tb_user where username='$username' and password='$password'");
	$cek = mysqli_num_rows($jumlah);
	
	$query="INSERT INTO tb_user SET 
			username='$username',
			password='$password'
		";
	/* $login = mysqli_query($koneksi,"INSERT INTO tb_user (username,password ) VALUES('NULL',
'NULL','".$username."',MD5('".$password."')
)";); */	
	
	if($cek > 1){
		header("location:../view/admin/pendaftaran.php?pesan=gagal");
	}
	else{
		header("location:../view/admin/pendaftaran.php?pesan=sukses");
		mysqli_query($koneksi, $query);
	};
	/* header("location:../index.php?status=not_login"); */
?>