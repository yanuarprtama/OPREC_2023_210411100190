<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>D</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<form action="cek_data" method="get">
		<label>Cari data :</label>
		<input type="text" name="search">
	</form>

	<a href="logout.php">LOGOUT</a>
	<?php
		include('koneksi.php');
		$sql = "SELECT * FROM mahasiswa INNER JOIN pengguna ON mahasiswa.nim = pengguna.nim";
		$query = mysql_fetch_assoc($koneksi, $sql);
		$data = mysql_fetch_array($query);

		while ($data > 0) {
		}
	?>
	<table>
		<th>Nama</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jenis Kelamin</th>
	</table>

</body>
</html>