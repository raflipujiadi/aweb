<?php
	include 'koneksi.php';

	$id_barang	= $_POST['id_barang'];
	$nama_barang	= $_POST['nama_barang'];
	
	$query="UPDATE tb_barang SET nama_barang='$nama_barang' WHERE id_barang='$id_barang'
			";
			
	/* echo $query; */
	mysqli_query($koneksi, $query);
	
	header('location:../view/karyawan/dashboard.php');
?>