<?php

class konsumen  
{

    public function tampil()
    {
        if (isset($_POST['t_simpan'])) {
            include "koneksi.php";
            mysqli_query($koneksi, "insert into tb_konsumen set
            nama = '$_POST[nama]',
            alamat = '$_POST[alamat]',
            no_hp = '$_POST[no_hp]'") or die(mysqli_error($koneksi));

            echo "<script>alert('Data telah tersimpan')</script>";
        }
    }
}

class edit
{
    public function update()
    {
        if (isset($_POST['t_update'])) {
            include "koneksi.php";
            mysqli_query($koneksi, "update tb_konsumen set
            nama = '$_POST[nama]',
            alamat = '$_POST[alamat]',
            no_hp = '$_POST[no_hp]'
            where id_customer = '$_GET[kode]'");

            echo "<script>alert('Data telah di update')</script>";
        }
    }
}


class penjualan 
{

    public function tampil()
    {
        if (isset($_POST['t_simpan'])) {
            include "koneksi.php";
            mysqli_query($koneksi, "insert into tb_penjualan set
            tgl_penjualan = '$_POST[tgl_penjualan]',
            hrg_brg = '$_POST[hrg_brg]',
            jumlah = '$_POST[jumlah]',
            total_hrg = '$_POST[total_hrg]'") or die(mysqli_error($koneksi));

            echo "<script>alert('Data telah tersimpan')</script>";
            header("refresh:1;home.php");
        }
    }
}

class edit2
{
    public function update()
    {
        if (isset($_POST['t_update'])) {
            include "koneksi.php";
            mysqli_query($koneksi, "update tb_penjualan set
            tgl_penjualan = '$_POST[tgl_penjualan]',
            harga_brg = '$_POST[hrg_brg]',
            jumlah = '$_POST[jumlah]',
            total_hrg = '$_POST[total_hrg]'
            where id_transaksi = '$_GET[kode]'");

            echo "<script>alert('Data telah di update')</script>";
            header("refresh:1;home.php");
        }
    }
}

class barang
{

    public function tampil()
    {
        if (isset($_POST['t_simpan'])) {
            include "koneksi.php";
            mysqli_query($koneksi, "insert into tb_barang set
            nama_brg = '$_POST[nama_brg]',
            tipe_brg = '$_POST[tipe_brg]',
            harga_brg = '$_POST[harga_brg]'") or die(mysqli_error($koneksi));

            echo "<script>alert('Data telah tersimpan')</script>";
        }
    }
}

class edit1
{
    public function update()
    {
        if (isset($_POST['t_update'])) {
            include "koneksi.php";
            mysqli_query($koneksi, "update tb_barang set
            nama_brg = '$_POST[nama_brg]',
            tipe_brg = '$_POST[tipe_brg]',
            harga_brg = '$_POST[harga_brg]'
            where id_barang = '$_GET[kode]'");

            echo "<script>alert('Data telah di update')</script>";
            header("refresh:1;home.php");
        }
    }
}

