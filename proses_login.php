<?php
$username_guru=@$_POST['username_guru'];
$password=@$_POST['password'];

include "koneksi.php";
$cek=mysqli_query($konek, "select * from data_guru where username_guru='$username_guru' and password='$_POST[password]'");




if(mysqli_num_rows($cek) > 0){
	session_start();
	$data_guru=mysqli_fetch_array($cek);
	$_SESSION['login']=true;
	$_SESSION['kode_guru']=$data_guru['kode_guru'];
	$_SESSION['username_guru']=$_POST['username_guru'];
	$_SESSION['password']=$_POST['password'];
	
	header('location:dashboard.php');
}
else{
	echo "<script>alert('Masukkann ID Anda dengan benar !');location.href='login.php';</script>";
}

?>