<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Data Checkbox</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Game : <br />
		<input type="checkbox" name="Game[]" value="DOTA1"  
		<?php
			if($_POST['Game[]']="DOTA1"){
				echo 'checked="checked"';
			}
		?>		
		/>DOTA1 <br /> <!--memeriksa apakah yang dipilih "DOTA1"-->
		
		<input type="checkbox" name="Game[]" value="DOTA2"  
		<?php
			if($_POST['Game[]']="DOTA2"){
				echo 'checked="checked"';
			}
		?>		
		/>DOTA2 <br /> <!--memeriksa apakah yang dipilih "DOTA2"-->
		
		<input type="checkbox" name="Game[]" value="HON"  
		<?php
			if($_POST['Game[]']="HON"){
				echo 'checked="checked"';
			}
		?>		
		/>HON <br /> <!--memeriksa apakah yang dipilih "HON"-->

		<input type="submit" value="ok" />
	</form>
<?php
	// Ekstraksi nilai
	if (isset($_POST['Game'])) {
		foreach ($_POST['Game'] as $key => $val) {
		echo $key . ' -> ' .$val . '<br />';
		}
	}
?>
</body>
</html>