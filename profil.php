<?php
include "header.php";
include "koneksi.php";

$guru_profil=mysqli_query($konek,"select * from data_guru where 
kode_guru='".$_SESSION['kode_guru']."'");
$data_guru=mysqli_fetch_array($guru_profil);

//$file_foto= mysqli_query($konek, "SELECT * FROM foto");
//$data_foto= mysqli_fetch_array($file_foto, MYSQLI_ASSOC)


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profil Form</title>
<link rel="stylesheet" type="text/css" href="style_profil.css">
<link rel="icon" type="image/png" href="images/Seo_Teach_services_flat_icon_tool_web-512.png">
<style type="text/css">
	@font-face {
         font-family: "Baloo";
         src: url( fonts/Baloo/Baloo-Regular.ttf);
         }
	@font-face{
		font-family: "Cabin Sketch";
		src: url(fonts/Cabin_Sketch/CabinSketch-Regular.ttf);
	}
	@font-face{
		font-family: "Fira Sans Extra Condensed";
		src: url(fonts/Fira_Sans_Extra_Condensed/FiraSansExtraCondensed-Regular.ttf);
	}
	
	@font-face{
		font-family: "Lato";
		src: url(fonts/Lato/Lato-Regular.ttf)
	}
	
	@font-face{
		font-family: "Poppins";
		src:url(fonts/Poppins/Poppins-Regular.ttf)
	}
	
	@font-face{
		font-family: "Rammetto One";
		src: url(fonts/Rammetto_One/RammettoOne-Regular.ttf)
	}

</style>
</head>

<body>

	<div class="group-content">
	<div class="form">
	<h1>UBAH PROFIL</h1>
<form action="proses_ubah_profil.php" method="post" enctype="multipart/form-data"s>
	<p>Kode Guru</p>
	<input name="kode_guru" type="number" readonly value="<?php echo $data_guru['kode_guru'] ?>">
	
	<p>Nama Guru</p>
	<input name="nama_guru" type="text" value="<?php echo $data_guru['nama_guru'] ?>">
	
	<p>Asal</p>
	<input name="asal" type="text" value="<?php echo $data_guru['asal'] ?>">
	
	<p>Telepon</p>
	<input name="telepon" type="number" value="<?php echo $data_guru['telepon'] ?>">
	
	<p>Pendidikan Terakhir</p>
	<input name="pendidikan_terkahir" type="text" value="<?php echo $data_guru['pendidikan_terakhir'] ?>">
	
	<p>Mapel</p>
	<input name="mapel" type="text" value="<?php echo $data_guru['mapel'] ?>">
	
	
	<p>Jumlah Jam</p>
	<input name="jumlah_jam" type="number" value="<?php echo $data_guru['jumlah_jam'] ?>">
	
	<p>Tanggal Mulai</p>
	<input name="tanggal_mulai" type="date" value="<?php echo $data_guru['tanggal_mulai_mengajar']; ?>">
	
	<p>Username Guru</p>
	<input name="username_guru" type="text" readonly value="<?php echo $data_guru['username_guru'] ?>">
	
	<p>Password</p>
	<input name="password" type="password" id="pass1" value="<?php echo $data_guru['password'] ?>">
	
	<p>Re-type Password</p>
	<input name="password" type="password" id="pass2" value="<?php echo $data_guru['password'] ?>">
	
	

	<br>
	<br>
	<!--Submit-->
	<input name="ubah" type="submit" id="sumbit" value="Ubah">
	</form>
	</div>
	<div class="tulisan">
		<!--<h1>SinauBareng.com</h1>-->
		<div class="sidebar">
		<h2>Foto Profil</h2>
		<form action="proses_upload.php" method="post" enctype="multipart/form-data">
			<?php 
		if($data_guru['foto']==""){
		echo "<input type='file' name='foto'>";
		echo "<input class='upload' name='upload' value='SUBMIT' type='submit'>";
		} else {
		?>
	<img src="foto/<?php echo $data_guru['foto'];?>" /><a href="hapus_gambar.php?foto=<?php echo $data_guru['foto'];?>">&times;</a>
		<?php }?>

	
		
		<!--<input class="upload" name="upload" type="submit">-->
		</form>

	</div>
	</div>
	</div>
</body>
</html>
 <script type="text/javascript">
     window.onload = function () {
      document.getElementById("pass1").onchange = cekPassword;
      document.getElementById("pass2").onchange = cekPassword;
     }
     function cekPassword(){
     var password2=document.getElementById("pass2").value;
     var password1=document.getElementById("pass1").value;
      if(password1!=password2)
       document.getElementById("pass2").setCustomValidity("Passwords confirmation doesn't match");
      else
      document.getElementById("pass2").setCustomValidity('');
     }
    </script>