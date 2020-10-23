<?php
	include '../../controller/koneksi.php';
	
	$id_user             = isset($_POST['id_user']) ? $_POST['id_user'] : '';
	
	$query = "DELETE FROM tb_user WHERE id_user = '$id_user'";
	mysqli_query($koneksi,$query);
	
?>
<script type="text/javascript">
	window.location.href = "http://localhost/aweb/view/admin/index.php?";
</script>