<?php
include '../../controller/koneksi.php';
$query = "SELECT * from tb_user ORDER BY id_user ASC";
$ambil_data = mysqli_query($koneksi, $query);
?>
<br>
<h3>Data Akun</h3>
<table class="table is-striped" style="width:100%" id="example">
	<thead>
		<tr>
			<th>#</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		
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
                    <td><a href="delete.php?id_user=<?php echo $getdata['id_user'] ?>">
                            <button class="button is-danger is-rounded">hapus</button>
                        </a>
                        <a href="index.php?act=form&id_user=<?php echo $getdata['id_user'] ?>">
                            <button class="button is-primary is-rounded">edit</button>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
	</tbody>
</table>


