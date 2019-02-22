<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_datapos extends CI_Model
{

  public function v_penghuni(){
    $this->db->select('*');
    $this->db->from('penghuni');

    $query = $this->db->get();
    return $query->result();
  }

  public function i_penghuni($nama_p, $unit_p, $noktp_p){
    $data = array(
      'nama' => $nama_p,
      'unit' => $unit_p,
      'noktp' => $noktp_p
    );

    $this->db->insert('paket', $data);
  }

  public function i_paket($paket, $sasaran, $penerima){
    $tgl = mdate('%Y-%m-%d', now());
    $data = array(
      'tgl_datang' => $tgl,
      'sasaran' => $sasaran,
      'penerima' => $penerima,
      'isi_pkt' => $paket
    );

    $this->db->insert('paket', $data);

  }

  public function v_paket(){
    $this->db->select('*');
    $this->db->from('paket');

    $query = $this->db->get();
    return $query->result();
  }
}

/* End of file .php */
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/22/2019
 * Time: 9:38 AM
 */