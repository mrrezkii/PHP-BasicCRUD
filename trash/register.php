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
	Guru
</div>
<div class="form">
	<a href="login.php"><h2 class="form-sign_in">&nbsp;&nbsp;&nbsp;SIGN IN</h2></a>
	<a href="register.php"><h2 class="form-sign_up">&nbsp;&nbsp;&nbsp;SIGN UP</h2></a>
<form action="proses_registrasi.php" method="post" enctype="multipart/form-data"s>
	<p>Nama</p>
	<input name="nama" type="text" autocomplete="on" autofocus required>
	
	<p>Email</p>
	<input name="email" type="email" autocomplete="on" autofocus required>
	
	<p>Alamat</p>
	<input name="alamat" type="text"autocomplete="on" autofocus required>
	
	<p>Telp</p>
	<input name="telp" type="number" autocomplete="on" autofocus required>
	
	<p>Tanggal lahir</p>
	<input name="tanggal" type="date" autocomplete="on" autofocus required>
	
	<p>Jenis Kelamin</p>
	<div class="gender">
	<label class="laki">
	<input name="gender" type="radio" value="L" autocomplete="off" autofocus required> Laki - Laki
	</label>
	</div>
	<div class="gender">
	<label class="perempuan">
	<input name="gender" type="radio" value="P" autocomplete="off" autofocus required>
	Perempuan </label>
	</div>
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	
	<div class="agama">
	<label>Agama</label><br><br>
		<select name="agama">
			<option></option>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Khatolik">Khatolik</option>
			<option value="Hindu">Hindu</option>
			<option value="Buddha">Buddha</option>
			<option value="Other">Other</option>
		</select>
	</div>
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>

	<p>Username</p>
	<input name="username" type="text" autocomplete="on" autofocus required>
	
	<p>Password</p>
	<input name="password" type="password" id="pass1" required autofocus>
	<!--<input name="checkbox" type="checkbox" autocomplete="off" autofocus>-->
	
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
      document.getElementById("pass1").onchange = validatePassword;
      document.getElementById("pass2").onchange = validatePassword;
     }
     function validatePassword(){
     var password2=document.getElementById("pass2").value;
     var password1=document.getElementById("pass1").value;
      if(pass1!=pass2)
       document.getElementById("pass2").setCustomValidity("Passwords confirmation doesn't match");
      else
      document.getElementById("pass2").setCustomValidity('');
     }
    </script>