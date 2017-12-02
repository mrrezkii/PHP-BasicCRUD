<?php
session_start();
if(!$_SESSION['username_guru']){
header('location:login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style_header.css">
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
<div class="header">
	<div class="navigasi">
		
		<div class="menu">

			<ul>
				<a href="dashboard.php"><img class="gambar-header" src="images/Double-J-Design-Origami-Colored-Pencil-Red-home.ico"></a>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="log_out.php">Log out</a></li>
				<li><a href="hapus_akun.php">Hapus Akun</a></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>