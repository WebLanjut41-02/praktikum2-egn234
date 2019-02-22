<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/22/2019
 * Time: 9:39 AM
 */?>

<form method="post" action="<?=base_url();?>index.php/paketpos/add_barang">
  <table>
    <tr>
      <td>isi paket</td>
      <td>:</td>
      <td><input type="text" name="paket"></td>
    </tr>
    <tr>
      <td>Sasaran penghuni</td>
      <td>:</td>
      <td>
        <select name="sasaran">
          <option value="null"> </option>
          <?php
          foreach ($penghuni as $key){
            echo "<option value='".$key->noktp."'>".$key->noktp."</option>";
          }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="3"><button type="submit" name="create">BUAT</button></td>
    </tr>
  </table>
</form>
