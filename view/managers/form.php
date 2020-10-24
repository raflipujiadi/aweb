<?php
include '../../controller/koneksi.php';
$id = isset($_GET['id_barang']) ? $_GET['id_barang'] : '';
$query = "SELECT * from tb_barang WHERE id_barang='$id'";
$ambil_data = mysqli_query($koneksi, $query);
$getdata = mysqli_fetch_assoc($ambil_data);
?>
<h3>Edit Data Barang</h3>
<form action="simpan.php" method="POST">
    <div class="form">
        <label class="label" for="nama_barang">Nama Barang</label>
        <input name="nama_barang" type="text" id="nama_barang" class="input" placeholder="Input Nama barang" value="<?php if (isset($id)) echo $getdata['nama_barang']; ?>">
    </div>
	<br>
	<div class="file is-boxed">
  <label class="file-label">
    <input class="file-input" type="file" name="resume">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>
  </label>
</div>
    <div class="form">
        <input class="label" name="id_barang" type="hidden" id="id_barang" class="input" value="<?php echo $getdata['id_barang'] ?>">
    </div><br>
    <div class="field is-grouped">
  <div class="control">
    <button type="submit" class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-link is-light">Cancel</button>
  </div>
</div>
</form>

