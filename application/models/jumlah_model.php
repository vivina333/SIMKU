<?php 
 
class jumlah_model extends CI_Model{

    private $_table = "tb_jmlbiaya";

    public $id_jmlbiaya;
    public $id_projek = 1;
    public $uraian;
    public $volume;
    public $luas;
    public $harga_satuan;
    public $harga_total;
 
 public function rules()
    {
        return [
            ['field' => 'uraian',
            'label' => 'uraian',
            'rules' => 'required'],

            ['field' => 'volume',
            'label' => 'volume',
            'rules' => 'required'],

            ['field' => 'luas',
            'label' => 'luas',
            'rules' => 'numeric'],

            ['field' => 'harga_satuan',
            'label' => 'harga_satuan',
            'rules' => 'required'],

            ['field' => 'harga_total',
            'label' => 'harga_total',
            'rules' => 'numeric'],
        ];
    }  
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_jmlbiaya" => $id])->row();
    }

    public function save()
    {
    	$post = $this->input->post();
    	$this->uraian 			= $post["uraian"];
        $this->volume 			= $post["volume"];
        $this->luas 			= $post["luas"];
        $this->harga_satuan 	= $post["harga_satuan"];
        $this->harga_berat 		= $post["harga_total"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
     {
        $query = $this->db->table('tb_jmlbiaya')->update($data, array('id_jmlbiaya' => $id));
        return $query;
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_jmlbiaya" => $id));
    }