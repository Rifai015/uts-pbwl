<?php   
include "app/koneksi.php";

$del = $_GET['del'];

$hapus = mysqli_query($koneksi, "delete from tb_barang where id_barang = '$del'");

if ($hapus) {
    echo "<script> alert ('Data Berhasil Di Hapus') </script>";
    header("refresh:1;home.php");
}else {
    echo "<script> alert ('Data Tidak Berhasil Di Hapus') </script>";
    header("refresh:1;home.php");
}