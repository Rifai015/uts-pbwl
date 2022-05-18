<?php 
include "app/koneksi.php";
$sql = mysqli_query($koneksi, "Select * From tb_konsumen where id_customer= '$_GET[kode]'");
$data = mysqli_fetch_array($sql);
?>

<?php
require_once "app/motor.php";


$Edit = new edit();
$rows = $Edit->update();
?>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td><input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="t_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
