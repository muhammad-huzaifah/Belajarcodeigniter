<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Belajar buat form validasi</title>
</head>
<body>

	<?php echo validation_errors(); ?>

	<form method="post" action="<?php echo base_url(); ?>index.php/Pegawai_form/save">
		<label>Nama:</label>
		<input type="text" name="nama"> <br>
		<label>Email:</label>
		<input type="text" name="email"> <br>
		<label>Jenis Kelamin:</label>
		<input type="radio" name="jenis_kelamin" value="pria">Pria
		<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan <br>
		<label>Agama</label>
		<select name="agama">
			<option value="islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="katholik">Katholik</option>
			<option value="hindu">Hindu</option>
			<option value="budha">Budha</option>
		</select><br>
		<label>Alamat:</label>
		<textarea name="alamat"></textarea><br><br>
		<input type="submit" name="tombol" value="Simpan">
	</form>


</body>
</html>
