<?php

class Model_DSkelas7 extends CI_Model
{
	
	function view()
	{
		$query 	=	"SELECT * FROM `DS_kelas7` ORDER BY `DS_kelas7`.`nama` ASC";
		return $this->db->query($query);
	}

	function post(){
		$data=array(
						'nama'	=>$this->input->post('nama'),
						'NISN'	=>$this->input->post('NISN'),
						'TTL'	=>$this->input->post('TTL'),
						'alamat'=>$this->input->post('alamat'),
						'no_hp'	=>$this->input->post('no_hp')
					);
		$this->db->insert('DS_kelas7', $data);
	}

	function edit(){
		$data=array(
						'nama'	=>$this->input->post('nama'),
						'NISN'	=>$this->input->post('NISN'),
						'TTL'	=>$this->input->post('TTL'),
						'alamat'=>$this->input->post('alamat'),
						'no_hp'	=>$this->input->post('no_hp')
					);
		$this->db->where('id_DS_kelas7', $this->input->post('id'));
		$this->db->update('DS_kelas7', $data);
	}

	function get_one($id){
		$param	=	array('id_DS_kelas7'=>$id);
		return $this->db->get_where('DS_kelas7', $param);
	}

	function delete($id){
		$this->db->where('id_DS_kelas7', $id);
		$this->db->delete('DS_kelas7');
	}
}

?>