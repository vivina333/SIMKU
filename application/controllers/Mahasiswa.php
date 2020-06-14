<?php

class Mahasiswa extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('Template');

	}

	public function index (){

		$data['user'] = $this->Mahasiswa_model->getAll()->result();
		$this->template->views('crud/home_mahasiswa',$data);
	}

	public function grup(){
		$data['grup'] = $this->Mahasiswa_model->getProyek()->result();
		$this->template->views('crud/master_grup',$data);
	}

	public function jumlahbiaya () {
		$data ['title'] = 'Jumlah Biaya Pekerja';
		$data['jumlahbiaya'] = $this->Mahasiswa_model->getBiaya()->result();
		$this->template->views('rab/jmlbiaya', $data);
	}
	public function bahan () {
		$data ['title'] = 'Transaksi Bahan Banguan';
		$data['bahan'] = $this->Mahasiswa_model->getBahan()->result();
		$this->template->views('rab/bahan', $data);
	}

	public function user(){
		$data['user'] = $this->Mahasiswa_model->getStatus()->result();
		$data ['title'] = 'Status Pengerjaan';
		$this->template->views('crud/master_user',$data);

	}

	/* fungsi untuk menampilkan form tambah data*/
	public function tambah(){
		$this->template->views('tambah/jumlah');
	}
	
	public function tambah_proses(){
			$id_jmlbiaya = $this->input->post('id_jmlbiaya', true);
			$uraian = $this->input->post('uraian', true);
			$id_projek = $this->input->post('id_projek', true);
			$volume = $this->input->post('volume', true);
			$luas = $this->input->post('luas', true);
			$harga_satuan = $this->input->post('harga_satuan', true);
			$harga_total = $this->input->post('harga_total', true);
		$data = array (
			"id_jmlbiaya" => $id_jmlbiaya ,
			"id_projek" => $id_projek,
			"uraian" => $uraian,
			"volume" => $volume,
			"luas" => $luas,
			"harga_satuan" => $harga_satuan,
			"harga_total" => $harga_total
		);
		$this->Mahasiswa_model->tambahJumlahBiaya($data);	
		redirect('Mahasiswa/jumlahbiaya');
	}

	public function tambah2(){
	//$data['idProyek'] = $this->Mahasiswa_model->getIdProyek();
	$this->template->views('tambah/proyek');
	}

	public function tambah_proyek(){
			$id_projek = $this->input->post('id_projek');
			$nama_proyek = $this->input->post('nama_proyek');
			$nama_mandor = $this->input->post('nama_mandor');
			$lokasi = $this->input->post('lokasi');
			$luas = $this->input->post('luas');
			$tanggal = $this->input->post('tanggal');
			
		$data = array (
			"id_projek" => $id_projek,
			"nama_proyek" => $nama_proyek,
			"nama_mandor" => $nama_mandor,
			"lokasi" => $lokasi,
			"luas" => $luas,
			"tanggal" => $tanggal
		);
		$this->Mahasiswa_model->tambahProyek($data,"tb_proyek");	
		redirect('Mahasiswa/grup');
	}

	public function tambah3(){
		$this->template->views('tambah/bahan');
	}

	public function tambah_bahan(){
			$id_bahan = $this->input->post('id_jmlbiaya', true);
			$nama_bahan = $this->input->post('nama_bahan', true);
			$id_projek = $this->input->post('id_projek', true);
			$jumlah = $this->input->post('jumlah', true);
			$satuan = $this->input->post('satuan', true);
			$harga_satuan = $this->input->post('harga_satuan', true);
			$harga_total = $this->input->post('harga_total', true);
		$data = array (
			"id_bahan" => $id_bahan,
			"id_projek" => $id_projek,
			"nama_bahan" => $nama_bahan,
			"jumlah" => $jumlah,
			"satuan" => $satuan,
			"harga_satuan" => $harga_satuan,
			"harga_total" => $harga_total
		);
		$this->Mahasiswa_model->tambahBahanBangunan($data);	
		redirect('Mahasiswa/bahan');
	}

	/* fungsi untuk menampilkan update data*/
	public function update(){
		$id = $this->input->post('id');
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

		$where = array(
			'id' => $id
		);

		$this->Mahasiswa_model->update_data($where,$data,'tm_user');
		redirect('Mahasiswa');
	}


	/* fungsi untuk mengambil data hasil inputan form
	dan memasukkan ke database db_ci*/
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
		$data['grup']=$this->Mahasiswa_model->getGroup();
		$data['user'] = $this->Mahasiswa_model->edit_data($where,'tm_user')->result();
		$this->template->views('crud/edit_mahasiswa',$data);
	}
	
	public function hapus($id){
		$where = array('id' => $id);
		$this->Mahasiswa_model->hapus_data($where,'tm_user');
		redirect('Mahasiswa/index');
	}
	public function Api(){
		$data = $this->Mahasiswa_model->getAll();
		echo json_encode($data->result_array());
	}
	public function ApiInsert(){
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
		$this->Mahasiswa_model->input_data($data, 'tm_user');
		echo json_encode($array);
	}
	public function ApiDelete(){
		if ($this->input->post('username')) 
		{
			$where = array('username' => $this->input->post('username'));
			if ($this->Mahasiswa_model->hapus_data($where,'tm_user')) 
			{
				$array = array('success' => true );
			} else {
				$array = array('error' => true );
			}
			echo json_encode($array);
		}
	}
	public function ApiUpdate(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');
		$cek= $this->Mahasiswa_model->getGroup();
		foreach ($cek as $row) {
			if ($grup == $row->grup) {
				$grup = $row->id_grup;
			}
		}
		$data = array(
			'username' => $username, 
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$where = array('username' => $username);
		$this->Mahasiswa_model->update_data($where,$data, 'tm_user');
		echo json_encode($array);
	}
}
?>