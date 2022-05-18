<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>

    <div class="akun">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1>Sparepart Motor</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#" class="active">Pemesanan</a>
                    <ul class="dropdown">
                        <li><a href="index.php?page=konsumen" ></a>Input Data Konsumen</li>
                        <li><a href="index.php?page=barang"></a>Input Data Barang</li>
                        <li><a href="index.php?page=pembelian" ></a>Input Data Pembelian</li>
                        
                    </ul>
                </li>
                <li><a href="index.php?page=informasi">Informasi</a></li>
                <li><a href="index.php?page=logout">Logout</a></li>
            </ul>
        </div>
    </header>

    <?php
    require_once "app/motor.php";


    $Penjualan = new penjualan();
    $rows = $Penjualan->tampil();
    ?>

    <section class="banner">
        <h2>Welcome to My Website </h2>
    </section>
    <section class="about">
        <div class="container">
            <h3>Input Data Pembelian</h3>

            <form action="" method="post">
                <table>
                    <tr>
                        <td width="130">Tanggal Penjualan</td>
                        <td><input type="text" name="tgl_penjualan" value="<?php date('Y-m-d'); ?>"></td>
                    </tr>
                    <tr>
                        <td>Harga Barang</td>
                        <td><input type="text" name="hrg_brg"></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><input type="text" name="jumlah"></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td><input type="text" name="total_hrg"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="t_simpan" value="SIMPAN"></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>





</body>

</html>