<?php 

class LoginController extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_parkir');

	}

	function index(){
		$data['err_message'] = "";
		if($this->session->userdata('status') != "login"){
			$this->load->view('login', $data);
		}else{ 
			redirect(base_url("Parking"));
		}
		
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Model_parkir->cek_login('data_user',$where);
		if($cek->num_rows()==1){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("Parking"));

		}else{
			$data['err_message'] = "USERNAME / PASSWORD SALAH";
			$this->load->view('login', $data);
			
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}