
<?php
$server="localhost";
$user="root";
$password="";
$db="managemen_siswa";
$direktori = "foto/";


$konek=mysqli_connect($server,$user,$password,$db);
if(!$konek){
	echo "Server not found".mysqli_error($konek);
}
?>