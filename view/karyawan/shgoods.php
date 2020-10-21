<?php
include "../../controller/koneksi.php";
$query = "SELECT * from tb_barang ORDER BY id_barang ASC";
$ambil_data = mysqli_query($koneksi, $query);
?>
<br>
<h3>Data Barang</h3>
<div class="col-8">
    <table class="table table-striped table-bordered" id="tabel-data">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <!-- ini yang akan di ulang-->
            <?php
            $no = 0;
            while ($getdata = mysqli_fetch_assoc($ambil_data)) {
                $no++;
            ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $getdata['nama_barang'] ?></td>
                    <td><?php echo $getdata['harga'] ?></td>
                    <td><?php echo $getdata['stok'] ?></td>
                    <td><a href="hapus.php?menu=rmmember&id_barang=<?php echo $getdata['id_barang'] ?>">
                            <button class="button is-danger is-rounded">hapus</button>
                        </a>
                        <a href="index.php?menu=editmembers&id_barang=<?php echo $getdata['id_barang'] ?>">
                            <button class="button is-primary is-rounded">edit</button>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
            <!--akhir dari data yang diulang-->

        </tbody>
    </table>
</div>
</div>