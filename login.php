<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Want to connect ?</title>
<link rel="stylesheet" type="text/css" href="style_login.css">
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
	<a href="index.php">Guru</a>
</div>
<div class="form">
	<a href="login.php"><h2 class="form-sign_in">&nbsp;&nbsp;&nbsp;SIGN IN</h2></a>
	<a href="register.php"><h2 class="form-sign_up">&nbsp;&nbsp;&nbsp;SIGN UP</h2></a>
<form action="proses_login.php" method="post">
	<p>Username Guru</p>
	<input name="username_guru" type="text" autocomplete="on" autofocus required>
	
	<p>Password</p>
	<input name="password" type="password" id="pass1" placeholder="********" required autofocus>
	
	<!--<p>Re-type Password</p>
	<input name="pass2" type="password" id="pass2" placeholder="********" required autofocus>-->
	<img class="show" src="images/Blind-eye-dark-512.png" onClick="if(password.type=='text')password.type='password';else password.type='text';">
	<div class="checkbox">
     <label>
     <input name="checkbox" type="checkbox" autofocus required> To Continue
     </label>
    </div>
	<input name="submit" type="submit" value="Log in">

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
      document.getElementById("pass").setCustomValidity('');
     }
    </script>