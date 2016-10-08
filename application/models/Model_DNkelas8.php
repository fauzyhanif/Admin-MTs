<?php

class Model_DNkelas8 extends CI_Model
{
	

	// Validasi UTS Semester 1
	function view_UTS1()
	{
		$query	=	"SELECT DN8.id_DNUTS1_kelas8,DS8.nama,DS8.id_DS_kelas8,DN8.b_indonesia,DN8.b_inggris,DN8.ipa,DN8.ips,DN8.matematika,DN8.pkn,DN8.b_arab,DN8.nahwu,DN8.shorof,DN8.fiqih,DN8.tauhid,DN8.f_maqru,DN8.khot,DN8.tabir,DN8.tafsir,DN8.akhlak,DN8.siroh,DN8.olah_raga 
					FROM DNUTS1_kelas8 as DN8,DS_kelas8 as DS8 
					WHERE DN8.id_DS_kelas8=DS8.id_DS_kelas8";

		return $this->db->query($query);
	}

	function post_UTS1($data){

		$this->db->insert('DNUTS1_kelas8', $data);
	}

	function edit_UTS1($data, $id){
		$this->db->where('id_DNUTS1_kelas8', $id);
		$this->db->update('DNUTS1_kelas8', $data);
	}

	function get_one_UTS1($id){
		$param	=	array('id_DNUTS1_kelas8'=>$id);
		return $this->db->get_where('DNUTS1_kelas8', $param);
	}

	function delete_UTS1($id){
		$this->db->where('id_DNUTS1_kelas8', $id);
		$this->db->delete('DNUTS1_kelas8');
	}

	// End Validasi UTS Semester 1

	// Validasi Semester 1

	function view_SMT1()
	{
		$query	=	"SELECT DN8.id_DNSMT1_kelas8,DS8.nama,DS8.id_DS_kelas8,DN8.b_indonesia,DN8.b_inggris,DN8.ipa,DN8.ips,DN8.matematika,DN8.pkn,DN8.b_arab,DN8.nahwu,DN8.shorof,DN8.fiqih,DN8.tauhid,DN8.f_maqru,DN8.khot,DN8.tabir,DN8.tafsir,DN8.akhlak,DN8.siroh,DN8.olah_raga 
			FROM DNSMT1_kelas8 as DN8,DS_kelas8 as DS8 
			WHERE DN8.id_DS_kelas8=DS8.id_DS_kelas8";

		return $this->db->query($query);
	}

	function post_SMT1($data){

		$this->db->insert('DNSMT1_kelas8', $data);
	}

	function edit_SMT1($data, $id){
		$this->db->where('id_DNSMT1_kelas8', $id);
		$this->db->update('DNSMT1_kelas8', $data);
	}

	function get_one_SMT1($id){
		$param	=	array('id_DNSMT1_kelas8'=>$id);
		return $this->db->get_where('DNSMT1_kelas8', $param);
	}

	function delete_SMT1($id){
		$this->db->where('id_DNSMT1_kelas8', $id);
		$this->db->delete('DNSMT1_kelas8');
	}

	// End Validasi Semester 1

	// Validasi UTS Semester 2
	function view_UTS2()
	{
		$query	=	"SELECT DN8.id_DNUTS2_kelas8,DS8.nama,DS8.id_DS_kelas8,DN8.b_indonesia,DN8.b_inggris,DN8.ipa,DN8.ips,DN8.matematika,DN8.pkn,DN8.b_arab,DN8.nahwu,DN8.shorof,DN8.fiqih,DN8.tauhid,DN8.f_maqru,DN8.khot,DN8.tabir,DN8.tafsir,DN8.akhlak,DN8.siroh,DN8.olah_raga 
					FROM DNUTS2_kelas8 as DN8,DS_kelas8 as DS8 
					WHERE DN8.id_DS_kelas8=DS8.id_DS_kelas8";

		return $this->db->query($query);
	}

	function post_UTS2($data){

		$this->db->insert('DNUTS2_kelas8', $data);
	}

	function edit_UTS2($data, $id){
		$this->db->where('id_DNUTS2_kelas8', $id);
		$this->db->update('DNUTS2_kelas8', $data);
	}

	function get_one_UTS2($id){
		$param	=	array('id_DNUTS2_kelas8'=>$id);
		return $this->db->get_where('DNUTS2_kelas8', $param);
	}

	function delete_UTS2($id){
		$this->db->where('id_DNUTS2_kelas8', $id);
		$this->db->delete('DNUTS2_kelas8');
	}

	// End Validasi UTS Semester 2

	// Validasi Semester 2

	function view_SMT2()
	{
		$query	=	"SELECT DN8.id_DNSMT2_kelas8,DS8.nama,DS8.id_DS_kelas8,DN8.b_indonesia,DN8.b_inggris,DN8.ipa,DN8.ips,DN8.matematika,DN8.pkn,DN8.b_arab,DN8.nahwu,DN8.shorof,DN8.fiqih,DN8.tauhid,DN8.f_maqru,DN8.khot,DN8.tabir,DN8.tafsir,DN8.akhlak,DN8.siroh,DN8.olah_raga 
			FROM DNSMT2_kelas8 as DN8,DS_kelas8 as DS8 
			WHERE DN8.id_DS_kelas8=DS8.id_DS_kelas8";

		return $this->db->query($query);
	}

	function post_SMT2($data){

		$this->db->insert('DNSMT2_kelas8', $data);
	}

	function edit_SMT2($data, $id){
		$this->db->where('id_DNSMT2_kelas8', $id);
		$this->db->update('DNSMT2_kelas8', $data);
	}

	function get_one_SMT2($id){
		$param	=	array('id_DNSMT2_kelas8'=>$id);
		return $this->db->get_where('DNSMT2_kelas8', $param);
	}

	function delete_SMT2($id){
		$this->db->where('id_DNSMT2_kelas8', $id);
		$this->db->delete('DNSMT2_kelas8');
	}

	// End Validasi Semester 2

}

?>