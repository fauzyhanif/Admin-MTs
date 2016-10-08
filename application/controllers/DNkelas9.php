<?php

class DNkelas9 extends CI_Controller

{
	function __construct(){
		parent::__construct();
		$this->load->model(array('model_DNkelas9', 'model_DSkelas9'));
	}

	function index(){
		$data['record']	=	$this->model_DNkelas9->view_UTS1()->result();
		$data['SMT1']	=	$this->model_DNkelas9->view_SMT1()->result();
		$data['UTS2']	=	$this->model_DNkelas9->view_UTS2()->result();
		$data['SMT2']	=	$this->model_DNkelas9->view_SMT2()->result();
		$data['nama']	=	$this->model_DSkelas9->view()->result();
		$this->load->view('header');
		$this->load->view('nilai_siswa/kelas9', $data);
		$this->load->view('footer');

	}

	// validasi UTS Semester 1

	function post_UTS1(){
		if (isset($_POST['submit'])) {
			
			 $nama			=	$this->input->post('nama');
			 $b_indonesia	=	$this->input->post('b_indonesia');
			 $b_inggris		=	$this->input->post('b_inggris');
			 $ipa			=	$this->input->post('ipa');
			 $ips			=	$this->input->post('ips');
			 $matematika	=	$this->input->post('matematika');
			 $pkn			=	$this->input->post('pkn');
			 $b_arab		=	$this->input->post('b_arab');
			 $nahwu			=	$this->input->post('nahwu');
			 $shorof		=	$this->input->post('shorof');
			 $fiqih			=	$this->input->post('fiqih');
			 $tauhid		=	$this->input->post('tauhid');
			 $f_maqru		=	$this->input->post('f_maqru');
			 $khot			=	$this->input->post('khot');
			 $tabir			=	$this->input->post('tabir');
			 $tafsir		=	$this->input->post('tafsir');
			 $akhlak		=	$this->input->post('akhlak');
			 $siroh			=	$this->input->post('siroh');
			 $olah_raga		=	$this->input->post('olah_raga');

			 $data 			= array(	'id_DS_kelas9'=>$nama,
			 							'b_indonesia'=>$b_indonesia,
			 							'b_inggris'=>$b_inggris,
			 							'ipa'=>$ipa,
			 							'ips'=>$ips,
			 							'matematika'=>$matematika,
			 							'pkn'=>$pkn,
			 							'b_arab'=>$b_arab,
			 							'nahwu'=>$nahwu,
			 							'shorof'=>$shorof,
			 							'fiqih'=>$fiqih,
			 							'tauhid'=>$tauhid,
			 							'f_maqru'=>$f_maqru,
			 							'khot'=>$khot,
			 							'tabir'=>$tabir,
			 							'tafsir'=>$tafsir,
			 							'akhlak'=>$akhlak,
			 							'siroh'=>$siroh,
			 							'olah_raga'=>$olah_raga	);

			 $this->model_DNkelas9->post_UTS1($data); 
			 redirect('DNkelas9');
		
	}else{
		$this->load->model('model_DSkelas9');
		$data['record'] 	=	$this->model_DSkelas9->view_UTS1()->result();
		$this->load->view('header');
		$this->load->view('daftar_nilai/kelas9', $data);
		$this->load->view('footer');
		}
	}

