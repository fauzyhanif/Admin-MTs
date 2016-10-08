<?php

class Model_DSkelas9 extends CI_Model
{
	
	function view()
	{
		return $this->db->get('DS_kelas9');
	}

	function post(){
		$data=array(
						'nama'	=>$this->input->post('nama'),
						'NISN'	=>$this->input->post('NISN'),
						'TTL'	=>$this->input->post('TTL'),
						'alamat'=>$this->input->post('alamat'),
						'no_hp'	=>$this->input->post('no_hp')
					);
		$this->db->insert('DS_kelas9', $data);
	}

	function edit(){
		$data=array(
						'nama'	=>$this->input->post('nama'),
						'NISN'	=>$this->input->post('NISN'),
						'TTL'	=>$this->input->post('TTL'),
						'alamat'=>$this->input->post('alamat'),
						'no_hp'	=>$this->input->post('no_hp')
					);
		$this->db->where('id_DS_kelas9', $this->input->post('id_DS_kelas9'));
		$this->db->update('DS_kelas9', $data);
	}

	function get_one($id){
		$param	=	array('id_DS_kelas9'=>$id);
		return $this->db->get_where('DS_kelas9', $param);
	}

	function delete($id){
		$this->db->where('id_DS_kelas9', $id);
		$this->db->delete('DS_kelas9');
	}
}

?>