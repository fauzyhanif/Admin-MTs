<?php

class Model_DNkelas7 extends CI_Model
{
	

	// Validasi UTS Semester 1
	function view_UTS1()
	{
		$query	=	"SELECT DN7.id_DNUTS1_kelas7,DS7.nama,DS7.id_DS_kelas7,DN7.b_indonesia,DN7.b_inggris,DN7.ipa,DN7.ips,DN7.matematika,DN7.pkn,DN7.b_arab,DN7.nahwu,DN7.shorof,DN7.fiqih,DN7.tauhid,DN7.f_maqru,DN7.khot,DN7.tabir,DN7.tafsir,DN7.akhlak,DN7.siroh,DN7.olah_raga 
					FROM DNUTS1_kelas7 as DN7,DS_kelas7 as DS7 
					WHERE DN7.id_DS_kelas7=DS7.id_DS_kelas7";

		return $this->db->query($query);
	}

	function post_UTS1($data){

		$this->db->insert('DNUTS1_kelas7', $data);
	}

	function edit_UTS1($data, $id){
		$this->db->where('id_DNUTS1_kelas7', $id);
		$this->db->update('DNUTS1_kelas7', $data);
	}

	function get_one_UTS1($id){
		$param	=	array('id_DNUTS1_kelas7'=>$id);
		return $this->db->get_where('DNUTS1_kelas7', $param);
	}

	function delete_UTS1($id){
		$this->db->where('id_DNUTS1_kelas7', $id);
		$this->db->delete('DNUTS1_kelas7');
	}

	// End Validasi UTS Semester 1

	// Validasi Semester 1

	function view_SMT1()
	{
		$query	=	"SELECT DN7.id_DNSMT1_kelas7,DS7.nama,DS7.id_DS_kelas7,DN7.b_indonesia,DN7.b_inggris,DN7.ipa,DN7.ips,DN7.matematika,DN7.pkn,DN7.b_arab,DN7.nahwu,DN7.shorof,DN7.fiqih,DN7.tauhid,DN7.f_maqru,DN7.khot,DN7.tabir,DN7.tafsir,DN7.akhlak,DN7.siroh,DN7.olah_raga 
			FROM DNSMT1_kelas7 as DN7,DS_kelas7 as DS7 
			WHERE DN7.id_DS_kelas7=DS7.id_DS_kelas7";

		return $this->db->query($query);
	}

	function post_SMT1($data){

		$this->db->insert('DNSMT1_kelas7', $data);
	}

	function edit_SMT1($data, $id){
		$this->db->where('id_DNSMT1_kelas7', $id);
		$this->db->update('DNSMT1_kelas7', $data);
	}

	function get_one_SMT1($id){
		$param	=	array('id_DNSMT1_kelas7'=>$id);
		return $this->db->get_where('DNSMT1_kelas7', $param);
	}

	function delete_SMT1($id){
		$this->db->where('id_DNSMT1_kelas7', $id);
		$this->db->delete('DNSMT1_kelas7');
	}

	// End Validasi Semester 1

	// Validasi UTS Semester 2
	function view_UTS2()
	{
		$query	=	"SELECT DN7.id_DNUTS2_kelas7,DS7.nama,DS7.id_DS_kelas7,DN7.b_indonesia,DN7.b_inggris,DN7.ipa,DN7.ips,DN7.matematika,DN7.pkn,DN7.b_arab,DN7.nahwu,DN7.shorof,DN7.fiqih,DN7.tauhid,DN7.f_maqru,DN7.khot,DN7.tabir,DN7.tafsir,DN7.akhlak,DN7.siroh,DN7.olah_raga 
					FROM DNUTS2_kelas7 as DN7,DS_kelas7 as DS7 
					WHERE DN7.id_DS_kelas7=DS7.id_DS_kelas7";

		return $this->db->query($query);
	}

	function post_UTS2($data){

		$this->db->insert('DNUTS2_kelas7', $data);
	}

	function edit_UTS2($data, $id){
		$this->db->where('id_DNUTS2_kelas7', $id);
		$this->db->update('DNUTS2_kelas7', $data);
	}

	function get_one_UTS2($id){
		$param	=	array('id_DNUTS2_kelas7'=>$id);
		return $this->db->get_where('DNUTS2_kelas7', $param);
	}

	function delete_UTS2($id){
		$this->db->where('id_DNUTS2_kelas7', $id);
		$this->db->delete('DNUTS2_kelas7');
	}

	// End Validasi UTS Semester 2

	// Validasi Semester 2

	function view_SMT2()
	{
		$query	=	"SELECT DN7.id_DNSMT2_kelas7,DS7.nama,DS7.id_DS_kelas7,DN7.b_indonesia,DN7.b_inggris,DN7.ipa,DN7.ips,DN7.matematika,DN7.pkn,DN7.b_arab,DN7.nahwu,DN7.shorof,DN7.fiqih,DN7.tauhid,DN7.f_maqru,DN7.khot,DN7.tabir,DN7.tafsir,DN7.akhlak,DN7.siroh,DN7.olah_raga 
			FROM DNSMT2_kelas7 as DN7,DS_kelas7 as DS7 
			WHERE DN7.id_DS_kelas7=DS7.id_DS_kelas7";

		return $this->db->query($query);
	}

	function post_SMT2($data){

		$this->db->insert('DNSMT2_kelas7', $data);
	}

	function edit_SMT2($data, $id){
		$this->db->where('id_DNSMT2_kelas7', $id);
		$this->db->update('DNSMT2_kelas7', $data);
	}

	function get_one_SMT2($id){
		$param	=	array('id_DNSMT2_kelas7'=>$id);
		return $this->db->get_where('DNSMT2_kelas7', $param);
	}

	function delete_SMT2($id){
		$this->db->where('id_DNSMT2_kelas7', $id);
		$this->db->delete('DNSMT2_kelas7');
	}

	// End Validasi Semester 2

}

?>