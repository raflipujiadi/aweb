<?php
include    '../../controller/koneksi.php';
$id             = isset($_POST['id_user']) ? $_POST['id_user'] : '';
$nama             = isset($_POST['username']) ? $_POST['username'] : '';
$password         = isset($_POST['password']) ? $_POST['password'] : '';
$level             = isset($_POST['level']) ? $_POST['level'] : '';

if ($id != "") {
    $query = "UPDATE tb_user SET username='$nama',
				'password'='$password',
				'level'='$level'
				WHERE id='$id'";
    $ubah = mysqli_query($konek, $query);
    echo 'data berhasil diubah';
} else {
    $query = "INSERT INTO tb_user SET username='$nama',
				'password'='$password',
				'level'='$level',
			";
    $input = mysqli_query($konek, $query);
    echo 'data berhasil disimpan';
}
echo 'data berhasil disimpan';
?>

<script type="text/javascript">
    window.location.href = "http://localhost/aweb/view/admin/index.php";
</script>