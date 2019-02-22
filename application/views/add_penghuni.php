<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/22/2019
 * Time: 10:52 AM
 */?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post" action="<?=base_url();?>index.php/paketpos/tambah_penghuni">
  <table>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama"></td>
    </tr>
    <tr>
      <td>Unit</td>
      <td>:</td>
      <td><input type="text" name="unit"></td>
    </tr>
    <tr>
      <td>Nomor KTP</td>
      <td>:</td>
      <td><input type="text" name="noktp"></td>
    </tr>
    <tr>
      <td><button type="submit" name="buat">BUAT</button></td>
    </tr>
  </table>
</form>
</body>
</html>
