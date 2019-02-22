<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model
{

  public function s_karyawan($nip, $karyawan){
    $this->db->from('karyawan');
    $this->db->where('nip', $nip);
    $this->db->where('nama', $karyawan);

    $query = $this->db->get();
    return $query->result();
  }

  public function v_karyawan($nip){
    $this->db->select('*');
    $this->db->from('karyawan');
    $this->db->where('nip', $nip);

    $query = $this->db->get();
    return $query->result();
  }

}

/* End of file .php */
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/22/2019
 * Time: 8:26 AM
 */