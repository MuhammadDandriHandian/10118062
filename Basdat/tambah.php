<!DOCTYPE html>
<html>
<head>
	<title>Daftar Akademik Siswa</title>
</head>
<body>
	<h2>Tambah Data Siswa</h2>

	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>

	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="50" required></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td><input type="text" name="ttl" required></td>
			</tr>
			<tr>
				<td>Telp</td>
				<td>:</td>
				<td><input type="text" name="telp" required></td>
			</tr>
			<tr>
				<td>Angkatan</td>
				<td>:</td>
				<td><input type="text" name="angkatan" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>