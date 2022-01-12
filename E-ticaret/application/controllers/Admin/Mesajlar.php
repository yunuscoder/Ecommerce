<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Admin/Mesaj_Model');

	}
	public function index()
	{
		$query=$this->db->query("SELECT * FROM mesajlar ORDER BY Durum DESC");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Mesajlar/_list',$data);
		$this->load->view('Admin/_footer');
		
	}
	public function Edit($id)
	{
		$query = $this->db->query("UPDATE Mesajlar SET Durum='Okundu' Where MesajId=$id");
		$query = $this->db->query("SELECT * FROM Mesajlar Where MesajId=$id");
		$data["data"]=$query->result();

		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Mesajlar/_view',$data);
		$this->load->view('Admin/_footer');
	}

	public function Delete($id)
	{
		$column ="MesajId";
		$this->Mesaj_Model->DeleteData("mesajlar",$id,$column);
		$this->session->set_flashdata("result","Başarıyla Silindi");
		redirect(base_url()."Admin/Mesajlar");
	}
	public function CreateSave()
	{
		$now = date('Y-m-d H:i:s');
		
		$data=array(
			'Adi' => $this->input->post('Adi'),
			'Konu' => $this->input->post('Konu'),
			'Mesaj' => $this->input->post('Mesaj'),
			'Email' => $this->input->post('Email'),
			'Tarih' => $now,
			'Durum' =>"Yeni",
			'Ip'=>$this->input->ip_address(),
			);
		$this->Mesaj_Model->InsertData("mesajlar",$data);
		$this->session->set_flashdata("result","Mesajınız iletilmiştir.İlginiz için teşekkür ederiz.");
		redirect(base_url()."Iletisim");
        
	}

}