	function edit_UTS1(){
		if (isset($_POST['submit'])) {
			
			 $id			=	$this->input->post('id');
			 $b_indonesia	=	$this->input->post('b_indonesia');
			 $b_inggris		=	$this->input->post('b_inggris');
			 $ipa			=	$this->input->post('ipa');
			 $ips			=	$this->input->post('ips');
			 $matematika	=	$this->input->post('matematika');
			 $pkn			=	$this->input->post('pkn');
			 $b_arab		=	$this->input->post('b_arab');
			 $nahwu			=	$this->input->post('nahwu');
			 $shorof		=	$this->input->post('shorof');
			 $fiqih			=	$this->input->post('fiqih');
			 $tauhid		=	$this->input->post('tauhid');
			 $f_maqru		=	$this->input->post('f_maqru');
			 $khot			=	$this->input->post('khot');
			 $tabir			=	$this->input->post('tabir');
			 $tafsir		=	$this->input->post('tafsir');
			 $akhlak		=	$this->input->post('akhlak');
			 $siroh			=	$this->input->post('siroh');
			 $olah_raga		=	$this->input->post('olah_raga');

			 $data 			= array(	'b_indonesia'=>$b_indonesia,
			 							'b_inggris'=>$b_inggris,
			 							'ipa'=>$ipa,
			 							'ips'=>$ips,
			 							'matematika'=>$matematika,
			 							'pkn'=>$pkn,
			 							'b_arab'=>$b_arab,
			 							'nahwu'=>$nahwu,
			 							'shorof'=>$shorof,
			 							'fiqih'=>$fiqih,
			 							'tauhid'=>$tauhid,
			 							'f_maqru'=>$f_maqru,
			 							'khot'=>$khot,
			 							'tabir'=>$tabir,
			 							'tafsir'=>$tafsir,
			 							'akhlak'=>$akhlak,
			 							'siroh'=>$siroh,
			 							'olah_raga'=>$olah_raga	);

			 $this->model_DNkelas9->edit_UTS1($data, $id); 
			 redirect('DNkelas9');
		
	}else{
		$id 				= 	$this->uri->segment(3);
		$this->load->model('model_DNkelas9');
		$data['record'] 	=	$this->model_NSkelas9->view_UTS1()->result();
		$data['hasil']		=	$this->model_DNkelas9->get_one_UTS1($id)->row_array();
		$this->load->view('header');
		$this->load->view('daftar_nilai/kelas9', $data);
		$this->load->view('footer');
		}
	}

	function delete_UTS1(){
		$id 			= 	$this->uri->segment(3);
		$this->model_DNkelas9->delete_UTS1($id);
		redirect('DNkelas9');
	}

	// End validasi UTS 1

	// validasi Semester 1

	function post_SMT1(){
		if (isset($_POST['submit'])) {
			
			 $nama			=	$this->input->post('nama');
			 $b_indonesia	=	$this->input->post('b_indonesia');
			 $b_inggris		=	$this->input->post('b_inggris');
			 $ipa			=	$this->input->post('ipa');
			 $ips			=	$this->input->post('ips');
			 $matematika	=	$this->input->post('matematika');
			 $pkn			=	$this->input->post('pkn');
			 $b_arab		=	$this->input->post('b_arab');
			 $nahwu			=	$this->input->post('nahwu');
			 $shorof		=	$this->input->post('shorof');
			 $fiqih			=	$this->input->post('fiqih');
			 $tauhid		=	$this->input->post('tauhid');
			 $f_maqru		=	$this->input->post('f_maqru');
			 $khot			=	$this->input->post('khot');
			 $tabir			=	$this->input->post('tabir');
			 $tafsir		=	$this->input->post('tafsir');
			 $akhlak		=	$this->input->post('akhlak');
			 $siroh			=	$this->input->post('siroh');
			 $olah_raga		=	$this->input->post('olah_raga');

			 $data 			= array(	'id_DS_kelas9'=>$nama,
			 							'b_indonesia'=>$b_indonesia,
			 							'b_inggris'=>$b_inggris,
			 							'ipa'=>$ipa,
			 							'ips'=>$ips,
			 							'matematika'=>$matematika,
			 							'pkn'=>$pkn,
			 							'b_arab'=>$b_arab,
			 							'nahwu'=>$nahwu,
			 							'shorof'=>$shorof,
			 							'fiqih'=>$fiqih,
			 							'tauhid'=>$tauhid,
			 							'f_maqru'=>$f_maqru,
			 							'khot'=>$khot,
			 							'tabir'=>$tabir,
			 							'tafsir'=>$tafsir,
			 							'akhlak'=>$akhlak,
			 							'siroh'=>$siroh,
			 							'olah_raga'=>$olah_raga	);

			 $this->model_DNkelas9->post_SMT1($data); 
			 redirect('DNkelas9');
		
	}else{
		$this->load->model('model_DSkelas9');
		$data['record'] 	=	$this->model_DSkelas9->view_SMT1()->result();
		$this->load->view('header');
		$this->load->view('daftar_nilai/kelas9', $data);
		$this->load->view('footer');
		}
	}

