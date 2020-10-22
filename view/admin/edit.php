<?php
	include '../../contoller/koneksi.php';
	$id 			= isset($_GET['id']) ? $_GET['id'] : '';
		
	$query="UPDATE tb_user WHERE id='$id'
		";
	mysqli_query($koneksi, $query);
	
?>

<script type="text/javascript">
		window.location.href = "localhost/aweb/view/login.php";
	</script>