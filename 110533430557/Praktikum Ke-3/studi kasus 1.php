<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Data Seleksi</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Agama :
		<select name="agama">
			<option value="Islam"
			<?php
				if(@$_POST['agama'] == "Islam"){ 
					echo 'selected=selected';
				}
			?>
			>Islam <!--memeriksa apakah yang dipilih "Islam"-->
			
			<option value="Kristen" 
			<?php
				if(@$_POST['agama'] == "Kristen"){ 
					echo 'selected=selected';
				}
			?>
			>Kristen <!--memeriksa apakah yang dipilih "Kristen"-->
			
			<option value="Katholik" 
			<?php
				if(@$_POST['agama'] == "Katholik"){ 
					echo 'selected=selected';
				}
			?>
			>Katholik <!--memeriksa apakah yang dipilih "Katholik"-->
			
			<option value="Hindu" 
			<?php
				if(@$_POST['agama'] == "Hindu"){ 
					echo 'selected=selected';
				}
			?>
			>Hindu <!--memeriksa apakah yang dipilih "Hindu"-->
			
			<option value="Budha" 
			<?php
				if(@$_POST['agama'] == "Budha"){ 
					echo 'selected=selected';
				}
			?>
			>Budha <!--memeriksa apakah yang dipilih "Budha"-->
		</select> <br />
		<input type="submit" value="ok" />
	</form>
<?php
	if (isset($_POST['agama'])) {
	echo $_POST['agama'];
}
?>
</body>
</html>