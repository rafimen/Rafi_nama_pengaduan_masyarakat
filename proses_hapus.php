<?php
include "koneksi.php";
$id = $_GET['id'];

$query = $koneksi->query("DELETE FROM pengaduan where id_pengaduan='$id'");

header("location:laporan.php");


?>