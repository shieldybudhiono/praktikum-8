<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class AnggotaCntr extends CI_Controller { 
	function __construct()
	{
		parent::__construct();
		$this->load->model('Anggota');
	}
	public function index() { 
		$data['dataAnggota'] = $this->Anggota->getListAnggota();
		$data['content'] = 'anggota/index';
  		$this->load->view('template/temp',$data);
		}
	public function create(){
		$data['content'] = 'anggota/create';
  		$this->load->view('template/temp',$data);
	}
	public function store(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'prodi' => $this->input->post('prodi'),
			'jenjang' => $this->input->post('jenjang'),
			'alamat' => $this->input->post('alamat')
		);
		$result = $this->Anggota->insert($data);
		echo json_encode($result);
	}
	public function delete(){
		$result = $this->Anggota->delete($this->input->post('kode_anggota'));
		echo json_encode($result);
	}	  
	public function edit($kode_anggota){
		$data['dataAnggota'] = $this->Anggota->getDataAnggota($kode_anggota);
		$data['content'] = 'anggota/edit';
  		$this->load->view('template/temp',$data);
	}
	public function update($kode_anggota){
		$result = $this->Anggota->update($kode_anggota);
		echo json_encode($result);
	}
}