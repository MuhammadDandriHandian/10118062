<?php

if(isset($_POST['simpan'])){
	
	include('koneksi.php');
	
	$id			= $_POST['id'];	
	$nis		= $_POST['nis'];	
	$nama		= $_POST['nama'];	
	$alamat		= $_POST['alamat'];	
	$ttl		= $_POST['ttl'];	
	$telp		= $_POST['telp'];
	$angkatan	= $_POST['angkatan'];

	$update = mysql_query("UPDATE siswa SET siswa_nis='$nis', siswa_nama='$nama', siswa_alamat='$alamat', siswa_ttl='$ttl' WHERE siswa_id='$id'") or die(mysql_error());
	

	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	
		
	}
 
}else{	
 
	echo '<script>window.history.back()</script>';
 
}
?>