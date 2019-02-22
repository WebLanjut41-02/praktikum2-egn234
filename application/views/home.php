<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/22/2019
 * Time: 9:08 AM
 */
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2> Selamat datang, <?php echo $nama_k;?> </h2>

<a href="<?= base_url();?>index.php/paketpos/new_paket">BUAT PAKET BARU</a><br>
<a href="<?= base_url();?>index.php/paketpos/list_paket">LIHAT PAKET</a><br>
<a href="createpenghuni.php">BUAT DATA PENGHUNI</a><br>

<form action="<?=base_url();?>index.php/login_k/logout" method="post">
    <button type="submit" name="logout">LOGOUT</button>
</form>
</body>
</html>
