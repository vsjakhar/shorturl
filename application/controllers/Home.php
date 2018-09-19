<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->helper('string');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index($url=""){
		$data = "";
		$this->load->view('common/header',$data);
		$this->load->view('home',$data);
		$this->load->view('common/footer',$data);
		// if($this->session->students){	
		// 	redirect(base_url()."students");
		// }else{
		// 	$header["title"]="Register";
		// 	$header["menu"]="login";
		// 	$header["submenu"]="Register";
		// 	$data['state'] = $this->Cprez->default_select_and('states','*',array('country_id'=>101));
		// 	$this->load->view('common/header',$header);
		// 	$this->load->view('common/home',$data);	
		// 	$this->load->view('common/footer-about');
		// 	$this->load->view('common/footer');	
		// }
	}

	public function dashboard(){
		$data['list']= $this->Cprez->default_select_and('shorturl','*',array('status'=>'Active'));
		// echo "dashboard";
		// print_r($data['list']);
		$this->load->view('common/header',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('common/footer',$data);
	}

	public function shorturl($id=""){
		echo "Short Test string ".$id;
		// redirect('http://localhost/php/shorturl3/home/test/abc','location',301);
		// exit();
	}

	public function signup($id=""){
		echo "Test string ".$id;
	}

	public function student_login(){
		/*$entity=$this->input->post('entity');
		$pass=md5($this->input->post('password'));
		$query = $this->Main_model->login($entity,$pass);
		
		if($query){
			$query['students']=TRUE;
			$this->session->set_userdata($query);
			echo "sucess";			
		}else{
			echo "Invalid";
			
		}*/
		if($this->session->students){	
			redirect(base_url()."dashboard");
		}else{
			$result="";
			$entity=$this->input->post('entity');
			$pass=md5($this->input->post('password'));
			$query = $this->Main_model->login($entity,$pass);
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('entity', 'Mobile or Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() == FALSE){
				// Form Validation		
			}else if ($query=="exist"){
				$result['error'] = "You are already Logedin from other Computer.";
			}else if(!empty($query)){
				$query['students']=TRUE;
				$this->session->set_userdata($query);
				redirect(base_url().'dashboard'); die;
			}else{
				$result['error'] = "Invalid Credential, Please try Again.....!";
			}
			//die(print_r($query));

			$header["title"]="Login";
			$header["menu"]="login";
			$header["submenu"]="Login";
			$this->load->view('common/header',$header);
			$this->load->view('pages/login',$result);	
			$this->load->view('common/footer-about');
			$this->load->view('common/footer');
		}

	}

	public function login_now(){
		$entity=$this->input->post('entity');
		$pass=md5($this->input->post('password'));
		$query = $this->Main_model->login($entity,$pass);
		if($query){
			$query['students']=TRUE;
			$this->session->set_userdata($query);
			echo "sucess";			
		}else{
			echo "Invalid";
			
		}

	}

	public function update_login(){
		$this->Cprez->default_update("students",array("students_last_login"=>time()), array("students_id"=>$this->session->students_id) );
	}

	public function logout(){
		$this->Cprez->default_update("students",array("students_last_login"=>(time()-300)), array("students_id"=>$this->session->students_id) );
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}

}