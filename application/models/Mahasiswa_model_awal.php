<?php
class Mahasiswa_model extends CI_Model
{
	function getGrup(){
		$this->db->select('*');
		$this->db->from('tb_proyek');
		//$this->db->join('tb_proyek','tb_proyek.id_login=tb_login.id_login');
		//$this->db->join('tb_proyek','tb_proyek.login=tb_login.id_login');
		$query=$this->db->get();
		return $query;
	}

	function getUser(){
		$this->db->select('*');
		$this->db->from('tb_proses');
		//$this->db->join('tb_proyek','tb_proyek.id_login=tb_login.id_login');
		//$this->db->join('tb_proyek','tb_proyek.login=tb_login.id_login');
		$query=$this->db->get();
		return $query;
	}
	function tambahData($data,$table){
		$this->db->insert($table,$data);
	}
	function editData($where,$table){
		return $this->db->get_where($table,$where);
	}
	function updateData($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapusData($where){
        $this->db->where('id_projek', $where);
        $this->db->delete('tb_proyek');
    }
	
	function getAll(){
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->from('tb_proyek');
		//$this->db->join('tb_proyek','tb_proyek.id_login=tb_login.id_login');
		$query=$this->db->get();
		return $query;
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->where($table);
	}
	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get();
		return $query;
	}
	function getIdProyek(){
		$this->db->select('id_proyek');
		$this->db->from('tb_proyek');
		$this->db->get()->row();
	}
	
}
?>