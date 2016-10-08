<?php 

class DSkelas7 extends CI_Controller

{
	function __construct(){
		parent::__construct();
		$this->load->model('model_DSkelas7');
	}

	function index(){
		$data['record']=$this->model_DSkelas7->view();
		$this->load->view('header');
		$this->load->view('daftar_siswa/kelas7', $data);
		$this->load->view('footer');
	}

	function post(){
		if (isset($_POST['submit'])) {
			
			$this->model_DSkelas7->post(); 
			redirect('DSkelas7');
		
	}else{
		$this->load->view('header');
		$this->load->view('daftar_siswa/kelas7');
		$this->load->view('footer');
		}
	}

	function edit($id){
		if (isset($_POST['submit'])) {
			$this->model_DSkelas7->edit();
			redirect('DSkelas7');
		}else{
			$id 			= 	$this->uri->segment(3);
			$data['hasil']	=	$this->model_DSkelas7->get_one($id)->row_array();
			$this->load->view('header');
			$this->load->view('daftar_siswa/kelas7', $data);
			$this->load->view('footer');
		}
	}

	function delete(){
		$id 			= 	$this->uri->segment(3);
		$this->model_DSkelas7->delete($id);
		redirect('DSkelas7');
	}

}
?>