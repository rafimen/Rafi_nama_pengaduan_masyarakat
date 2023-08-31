<?php
$isi = $_POST['laporan'];
$nama_foto = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];

include "koneksi.php";

$tanggal = date('y-m-d');


$koneksi->query("insert into pengaduan values('','$tanggal','33','$isi','$nama_foto','0')" );

move_uploaded_file($asal_foto, "foto/$nama_foto");

header("location:laporan.php")

?>