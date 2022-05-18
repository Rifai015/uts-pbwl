<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/style.css" />
    <link rel="stylesheet" href="layouts/assets/css/tabel.css" />
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
                <li><a href="index.php" >Home</a></li>
                <li><a href="#">Pemesanan</a>
                    <ul class="dropdown">
                         <li><a href="index.php?page=konsumen"></a>Input Data Konsumen</li>
                         <li><a href="index.php?page=barang"></a>Input Data Barang</li>
                        <li><a href="index.php?page=pembelian"></a>Input Data Pembelian</li>
                        
                    </ul>
                </li>
                <li><a href="index.php?page=informasi" class="active">Informasi</a></li>
                <li><a href="index.php?page=logout">Logout</a></li>
            </ul>
        </div>
    </header>

    <section class="banner">
        <h2>Welcome to My Website </h2>
    </section>
    <section class="about">
        <div class="container1">
            <h3>Tabel Konsumen</h3>
            <table border="1">
                <tr>
                    <th width="50">No</th>
                    <th width="150">Nama Konsumen</th>
                    <th width="150">Alamat</th>
                    <th width="150">No Hp</th>
                    <th colspan="2">Aksi</th>
                </tr>


                <?php
                include "app/koneksi.php";

                $no = 1;
                $ambildata = mysqli_query($koneksi, "Select * From tb_konsumen");
                while ($tampil = mysqli_fetch_array($ambildata)) {
                    $warna = ($no % 2 == 1) ? "white" : "#eee";

                    echo "
                    <tr >
                    <td align ='center'>$no</td>
                    <td>$tampil[nama]</td>
                    <td>$tampil[alamat]</td>
                    <td>$tampil[no_hp]</td>
                    <td><a href='delk.php?del=$tampil[id_customer]'>Hapus</a></td>
                    <td ><a href='editk.php?kode=$tampil[id_customer]'>Edit</a>
                    </tr>";
                    $no++;
                }

                ?>

            </table>

            <h3>Tabel Barang</h3>
            <table border="1">
                <tr>
                    <th width="50">No</th>
                    <th width="150">Nama Barang</th>
                    <th width="150">Tipe Barang</th>
                    <th width="150">Harga Barang</th>
                    <th colspan="2">Aksi</th>
                </tr>


                <?php
                include "app/koneksi.php";

                $no = 1;
                $ambildata = mysqli_query($koneksi, "Select * From tb_barang");
                while ($tampil = mysqli_fetch_array($ambildata)) {
                    $warna = ($no % 2 == 1) ? "white" : "#eee";

                    echo "
                    <tr >
                    <td align ='center'>$no</td>
                    <td>$tampil[nama_brg]</td>
                    <td>$tampil[tipe_brg]</td>
                    <td>$tampil[harga_brg]</td>
                    <td><a href='delb.php?del=$tampil[id_barang]'>Hapus</a></td>
                    <td ><a href='editb.php?kode=$tampil[id_barang]'>Edit</a>
                    </tr>";
                    $no++;
                }

                ?>
                
            </table>

            <h3>Tabel Penjualan</h3>
            <table border="1">
                <tr>
                    <th width="50">No</th>
                    <th width="200">Tanggal Penjualan</th>
                    <th width="150">Harga Barang</th>
                    <th width="150">Jumlah</th>
                    <th width="150">Total Harga</th>
                    <th colspan="2">Aksi</th>
                    
                </tr>


                <?php
                include "app/koneksi.php";

                $no = 1;
                $ambildata = mysqli_query($koneksi, "Select * From tb_penjualan");
                while ($tampil = mysqli_fetch_array($ambildata)) {
                    $warna = ($no % 2 == 1) ? "white" : "#eee";

                    echo "
                    <tr >
                    <td align ='center'>$no</td>
                    <td>$tampil[tgl_penjualan]</td>
                    <td>$tampil[hrg_brg]</td>
                    <td>$tampil[jumlah]</td>
                    <td>$tampil[total_hrg]</td>
                    <td><a href='delp.php?del=$tampil[id_transaksi]'>Hapus</a></td>
                    <td ><a href='editp.php?kode=$tampil[id_transaksi]'>Edit</a>
                    </tr>";
                    $no++;
                }

                ?>

            </table>
            
        </div>
    </section>

    <section class="item">
        <div class="container">
            <h3>Item</h3>
            <div class="box">
                <div class="col-4">
                    <div class="icon"><img src="layouts/assets/images/item1.jpg" alt=""></div>
                </div>
                <div class="col-4">
                    <div class="icon"><img src="layouts/assets/images/item2.jpg" alt=""></div>
                </div>
                <div class="col-4">
                    <div class="icon"><img src="layouts/assets/images/item4.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>