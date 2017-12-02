<?php

$nama_foto=@$_FILES['foto']['name'];
$file_foto=@$_FILES['foto']['tmp_name'];
$direktori = "foto/";


include "koneksi.php";
//$insert=mysqli_query($konek, "insert into foto ('',foto')  values ('$nama_foto') ");


//move_uploaded_file($nama_foto,$direktori.$file_foto);

//mysqli_query($konek, "INSERT INTO data_guru VALUES(	('$kode_guru, '$nama_guru', '$asal', `$telepon`, `$pendidikan_terakhir`, `$mapel`, `$jumlah_jam`, `$tanggal_mulai_mengajar`, `$username_guru`, `$password`,'$nama_file','$file_foto')") or die(mysqli_error($konek));
//header("location: profil.php");
session_start();
mysqli_query($konek, "UPDATE data_guru SET foto = '$nama_foto' WHERE kode_guru= ".$_SESSION[kode_guru]." ; ");
move_uploaded_file($file_foto,$direktori.$nama_foto);
header('location:profil.php');

/*if($upload){
	if(!empty($nama_foto)){
		$upload=move_uploaded_file($nama_foto,$direktori.$file_foto);
		if(!$upload){
			mysqli_error($konek);
			
		}
		else{
			echo "<script>alert('Sukses Upload');</script>";
			header("refresh:0.1;URL=profil.php");
		}
	}
}
else{
	mysqli_error($konek);
}*/
?>