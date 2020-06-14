<?php
class Mahasiswa_model extends CI_Model
{
	function getAll(){
		$this->db->select('*');
		$this->db->from('tb_jmlbiaya');
		$this->db->join('tb_proyek','tb_jmlbiaya.id_projek=tb_proyek.id_projek');
		$this->db->join('tb_login','tb_proyek.id_login=tb_login.id_login');
		$query=$this->db->get();
		return $query;
	}
	function getGroup()
	{
		$this->db->order_by('id_projek', 'ASC');
		return $this->db->from('tb_proyek')
		->get()
		->result();}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);}
	
	function getIdProyek(){
		$this->db->select('id_projek');
		$this->db->from('tb_proyek');
		$this->db->get()->row();
	}
	public function tambahJumlahBiaya($data)
	{
		
		$this->db->insert('tb_jmlbiaya', $data);
	}
	public function tambahBahanBangunan($data)
	{
		
		$this->db->insert('tb_bahan', $data);
	}

	public function tambahProyek($data,$table)
	{
		
		$this->db->insert($table,$data);
	}
	
	function getProyek(){
		$this->db->select('*');
		$this->db->from('tb_proyek');
		$query=$this->db->get();
		return $query;
	}
	function getStatus(){
		$this->db->select('*');
		$this->db->from('tb_proses');
		$query=$this->db->get();
		return $query;
	}
	function getBiaya(){
		$this->db->select('*');
		$this->db->from('tb_jmlbiaya');
		$query=$this->db->get();
		return $query;
	}

	function getBahan(){
		$this->db->select('*');
		$this->db->from('tb_bahan');
		$query=$this->db->get();
		return $query;
	}
	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('username',$user);
		$this->db->where('PASSWORD',$pass);
		$query = $this->db->get();
		return $query;
	}

}
?>