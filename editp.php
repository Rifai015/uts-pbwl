<?php 
include "app/koneksi.php";
$sql = mysqli_query($koneksi, "Select * From tb_transaksi where id_transaksi= '$_GET[kode]'");
$data = mysqli_fetch_array($sql);
?>

<?php
require_once "app/musik.php";


$Edit2 = new edit2();
$rows = $Edit2->update();
?>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">Tanggal Penjualan</td>
            <td><input type="text" name="tgl_penjualan" value="<?php echo date('Y-m-d'); ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="harga_brg " value="<?php echo $data['harga_brg']; ?>"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td><input type="text" name="total_hrg" value="<?php echo $data['total_hrg']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="t_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
