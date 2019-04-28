<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class BukuCntr extends CI_Controller { 
	function __construct()
	{
		parent::__construct();
		$this->load->model('Buku');
	}
	public function index() { 
		$data['dataBuku'] = $this->Buku->getListBuku();
		$data['content'] = 'buku/index';
  		$this->load->view('template/temp',$data);
	}
	public function create(){
		$data['content'] = 'buku/create';
  		$this->load->view('template/temp',$data);
	}
	public function store(){
		$data = array(
			'judul_buku' => $this->input->post('judul_buku'),
			'pengarang' => $this->input->post('pengarang'),
			'penerbit' => $this->input->post('penerbit'),
			'tahun_terbit' => $this->input->post('tahun_terbit')
		);
		$result = $this->Buku->insert($data);
		echo json_encode($result);
	}
	public function delete(){
		$result = $this->Buku->delete($this->input->post('kode_register'));
		echo json_encode($result);
	}	  
	public function edit($kode_register){
		$data['dataBuku'] = $this->Buku->getDataBuku($kode_register);
		$data['content'] = 'buku/edit';
  		$this->load->view('template/temp',$data);
	}
	public function update($kode_register){
        $result = $this->Buku->update($kode_register);
		echo json_encode($result);
	}
}