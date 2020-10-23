<?php
include "koneksi.php";
$id_user             = isset($_POST['id_user']) ? $_POST['id_user'] : '';
$username             = isset($_POST['username']) ? $_POST['username'] : '';
$password         = isset($_POST['password']) ? $_POST['password'] : '';
$level             = isset($_POST['level']) ? $_POST['level'] : '';
if ($id_user != NULL) {
    $query = "UPDATE tb_user SET username='$username',
				password='md5($password)',
				level='$level'
				WHERE id_user='$id_user'";
    mysqli_query($koneksi, $query);
    echo 'data berhasil diubah';
}else{
    $query = "INSERT INTO tb_user SET username='$username',
				password='md5($password)',
				level='$level'
				";
    mysqli_query($koneksi, $query);
    echo 'data berhasil disimpan';
}
echo '<br> Terima Kasih';
?>

<script type="text/javascript">
	window.location.href = "http://localhost/aweb/view/admin/index.php?act=shmembers";
</script>



