<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/22/2019
 * Time: 10:28 AM
 */?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h1>DATA PAKET</h1>
<form method="POST" action="datamhs.php">
  <table border="1">
    <tr align="center">
      <td>Tanggal Datang</td>
      <td>Sasaran</td>
      <td>Penerima</td>
      <td>Isi Paket</td>
      <td>Tanggal ambil</td>
      <td>Aksi</td>
    </tr>
    <?php
    foreach ($lihat as $key) {
      echo "<tr><td>".$key->tgl_datang."</td>";
      echo "<td>".$key->sasaran.'</td>';
      echo "<td>".$key->penerima.'</td>';
      echo "<td>".$key->isi_pkt.'</td>';
      echo "<td>".$key->tgl_ambil.'</td>';
      echo "<td><a href='".base_url()."/index.php/paketpos/edit_paket/".$key->id."'>EDIT</a></td><tr>";
    }
    ?>
  </table>
</form>
</body>
</html>
