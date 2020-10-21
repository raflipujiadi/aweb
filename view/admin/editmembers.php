<?php
include "../../controller/koneksi.php";
$id  = isset($_GET['id']) ? $_GET['id'] : '';
$query = "SELECT * from tb_user WHERE id_user='$id'";
$ambil_data = mysqli_query($koneksi, $query);
$getdata = mysqli_fetch_assoc($ambil_data);
var_dump($getdata);
?>
<h3>Edit Data Member</h3>
<form action="" method="POST">
    <div class="form">
        <label for="username">Username</label>
        <input name="username" type="text" id="username" class="form-control" placeholder="Input Username" value="<?php if (isset($getdata)) echo $getdata['username']; ?>">
    </div>
    <div class=" form">
        <label for="password">Password</label>
        <input name="password" type="password" id="password" class="form-control" placeholder="Input Password" value="<?php if (isset($getdata)) echo $getdata['password']; ?>">
    </div>

    <div class="form">
        <label for="level">Level</label>
        <select name="level" id="level" class="form">
            <option value="admin" <?php if (isset($getdata) && $getdata['level'] == "admin") echo 'selected' ?>>admin</option>
            <option value="managers" <?php if (isset($getdata) && $getdata['level'] == "managers") echo 'selected' ?>>managers</option>
            <option value="karyawan" <?php if (isset($getdata) && $getdata['level'] == "karyawan") echo 'selected' ?>>karyawan</option>
        </select>
    </div>

    <div class="form">
        <input name="id_user" type="hidden" id_user="id_user" class="form-control" value="<?php echo $id_user; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="home.php"><button type="button" class="btn btn-danger">Batal</button></a>
</form>