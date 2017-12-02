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
session_start();

$update=mysqli_query($konek, "UPDATE data_guru SET kode_guru='$kode_guru',nama_guru='$nama_guru',asal='$asal',telepon='$telepon',pendidikan_terakhir='$pendidikan_terakhir',mapel='$mapel',jumlah_jam='$jumlah_jam',tanggal_mulai_mengajar='$tanggal_mulai_mengajar',username_guru='$username_guru',password='$_POST[password]' where kode_guru='".$_SESSION['kode_guru']."' ");


if($update){
	echo "<script>alert('Sukses terubah');location.href='profil.php';</script>";
}
else{
	mysqli_error($konek);	
	
}
?>
