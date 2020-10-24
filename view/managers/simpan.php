<?php
include "koneksi.php";
$id_barang             = isset($_POST['id_barang']) ? $_POST['id_barang'] : '';
$nama_barang             = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$img         = isset($_POST['img']) ? $_POST['img'] : '';

if ($id_barang != "") {
    $query = "UPDATE tb_barang SET nama_barang='$nama_barang'
				WHERE id_barang='$id_barang'";
    mysqli_query($koneksi, $query);
    echo 'data berhasil diubah';
} else {
    $query = "INSERT INTO tb_barang SET nama_barang='$nama_barang'
			";
    mysqli_query($koneksi, $query);
    echo 'data berhasil disimpan';
}
echo 'data berhasil disimpan';
?>

<script type="text/javascript">
	window.location.href = "http://localhost/aweb/view/managers/index.php?act=shbarang";
</script>


