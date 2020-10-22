<?php
include "controller/koneksi.php";
$query = "SELECT * from tb_user";
$ambil_data = mysqli_query($koneksi, $query);
?>
<!DOCTYPE HTML>

<html>

<head>
	<?php
	include 'view/header.php';
	?>
</head>

<body>
	<?php
  if (isset($hal)) {
    //jika $hal ada isinya
    include $hal . ".php";
  } else {
    include "depan.php";
  }
  ?>
</body>

	<!-- Footer -->
	<footer id="footer">
		<?php
			include 'view/footer.php'
		?>
	</footer>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".grid-style").load("model/ambildatabarang.php");
			$(".bannerz").load("model/slider.php");
		});
	</script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
</html>