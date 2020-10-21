<?php
	include '../../controller/koneksi.php';

	$id_user	= $_POST['id_user'];
	$username	= $_POST['username'];
	$password	 	= md5($_POST['password']);
	$role	 	= $_POST['level'];

//	$password	 	= md5($_POST['password']);

	
	$query="UPDATE tb_user SET username='$username', password='$password', level='$role' WHERE id_user='$id_user'
			";
			
	/* echo $query; */
	mysqli_query($koneksi, $query);
	
	header('location:dashboard.php');