	function edit_SMT1(){
		if (isset($_POST['submit'])) {
			
			 $id			=	$this->input->post('id');
			 $b_indonesia	=	$this->input->post('b_indonesia');
			 $b_inggris		=	$this->input->post('b_inggris');
			 $ipa			=	$this->input->post('ipa');
			 $ips			=	$this->input->post('ips');
			 $matematika	=	$this->input->post('matematika');
			 $pkn			=	$this->input->post('pkn');
			 $b_arab		=	$this->input->post('b_arab');
			 $nahwu			=	$this->input->post('nahwu');
			 $shorof		=	$this->input->post('shorof');
			 $fiqih			=	$this->input->post('fiqih');
			 $tauhid		=	$this->input->post('tauhid');
			 $f_maqru		=	$this->input->post('f_maqru');
			 $khot			=	$this->input->post('khot');
			 $tabir			=	$this->input->post('tabir');
			 $tafsir		=	$this->input->post('tafsir');
			 $akhlak		=	$this->input->post('akhlak');
			 $siroh			=	$this->input->post('siroh');
			 $olah_raga		=	$this->input->post('olah_raga');

			 $data 			= array(	'b_indonesia'=>$b_indonesia,
			 							'b_inggris'=>$b_inggris,
			 							'ipa'=>$ipa,
			 							'ips'=>$ips,
			 							'matematika'=>$matematika,
			 							'pkn'=>$pkn,
			 							'b_arab'=>$b_arab,
			 							'nahwu'=>$nahwu,
			 							'shorof'=>$shorof,
			 							'fiqih'=>$fiqih,
			 							'tauhid'=>$tauhid,
			 							'f_maqru'=>$f_maqru,
			 							'khot'=>$khot,
			 							'tabir'=>$tabir,
			 							'tafsir'=>$tafsir,
			 							'akhlak'=>$akhlak,
			 							'siroh'=>$siroh,
			 							'olah_raga'=>$olah_raga	);

			 $this->model_DNkelas9->edit_SMT1($data, $id); 
			 redirect('DNkelas9');
		
	}else{
		$id 				= 	$this->uri->segment(3);
		$this->load->model('model_DNkelas9');
		$data['record'] 	=	$this->model_NSkelas9->view_SMT1()->result();
		$data['hasil']		=	$this->model_DNkelas9->get_one_SMT1($id)->row_array();
		$this->load->view('header');
		$this->load->view('daftar_nilai/kelas9', $data);
		$this->load->view('footer');
		}
	}

	function delete_SMT1(){
		$id 			= 	$this->uri->segment(3);
		$this->model_DNkelas9->delete_SMT1($id);
		redirect('DNkelas9');
	}

	// End validasi Semester 1

	// validasi UTS Semester 2

	function post_UTS2(){
		if (isset($_POST['submit'])) {
			
			 $nama			=	$this->input->post('nama');
			 $b_indonesia	=	$this->input->post('b_indonesia');
			 $b_inggris		=	$this->input->post('b_inggris');
			 $ipa			=	$this->input->post('ipa');
			 $ips			=	$this->input->post('ips');
			 $matematika	=	$this->input->post('matematika');
			 $pkn			=	$this->input->post('pkn');
			 $b_arab		=	$this->input->post('b_arab');
			 $nahwu			=	$this->input->post('nahwu');
			 $shorof		=	$this->input->post('shorof');
			 $fiqih			=	$this->input->post('fiqih');
			 $tauhid		=	$this->input->post('tauhid');
			 $f_maqru		=	$this->input->post('f_maqru');
			 $khot			=	$this->input->post('khot');
			 $tabir			=	$this->input->post('tabir');
			 $tafsir		=	$this->input->post('tafsir');
			 $akhlak		=	$this->input->post('akhlak');
			 $siroh			=	$this->input->post('siroh');
			 $olah_raga		=	$this->input->post('olah_raga');

			 $data 			= array(	'id_DS_kelas9'=>$nama,
			 							'b_indonesia'=>$b_indonesia,
			 							'b_inggris'=>$b_inggris,
			 							'ipa'=>$ipa,
			 							'ips'=>$ips,
			 							'matematika'=>$matematika,
			 							'pkn'=>$pkn,
			 							'b_arab'=>$b_arab,
			 							'nahwu'=>$nahwu,
			 							'shorof'=>$shorof,
			 							'fiqih'=>$fiqih,
			 							'tauhid'=>$tauhid,
			 							'f_maqru'=>$f_maqru,
			 							'khot'=>$khot,
			 							'tabir'=>$tabir,
			 							'tafsir'=>$tafsir,
			 							'akhlak'=>$akhlak,
			 							'siroh'=>$siroh,
			 							'olah_raga'=>$olah_raga	);

			 $this->model_DNkelas9->post_UTS2($data); 
			 redirect('DNkelas9');
		
	}else{
		$this->load->model('model_DSkelas9');
		$data['record'] 	=	$this->model_DSkelas9->view_UTS2()->result();
		$this->load->view('header');
		$this->load->view('daftar_nilai/kelas9', $data);
		$this->load->view('footer');
		}
	}

