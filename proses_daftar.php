<?php
include 'koneksi.php'

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

$query = $koneksi->query("insert into masyarakat values('$nik','$nama','$username','$password','$telp')");
header("location:pmasyarakat.php");


?>