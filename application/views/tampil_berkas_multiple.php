<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	<h3 style="text-align: center">Tampil Berkas</h3>
	<hr>
	<a href="<?php echo base_url(); ?>index.php/uploadmultiple/create">Tambah Berkas</a>
	<hr>
	<table  border="1" width="75%" style="text-align:center;">
		<tr>
			<th>No</th>
			<th>Image</th>
			<th>Keterangan</th>
			<th>Action</th>
		</tr>
		<?php
			$no =1;
			foreach ($berkas->result() as $row)
			{
				?>
				<tr>
					<td><?php echo  $no++; ?></td>
					<td><img src="<?php echo base_url(); ?>upload/ <?php echo $row->nama_berkas; ?>"/>
					</td>
					<td><?php echo $row->keterangan_berkas; ?></td>
					<td><a href="<?php echo base_url(); ?>index.php/upload/download/<?php echo $row->kd_berkas; ?>">Download</a></td>
				</tr>
		<?php
			}
		?>
	</table>

</body>
</html>
