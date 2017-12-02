<?php
$kode_guru=@$_POST['kode_guru'];
$nama_guru=@$_POST['nama_guru'];
$asal=@$_POST['asal'];
$telepon=@$_POST['telepon'];
$pendidikan_terakhir=@$_POST['pendidikan_terkahir'];
$mapel=@$_POST['mapel'];
$jumlah_jam=@$_POST['jumlah_jam'];
$tanggal_mulai_mengajar=@$_POST['tanggal_mulai_mengajar'];
$username_guru=@$_POST['username_guru'];
$password=@$_POST['password'];

include "koneksi.php";

$cek_kode=mysqli_num_rows(mysqli_query($konek,"select kode_guru from data_guru where kode_guru='$kode_guru' "));

$cek_username=mysqli_num_rows(mysqli_query($konek,"select username_guru from data_guru where username_guru='$username_guru' "));



if (($cek_kode) > 0){
	echo "<script>alert('KODE GURU telah digunakan');</script>";
	header("refresh:0.1;URL=register.php");
}

else if($cek_username > 0){
	echo "<script>alert('USERNAME telah digunakan');</script>";
	header("refresh:0.1;URL=register.php");
}

else{
	$register=mysqli_query($konek, "insert into `data_guru`(`kode_guru`, `nama_guru`, `asal`, `telepon`, `pendidikan_terakhir`, `mapel`, `jumlah_jam`, `tanggal_mulai_mengajar`, `username_guru`, `password`)  values ('$kode_guru','$nama_guru','$asal','$telepon','$pendidikan_terakhir','$mapel','$jumlah_jam','$tanggal_mulai_mengajar','$username_guru','".$_POST['password']."')");
	if($register){
		echo "<script>alert('Sukses terdaftar');location.href='dashboard.php';</script>";
	}

}

?>