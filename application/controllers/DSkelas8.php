<?php 

class DSkelas8 extends CI_Controller

{
	function __construct(){
		parent::__construct();
		$this->load->model('model_DSkelas8');
	}

	function index(){
		$data['record']=$this->model_DSkelas8->view();
		$this->load->view('header');
		$this->load->view('daftar_siswa/kelas8', $data);
		$this->load->view('footer');
	}

	function post(){
		if (isset($_POST['submit'])) {
			
			$this->model_DSkelas8->post(); 
			redirect('DSkelas8');
		
	}else{
		$this->load->view('header');
		$this->load->view('daftar_siswa/kelas8');
		$this->load->view('footer');
		}
	}

	function edit($id){
		if (isset($_POST['submit'])) {
			$this->model_DSkelas8->edit();
			redirect('DSkelas8');
		}else{
			$id 			= 	$this->uri->segment(3);
			$data['record']	=	$this->model_DSkelas8->get_one($id)->row_array();
			$this->load->view('header');
			$this->load->view('daftar_siswa/kelas8', $data);
			$this->load->view('footer');
		}
	}

	function delete(){
		$id 			= 	$this->uri->segment(3);
		$this->model_DSkelas8->delete($id);
		redirect('DSkelas8');
	}

}
?>