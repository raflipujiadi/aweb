<?php
	include "../../controller/koneksi.php";
	
	$id_user = $_GET['id_user'];
	
	$query = "DELETE FROM tb_user WHERE id_user = $id_user";
	mysqli_query($koneksi,$query);
	
	header('location:dashboard.php');