<?php 
include "app/koneksi.php";
$sql = mysqli_query($koneksi, "Select * From tb_barang where id_barang= '$_GET[kode]'");
$data = mysqli_fetch_array($sql);
?>

<?php
require_once "app/motor.php";


$Edit1 = new edit1();
$rows = $Edit1->update();
?>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">Nama Barang</td>
            <td><input type="text" name="nama_brg" value="<?php echo $data['nama_brg']; ?>"></td>
        </tr>
        <tr>
            <td>Tipe Barang</td>
            <td><input type="text" name="tipe_brg" value="<?php echo $data['tipe_brg']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="harga_brg" value="<?php echo $data['harga_brg']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="t_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
