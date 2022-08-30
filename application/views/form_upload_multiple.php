<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Belajar Upload Multiple di Codeigniter-Warung Belajar-</title>
</head>
<body>
	<?php
		if (isset($error))
		{
			echo "ERROR UPLOAD: <br>";
			echo print_r($error);
			echo "<hr>";
		}
	?>
	<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/uploadmultiple/proses">
		<div>Berkas 1:</div>
		<div><input type="file" name="berkas[]"></div>
		<div>Keterangan 1:</div>
		<div><textarea name="keterangan_berkas[]"></textarea></div>
		<hr>
		<div>Berkas 2:</div>
		<div><input type="file" name="berkas[]"></div>
		<div>Keterangan 2:</div>
		<div><textarea name="keterangan_berkas[]"></textarea></div>
		<hr>
		<div>Berkas 3:</div>
		<div><input type="file" name="berkas[]"></div>
		<div><textarea name="keterangan_berkas[]"></textarea></div>
		<hr>
		<div>Berkas 4:</div>
		<div><input type="file" name="berkas[]"></div>
		<div><textarea name="keterangan_berkas[]"></textarea></div>
		<br>
		<div><input type="submit" value="Simpan"></div>
	</form>
</body>
</html>
