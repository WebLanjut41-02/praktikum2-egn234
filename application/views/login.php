<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/22/2019
 * Time: 8:30 AM
 */?>

<h1>LOGIN KARYAWAN</h1>
<form action="<?=base_url();?>index.php/login_k/cek" method="post">
  Nama: <input type="text" name="nama"><br>
  NIP: <input type="text" name="nip"><br>
  <button type="submit" name="submit">LOGIN</button>
</form>
