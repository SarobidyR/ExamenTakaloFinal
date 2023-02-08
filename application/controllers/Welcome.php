<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login_page');
	}		

	public function login()
	{
		$mail = $this->input->post("mail");
		$ass=$this->input->post("pass");
		var_dump($mail);
		var_dump($pass);

		$this->load->model('Login_model');
		var_dump($this->Login_model->checkLogin($mail,$pass));

		if($this->session->set_userdata('mail',$mail));
		redirect('index.php/user/index');
	}
}
