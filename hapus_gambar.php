<?php
unlink('foto/'.$_GET['foto']);
session_start();
include "koneksi.php";
mysqli_query($konek, "update data_guru set foto='' WHERE kode_guru='$_SESSION[kode_guru]'");
header('location:profil.php');
?>