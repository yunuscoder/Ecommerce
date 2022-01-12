<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Admin/User_Model');
		if(!$this->session->userdata('sessionData'))
		{
			redirect(base_url().'Admin/Login');
		}
	}
	public function index()
	{
		$query=$this->db->get("users");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');

		$this->load->view('Admin/Kullanici/_user_list',$data);
		$this->load->view('Admin/_footer');
		
	}
	public function Edit($id)
	{
		//$query = $this->db->query("SELECT * FROM Users Where UserId=$id");
		$query=$this->db->get("users", array('UserId' => $id));
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Kullanici/_user_edit',$data);
		$this->load->view('Admin/_footer');
	}
	public function EditSave($id)
	{
		$now = date('Y-m-d H:i:s');

		$data=array(
			'Name' => $this->input->post('Name'),
			'Surname' => $this->input->post('Surname'),
			'Email' => $this->input->post('Email'),
			'Password' => $this->input->post('Password'),
			'Role' => $this->input->post('Role'),
			'Description' => $this->input->post('Description'),
			'State' => $this->input->post('State'),
			'Date' => $now
			);
		$column ="UserId";
		$this->User_Model->UpdateData("users",$data,$id,$column);
		$this->session->set_flashdata("result","Güncelleme Başarılı!");
		redirect(base_url()."Admin/Users");
	}
	public function Delete($id)
	{
		$column ="UserId";
		$this->User_Model->DeleteData("users",$id,$column);
		$this->session->set_flashdata("result","Başarıyla Silindi");
		redirect(base_url()."Admin/Users");

	}

	public function Create()
	{
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Kullanici/_user_create');
		$this->load->view('Admin/_footer');

	}
	public function CreateSave()
	{
		$now = date('Y-m-d H:i:s');

		$data=array(
			'Name' => $this->input->post('Name'),
			'Surname' => $this->input->post('Surname'),
			'Email' => $this->input->post('Email'),
			'Password' => $this->input->post('Password'),
			'Role' => $this->input->post('Role'),
			'Description' => $this->input->post('Description'),
			'State' => $this->input->post('State'),
			'Date' => $now

			);
		$this->User_Model->InsertData("users",$data);
		$this->session->set_flashdata("result","Başarılı");
		redirect(base_url()."Admin/Users");
	}

}