<?php
include "koneksi.php";
$id_barang             = isset($_POST['id_barang']) ? $_POST['id_barang'] : '';
$nama_barang             = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$fileName = $_FILES['brks']['tmp_name'];
$tj = basename($_FILES['brks']['name']);
$tujuan = "../../assets/img/barang/".$tj;
$terupload = move_uploaded_file($fileName, $tujuan);


if($terupload && $id_barang != NULL){
	
    $query = "UPDATE tb_barang SET nama_barang='$nama_barang',
				img='$tj'
				WHERE id_barang='$id_barang'";
    mysqli_query($koneksi, $query);
	header ('location:http://localhost/aweb/view/managers/index.php?act=shbarang');
    echo 'data berhasil diubah';
}else{
    $query = "INSERT INTO tb_barang SET nama_barang='$nama_barang',
				img='$tj'
				";
    mysqli_query($koneksi, $query);
	header ('location:http://localhost/aweb/view/managers/index.php?act=shbarang');
    echo 'data berhasil disimpan';
}
echo '<br> Terima Kasih';

	echo 'gagal upload !';
	header ('location:http://localhost/aweb/view/managers/index.php?act=shbarang');
?>
