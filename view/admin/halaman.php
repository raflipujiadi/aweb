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
                                            ?>" href="?menu=members&act=shmembers">Members</a></li>
                            <li><a class="<?php
                                            if ($menu == "plugin")
                                                echo "is-active";
                                            ?>" href="?menu=plugin&act=plugins">Plugins</a></li>
                            <li><a class="<?php
                                            if ($menu == "add")
                                                echo "is-active";
                                            ?>" href="?menu=add&act=form">Add a member</a></li>
                            <li><a class="<?php
                                            if ($menu == "rm")
                                                echo "is-active";
                                            ?>" href="?menu=rm&act=rmmember">Remove a member</a></li>
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
		if($act=='shmembers'){
			include 'shmembers.php';
		}
		if($act == 'form'){
			include 'form.php';
		}
?>

			
				</div>
    </div>
</div>