	function edit_UTS2(){
		if (isset($_POST['submit'])) {
			
			 $id			=	$this->input->post('id');
			 $b_indonesia	=	$this->input->post('b_indonesia');
			 $b_inggris		=	$this->input->post('b_inggris');
			 $ipa			=	$this->input->post('ipa');
			 $ips			=	$this->input->post('ips');
			 $matematika	=	$this->input->post('matematika');
			 $pkn			=	$this->input->post('pkn');
			 $b_arab		=	$this->input->post('b_arab');
			 $nahwu			=	$this->input->post('nahwu');
			 $shorof		=	$this->input->post('shorof');
			 $fiqih			=	$this->input->post('fiqih');
			 $tauhid		=	$this->input->post('tauhid');
			 $f_maqru		=	$this->input->post('f_maqru');
			 $khot			=	$this->input->post('khot');
			 $tabir			=	$this->input->post('tabir');
			 $tafsir		=	$this->input->post('tafsir');
			 $akhlak		=	$this->input->post('akhlak');
			 $siroh			=	$this->input->post('siroh');
			 $olah_raga		=	$this->input->post('olah_raga');

			 $data 			= array(	'b_indonesia'=>$b_indonesia,
			 							'b_inggris'=>$b_inggris,
			 							'ipa'=>$ipa,
			 							'ips'=>$ips,
			 							'matematika'=>$matematika,
			 							'pkn'=>$pkn,
			 							'b_arab'=>$b_arab,
			 							'nahwu'=>$nahwu,
			 							'shorof'=>$shorof,
			 							'fiqih'=>$fiqih,
			 							'tauhid'=>$tauhid,
			 							'f_maqru'=>$f_maqru,
			 							'khot'=>$khot,
			 							'tabir'=>$tabir,
			 							'tafsir'=>$tafsir,
			 							'akhlak'=>$akhlak,
			 							'siroh'=>$siroh,
			 							'olah_raga'=>$olah_raga	);

			 $this->model_DNkelas9->edit_UTS2($data, $id); 
			 redirect('DNkelas9');
		
	}else{
		$id 				= 	$this->uri->segment(3);
		$this->load->model('model_DNkelas9');
		$data['record'] 	=	$this->model_NSkelas9->view_UTS2()->result();
		$data['hasil']		=	$this->model_DNkelas9->get_one_UTS2($id)->row_array();
		$this->load->view('header');
		$this->load->view('daftar_nilai/kelas9', $data);
		$this->load->view('footer');
		}
	}

	function delete_UTS2(){
		$id 			= 	$this->uri->segment(3);
		$this->model_DNkelas9->delete_UTS2($id);
		redirect('DNkelas9');
	}

	// End validasi UTS 2

	// validasi Semester 2

