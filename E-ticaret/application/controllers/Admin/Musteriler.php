<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musteriler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Admin/Customer_Model');
		if(!$this->session->userdata('sessionData'))
		{
			redirect(base_url().'Admin/Login');
		}
	}
	public function index()
	{
		$query=$this->db->get("musteriler");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Musteriler/list',$data);
		$this->load->view('Admin/_footer');
		
	}
	public function Edit($id)
	{
		$query = $this->db->query("SELECT * FROM musteriler Where MusteriId=$id");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Musteriler/edit',$data);
		$this->load->view('Admin/_footer');
	}
	public function EditSave($id)
	{
		$now = date('Y-m-d H:i:s');

		$data=array(
			'Adi' => $this->input->post('Adi'),
			'Soyadi' => $this->input->post('Soyadi'),
			'Email' => $this->input->post('Email'),
			'CepTel' => $this->input->post('CepTel'),
			'Il' => $this->input->post('Il'),
			'Ilce' => $this->input->post('Ilce'),
			'Adres' => $this->input->post('Adres'),
			'Tarih' => $now
			);
		$column ="MusteriId";
		$this->Customer_Model->UpdateData("Musteriler",$data,$id,$column);
		$this->session->set_flashdata("result","Güncelleme Başarılı!");
		redirect(base_url()."Admin/Musteriler");
	}
	public function Delete($id)
	{
		$column ="MusteriId";
		$this->Customer_Model->DeleteData("musteriler",$id,$column);
		$this->session->set_flashdata("result","Başarıyla Silindi");
		redirect(base_url()."Admin/Musteriler");

	}
	public function CreateSave()
	{
		$now = date('Y-m-d H:i:s');

		$data=array(
			'Adi' => $this->input->post('Adi'),
			'Soyadi' => $this->input->post('Soyadi'),
			'Email' => $this->input->post('Email'),
			'Sifre' => $this->input->post('Sifre'),
			'Il' => $this->input->post('Il'),
			'Ilce' => $this->input->post('Ilce'),
			'Adres' => $this->input->post('Adres'),
			'CepTel' => $this->input->post('CepTel'),
			'Tarih' => $now

			);
		$this->Customer_Model->InsertData("musteriler",$data);
		$this->session->set_flashdata("result","Üyelik Başarılı Giriş Yapınız.");
		redirect(base_url()."UyeOl");
	}
}