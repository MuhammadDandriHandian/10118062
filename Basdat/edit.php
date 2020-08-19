<!DOCTYPE html>
<html>
<head>
	<title>Daftar Akademik Mahasiswa</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM siswa WHERE siswa_id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" value="<?php echo $data['siswa_nis']; ?>" required></td>	
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['siswa_nama']; ?>" required></td> 
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="30" value="<php echo $data['siswa_alamat']; ?>"required></td
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td><input type="text" name="ttl" size="30" value="<php echo $data['siswa_ttl']; ?>"required></td>
			</tr>
			<tr>
				<tr>
				<td>Telp</td>
				<td>:</td>
				<td><input type="text" name="telp" size="30" value="<php echo $data['siswa_telp']; ?>"required></td>
			</tr>
			<tr>
				<tr>
				<td>Angkatan</td>
				<td>:</td>
				<td><input type="text" name="angkatan" size="30" value="<php echo $data['siswa_angkatan']; ?>"required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>