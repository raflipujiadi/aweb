<?php
include '../../controller/koneksi.php';
$id_user       = isset($_GET['id_user']) ? $_GET['id_user'] : '';
$query = "SELECT * from tb_user WHERE id_user='$id_user'";
$ambil_data = mysqli_query($koneksi, $query);
$getdata = mysqli_fetch_assoc($ambil_data);
?>

<br>
<h3>Form Data User</h3>
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
            <label for="level">Level</label>
            <select name="level" id="level" class="form-control col-3">
                <option value="admin" <?php if (isset($getdata) && $getdata['level'] == "admin") echo 'selected' ?>>admin</option>
                <option value="managers" <?php if (isset($getdata) && $getdata['level'] == "managers") echo 'selected' ?>>managers</option>
                <option value="karyawan" <?php if (isset($getdata) && $getdata['level'] == "karyawan") echo 'selected' ?>>karyawan</option>
            </select>
        </div>
        <div class="form-group">
            <input name="id" type="hidden" id="id" class="form-control" value="<?php echo $id; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="home.php"><button type="button" class="btn btn-danger">Batal</button></a>
    </form>
</div>