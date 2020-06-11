<?php
class Mahasiswa extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('template');
	}
	public function index(){
		$data['user'] = $this->Mahasiswa_model->getAll()->result();
		$this->template->views('crud/dashboard',$data);
	}
	public function tambah(){
		$this->template->views('crud/tambah_mahasiswa');
	}
	public function grup(){
		$data['grup'] = $this->Mahasiswa_model->getGrup()->result();
		$this->template->views('crud/master_grup',$data);
	}
	public function tambahGrup(){
		$this->template->views('crud/tambah_grup');
	}
	public function add(){
		$nama_proyek = $this->input->post('nama_proyek');
		$nama_mandor = $this->input->post('nama_mandor');
		$data = array(
			'nama_proyek' => $nama_proyek,
			'nama_mandor' => $nama_mandor,
		);
		$this->Mahasiswa_model->tambahData($data,'tb_proyek');
		redirect('Mahasiswa/grup');
	}
	public function rubah($id_projek){
		$where = array('id_projek' => $id_projek);
		$data['grup'] = $this->Mahasiswa_model->editData($where,'tb_proyek')->result();
		$this->template->views('crud/edit_grup',$data);
	}
	public function perbarui(){
		$id_projek = $this->input->post('id_projek');
		$nama_proyek = $this->input->post('nama_proyek');
		$nama_mandor = $this->input->post('nama_mandor');

		$data = array(
			'nama_proyek' => $nama_proyek,
			'nama_mandor' => $nama_mandor,
		);
		$where = array(
			'id_projek' => $id_projek
		);

		$this->Mahasiswa_model->updateData($where,$data,'tb_proyek');
		redirect('Mahasiswa/grup');	
	}
	public function hapusGrup($id_projek){
        $this->Mahasiswa_model->hapusData($id_projek);
        redirect('Mahasiswa/grup');
	}
	public function user(){
		$data['user'] = $this->Mahasiswa_model->getUser()->result();
		$this->template->views('crud/master_user',$data);
	}

	public function input(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');		
		$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'grup' => $grup
		);
		$this->Mahasiswa_model->input_data($data,'tm_user');
		redirect('Mahasiswa');
	}
	public function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->Mahasiswa_model->edit_data($where,'tm_user')->result();
		$this->template->views('crud/edit_mahasiswa',$data);
	}
	public function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);

		$where = array(
			'id' => $id
		);

		$this->Mahasiswa_model->update_data($where,$data,'tm_user');
		redirect('Mahasiswa');
	}
	public function hapus($id){
		$where = array('id' => $id);
		$this->Mahasiswa_model->hapus_data($where,'tm_user');
		redirect('Mahasiswa');
	}
	public function Api(){
		$data = $this->Mahasiswa_model->getAll();
		echo json_encode($data->result_array());
	}
	public function ApiInsert(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$this->Mahasiswa_model->input_data($data,'tm_user');
		echo json_encode($array);
	}
	public function ApiDelete(){
		if ($this->input->post('username')) {
			$where = array('username' => $this->input->post('username'));
			if ($this->Mahasiswa_model->hapus_data($where,'tm_user')) {
				$array = array('success' => true);
			}else{
				$array = array('error' => true);
			}
			echo json_encode($array);
		}
	}
	public function ApiUpdate(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');
		$cek = $this->Mahasiswa_model->getgrup();
		foreach ($a as $v) {
			if ($grup == $v->grup) {
				$grup = $v->id_grup;
			}
		}
		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$where = array('username' => $username);
		$this->Mahasiswa_model->update_data($where,$data,'tm_user');
		echo json_encode($array);
	}
}