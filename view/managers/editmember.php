<?php
include '../../controller/koneksi.php';
$id_barang       = isset($_GET['id_barang']) ? $_GET['id_barang'] : '';
$query = "SELECT * from tb_barang WHERE id_barang='$id_barang'";
$ambil_data = mysqli_query($koneksi, $query);
$getdata = mysqli_fetch_assoc($ambil_data);
?>

<br>
<h3>Edit Data Barang</h3>
<div class="col-9">
    <form action="simpan.php" method="POST">
        <div class="form-group">
            <label for="inputUsername">Nama User</label>
            <input name="inputUsername" type="text" id="inputUsername" class="form-control" placeholder="Input Nama" value="<?php if (isset($getdata)) echo $getdata['username']; ?>">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input name="inputPassword" type="password" id="inputPassword" class="form-control" placeholder="Input Password" value="<?php if (isset($getdata)) echo $getdata['password']; ?>">
        </div>
        <div class="form-group">
            <input name="id" type="hidden" id="id" class="form-control" value="<?php echo $id_barang; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="home.php"><button type="button" class="btn btn-danger">Batal</button></a>
    </form>
</div>