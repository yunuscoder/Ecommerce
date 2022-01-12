<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sayfalar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Admin/Page_Model');
		if(!$this->session->userdata('sessionData'))
		{
			redirect(base_url().'Admin/Login');
		}
	}
	public function index()
	{
		$query=$this->db->get("sayfalar");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');

		$this->load->view('Admin/Sayfalar/_list',$data);
		$this->load->view('Admin/_footer');
		
	}
	public function Edit($id)
	{
		$query = $this->db->query("SELECT * FROM sayfalar Where SayfaId=$id");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Sayfalar/_edit',$data);
		$this->load->view('Admin/_footer');
	}
	public function EditSave($id)
	{
		$now = date('Y-m-d H:i:s');

		$data=array(
			'Adi' => $this->input->post('Adi'),
			'Icerik' => $this->input->post('Icerik'),
			'Baglanti' => $this->input->post('Baglanti'),
			'AnahtarKelime' => $this->input->post('AnahtarKelime'),
			'Aciklama' => $this->input->post('Aciklama'),
			'Tarih' => $now
			);
		$column ="SayfaId";
		$this->Page_Model->UpdateData("sayfalar",$data,$id,$column);
		$this->session->set_flashdata("result","Güncelleme Başarılı!");
		redirect(base_url()."Admin/Sayfalar");
	}
	public function Delete($id)
	{
		$column ="SayfaId";
		$this->Page_Model->DeleteData("sayfalar",$id,$column);
		$this->session->set_flashdata("result","Başarıyla Silindi");
		redirect(base_url()."Admin/Sayfalar");

	}

	public function Create()
	{
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Sayfalar/_create');
		$this->load->view('Admin/_footer');

	}
	public function CreateSave()
	{
		$now = date('Y-m-d H:i:s');

		$data=array(
			'Adi' => $this->input->post('Adi'),
			'Icerik' => $this->input->post('Icerik'),
			'Baglanti' => $this->input->post('Baglanti'),
			'AnahtarKelime' => $this->input->post('AnahtarKelime'),
			'Aciklama' => $this->input->post('Aciklama'),
			'Tarih' => $now
			);
		$this->Page_Model->InsertData("sayfalar",$data);
		$this->session->set_flashdata("result","Başarılı");
		redirect(base_url()."Admin/Sayfalar");
	}

}