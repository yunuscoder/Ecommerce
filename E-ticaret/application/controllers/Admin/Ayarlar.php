<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Admin/Ayarlar_Model');
		if(!$this->session->userdata('sessionData'))
		{
			redirect(base_url().'Admin/Login');
		}
	}
	

	public function Edit($id)
	{
		$query = $this->db->query("SELECT * FROM ayarlar Where AyarId=$id");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Ayarlar/_edit',$data);
		$this->load->view('Admin/_footer');
	}
	public function EditSave($id)
	{
		

		$data=array(
			'Adi' => $this->input->post('Adi'),
			'Keywords' => $this->input->post('Keywords'),
			'Aciklama' => $this->input->post('Aciklama'),
			'SmtpServer' => $this->input->post('SmtpServer'),
			'SmtpEmail' => $this->input->post('SmtpEmail'),
			'SmtpPort' => $this->input->post('SmtpPort'),
			'SmtpSifre' => $this->input->post('SmtpSifre'),
			'Adres' => $this->input->post('Adres'),
			'Sehir' => $this->input->post('Sehir'),
			'Tel' => $this->input->post('Tel'),
			'Email' => $this->input->post('Email'),
			'Iletisim' => $this->input->post('Iletisim'),
			'Facebook' => $this->input->post('Facebook'),
		
			);
		$column ="AyarId";
		$this->Ayarlar_Model->UpdateData("ayarlar",$data,$id,$column);
		$this->session->set_flashdata("result","Güncelleme Başarılı!");
		redirect(base_url()."Admin/Ayarlar/Edit/1");
	}
	 }