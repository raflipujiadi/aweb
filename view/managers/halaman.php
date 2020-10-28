<?php
$menu 			= isset($_GET['menu']) ? $_GET['menu'] : '';
?>


<div class="container halaman">

    <div class="columns">
        <div class="column is-3 ">
            <aside class="menu is-hidden-mobile">
                <p class="menu-label">
                    General
                </p>
                <ul class="menu-list">
                    <li><a class="is-active">Dashboard</a></li>
                    <li><a>Customers</a></li>
                    <li><a>Other</a></li>
                </ul>
                <p class="menu-label">
                    Administration
                </p>
                <ul class="menu-list">
                    <li><a>Team Settings</a></li>
                    <li>
                        <a>Manage Your Team</a>
                        <ul>
                            <li><a class="<?php
                                            if ($menu == "members")
                                                echo "is-active";
                                            ?>" href="?menu=members&act=shbarang">Barang</a></li>
                            <li><a class="<?php
                                            if ($menu == "fr")
                                                echo "is-active";
                                            ?>" href="?menu=fr&act=form">Form barang</a></li>
                        </ul>
                    </li>
                    <li><a>Invitations</a></li>
                    <li><a>Cloud Storage Environment Settings</a></li>
                    <li><a>Authentication</a></li>
                    <li><a>Payments</a></li>
                </ul>
                <p class="menu-label">
                    Transactions
                </p>
                <ul class="menu-list">
                    <li><a>Payments</a></li>
                    <li><a>Transfers</a></li>
                    <li><a>Balance</a></li>
                    <li><a>Reports</a></li>
                </ul>
            </aside>
        </div>
        <div class="column is-9">
            <?php
			
		include	'../../controller/koneksi.php';
		$lvl = $_SESSION['level'];
		$act       = isset($_GET['act']) ? $_GET['act'] : '';
		$query = "SELECT * FROM tb_user";
		$ambil_data = mysqli_query($koneksi, $query);
		$getdata = mysqli_fetch_assoc($ambil_data);
		if($act=='shbarang'){
			include 'shbarang.php';
		}
		if($act == 'form'){
			include 'form.php';
		}
?>

			
				</div>
    </div>
</div>



