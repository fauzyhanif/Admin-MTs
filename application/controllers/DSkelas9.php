<?php 
class DSkelas9 extends CI_Controller


{
	function __construct(){
		parent::__construct();
		$this->load->model('model_DSkelas9');
	}

	function index(){
		$data['record']=$this->model_DSkelas9->view();
		$this->load->view('header');
		$this->load->view('daftar_siswa/kelas9', $data);
		$this->load->view('footer');
	}

	function post(){
		if (isset($_POST['submit'])) {
			
			$this->model_DSkelas9->post(); 
			redirect('DSkelas9');
		
	}else{
		$this->load->view('header');
		$this->load->view('daftar_siswa/kelas9');
		$this->load->view('footer');
		}
	}

	function edit($id){
		if (isset($_POST['submit'])) {
			$this->model_DSkelas9->edit();
			redirect('DSkelas9');
		}else{
			$id 			= 	$this->uri->segment(3);
			$data['record']	=	$this->model_DSkelas9->get_one($id)->row_array();
			$this->load->view('header');
			$this->load->view('daftar_siswa/kelas9', $data);
			$this->load->view('footer');
		}
	}

	function delete(){
		$id 			= 	$this->uri->segment(3);
		$this->model_DSkelas9->delete($id);
		redirect('DSkelas9');
	}

}
?>