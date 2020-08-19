<?php

if(isset($_POST['tambah'])){
	
	include('koneksi.php');
	
	
	$nis		= $_POST['nis'];	
	$nama		= $_POST['nama'];	
	$alamat		= $_POST['alamat'];	
	$ttl		= $_POST['ttl'];	
	$telp		= $_POST['telp'];
	$angkatan	= $_POST['angkatan']
	
	$input = mysql_query("INSERT INTO siswa VALUES(NULL, '$nis', '$nama', '$alamat', '$ttl', 'telp', 'angkatan')") or die(mysql_error());
	
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}
 
}else{	
	echo '<script>window.history.back()</script>';
 
}
?>