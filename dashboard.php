<?php
include "header.php"; 
include "koneksi.php";
$guru_profil=mysqli_query($konek,"select * from data_guru where 
kode_guru='".$_SESSION['kode_guru']."'");
$data_guru=mysqli_fetch_array($guru_profil);

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="style_dashboard.css">
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
<img class="gambar-header2" src="images/header.png">
</div>
	<div class="group-content">
	<div class="sidebar">
		<h2>SinauBareng.com</h2>
		<form action="proses_upload.php" method="post" enctype="multipart/form-data">
			<?php 
		if($data_guru['foto']==""){
		
			echo "<img src='images/Seo_Teach_services_flat_icon_tool_web-512.png'>";
		} else {
		?>
	<img src="foto/<?php echo $data_guru['foto'];?>" />
		<?php }?>

	
		
		<!--<input class="upload" name="upload" type="submit">-->
		</form>
		<!--<img src="images/Seo_Teach_services_flat_icon_tool_web-512.png">-->
		<p>Dengan bergabung, Anda menyetujui tentang ketentuan yang berlaku</p>
		<a href="profil.php"><p>&nbsp;>> Edit your profil <<&nbsp;</p></a>

	</div>
	<div class="content">
		<h1>Welcome <strong><?php echo $data_guru['username_guru']; ?></strong></h1>
		<p><a href="#">SinauBareng.com</a> membantu kelas berkomunikasi, menghemat waktu, dan tetap teratur.<a href="#"><input class="button" name="button" type="button" value="Start Now"></a> </p>
	</div>
</div>
<div id="slider">
	<figure>
		<img src="images/gallery/1.jpg">
		<img src="images/gallery/6.jpg">
		<img src="images/gallery/3869-Blackboard-1290x688-940x501.jpg">
		<img src="images/gallery/18157732-teacher-at-the-blackboard.jpg">
	</figure>
	</div>
<center><hr width="98%" size="5px" color="white"></center>
<div class="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>