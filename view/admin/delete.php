<?php
include "../../controller/koneksi.php";

$id_user = $_GET['id_user'];

$query = "DELETE FROM tb_user WHERE id_user = $id_user";
mysqli_query($koneksi, $query);
?>
<script type="text/javascript">
	window.location.href = "http://localhost/aweb/view/admin/index.php?hal=data";
</script>