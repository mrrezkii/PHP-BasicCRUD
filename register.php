<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create an account</title>
<link rel="stylesheet" type="text/css" href="style_register.css">
<link rel="icon" type="image/png" href="images/Seo_Teach_services_flat_icon_tool_web-512.png">
<style type="text/css">
	@font-face {
         font-family: "Baloo";
         src: url(../../../Users/Rezki/Documents/Rezki%20form/fonts/Baloo/Baloo-Regular.ttf);
         }
	@font-face{
		font-family: "Cabin Sketch";
		src: url(../../../Users/Rezki/Documents/Rezki%20form/fonts/Cabin_Sketch/CabinSketch-Regular.ttf);
	}
	@font-face{
		font-family: "Fira Sans Extra Condensed";
		src: url(../../../Users/Rezki/Documents/Rezki%20form/fonts/Fira_Sans_Extra_Condensed/FiraSansExtraCondensed-Regular.ttf);
	}
	
	@font-face{
		font-family: "Lato";
		src: url(../../../Users/Rezki/Documents/Rezki%20form/fonts/Lato/Lato-Regular.ttf)
	}
	
	@font-face{
		font-family: "Poppins";
		src:url(../../../Users/Rezki/Documents/Rezki%20form/fonts/Poppins/Poppins-Regular.ttf)
	}
	
	@font-face{
		font-family: "Rammetto One";
		src: url(../../../Users/Rezki/Documents/Rezki%20form/fonts/Rammetto_One/RammettoOne-Regular.ttf)
	}

</style>

</head>

<body>
<div class="label">
	<a href="index.php">Guru</a>
</div>
<div class="form">
	<a href="login.php"><h2 class="form-sign_in">&nbsp;&nbsp;&nbsp;SIGN IN</h2></a>
	<a href="register.php"><h2 class="form-sign_up">&nbsp;&nbsp;&nbsp;SIGN UP</h2></a>
<form action="proses_registrasi.php" method="post" enctype="multipart/form-data"s>
	<p>Kode Guru</p>
	<input name="kode_guru" type="number" autocomplete="on" autofocus required>
	
	<p>Nama Guru</p>
	<input name="nama_guru" type="text" autocomplete="on" autofocus required>
	
	<p>Asal</p>
	<input name="asal" type="text" autocomplete="on" autofocus required>
	
	<p>Telepon</p>
	<input name="telepon" type="number" autocomplete="on" autofocus required>
	
	<p>Pendidikan Terakhir</p>
	<input name="pendidikan_terkahir" type="text" autocomplete="on" autofocus required>
	
	<p>Mapel</p>
	<input name="mapel" type="text" autocomplete="on" autofocus required>
	
	
	<p>Jumlah Jam</p>
	<input name="jumlah_jam" type="number" autocomplete="on" required autofocus>
	
	<p>Tanggal Mulai Mengajar</p>
	<input name="tanggal_mulai_mengajar" type="date" autocomplete="on" required autofocus>
	
	<p>Username Guru</p>
	<input name="username_guru" type="text" autocomplete="on" required autofocus>
	
	<p>Password</p>
	<input name="password" type="password" id="pass1" required autofocus>
	
	<p>Re-type Password</p>
	<input name="password" type="password" id="pass2" required autofocus>
	
	<!--Submit-->
	<input name="submit" type="submit" value="Sign Up">

</form>
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