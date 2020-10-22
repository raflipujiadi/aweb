<?php
include '../../controller/koneksi.php';
$id_user             = isset($_POST['id_user']) ? $_POST['id_user'] : '';
$username             = isset($_POST['username']) ? $_POST['username'] : '';
$password         = isset($_POST['password']) ? $_POST['password'] : '';
$level             = isset($_POST['level']) ? $_POST['level'] : '';
if ($id != "") {
    $query = "UPDATE tb_user SET username = $username, password = $password;
    $ubah = mysqli_query($koneksi, $query);
    echo 'data berhasil diubah';
}else{
    $query = "INSERT INTO tb_user SET $username='username',
				$password='password',
				$level='level'	WHERE $id='id_user'";
    $input = mysqli_query($koneksi, $query);
    echo 'data berhasil disimpan';
}
echo '<br> Terima Kasih';

?>
