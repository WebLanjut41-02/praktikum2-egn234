<?php defined('BASEPATH') OR exit('No direct script access allowed');

class paketpos extends CI_Controller {

  public function __construct()
  {
  	parent::__construct();
    $this->load->model('m_login');
    $this->load->model('m_datapos');

    if(is_null($this->session->userdata('nip_k'))){
      redirect('login_k');
    }
  	//Do your magic here
  }
	public function index()
	{
	  $nip = $this->session->userdata('nip_k');

    $a = $this->db->get_where('karyawan', array('nip' => $nip))->row();

    $data['nama_k'] = $this->m_login->v_karyawan($a->nip)[0]->nama;
    $this->load->view('home', $data);
	}

	public function tambah_penghuni(){

    $nama = $this->input->post('nama');
    $unit = $this->input->post('unit');
    $noktp = $this->input->post('noktp');

    $this->m_datapos->i_paket($nama, $unit, $noktp);

    redirect('paketpos');
  }

	public function new_paket(){

//    $a = $this->db->get('penghuni')->row();
    $res = $this->m_datapos->v_penghuni();
    $data['penghuni'] = $res;

    $this->load->view('add_datapos', $data);
  }

  public function add_barang(){
    $paket = $this->input->post('paket');
    $sasaran = $this->input->post('sasaran');
    $penerima = $this->session->userdata('nip_k');

    $this->m_datapos->i_paket($paket, $sasaran, $penerima);

    redirect('paketpos/listpaket');
  }

  public function list_paket(){
    $data['lihat'] = $this->m_datapos->v_paket();

    $this->load->view('paketlist', $data);

  }

  public function edit_paket($id){


  }
}

/* End of file Controllername.php */
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/22/2019
 * Time: 9:06 AM
 */