<?php

class Model_DNkelas9 extends CI_Model
{
	

	// Validasi UTS Semester 1
	function view_UTS1()
	{
		$query	=	"SELECT DN9.id_DNUTS1_kelas9,DS9.nama,DS9.id_DS_kelas9,DN9.b_indonesia,DN9.b_inggris,DN9.ipa,DN9.ips,DN9.matematika,DN9.pkn,DN9.b_arab,DN9.nahwu,DN9.shorof,DN9.fiqih,DN9.tauhid,DN9.f_maqru,DN9.khot,DN9.tabir,DN9.tafsir,DN9.akhlak,DN9.siroh,DN9.olah_raga 
					FROM DNUTS1_kelas9 as DN9,DS_kelas9 as DS9 
					WHERE DN9.id_DS_kelas9=DS9.id_DS_kelas9";

		return $this->db->query($query);
	}

	function post_UTS1($data){

		$this->db->insert('DNUTS1_kelas9', $data);
	}

	function edit_UTS1($data, $id){
		$this->db->where('id_DNUTS1_kelas9', $id);
		$this->db->update('DNUTS1_kelas9', $data);
	}

	function get_one_UTS1($id){
		$param	=	array('id_DNUTS1_kelas9'=>$id);
		return $this->db->get_where('DNUTS1_kelas9', $param);
	}

	function delete_UTS1($id){
		$this->db->where('id_DNUTS1_kelas9', $id);
		$this->db->delete('DNUTS1_kelas9');
	}

	// End Validasi UTS Semester 1

	// Validasi Semester 1

	function view_SMT1()
	{
		$query	=	"SELECT DN9.id_DNSMT1_kelas9,DS9.nama,DS9.id_DS_kelas9,DN9.b_indonesia,DN9.b_inggris,DN9.ipa,DN9.ips,DN9.matematika,DN9.pkn,DN9.b_arab,DN9.nahwu,DN9.shorof,DN9.fiqih,DN9.tauhid,DN9.f_maqru,DN9.khot,DN9.tabir,DN9.tafsir,DN9.akhlak,DN9.siroh,DN9.olah_raga 
			FROM DNSMT1_kelas9 as DN9,DS_kelas9 as DS9 
			WHERE DN9.id_DS_kelas9=DS9.id_DS_kelas9";

		return $this->db->query($query);
	}

	function post_SMT1($data){

		$this->db->insert('DNSMT1_kelas9', $data);
	}

	function edit_SMT1($data, $id){
		$this->db->where('id_DNSMT1_kelas9', $id);
		$this->db->update('DNSMT1_kelas9', $data);
	}

	function get_one_SMT1($id){
		$param	=	array('id_DNSMT1_kelas9'=>$id);
		return $this->db->get_where('DNSMT1_kelas9', $param);
	}

	function delete_SMT1($id){
		$this->db->where('id_DNSMT1_kelas9', $id);
		$this->db->delete('DNSMT1_kelas9');
	}

	// End Validasi Semester 1

	// Validasi UTS Semester 2
	function view_UTS2()
	{
		$query	=	"SELECT DN9.id_DNUTS2_kelas9,DS9.nama,DS9.id_DS_kelas9,DN9.b_indonesia,DN9.b_inggris,DN9.ipa,DN9.ips,DN9.matematika,DN9.pkn,DN9.b_arab,DN9.nahwu,DN9.shorof,DN9.fiqih,DN9.tauhid,DN9.f_maqru,DN9.khot,DN9.tabir,DN9.tafsir,DN9.akhlak,DN9.siroh,DN9.olah_raga 
					FROM DNUTS2_kelas9 as DN9,DS_kelas9 as DS9 
					WHERE DN9.id_DS_kelas9=DS9.id_DS_kelas9";

		return $this->db->query($query);
	}

	function post_UTS2($data){

		$this->db->insert('DNUTS2_kelas9', $data);
	}

	function edit_UTS2($data, $id){
		$this->db->where('id_DNUTS2_kelas9', $id);
		$this->db->update('DNUTS2_kelas9', $data);
	}

	function get_one_UTS2($id){
		$param	=	array('id_DNUTS2_kelas9'=>$id);
		return $this->db->get_where('DNUTS2_kelas9', $param);
	}

	function delete_UTS2($id){
		$this->db->where('id_DNUTS2_kelas9', $id);
		$this->db->delete('DNUTS2_kelas9');
	}

	// End Validasi UTS Semester 2

	// Validasi Semester 2

	function view_SMT2()
	{
		$query	=	"SELECT DN9.id_DNSMT2_kelas9,DS9.nama,DS9.id_DS_kelas9,DN9.b_indonesia,DN9.b_inggris,DN9.ipa,DN9.ips,DN9.matematika,DN9.pkn,DN9.b_arab,DN9.nahwu,DN9.shorof,DN9.fiqih,DN9.tauhid,DN9.f_maqru,DN9.khot,DN9.tabir,DN9.tafsir,DN9.akhlak,DN9.siroh,DN9.olah_raga 
			FROM DNSMT2_kelas9 as DN9,DS_kelas9 as DS9 
			WHERE DN9.id_DS_kelas9=DS9.id_DS_kelas9";

		return $this->db->query($query);
	}

	function post_SMT2($data){

		$this->db->insert('DNSMT2_kelas9', $data);
	}

	function edit_SMT2($data, $id){
		$this->db->where('id_DNSMT2_kelas9', $id);
		$this->db->update('DNSMT2_kelas9', $data);
	}

	function get_one_SMT2($id){
		$param	=	array('id_DNSMT2_kelas9'=>$id);
		return $this->db->get_where('DNSMT2_kelas9', $param);
	}

	function delete_SMT2($id){
		$this->db->where('id_DNSMT2_kelas9', $id);
		$this->db->delete('DNSMT2_kelas9');
	}

	// End Validasi Semester 2

}

?>