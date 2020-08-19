<?php
$host = "localhost";
$user = "root";
$pass = "root";
$name = "java_akdmk";

$koneksi = mysql_connet($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die ("Tidak ada database dipilih!");
?>