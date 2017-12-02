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
<div class="label">
	Guru
</div>
<div class="form">
	<a href="login.php"><h2 class="form-sign_in">&nbsp;&nbsp;&nbsp;SIGN IN</h2></a>
	<a href="register.php"><h2 class="form-sign_up">&nbsp;&nbsp;&nbsp;SIGN UP</h2></a>
<form action="proses_registrasi.php" method="post" enctype="multipart/form-data"s>
	<p>Nama</p>
	<input name="nama" type="text" autocomplete="on" autofocus required>
	<p>Alamat</p>
	<input name="alamat" type="text"autocomplete="on" autofocus required>
	<p>Telp</p>
	<input name="telp" type="number" autocomplete="on" autofocus required>
	<p>Tanggal lahir</p>
	<input name="tanggal" type="date" autocomplete="on" autofocus required>
	
	<!--<p>Jenis Kelamin</p>
	<div class="gender">
	<label class="laki">
	<input name="gender" type="radio" value="Laki-Laki" autocomplete="off" autofocus required> <p>Laki - Laki</p>
	</label>
	<label class="perempuan">
	<input name="gender" type="radio" value="Perempuan" autocomplete="off" autofocus required> Perempuan
	</label>
	</div>-->
	
	<p>Email</p>
	<input name="email" type="email" autocomplete="on" autofocus required>
	<p>Username</p>
	<input name="username" type="text" autocomplete="on" autofocus required>
	<p>Password</p>
	<input name="password" type="password"required autofocus>
	<input name="submit" type="submit" value="Sign Up">

</form>
</div>
</body>
</html>