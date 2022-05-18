<?php 
$dbhost = "localhost";
$dbname = "dbmotor";
$dbuser = "root";
$dbpass = "";

$koneksi = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname)
or die(mysqli_connect_error());

if (!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>