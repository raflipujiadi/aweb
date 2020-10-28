<?php
	$namaFile = $_FILES['berkas']['name'];
	$namaSementara = $_FILES['berkas']['tmp_name'];

	$dirUpload = "../assets";
	
	$terupload = move_uploaded_file($namaSementara, $dirUpload, $namaFile);
	
	if ($terupload){
		echo "Upload berhasil !";
		echo "Link : <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
	}else{
		echo "Upload Gagal";
	}
?>