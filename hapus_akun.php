<?php
session_start();
include "koneksi.php";
$hapus=mysqli_query($konek, "delete from data_guru where kode_guru='$_SESSION[kode_guru]'"); 
if(!$hapus){
	echo "<script>alert('Failed to delete your account');location.href='dashboard.php';</script>";
}
else{
	echo "<script>alert('Success to delete your account');location.href='log_out.php';</script>";
}

?>