<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Database_Model');
		$this->load->model('Admin/Login_Model');
	}
	public function index()
	{

		$this->load->view('Admin/Login');
	}
	public function Login()
	{

		$email=$this->input->post('Email');
		$sifre=$this->input->post('Sifre');

		$result = $this->Login_Model->LoginControl($email,$sifre);
		if($result)
		{
			$array = array (
				'UserId' =>$result[0]->UserId,
				'Role' =>$result[0]->Role,
				'Email' =>$result[0]->Email,
				'Name' =>$result[0]->Name,
				'Surname' =>$result[0]->Surname,
				);
			$this->session->set_userdata('sessionData',$array);
			redirect(base_url().'Admin/Home');
		}
		else
		{
			
		}

	}

	public function log_out()
	{
		$this->session->unset_userdata('sessionData');
		$this->session->sess_destroy();
		redirect(base_url().'Admin/Login');
	}

}