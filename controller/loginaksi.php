<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include_once("koneksi.php");

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * from tb_user where username='$username' AND password='$password'");

/* $role = mysqli_query($koneksi,"SELECT role from tb_user where username='$username' and password='$password'"); */

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// Secret Key ini kita ambil dari halaman Google reCaptcha
// Sesuai pada catatan saya di STEP 1 nomor 6
$secret_key = "6LfAy7YUAAAAAKSqmZHYJswZtKeTItxQw_cIylZn";

// Disini kita akan melakukan komunkasi dengan google recpatcha
// dengan mengirimkan scret key dan hasil dari response recaptcha nya
// $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai admin
	//		switch ($data['level']) {
	//			case 'admin':
	if ($data['level'] == 'admin') {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../view/admin/index.php");
	} else if ($data['level'] == 'karyawan') {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "karyawan";
		// alihkan ke halaman dashboard karyawan
		header("location:../view/karyawan/index.php");
	} else if ($data['level'] == "managers") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "managers";
		// alihkan ke halaman dashboard managers
		header("location:../view/managers/index.php");
		//default:
	} else {
		// alihkan ke halaman login kembali
		header("location:../login.php?pesan=gagal");
		// code...
	}
	//			break;
	//	case 'karyawan':		
	//break;
	//case 'managers':
	//break;
	//}				


} else {
	header("location:../login.php?pesan=gagal");
}
//$response = json_decode($verify);

//if($response->success){ // Jika proses validasi captcha berhasil

//	echo "<h2>Captcha Valid</h2>";
//	echo "Yes, you're human (Anda adalah manusia)<hr>";
//	echo "<b>Nama :</b><br>".$_POST['username']."<br><br>";
//	echo "<b>Email :</b><br>".$_POST['password']."<br><br>";
// cek apakah username dan password di temukan pada database
//}else{ // Jika captcha tidak valid
//	echo "<h2>Captcha Tidak Valid</h2>";
//	echo "Ohh sorry, you're not human (Anda bukan manusia)<hr>";
//	echo "Silahkan klik kotak I'm not robot (reCaptcha) untuk verifikasi";
//}
