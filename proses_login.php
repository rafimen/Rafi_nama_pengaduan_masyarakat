<?php
session_start();
include "koneksi.php";
$US = $_POST['username'];
$PS = $_POST['password'];

$query = $koneksi->query("select * from masyarakat where username='$US' AND password='$PS'");

$jumlahbaris = $query->rowCount();

if($jumlahbaris > 0){

    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    $_SESSION['level'] = 'masyarakat';
    
    header("location:laporan.php");
}else {$query = $koneksi->query("select * from petugas where username='$US' AND password='$PS'");

    $jumlahbaris = $query->rowCount();
    
    if($jumlahbaris > 0){
    
        $data = $query->fetch();
    
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['level'] = $data['level'];
        header("location:admin.php");

}else{
    header("location:pmasyarakat.php");}}
?>