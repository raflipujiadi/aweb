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
                <th scope="col">Nomor/Kode</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Nama File</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <!-- ini yang akan di ulang-->
            <?php
            $no = 0;
            while ($databrg = mysqli_fetch_assoc($ambil_data)) {
                $no++;
            ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $databrg['id_barang'] ?></td>
                    <td><?php echo $databrg['nama_barang'] ?></td>
                    <td><?php echo $databrg['img'] ?></td>
                    <td><a href="delete.php?id_barang=<?php echo $databrg['id_barang'] ?>">
                            <button class="button is-danger is-rounded">hapus</button>
                        </a>
                        <a href="index.php?act=form&id_barang=<?php echo $databrg['id_barang'] ?>">
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