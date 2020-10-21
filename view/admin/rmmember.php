<?php
include "../../controller/koneksi.php";
$query = "SELECT * from tb_user ORDER BY id_user ASC";
$ambil_data = mysqli_query($koneksi, $query);
?>
<br>
<h3>Data Akun</h3>
<div class="col-8">
    <table class="table is-bordered is-striped is-narrow is-hoverable is-">
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
                    <td><?php echo $getdata['username'] ?></td>
                    <td><?php echo $getdata['password'] ?></td>
                    <td><?php echo $getdata['level'] ?></td>
                    <td><a href="delete.php?id=<?php echo $getdata['id_user'] ?>">
                            <button class="button is-danger is-rounded">hapus</button>
                        </a>
                        <a href="index.php?menu=members&id=<?php echo $getdata['id_user'] ?>">
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