<?php 

class Auth extends CI_Controller

{
	function __construct(){
		parent::__construct();
		$this->load->model('model_operator');
	}

	function login()
	{
		if (isset($_POST['submit'])) {
			$username	=	$this->input->post('username');
			$password	=	$this->input->post('password');
			$hasil		=	$this->model_operator->login($username, $password);

			if ($hasil==1) {
				$this->session->set_userdata(array('status_login' => 'oke' ));
				redirect('dashboard');
			}
		}else{
			$this->load->view('login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}

?>