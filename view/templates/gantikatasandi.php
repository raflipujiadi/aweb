<?php
	include("../templates/header-ganti.php");
	session_start();
?>	
	<!-- cek apakah sudah login -->
	<?php 
	
	?>
<body>
	<!-- start menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../../index.php">ABC Mart</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
	</div>
    </nav>
    <!-- finish menu -->
    <!-- start content -->
	
	<div class="container" style="padding-top: 30px">
	<h1><center>Ganti kata sandi</center></h1>
		<form action="gantikatasandi.php" method="post">
			<?php
				include '../../controller/koneksi.php';
				
			?>
			<input type="hidden" name="id_user" value="<?=$row['id_user'];?>">
			<input type="hidden" name="id_user" value="<?=$row['id_user'];?>">
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="password">
			</div>	
				
			<button type="submit" class="btn btn-primary">Ganti</button>
		</form>
		<br><br>
	</div>
	<!-- finish content -->
</body>
</html>