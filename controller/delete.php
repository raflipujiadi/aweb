<?php
	include "koneksi.php";
	
	$id_barang = $_GET['id_barang'];
	
	$query = "DELETE FROM tb_barang WHERE id_barang = $id_barang";
	mysqli_query($koneksi,$query);
	
	header('location:../view/karyawan/dashboard.php');