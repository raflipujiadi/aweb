<?php
include '../controller/koneksi.php';
$query = "SELECT id_barang AS 'a', nama_barang AS 'b', harga AS 'c' FROM tb_barang WHERE 1";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($result);

$no = 1;
$total = 0;
?>

<?php

foreach ($result as $row) {
?>


	<div>
		<div class="box">
			<div class="image fit">
				<img src="images/pic02.jpg" alt="">
			</div>
			<div class="content">
				<header class="align-center">
					<p><?= $row['b'] ?></p>
					<h2>$<?= $row['c'] ?></h2>
				</header>
				<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
				<footer class="align-center">
					<a href="#" class="button alt">Learn More</a>
				</footer>
			</div>
		</div>
	</div>

<?php
}
?>
</tr>