	function post_SMT2(){
		if (isset($_POST['submit'])) {
			
			 $nama			=	$this->input->post('nama');
			 $b_indonesia	=	$this->input->post('b_indonesia');
			 $b_inggris		=	$this->input->post('b_inggris');
			 $ipa			=	$this->input->post('ipa');
			 $ips			=	$this->input->post('ips');
			 $matematika	=	$this->input->post('matematika');
			 $pkn			=	$this->input->post('pkn');
			 $b_arab		=	$this->input->post('b_arab');
			 $nahwu			=	$this->input->post('nahwu');
			 $shorof		=	$this->input->post('shorof');
			 $fiqih			=	$this->input->post('fiqih');
			 $tauhid		=	$this->input->post('tauhid');
			 $f_maqru		=	$this->input->post('f_maqru');
			 $khot			=	$this->input->post('khot');
			 $tabir			=	$this->input->post('tabir');
			 $tafsir		=	$this->input->post('tafsir');
			 $akhlak		=	$this->input->post('akhlak');
			 $siroh			=	$this->input->post('siroh');
			 $olah_raga		=	$this->input->post('olah_raga');

			 $data 			= array(	'id_DS_kelas9'=>$nama,
			 							'b_indonesia'=>$b_indonesia,
			 							'b_inggris'=>$b_inggris,
			 							'ipa'=>$ipa,
			 							'ips'=>$ips,
			 							'matematika'=>$matematika,
			 							'pkn'=>$pkn,
			 							'b_arab'=>$b_arab,
			 							'nahwu'=>$nahwu,
			 							'shorof'=>$shorof,
			 							'fiqih'=>$fiqih,
			 							'tauhid'=>$tauhid,
			 							'f_maqru'=>$f_maqru,
			 							'khot'=>$khot,
			 							'tabir'=>$tabir,
			 							'tafsir'=>$tafsir,
			 							'akhlak'=>$akhlak,
			 							'siroh'=>$siroh,
			 							'olah_raga'=>$olah_raga	);

			 $this->model_DNkelas9->post_SMT2($data); 
			 redirect('DNkelas9');
		
	}else{
		$this->load->model('model_DSkelas9');
		$data['record'] 	=	$this->model_DSkelas9->view_SMT2()->result();
		$this->load->view('header');
		$this->load->view('daftar_nilai/kelas9', $data);
		$this->load->view('footer');
		}
	}

	function edit_SMT2(){
		if (isset($_POST['submit'])) {
			
			 $id			=	$this->input->post('id');
			 $b_indonesia	=	$this->input->post('b_indonesia');
			 $b_inggris		=	$this->input->post('b_inggris');
			 $ipa			=	$this->input->post('ipa');
			 $ips			=	$this->input->post('ips');
			 $matematika	=	$this->input->post('matematika');
			 $pkn			=	$this->input->post('pkn');
			 $b_arab		=	$this->input->post('b_arab');
			 $nahwu			=	$this->input->post('nahwu');
			 $shorof		=	$this->input->post('shorof');
			 $fiqih			=	$this->input->post('fiqih');
			 $tauhid		=	$this->input->post('tauhid');
			 $f_maqru		=	$this->input->post('f_maqru');
			 $khot			=	$this->input->post('khot');
			 $tabir			=	$this->input->post('tabir');
			 $tafsir		=	$this->input->post('tafsir');
			 $akhlak		=	$this->input->post('akhlak');
			 $siroh			=	$this->input->post('siroh');
			 $olah_raga		=	$this->input->post('olah_raga');

			 $data 			= array(	'b_indonesia'=>$b_indonesia,
			 							'b_inggris'=>$b_inggris,
			 							'ipa'=>$ipa,
			 							'ips'=>$ips,
			 							'matematika'=>$matematika,
			 							'pkn'=>$pkn,
			 							'b_arab'=>$b_arab,
			 							'nahwu'=>$nahwu,
			 							'shorof'=>$shorof,
			 							'fiqih'=>$fiqih,
			 							'tauhid'=>$tauhid,
			 							'f_maqru'=>$f_maqru,
			 							'khot'=>$khot,
			 							'tabir'=>$tabir,
			 							'tafsir'=>$tafsir,
			 							'akhlak'=>$akhlak,
			 							'siroh'=>$siroh,
			 							'olah_raga'=>$olah_raga	);

			 $this->model_DNkelas9->edit_SMT2($data, $id); 
			 redirect('DNkelas9');
		
	}else{
		$id 				= 	$this->uri->segment(3);
		$this->load->model('model_DNkelas9');
		$data['record'] 	=	$this->model_NSkelas9->view_SMT2()->result();
		$data['hasil']		=	$this->model_DNkelas9->get_one_SMT2($id)->row_array();
		$this->load->view('header');
		$this->load->view('daftar_nilai/kelas9', $data);
		$this->load->view('footer');
		}
	}

	function delete_SMT2(){
		$id 			= 	$this->uri->segment(3);
		$this->model_DNkelas9->delete_SMT2($id);
		redirect('DNkelas9');
	}

	// End validasi Semester 1

}
?>