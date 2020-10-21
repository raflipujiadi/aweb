<?php
	include 'koneksi.php';

	$id_barang 			= $_POST['id_barang'];
	$id_jenis_barang	 	= $_POST['id_jenis_barang'];
	$nama_barang 			= $_POST['nama_barang'];
	$harga 			= $_POST['harga'];
	$stok 			= $_POST['stok'];
	
	$query="INSERT INTO tb_barang SET id_barang='$id_barang',
			id_jenis_barang='$id_jenis_barang',
			nama_barang='$nama_barang',
			harga='$harga',
			stok='$stok'
		";
	/* echo $query; */
	mysqli_query($koneksi, $query);
	
	header('location:../view/karyawan/dashboard.php');
?>