<br>
<h3>Tambah Data User</h3>
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
            <label for="level">Jenis Barang</label>
            <select name="level" id="jenis_barang" class="form-control col-3">
                <option value="admin" <?php if (isset($getdata) && $getdata['level'] == "admin") echo 'selected' ?>>admin</option>
                <option value="managers" <?php if (isset($getdata) && $getdata['level'] == "managers") echo 'selected' ?>>managers</option>
                <option value="karyawan" <?php if (isset($getdata) && $getdata['level'] == "karyawan") echo 'selected' ?>>karyawan</option>
            </select>
        </div>
        <div class="form-group">
            <input name="id" type="hidden" id="id" class="form-control" value="<?php echo $id_barang; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="home.php"><button type="button" class="btn btn-danger">Batal</button></a>
    </form>
</div>