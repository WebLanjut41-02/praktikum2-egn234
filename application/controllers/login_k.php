<?php defined('BASEPATH') OR exit('No direct script access allowed');

class login_k extends CI_Controller {


  public function __construct()
  {
  	parent::__construct();
    $this->load->model('m_login');

  	if(!is_null($this->session->userdata('nip_k'))){
  	  $id = $this->session->userdata('nip_k');

    }
  }
	public function index(){
    $this->load->view('login');

	}

	public function cek(){
    $karyawan = $this->input->post('nama');
    $nip = $this->input->post('nip');
    $cek = $this->m_login->s_karyawan($nip, $karyawan);
    $result = count($cek);
    if ($result > 0){
      $a = $this->db->get_where('karyawan', array('nip' => $nip, 'nama' => $karyawan))->row();

      $nip = $this->m_login->v_karyawan($a->nip)[0]->nip;
//      $nama = $this->m_login->v_karyawan($a->nama)[0]->nama;
      echo $nip;


      $this->session->set_userdata('nip_k', $nip);
      redirect('paketpos');

    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('login_k');
  }

}

/* End of file Controllername.php */


/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/22/2019
 * Time: 8:24 AM
 */