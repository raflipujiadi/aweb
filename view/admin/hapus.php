<?php
	include '../../controller/koneksi.php';
	$id 			= isset($_GET['id']) ? $_GET['id'] : '';
		
	$query="DELETE FROM tb_user WHERE id='$id'
		";
	mysqli_query($konek, $query);
	
?>

<script type="text/javascript">
		window.location.href = "http://localhost/dts2020_B/index.php?hal=data";
	</script>