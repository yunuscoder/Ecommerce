<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UyeOl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Musteri_Model');
		//if(!$this->session->userdata('sessionData'))
		//{
		//	redirect(base_url().'Login');
		//}
	}
	public function index()
	{

		$query=$this->db->query("SELECT Email,Facebook,Tel FROM ayarlar ");
		$data["ayarlar"]=$query->result();
		$query=$this->db->get("sayfalar");
		$data["sayfalar"]=$query->result();

		$data["pagetitle"]="Üyelik Sayfası";
		$data["pagedescription"]="Üye Ol";
		$data["pagekeywords"]="EvSera Alışveriş";
		$this->load->view('_header',$data);
		$this->load->view('_uyelik');
		$this->load->view('_footer');
		
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
		$this->Musteri_Model->InsertData("musteriler",$data);
		$this->session->set_flashdata("result","Üyelik Başarılı Giriş Yapınız.");
		redirect(base_url()."UyeOl");
	}
}
