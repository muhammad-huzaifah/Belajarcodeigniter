<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Belajar upload di Codeigniter-Warung Belajar</title>
</head>
<body>
	<?php
		if (isset($error))
		{
			echo "ERROR UPLOAD: <br>";
			print_r($error);
			echo "<hr/>";
		}
	?>
	<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/upload/proses">
		<div>Berkas: </div>
		<br>
		<div><input type="file" name="berkas"></div>
		<br>
		<div>Keterangan: </div>
		<br>
		<div><textarea name="keterangan_berkas"></textarea></div>
		<br>
		<div><input type="submit" value="Simpan"/></div>
	</form>
</body>
</html>
