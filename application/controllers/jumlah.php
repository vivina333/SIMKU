<?php
class jumlah extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('jumlah_model');
		$this->load->library('from_validation');
	}
	public function index(){
		$data['jumlah'] = $this->jumlah_model->getAll();
		$this->load->view('rab/jmlbiaya',$data);
	}
	public function add(){
		$jumlah = $this->jumlah_model;
		$validation = $this->from_validation;
		$validation->set_rules($jumlah->rules());

		if ($validation->run()) {
            $pemasokan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('jumlah/');
        }
        $this->load->view("crud/input_jumlah");
	}
	public function edit(){
		$model = new jumlah_model();
		$id = $this->request->getPost('id_jmlbiaya');
		$id = $this->request->getPost('id_projek');
		$data = array(
			'uraian'			=>$this->request->getPost('uraian'),
			'volume'			=>$this->request->getPost('volume'),
			'luas'				=>$this->request->getPost('luas'),
			'harga_satuan'		=>$this->request->getPost('harga_satuan'),
			'harga_total'		=>$this->request->getPost('harga_total'),
		);
		$model->edit($data, $id);
		return redirect()->to('/jumlah');
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();
		if ($this->jumlah_model->delete($id)){
			redirect(site_url('jumlah/index'));
		}
	}
	public function grafik(){
		$data['tb_jmlbiaya']=$this->jumlah_model->grafik();
		$this->load->view("crud/grafik",$data);
	}
}
?>