<?php
// kalau pakai offline
$db = mysqli_connect("localhost", "root", "", "knnachmad");

// // online
// $db = mysqli_connect("sql105.epizy.com", "epiz_32095593", "3860awNuQY", "epiz_32095593_knnachmad");

// cek koneksi
if (!$db) {
	echo "Gagal menyambungkan ke MySQL:" . mysqli_connect_error();
	exit();
}
